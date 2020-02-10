<?php
  class View
  {
    protected $view_file;
    protected $view_data;

    public function __construct($view_file, $view_data)
    {
      $this->view_file = $view_file;
      $this->view_data = $view_data;
    }

    protected function get_view_file() {
      return $this->$view_file;
    }

    public function render() {
      if(file_exists(VIEW . $this->view_file . '.phtml' )){
        include VIEW . $this->view_file . '.phtml';
      }
    }
  }
?>
