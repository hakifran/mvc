<?php
/**
 *
 */
class carcontroller extends Controller
{

  public function index()
  {
    $this->model('car');
    $this->view('car' . DIRECTORY_SEPARATOR . 'index', ['cars' => $this->model->getCars()]);
    $this->view->render();
  }

  public function add()
  {
    $this->view('car' . DIRECTORY_SEPARATOR . 'add', []);
    $this->view->render();
  }

  public function create(){
    $this->model('car');
    $this->model->create($_POST);
    header("Location: /car/");
  }

  public function edit($id=''){
    $this->model('car');
    $this->view('car' . DIRECTORY_SEPARATOR . 'add', ['car' => $this->model->edit($id)[0]]);
    $this->view->render();
  }

  public function delete($id=''){
    $this->model('car');
    $this->model->delete($id);
    header("Location: /car/");
  }

  public function update() {
    $this->model('car');
    $this->model->update($_POST);
    header("Location: /car/");
  }
}

 ?>
