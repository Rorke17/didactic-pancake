<?php
class UserModel extends Model {
  public function register() {
    //Sanitize POST
    $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

<<<<<<< HEAD
    //$password = md5($post['password']);
    $password = password_hash($post['password'], PASSWORD_DEFAULT);
=======
    $password = md5($post['password']);
  //  $password = password_hash($post['password'], PASSWORD_DEFAULT);
>>>>>>> 38489ae786620d1e98d1f3d9fb3f1db17a32b11a

    if($post['submit']) {
      if($post['name'] == '' || $post['email'] == '' || $post['password'] == '') {
        Messages::setMsg('Please Fill In All Fields', 'error');
        return;
      }
      //Insert into MySQL
      $this->query('INSERT INTO users (name, email, password) VALUES(:name, :email, :password)');
      $this->bind(':name', $post['name']);
      $this->bind(':email', $post['email']);
      $this->bind(':password', $password);
      $this->execute();
      //Verify
      if($this->lastInsertId()) {
        header('Location: '.ROOT_URL.'users/login');
      }
      return;
    }
  }

  public function login() {
    //Sanitize POST
    $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

<<<<<<< HEAD
  //  $password = md5($post['password']);
  //  $password = password_hash($post['password'], PASSWORD_DEFAULT);
  //  $password = $post['password'];

    if($post['submit']) {
      //Insert into MySQL
      $this->query('SELECT * FROM users WHERE email = :email');
      $this->bind(':email', $post['email']);

      $row = $this->single();
      if(password_verify($post['password'], $row['password'])) {
=======
    $password = md5($post['password']);
  //  $password = password_hash($post['password'], PASSWORD_DEFAULT);

    if($post['submit']) {
      //iInsert into MySQL
      $this->query('SELECT * FROM users WHERE email = :email AND password = :password');
      $this->bind(':email', $post['email']);
      $this->bind(':password', $password);

      $row = $this->single();
      if($row) {
>>>>>>> 38489ae786620d1e98d1f3d9fb3f1db17a32b11a
        $_SESSION['is_logged_in'] = true;
        $_SESSION['user_data'] = array(
          "id"    => $row['id'],
          "name"  => $row['name'],
          "email" => $row['email']
        );
        header('Location: '.ROOT_URL.'shares');
      } else {
        Messages::setMsg('Incorrect Login', 'error');
      }
      return;
    }
  }
}
?>
