<?php
//subject.php
interface subject  {
	function attach(observer $observer);
	function detach(observer $observer);
	function notify();
}
?>