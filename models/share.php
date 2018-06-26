<?php
class ShareModel extends Model {
  public function Index() {
    $this->query('SELECT * FROM shares ORDER BY create_date DESC');
    $rows = $this->resultSet();
    return $rows;
<<<<<<< HEAD

=======
>>>>>>> 38489ae786620d1e98d1f3d9fb3f1db17a32b11a
  }

  public function add() {
    //Sanitize POST
    $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

    if($post['submit']) {
      if($post['title'] == '' || $post['body'] == '' || $post['link'] == '') {
        Messages::setMsg('Please Fill In All Fields', 'error');
        return;
      }
      //Insert into MySQL
      $this->query('INSERT INTO shares (title, body, link, user_id) VALUES(:title, :body, :link, :user_id)');
      $this->bind(':title', $post['title']);
      $this->bind(':body', $post['body']);
      $this->bind(':link', $post['link']);
      $this->bind(':user_id', 1);
      $this->execute();
      //Verify
      if($this->lastInsertId()) {
        header('Location: '.ROOT_URL.'shares');
      }
      return;
    }
  }

<<<<<<< HEAD
  public function edit() {
    //Sanitize POST
    $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
      if ($post['edit']) {
      $this->query('SELECT * FROM shares WHERE id = :id');
      $this->bind(':id', $post['shared_id']);
      $this->execute();
      $rows = $this->resultSet();
      return $rows;
    }
  }

  public function update() {
    $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
    if ($post['update']) {
      $this->query('UPDATE shares SET title = :title, body = :body, link = :link WHERE id = :id');
      $this->bind(':title', $post['title']);
      $this->bind(':body', $post['body']);
      $this->bind(':link', $post['link']);
      $this->bind(':id', $post['id']);
      $this->execute();
      header('Location: '.ROOT_URL.'shares');
    }
  }

  public function delete() {
    $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
    if ($post['delete']) {
      $this->query('DELETE FROM shares WHERE id = :id');
      $this->bind(':id', $post['shared_id']);
      $this->execute();
      header('Location: '.ROOT_URL.'shares');
    }
  }
=======
>>>>>>> 38489ae786620d1e98d1f3d9fb3f1db17a32b11a
}

?>
