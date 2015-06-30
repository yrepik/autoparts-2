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
		$sql="insert into ".DB_PREFIX. "engine(makeid,modelid,yearid,enginename)values('$_POST[optMake]','$_POST[ddlModel]','$_POST[ddlYear]','$_POST[txtEngine]')";
		mysql_query($sql,$con);
	}
	
	if($_GET['flag']=='2x'){
		//delete
		$sql="Delete from ".DB_PREFIX. "engine where engineid='".$_GET['engineid']."'";
		mysql_query($sql,$con);
	}
	
	if($_GET['flag']=='3'){
		//select by model id
		$str = '';
		$makeString = '';
		$makeId;
		$result = mysql_query("select * from ".DB_PREFIX. "model where modelid='".$_GET['mId']."'");
		if($row = mysql_fetch_array($result))
		{
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
		
		echo "<select name='optMake' id='optMake'><option value='-1'>--Select Model--</option>".$makeString."</select>".':'.$str;
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
		
		echo "<select name='optMake' id='optMake'><option value='-1'>--Select Make--</option>".$makeString."</select>";
	}
	if($_GET['flag']=='99'){
		$makeString='';
		$results = mysql_query("select * from ".DB_PREFIX. "make order by makeid ASC");
		while($rows = mysql_fetch_array($results))
		{
			$makeString = $makeString."<option value='$rows[makeid]'>$rows[makename]</option>";
		}
		
		echo "<select name='optMake' id='optMake' onchange='loadmodeldata(this);'><option value='-1'>--Select Make--</option>".$makeString."</select>";
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
	if($_GET['flag']=='55x'){
		$sql="Update ".DB_PREFIX. "engine set enginename='$_POST[txtEngine]',makeid='$_POST[optMake]',modelid='$_POST[ddlModel]',yearid='$_POST[ddlYear]' where engineid='".$_GET['mId']."'";
		mysql_query($sql,$con);
	}
	
	if($_GET['flag']=='99x'){
		//select by model id
		$enginename = '';
		$makeString = '';
		$modelString = '';
		$yearString = '';
		$engineString = '';
		$makeId = 0;
		$modelId = 0;
		$yearId = 0;
		$result = mysql_query("select * from ".DB_PREFIX. "engine where engineid='".$_GET['engineId']."'");
		if($row = mysql_fetch_array($result)){
			$enginename = $row['enginename'];
			$makeId = $row['makeid'];
			$modelId = $row['modelid'];
			$yearId = $row['yearid'];
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
		
		$resultz = mysql_query("select * from ".DB_PREFIX. "year where makeid = '" . (int)$makeId . "' and modelid = '" . (int)$modelId . "' order by yearname ASC");
		while($rowsz = mysql_fetch_array($resultz))
		{
			if($yearId ==$rowsz['yearid']){
				$yearString = $yearString."<option value='$rowsz[yearid]' selected='true'>$rowsz[yearname]</option>";
			}
			else{
				$yearString = $yearString."<option value='$rowsz[yearid]'>$rowsz[yearname]</option>";
			}
		}
		
		echo "<select class='form-control' name='optMake' onchange='loadmodeldata(this);' id='optMake'><option value='-1'>--Select Make--</option>".$makeString."</select>".":".$modelString . ":" . $yearString . ":" . $enginename;
	}
	

?>