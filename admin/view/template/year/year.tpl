<?php echo $header; ?><?php echo $column_left; ?>

<div id="content">
  <div class="page-header">
    <div class="container-fluid">
      <div class="pull-right">
		<button type="button" class="btn btn-primary" data-toggle="modal" onclick="openmodel();">Add Year</button>&nbsp;&nbsp;<a onclick="javascript:window.location.reload();" class="btn btn-primary"><span>Refresh</span></a>
      </div>
      <h1><i class="fa fa-exclamation-circle"></i> <?php echo $heading_title; ?></h1>
      <ul class="breadcrumb">
        <?php foreach ($breadcrumbs as $breadcrumb) { ?>
        <li><a href="<?php echo $breadcrumb['href']; ?>"><?php echo $breadcrumb['text']; ?></a></li>
        <?php } ?>
      </ul>
    </div>
  </div>
  <div class="container-fluid">
    <?php if ($error_warning) { ?>
    <div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> <?php echo $error_warning; ?>
      <button type="button" class="close" data-dismiss="alert">&times;</button>
    </div>
    <?php } ?>
    <?php if ($success) { ?>
    <div class="alert alert-success"><i class="fa fa-check-circle"></i> <?php echo $success; ?>
      <button type="button" class="close" data-dismiss="alert">&times;</button>
    </div>
    <?php } ?>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title"><i class="fa fa-exclamation-triangle"></i> <?php echo $heading_title; ?></h3>
      </div>
      <div class="panel-body">
        <table border="0" width="45%">
        <tr style="font-weight:bold;font-size:16px;text-align:center;">
          <td align="center" style="width:100px;text-decoration:underline;">Make</td>
          <td align="center" style="width:100px;text-decoration:underline;">Model</td>
		  <td align="center" style="width:100px;text-decoration:underline;">Year</td>
          <td align="center" style="width:25px;">&nbsp;</td>
          <td align="center" style="width:25px;">&nbsp;</td>
        </tr>
        <?php if(isset($year)){foreach ($year as $models) { ?>
        <tr style="text-align:center;">
          <td><span style="font-size:14px;"><?php echo $models['makename']; ?></span></td>
		  <td><span style="font-size:14px;"><?php echo $models['modelname']; ?></span></td>
		  <td><span style="font-size:14px;"><?php echo $models['yearname']; ?></span></td>
          <td style="padding-top:1%;"><a class="btn btn-primary" title="Edit" onclick="editModel(<?php echo $models['yearid']; ?>);" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-pencil"></i></a></td>
		   <td style="padding-top:1%;"><a class="btn btn-danger" title="delete" onclick="deleteYear(<?php echo $models['yearid']; ?>);" class="btn btn-danger" data-toggle="tooltip" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash-o"></i></a></td>
        </tr>
        <?php }} ?>
      </table>
      </div>
    </div>
  </div>
</div>
<div id="myMakeModel" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <!--<img src="//placehold.it/1000x600" class="img-responsive">-->
        <div id='stitle' style="font-size:17px;color:red;font-weight:bold;text-align:center;text-decoration:underline;">Add new Year</div>
		<br/>
		  <form id="addyear">
	  <table id="tblSup" align="center">
		<tr>
		  <td><label class="control-label" for="make">Maker Name:</label><div id="mopt"><?php if(isset($make) && $make != '') { echo $make; } ?></div></td>
		</tr>
		<tr>
		  <td><label class="control-label" for="make">Model Name:</label><div id="modelinfo">
			<select class="form-control" name="ddlModel" id="ddlModel" disabled="disabled">
				<option value="">--Select Model--</option>
			</select>
		  </div></td>
		</tr>
		<tr>
		  <td><label class="control-label" for="make">Year Name:</label><input class="form-control" type="text" size="30" name="txtYearName" id="txtYearName" /></td>
		</tr>
		<tr>
		  <td><br/>
			  <div style="clear:both;"></div>
			<input type="button" class="btn btn-primary" id="btnSave" name="btnSave" onclick="InsertYear();" value="Save" />
			<input type="button" class="btn btn-primary" id="btUpdate" onclick="updateModel();" style='display:none;' name="btUpdate" value="Update" />
		  </td>
		</tr>
	  </table>
  </form>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
	function openmodel(){
		jQuery('#stitle').html('Add new Year');
		jQuery('#btnSave').show();
		jQuery('#btUpdate').hide();
		jQuery('#txtModelName').val('');
		getMakeValue();
		$('#myMakeModel').modal('show');
	}
	
	function getMakeValue(){
		$.ajax({
        type: "POST",
		url: 'utility/insertModel.php?flag=99',
        success: function(msg){
				jQuery('#mopt').html('');
				jQuery('#mopt').html(msg);
        	}
   		});
	}
	
	function loadmodeldata(obj){
		$.ajax({
        type: "POST",
		url: 'utility/insertModel.php?flag=88&makeid=' + obj.value,
        success: function(msg){
				jQuery('#ddlModel').html(msg);
				jQuery('#ddlModel').prop('disabled', false);
        	}
   		});
	}
	
	function editModel(mId){
		$.ajax({
        type: "POST",
		url: 'utility/insertModel.php?flag=99x' + '&mId=' + mId,
        success: function(msg){
			  $str = msg.split(':');
			  jQuery('#stitle').html('Update Year');
			  jQuery('#btnSave').hide();
			  jQuery('#btUpdate').show();
			  jQuery('#mopt').html('');
			  jQuery('#mopt').html($str[0]);
			  jQuery('#txtYearName').val($str[1]);
			  jQuery('#ddlModel').html($str[2]);
			  jQuery('#ddlModel').prop('disabled', false);
			  jQuery('#hfSID').val(mId);
			  $('#myMakeModel').modal('show');
        }
   		});
	}
	
	function updateModel(){
		var mId = document.getElementById('hfSID').value;
		if(mId > 0){
		var sReturn = validation()
		if(sReturn){
		$.ajax({
        type: "POST",
		url: 'utility/insertYear.php?flag=55x' + '&mId=' + mId,
		data:$('#addyear').serialize(),
        success: function(msg){
              alert("Update Year Successfully");
			  window.location.reload();
        }
   		});
		}
		}
	}
	
	function InsertYear(){
		var sReturn = validation()
		if(sReturn){
		$.ajax({
        type: "POST",
		url: "utility/insertYear.php?flag=1",
		data:$('#addyear').serialize(),
        success: function(msg){
              		alert("Insert Year Successfully");
			  		$('#txtYearName').val('');
			  		$('#txtYearName').focus();
        		}
   			});
		  }
		}
	
	function deleteYear(mId)
	{
		var iAnswer = confirm('Are you sure you want to delete this Year?');
		if(iAnswer)
		{
    	$.ajax({
        type: "POST",
		url: 'utility/insertModel.php?flag=3' + '&yid=' + mId,
        success: function(msg){
             window.location.reload();
        }
   		});
		}
		else
		{
			return false;
		}
	}
	
	function validation(){
		if(jQuery('#ddlModel').val()==""){
			alert("Model Required !!!");
			return false;
		}
		else if(jQuery('#txtYearName').val()==""){
			alert("Year Required !!!");
			return false;
		}
		else{
			return true;
		}
	}
	

</script>
<input type="hidden" id="hfSID" name="hfSID" value="0" />
<?php echo $footer; ?>