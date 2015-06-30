<?php
	include_once ('../config.php');
	$con = mysql_connect(DB_HOSTNAME,DB_USERNAME,DB_PASSWORD);
	if (!$con)
	{
  		die('Could not connect: ' . mysql_error());
	}
	mysql_select_db(DB_DATABASE, $con);
	
	if($_GET['makeid'] > 0 && $_GET['modelid'] > 0){
		$str = "";
		$result = mysql_query("select * from " . DB_PREFIX . "year where makeid='".$_GET['makeid']."' and modelid='".$_GET['modelid']."' order by yearname ASC");
		while($row = mysql_fetch_array($result))
		{
			$str = $str."<option value='$row[yearid]'>$row[yearname]</option>";
		}
		echo "<option value='-1'>Select Year</option>".$str;
	}
	else {
		echo "<option value='-1'>Select Year</option>";
	}
?>