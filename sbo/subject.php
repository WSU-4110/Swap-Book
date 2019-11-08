<?php
//subject.php
interface subject  {
	function subscribeObserver(observer $observer);
	function unsubscribeObserver(observer $observer);
	function notifyObservers();
}
?>