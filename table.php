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
$myarray   = array();
$myarray[] = array(
    "Name" => "Jim",
    "ID" => "00001",
    "Favorite Color" => "Blue"
);
$myarray[] = array(
    "Name" => "Sue",
    "ID" => "00002",
    "Favorite Color" => "Red"
);
$myarray[] = array(
    "Name" => "Barb",
    "ID" => "00003",
    "Favorite Color" => "Green"
);

class html
{
    public $html;
    public function __construct($html = array())
    {
        // echo $html Array;
    }
}

class htmlTable extends html
{
    protected $htmlTable;

    public function getHTML($html)
    {
        $this->html = $html;
    }
    public function getTableHTML()
    {
        $this->htmlTable .= '<table>';
        $this->htmlTable .= '<thead>';
        $this->htmlTable .= '<tr>';
        //Table Head
        foreach ($this->html[0] as $key => $value) {
            $this->htmlTable .= '<th>' . $key . '</th>';
        }
        $this->htmlTable .= '</tr>';
        $this->htmlTable .= '</thead>';

        //Table Body
        $this->htmlTable .= '<tbody>';
        foreach ($this->html as $row) {
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
$obj->getHTML($myarray);
$obj->getTableHTML();

?>
  </body>
</html>

