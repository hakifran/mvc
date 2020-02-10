<?php

class homecontroller extends Controller
{
  public function index($id='', $name=''){
    // echo 'I am in '.__CLASS__.'method'.__METHOD__;
    // echo 'Id: is '. $id .' and name is :' . $name;
    $this->view('home' . DIRECTORY_SEPARATOR . 'index', ['name' => $name, 'id' => $id]);
    $this->view->render();
  }

  public function aboutus($val = '') {
    $this->view('home' . DIRECTORY_SEPARATOR . 'aboutus', ['name' => $name, 'id' => $id]);
    $this->view->render();
  }
}
 ?>
