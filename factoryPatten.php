<?php
  
class car{
    public $make;
    public $model;
    public $year;
  }
  
class carFactory{
  
    public static function createCar($make, $model, $year){
      $obj = new car;
      $obj->make = 'ford';
      $obj->model = 'fiesta';
      $obj->year = '2016';
    
      return $obj;
    }
  }

//version1&2: $car = carFactory::createCar('ford','fiesta','2016');

$cars[] = carFactory::createCar('ford', 'fiesta', '2016');


//version2:$collection[] = $car;

//version1: print_r($car);

//version2: print_r($collection);

//version1: print a single car info
//version2: print an array which may contains many cars' info
//version3: simplify the version2


function readCSV($csvFile){
    $file_handle = fopen($csvFile, 'r');
    // make variable -> use make,model,year as the keys 
    $line_count = 0;
    while (!feof($file_handle) ) {
        //$line_of_text[] = fgetcsv($file_handle, 1024);
    	
	//use the make, model, year as the keys
        if($line_count ==0){
	$field_names = array_values(fgetcsv($file_handle, 1024));
	//print_r($field_names);
        
        }
        $records = array_combine($field_names, fgetcsv($file_handle,1024));
        print_r($records);
    }
    fclose($file_handle);
    return $line_of_text;
}

    $cars = readCSV('cars.csv');
    print_r($cars);


?>
