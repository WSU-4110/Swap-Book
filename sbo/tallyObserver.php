<?php
//tallyObserver class
require_once("observer.php");

class tallyObserver implements Observer {
	public function update(subject, $offers)  {
       echo "Likes updated.</br>"
    }
}
?>