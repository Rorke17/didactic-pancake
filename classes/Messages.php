<?php
class Messages {
  public static function setMsg($text, $type) {
    if($type == 'error') {
      $_SESSION['errorMsg'] = $text;
<<<<<<< HEAD
    } else if($type == 'success') {
      $_SESSION['successMsg'] = $text;
    } else {
      $_SESSION['infoMsg'] = $text;
=======
    } else {
      $_SESSION['successMsg'] = $text;
>>>>>>> 38489ae786620d1e98d1f3d9fb3f1db17a32b11a
    }
  }

  public static function display() {
    if(isset($_SESSION['errorMsg'])) {
      echo '<div class="alert alert-danger">'.$_SESSION['errorMsg'].'</div>';
      unset($_SESSION['errorMsg']);
    }

    if(isset($_SESSION['successMsg'])) {
      echo '<div class="alert alert-danger">'.$_SESSION['successMsg'].'</div>';
      unset($_SESSION['successMsg']);
    }
<<<<<<< HEAD

    if(isset($_SESSION['infoMsg'])) {
      echo '<div class="alert alert-info">'.$_SESSION['infoMsg'].'</div>';
      unset($_SESSION['infoMsg']);
    }
=======
>>>>>>> 38489ae786620d1e98d1f3d9fb3f1db17a32b11a
  }
}
?>
