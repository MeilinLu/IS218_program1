<?php		
  //db connection class using singleton pattern
  class dbConn{
 
    //variable to hold connection object.
    protected static $db;
    //private construct - class cannot be instatiated externally.
    private function __construct() {
      try {
        // assign PDO object to db variable
        self::$db = new PDO('mysql:host=sql2.njit.edu;dbname=ml473', 'ml473', 'Z93KhFEP' );
        self::$db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
      }
      catch (PDOException $e) {
      //Output error - would normally log this to error file rather than output to user.
        echo "Connection Error: " . $e->getMessage();
      }				           
    }					            
    // get connection function. Static method - accessible without instantiation
    public static function getConnection() {			
      //Guarantees single instance, if no connection object exists then create one.
      if(!self::$db){
      //new connection objects
        new dbConn();
      }												         

      //return connection.
      return self::$db;
      }												
    }													
    $db = dbConn::getConnection();
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $statement = $db->prepare('SELECT * FROM customers LIMIT 5');
    $statement->execute();
    while($result = $statement->fetch(PDO::FETCH_OBJ)){
      $results[] = $result;
    }
    print_r($results);

?>
