<?php echo $header; ?><?php echo $column_left; ?>

<div id="content">
  <div class="page-header">
    <div class="container-fluid">
      <div class="pull-right">
		<button type="button" class="btn btn-primary" data-toggle="modal" onclick="openmodel();">Add Model</button>&nbsp;&nbsp;<a onclick="javascript:window.location.reload();" class="btn btn-primary"><span>Refresh</span></a>
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
          <td align="center" style="width:25px;">&nbsp;</td>
          <td align="center" style="width:25px;">&nbsp;</td>
        </tr>
        <?php if(isset($model)){foreach ($model as $models) { ?>
        <tr style="text-align:center;">
          <td><span style="font-size:14px;"><?php echo $models['makename']; ?></span></td>
		  <td><span style="font-size:14px;"><?php echo $models['modelname']; ?></span></td>
          <td style="padding-top:1%;"><a class="btn btn-primary" title="" onclick="editModel(<?php echo $models['modelid']; ?>);" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-pencil"></i></a></td>
          <td style="padding-top:1%;"><button onclick="deleteModel(<?php echo $models['modelid']; ?>);" class="btn btn-danger" title="" data-toggle="tooltip" type="button" data-original-title="Delete"><i class="fa fa-trash-o"></i></button></td>
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
        <div id='stitle' style="font-size:17px;color:red;font-weight:bold;text-align:center;text-decoration:underline;">Add new Model</div>
		<br/>
		  <form id="addModel">
		  <table id="tblSup" align="center">
			<tr>
			  <td><label class="control-label" for="make">Maker Name:</label><div id="mopt"><?php if(isset($make) && $make != ''){echo $make;} ?></div></td>
			</tr>
			<tr>
			  <td><label class="control-label" for="make">Model Name:</label><input class="form-control" type="text" size="30" name="txtModelName" id="txtModelName" /></td>
			</tr>
			<tr>
			  <td><br/>
			  <div style="clear:both;"></div>
				<input class="btn btn-primary" type="button" id="btnSave" name="btnSave" onclick="InsertModel();" value="Save" />
				<input class="btn btn-primary" type="button" id="btUpdate" onclick="updateModel();" style='display:none;' name="btUpdate" value="Update" />
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
		jQuery('#stitle').html('Add new Model');
		jQuery('#btnSave').show();
		jQuery('#btUpdate').hide();
		jQuery('#txtModelName').val('');
		getMakeValue();
		$('#myMakeModel').modal('show');
	}
	
	function getMakeValue(){
		$.ajax({
        type: "POST",
		url: 'utility/insertModel.php?flag=5',
        success: function(msg){
			jQuery('#mopt').html('');
			jQuery('#mopt').html(msg);
        	}
   		});
	}
	
	function editModel(mId){
		$.ajax({
        type: "POST",
		url: 'utility/insertModel.php?flag=3' + '&mId=' + mId,
        success: function(msg){
			  $str = msg.split(':');
			  jQuery('#stitle').html('Update Model');
			  jQuery('#btnSave').hide();
			  jQuery('#btUpdate').show();
			  jQuery('#mopt').html('');
			  jQuery('#mopt').html($str[0]);
			  jQuery('#txtModelName').val($str[1]);
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
		url: 'utility/insertModel.php?flag=4' + '&mId=' + mId,
		data:$('#addModel').serialize(),
        success: function(msg){
              alert("Update Model Successfully");
			  window.location.reload();
        }
   		});
		}
		}
	}
	
	function InsertModel(){
		var sReturn = validation()
		if(sReturn){
		$.ajax({
        type: "POST",
		url: "utility/insertModel.php?flag=1",
		data:$('#addModel').serialize(),
        success: function(msg){
              alert("Insert Model Successfully");
			  $('#txtModelName').val('');
			  $('#txtModelName').focus();
			  //window.location.reload();
        	}
   			});
		  }
		}
	
	function deleteModel(mId)
	{
		var iAnswer = confirm('Are you sure you want to delete this Model?');
		if(iAnswer)
		{
    	$.ajax({
        type: "POST",
		url: 'utility/insertModel.php?flag=2' + '&mId=' + mId,
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
		if(jQuery('#txtModelName').val()==""){
			alert("Model Name Required !!!");
			jQuery('#txtModelName').focus();
			return false;
		}
		else{
			return true;
		}
	}
	

</script>
<input type="hidden" id="hfSID" name="hfSID" value="0" />
<?php echo $footer; ?>