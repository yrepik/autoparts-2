<?php
	include_once ('../config.php');
	$con = mysql_connect(DB_HOSTNAME,DB_USERNAME,DB_PASSWORD);
	if (!$con)
	{
  		die('Could not connect: ' . mysql_error());
	}
	mysql_select_db(DB_DATABASE, $con);
	
	if($_GET['makeid'] > 0 && $_GET['modelid'] > 0 && $_GET['yearid'] > 0){
		$str = "";
		$result = mysql_query("select * from " . DB_PREFIX . "engine where makeid='".$_GET['makeid']."' and modelid='".$_GET['modelid']."' and yearid='".$_GET['yearid']."' order by enginename ASC");
		while($row = mysql_fetch_array($result))
		{
			$str = $str."<option value='$row[engineid]'>$row[enginename]</option>";
		}
		echo "<option value='-1'>Select Engine</option>".$str;
	}
	else {
		echo "<option value='-1'>Select Engine</option>";
	}
?>