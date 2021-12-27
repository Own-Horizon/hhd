<?php
	
	$link = mysqli_connect('localhost','root','','pvzbfh');
	
	if(mysqli_connect_errno())
	{
			echo json_encode(array('return' => '3'));
	}

?>