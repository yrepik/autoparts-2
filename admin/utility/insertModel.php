<?php
	include_once ('../config.php');
	$con = mysql_connect(DB_HOSTNAME,DB_USERNAME,DB_PASSWORD);
	if (!$con)
	{
  		die('Could not connect: ' . mysql_error());
	}
	mysql_select_db(DB_DATABASE, $con);
	
	if($_GET['flag']=='1'){
		//insert
		$sql="insert into ".DB_PREFIX. "model(makeid,modelname)values('$_POST[optMake]','$_POST[txtModelName]')";
		mysql_query($sql,$con);
	}
	
	if($_GET['flag']=='2'){
		//delete
		$sql="Delete from ".DB_PREFIX. "model where modelid='".$_GET['mId']."'";
		mysql_query($sql,$con);
	}
	
	if($_GET['flag']=='3'){
		//delete
		$sql="Delete from ".DB_PREFIX. "year where yearid='".$_GET['yid']."'";
		mysql_query($sql,$con);
	}
	
	if($_GET['flag']=='3'){
		//select by model id
		$str = '';
		$makeString = '';
		$makeId = 0;
		$result = mysql_query("select * from ".DB_PREFIX. "model where modelid='".$_GET['mId']."'");
		if($row = mysql_fetch_array($result)){
			$str = $row['modelname'];
			$makeId = $row['makeid'];
		}
		
		$results = mysql_query("select * from ".DB_PREFIX. "make order by makeid ASC");
		while($rows = mysql_fetch_array($results))
		{
			if($makeId==$rows['makeid']){
				$makeString = $makeString."<option value='$rows[makeid]' selected='true'>$rows[makename]</option>";
			}
			else{
				$makeString = $makeString."<option value='$rows[makeid]'>$rows[makename]</option>";
			}
		}
		
		echo "<select class='form-control' name='optMake' id='optMake'><option value='-1'>--Select Make--</option>".$makeString."</select>".':'.$str;
	}
	
	if($_GET['flag']=='99x'){
		//select by model id
		$yearname = '';
		$modelString = '';
		$yearString = '';
		$makeId = 0;
		$modelId = 0;
		$result = mysql_query("select * from ".DB_PREFIX. "year where yearid='".$_GET['mId']."'");
		if($row = mysql_fetch_array($result)){
			$yearname = $row['yearname'];
			$makeId = $row['makeid'];
			$modelId = $row['modelid'];
		}
		$results = mysql_query("select * from ".DB_PREFIX. "make order by makeid ASC");
		while($rows = mysql_fetch_array($results))
		{
			if($makeId==$rows['makeid']){
				$yearString = $yearString."<option value='$rows[makeid]' selected='true'>$rows[makename]</option>";
			}
			else{
				$yearString = $yearString."<option value='$rows[makeid]'>$rows[makename]</option>";
			}
		}
		
		$resultxx = mysql_query("select * from ".DB_PREFIX. "model where makeid = '" . (int)$makeId . "' order by modelname ASC");
		while($rowsxx = mysql_fetch_array($resultxx))
		{
			if($modelId ==$rowsxx['modelid']){
				$modelString = $modelString."<option value='$rowsxx[modelid]' selected='true'>$rowsxx[modelname]</option>";
			}
			else{
				$modelString = $modelString."<option value='$rowsxx[modelid]'>$rowsxx[modelname]</option>";
			}
		}
		
		echo "<select class='form-control' name='optMake' onchange='loadmodeldata(this);' id='optMake'><option value='-1'>--Select Make--</option>".$yearString."</select>".":".$yearname . ":" . $modelString;
	}
	
	if($_GET['flag']=='4'){
		$sql="Update ".DB_PREFIX. "model set modelname='$_POST[txtModelName]',makeid='$_POST[optMake]' where modelid='".$_GET['mId']."'";
		mysql_query($sql,$con);
	}
	
	if($_GET['flag']=='5'){
		$makeString='';
		$results = mysql_query("select * from ".DB_PREFIX. "make order by makeid ASC");
		while($rows = mysql_fetch_array($results))
		{
			$makeString = $makeString."<option value='$rows[makeid]'>$rows[makename]</option>";
		}
		
		echo "<select class='form-control' name='optMake' id='optMake'><option value='-1'>--Select Make--</option>".$makeString."</select>";
	}
	if($_GET['flag']=='99'){
		$makeString='';
		$results = mysql_query("select * from ".DB_PREFIX. "make order by makeid ASC");
		while($rows = mysql_fetch_array($results))
		{
			$makeString = $makeString."<option value='$rows[makeid]'>$rows[makename]</option>";
		}
		
		echo "<select class='form-control' name='optMake' id='optMake' onchange='loadmodeldata(this);'><option value='-1'>--Select Make--</option>".$makeString."</select>";
	}
	
	if($_GET['flag']=='88'){
		$makeString="<option value=''>--Select Model--</option>";
		$results = mysql_query("select * from ".DB_PREFIX. "model where makeid = '" . $_GET['makeid'] . "' order by makeid ASC");
		while($rows = mysql_fetch_array($results))
		{
			$makeString = $makeString."<option value='$rows[modelid]'>$rows[modelname]</option>";
		}
		
		echo $makeString;
	}
	
	if($_GET['flag']=='90'){
		$yearString="<option value=''>--Select Year--</option>";
		$results = mysql_query("select * from ".DB_PREFIX. "year where makeid = '" . $_GET['makeid'] . "' and modelid = '" . $_GET['modelid'] . "' order by yearname ASC");
		while($rows = mysql_fetch_array($results))
		{
			$yearString = $yearString."<option value='$rows[yearid]'>$rows[yearname]</option>";
		}
		
		echo $yearString;
	}

?>