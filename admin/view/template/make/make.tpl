<?php echo $header; ?><?php echo $column_left; ?>

<div id="content">
  <div class="page-header">
    <div class="container-fluid">
      <div class="pull-right">
        <!--<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myMakeModel">Add Make</button>-->
		<button type="button" class="btn btn-primary" data-toggle="modal" onclick="openMakerBox();">Add Make</button>
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
        <table border="0" width="35%">
          <tr style="font-weight:bold;font-size:16px;text-align:center;">
            <td align="center" style="width:100px;text-decoration:underline;">Make Name</td>
            <td align="center" style="width:25px;">&nbsp;</td>
            <td align="center" style="width:25px;">&nbsp;</td>
          </tr>
          <?php if(isset($make)){foreach ($make as $makes) { ?>
          <tr style="text-align:center;">
            <td><span style="font-size:14px;"><?php echo $makes['makename']; ?></span></td>
            <td style="padding-top:1%;"><a class="btn btn-primary" title="" onclick="editMaker(<?php echo $makes['makeid']; ?>);" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-pencil"></i></a></td>
            <td style="padding-top:1%;"><button onclick="deleteMaker(<?php echo $makes['makeid']; ?>);" class="btn btn-danger" title="" data-toggle="tooltip" type="button" data-original-title="Delete"><i class="fa fa-trash-o"></i></button></td>
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
        <div id='stitle' style="font-size:17px;color:red;font-weight:bold;text-align:center;text-decoration:underline;">Add new Maker</div>
		<br/>
		<form id="addMaker">
          <table id="tblSup" align="center">
            <tr>
              <td><label class="control-label" for="make">Maker Name:</label>
                <input class="form-control" type="text" size="30" name="txtMakerName" id="txtMakerName" />
              </td>
            </tr>
            <tr>
              <td><br/><input type="button" class="btn btn-primary" id="btnSave" name="btnSave" onclick="InsertMaker();" value="Save" /><input type="button" id="btUpdate" onclick="updateMaker();" style='display:none;' class="btn btn-primary" name="btUpdate" value="Update" />
              </td>
            </tr>
          </table>
        </form>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
	function openMakerBox(){
		jQuery('#stitle').html('Add new Maker');
		jQuery('#btnSave').show();
		jQuery('#btUpdate').hide();
		jQuery('#txtMakerName').val('');
		$('#myMakeModel').modal('show');
	}
	
	function editMaker(mId){
		$.ajax({
        type: "POST",
		url: 'utility/insertMaker.php?flag=3' + '&mId=' + mId,
        success: function(msg){
			  jQuery('#stitle').html('Update Maker');
			  jQuery('#btnSave').hide();
			  jQuery('#btUpdate').show();
			  jQuery('#txtMakerName').val(msg);
			  jQuery('#hfSID').val(mId);
			  $('#myMakeModel').modal('show');
        }
   		});
	}
	
	function updateMaker(){
		var mId = document.getElementById('hfSID').value;
		if(mId > 0){
		var sReturn = validation()
		if(sReturn){
		$.ajax({
        type: "POST",
		url: 'utility/insertMaker.php?flag=4' + '&mId=' + mId,
		data:$('#addMaker').serialize(),
        success: function(msg){
              alert("Update Maker Successfully");
			  window.location.reload();
        }
   		});
		}
		}
	}
	
	function InsertMaker(){
		var sReturn = validation()
		if(sReturn){
		$.ajax({
        type: "POST",
		url: "utility/insertMaker.php?flag=1",
		data:$('#addMaker').serialize(),
        success: function(msg){
              alert("Insert Maker Successfully");
			  window.location.reload();
        }
   		});
		}
		}
	
	function deleteMaker(mId)
	{
		var iAnswer = confirm('Are you sure you want to delete this Maker?');
		if(iAnswer)
		{
    	$.ajax({
        type: "POST",
		url: 'utility/insertMaker.php?flag=2' + '&mId=' + mId,
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
		if(jQuery('#txtMakerName').val()==""){
			alert("Maker Name Required !!!");
			jQuery('#txtMakerName').focus();
			return false;
		}
		else{
			return true;
		}
	}
	

</script>
<input type="hidden" id="hfSID" name="hfSID" value="0" />
<?php echo $footer; ?>