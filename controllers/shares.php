<?php
class Shares extends Controller {
  protected function Index() {
    $viewModel = new ShareModel();
    $this->returnView($viewModel->Index(), true);
  }

  protected function add() {
    if(!isset($_SESSION['is_logged_in'])) {
      header('Location: '.ROOT_URL.'shares');
    }
    $viewModel = new ShareModel();
    $this->returnView($viewModel->add(), true);
  }

<<<<<<< HEAD
  protected function edit() {
    if(!isset($_SESSION['is_logged_in'])) {
      header('Location: '.ROOT_URL.'shares');
    }
    $viewModel = new ShareModel();
    $this->returnView($viewModel->edit(), true);
  }

  protected function update() {
    if(!isset($_SESSION['is_logged_in'])) {
      header('Location: '.ROOT_URL.'shares');
    }
    $viewModel = new ShareModel();
    $this->returnView($viewModel->update(), true);
  }

  protected function delete() {
    if(!isset($_SESSION['is_logged_in'])) {
      header('Location: '.ROOT_URL.'shares');
    }
     $viewModel = new ShareModel();
     $this->returnView($viewModel->delete(), true);
  }


=======
>>>>>>> 38489ae786620d1e98d1f3d9fb3f1db17a32b11a
}

?>
