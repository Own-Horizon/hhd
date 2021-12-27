<?php
	$DB_Host = "https://www.db4free.net";
	$DB_User = "ownhorizon_test";
	$DB_Pass = "Koks_228";
	$DB_Name = "pvzbfh_test";
	
	$mysqli = new MySQLi($DB_Host,$DB_User,$DB_Pass,$DB_Name);
	
	if($mysqli->connect_errno)
	{
			die("ERROR : -> ".$mysqli->connect_errno);
	}
	else
		$Xsolla_ID = $_POST['Xsolla_ID'];
		$sql = "SELECT * FROM Accs_Currency WHERE Xsolla_ID = '$Xsolla_ID'";
		$result = mysqli_query($mysqli, $sql);
		
		if(mysqli_num_rows($result) == 0)
		{
				$mysqli->query ("INSERT INTO Accs_Currency(ID, Xsolla_ID, Coins, Tacos, Cookies, SandClocks, LeafBadges, MagicPollen, CrystalBrains, Souls, HopeStones) VALUES (NULL, '$Xsolla_ID', '0', '0', '0', '0', '0', '0', '0', '0', '0')");
		}
		else{echo json_encode(array('return' => '1'));}
?>
