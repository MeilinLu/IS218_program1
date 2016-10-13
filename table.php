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


<?php
echo '#1: array_pad()';
$input = array(1, 2, 3);
print_r($input);
$result = array_pad($input, 5, 4);
print_r($result);
$secondResult = array_pad($result, -7, 0);
print_r($secondResult);
$thirdResult = array_pad($secondResult, 2, "noop");
print_r($thirdResult);
?>
<?php
echo '#2: array_merge';
$array1 = array("age"=>"20", 1,2);
print_r($array1);
$array2 = array(3,4,5,"age"=>"30","color"=>"black");
print_r($array2);
$result = array_merge($array1,$array2);
print_r($result);
?>
<?php
echo '#3: array_push';
$number = array(1,2,3);
array_push($number,4,5,6);
print_r($number);
?>
<?php
echo '#4: array_reverse';
$input = array(1,2,3);
$reversed = array_reverse($input);
$prereversed = array_reverse($input, true);
print_r($input);
print_r($reversed);
print_r($prereversed);
?>
<?php
echo '#5: array_search()';
$array = array('a'=>'apple', 'b'=>'banana', 'k'=>'kiwi', 'o'=>'orange');
$key = array_search('banana', $array);
$key = array_search('kiwi', $array);
print_r($key);
?>
<?php
echo '#6: array_unique';
$input = array("a"=>"apple","banana","c"=>"apple","bee","banana");
print_r($input);
$result = array_unique($input);
print_r($result);
?>
<?php
echo '#7: array_values';
$input = array(1=>"apple",2=>"banana",3=>"grape");
print_r(array_values($input));
?>
<?php
echo '#8: array_keys';
$array = array(0=>"no", 1=>"yes");
print_r(array_keys($array));
$array = array("a","b","a","b","c");
print_r(array_keys($array,"b"));
$array = array("shape"=> array("triangle","rectangle"," circle"), "fruits"=>array("apple","banana","grape"));
print_r(array_keys($array));
?>
<?php
echo '#9: array_walk';
$fruits = array("a"=>"apple", "b"=>"banana", "k"=>"kiwi", "o"=>"orange");
function test_alter(&$item1, $key, $prefix){
  $item1 = "$prefix: $item1";
}
function test_print($item2, $key){
  echo "$key.$item2<br/>/n";
}
echo "Before...:/n";
array_walk($fruits, 'test_print');
array_walk($fruits, 'test_alter','fruit');
echo "...and after:/n";
array_walk($fruits, 'test_print');
?>
<?php
echo '#10: arsort()';
$fruits = array("a"=>"apple", "b"=>"banana", "k"=>"kiwi", "o"=>"orange");
arsort($fruits);
foreach ($fruits as $key => $val){
  echo "$key = $val/n";
}
?>

<?php
echo '#11: asort()';
$fruits = array("a"=>"apple", "b"=>"banana", "k"=>"kiwi", "o"=>"orange");
asort($fruits);
foreach ($fruits as $key => $val){
  echo "$key = $val/n";
}
?>
<?php
$city = "Newark";
$state = "NJ";
$school = "NJIT";
$location = array("city","state");
$result = compact("school","nothing_here",$location);
print_r($result);
?>
<?php
echo '#12: count()';
$a[0]=2;
$a[1]=4;
$a[2]=6;
$result = count($a);
echo "$result";
?>
<?php
echo '#13 current()';
$fruits = array("a"=>"apple", "b"=>"banana", "k"=>"kiwi", "o"=>"orange");
$eat = current($fruits);
echo "$eat";
$eat = next($fruits);
echo "$eat";
$eat = current($fruits);
echo "$eat";
?>
<?php
echo '#14 sort()';
$fruits = array("apple", "banana", "kiwi","orange");
sort($fruits);
foreach($fruits as $key => $val){
  echo 'fruits['.$key.']='.$val.'/n';
}
?>
<?php
echo '#15 array_fill()';
$a = array_fill(5,6,'flower');
$b = array_fill(-2,3,'tree');
print_r($a);
print_r($b);
?>
