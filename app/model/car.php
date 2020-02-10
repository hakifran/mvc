<?php
  class car
  {
    protected static $data_file;
    protected $inventory = [];

    public function __construct()
    {
      self::$data_file = DATA. 'cars.txt';
    }

    private function load() {

      if(file_exists(DATA. 'cardata.php')) {
        require DATA. 'cardata.php';
        $car = new cardata;
        $this->inventory = $car->getAllCars();
      }
    }
     public function getCars() {
       $this->load();
       return $this->inventory;
     }

     public function create($params) {

       if(file_exists(DATA. 'cardata.php')) {
         require DATA. 'cardata.php';
         $car = new cardata;

         $car->createcar($params);
       }
     }

     public function edit($id) {

       if(file_exists(DATA. 'cardata.php')) {
         require DATA. 'cardata.php';
         $car = new cardata;
         $this->inventory = $car->getCar($id);
         return $this->inventory;
       }
     }

     public function update($params) {
       if(file_exists(DATA. 'cardata.php')) {
         require DATA. 'cardata.php';
         $car = new cardata;

         $car->update($params);
       }
     }

     public function delete($id) {
       if(file_exists(DATA. 'cardata.php')) {
         require DATA. 'cardata.php';
         $car = new cardata;

         $car->delete($id);
       }
     }
  }
 ?>
