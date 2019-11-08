<?php

//offers.php 
require_once("subject.php");

class offers implements subject  {
	private $observers = array();	//make offer button click observers
	
	public function attach(observer $observer)  { 
		array_push($this->observers, $observer);
	}
	
	public function detach(observer $observer)  {
		$index = array_search($observer, $this->observers);
		if($index >= 0)  {
			$filter = array($index);
			$this->observers = array_diff_key($this->observers, array_flip($filter));
		}
	}
	
	public function notify()  {       //used by the subject class
		foreach($this->observers as $observer)  {
			$observer->update($this, $this->_data);
		}
	}
	
	public function contactUser ($user_id)  {     //notify book owner
        $to      = $email;
        $subject = 'New Swap Offer';
        $message = 'You have a new Swap Offer. Login to review.';
        $headers = 'From: webmaster@swapbook.com' . "\r\n" .
                   'Reply-To: webmaster@example.com' . "\r\n" .
                   'X-Mailer: PHP/' . phpversion();
        mail($to, $subject, $message, $headers);
		$this->notifyObservers();
	}
    
     public function incrTally($book_id) {      //increment the offers tally
            $sql = 'UPDATE Books set tally=tally+1 where book_id='.$book_id;
            $this->db->query($sql);
        }
}
?>