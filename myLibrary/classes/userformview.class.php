<?php

  class userformview{
    public function getHTML(){
      
      $form = '
        <h1> User Login Form </h1>
	<form action='index.php?controller=userController' method="post">
	  <div>
	    <label for="user"> User:</label>
	    <input type="text" id="user" name="user"/>
          </div>
	  <div>
	    <label for="password">Password:</label>
	    <input type="text" id="password" name="password"/>
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
