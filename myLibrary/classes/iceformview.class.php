<?php
  
  class iceformview{
  
    public function getHTML(){
      $form = '
        <form action="index.php?controller=iceController" method="post">
	  <div>
            <label for="make">Make:</label>
	    <input type="text" id="make" name="make"/>
	  </div>
	  <div>
	    <label for="flavor">Flavor:</label>
	    <input type="text" id="mail" name="flavor"/>
	  </div>
	  <div class="button">
	    <button type="submit">Submit</button>
	  </div>
	</form>
      ';

      return $form;
    }
  } 

?>
