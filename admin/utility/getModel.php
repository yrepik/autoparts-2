<?php
	include_once ('../config.php');
	$con = mysql_connect(DB_HOSTNAME,DB_USERNAME,DB_PASSWORD);
	if (!$con)
	{
  		die('Could not connect: ' . mysql_error());
	}
	mysql_select_db(DB_DATABASE, $con);
	
	if($_GET['mId'] > 0){
		$str = "";
		$result = mysql_query("select * from " .DB_PREFIX. "model where makeId='".$_GET['mId']."' order by modelname ASC");
		while($row = mysql_fetch_array($result))
		{
			$str = $str."<option value='$row[modelid]'>$row[modelname]</option>";
		}
		echo "<select class='form-control' name='cmodel' id='cmodel' onchange='loadModel(this);' style='width:135px;'><option value='-1'>--Select Make--</option>".$str."</select>&nbsp;&nbsp;<span id='ajaxloader' style='display:none;'><img src='view/image/al.gif'></span>";
	}
?>