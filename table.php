<html>
  <head>
    <title>Turning an array into a table</title>
    <style>
      table {
        border-collapse: collapse;
	}

	td, th {
	  border: 1px solid #999;
	    padding: 0.5rem;
	      text-align: left;
	      }
    </style>
  </head>
  <body>
  <?php
//    $myarray   = array();
//    $myarray[] = array(
//    "Name" => "Jim",
//    "ID" => "00001",
//    "Favorite Color" => "Blue"
//    );
//    $myarray[] = array(
//    "Name" => "Sue",
//    "ID" => "00002",
//    "Favorite Color" => "Red"
//    );
//    $myarray[] = array(
//    "Name" => "Barb",
//    "ID" => "00003",
//    "Favorite Color" => "Green"
// );

class htmlTable{
    public $htmlTable;
    public $data;
    //Read data
    public function setArray($data){
    	$this->data = $data;
    } 
    //Array From CSV File
    public function setArrayFromCSV($filename){
    	$file = fopen($filename, "r");
        //Name Line
        $nameline = fgetcsv($file);
        //Read from CSV
        while(($lines = fgetcsv($file)) !==FALSE){
    	 $lines = array_combine($nameline, $lines);
	     $this->data[] = $lines;
        }
    }
        //Print The Array
    public function getArray(){
            print_r($this->rawArray);
    }
        
    //HTML Table
    public function getTableHTML()
    {
        $this->htmlTable .= '<table>';
        $this->htmlTable .= '<thead>';
        $this->htmlTable .= '<tr>';
        
	//Table Head
        foreach ($this->data[0] as $key => $value) {
            $this->htmlTable .= '<th>' . $key . '</th>';
        }
        $this->htmlTable .= '</tr>';
        $this->htmlTable .= '</thead>';

        //Table Body
        $this->htmlTable .= '<tbody>';
        foreach ($this->data as $row) {
            $this->htmlTable .= '<tr>';
            foreach ($row as $key => $value) {
                $this->htmlTable .= '<td>' . $value . '</td>';
            }
            $this->htmlTable .= '</tr>';
        }
        $this->htmlTable .= '</tbody>';
        echo $this->htmlTable;
    }
}

$obj = new htmlTable;
$obj->setArrayFromCSV("datainfo.csv");
$obj->getTableHTML();
?>
  </body>
</html>

