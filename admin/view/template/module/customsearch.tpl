<?php echo $header; ?><?php echo $column_left; ?>

<div id="content">
  <div class="page-header">
    <div class="container-fluid">
      <div class="pull-right">
        <button type="submit" form="frmMMY" data-toggle="tooltip" title="<?php echo $button_save; ?>" class="btn btn-primary"><i class="fa fa-save"></i></button>
        <a href="<?php echo $cancel; ?>" data-toggle="tooltip" title="<?php echo $button_cancel; ?>" class="btn btn-default"><i class="fa fa-reply"></i></a></div>
      <h1><?php echo $heading_title; ?></h1>
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
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title"><i class="fa fa-pencil"></i> <?php echo $heading_title; ?></h3>
      </div>
      <div class="panel-body">
        <form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data" id="frmMMY">
          <ul class="nav nav-tabs">
            <li class="active"><a href="#tab-settings" data-toggle="tab">Settings</a></li>
            <li><a href="#tab-help" data-toggle="tab">Help</a></li>
          </ul>
          <div class="tab-content">
            <div id="tab-settings" class="tab-pane active">
              <div class="table-responsive">
              <table class="table table-striped table-bordered table-hover">
                <tr>
                  <td width="400"><b>Header Text: <br/>
                    <span style="color:#ccc;font-size:10px;">(Module Top Header text)</span></b></td>
                  <td valign="top"><input class="form-control" type="text" name="customsearch_module[header_text]" value="<?php if(isset($modules['header_text'])){echo $modules['header_text'];}?>" /></td>
                </tr>
                <tr>
                  <td><b>Header Text Color: <br/>
                    <span style="color:#ccc;font-size:10px;">(Module Top Header text color)</span></b></td>
                  <td valign="top"><input type="text" name="customsearch_module[header_text_color]" value="<?php if(isset($modules['header_text_color'])){echo $modules['header_text_color'];}?>" class="form-control color" /></td>
                </tr>
                <tr>
                  <td width="400"><b>Make Text: <br/>
                    <span style="color:#ccc;font-size:10px;">(set the dropdownlist make text)</span></b></td>
                  <td valign="top"><input type="text" name="customsearch_module[make_text]" value="<?php if(isset($modules['make_text'])){echo $modules['make_text'];}?>" class="form-control" /></td>
                </tr>
                <tr>
                  <td width="400"><b>Model Text: <br/>
                    <span style="color:#ccc;font-size:10px;">(set the dropdownlist model text)</span></b></td>
                  <td valign="top"><input type="text" name="customsearch_module[model_text]" value="<?php if(isset($modules['model_text'])){echo $modules['model_text'];}?>" class="form-control" /></td>
                </tr>
                <tr>
                  <td width="400"><b>Year Text: <br/>
                    <span style="color:#ccc;font-size:10px;">(set the dropdownlist year text)</span></b></td>
                  <td valign="top"><input type="text" name="customsearch_module[year_text]"  value="<?php if(isset($modules['year_text'])){echo $modules['year_text'];}?>" class="form-control" /></td>
                </tr>
                <tr>
                  <td><b>Make/Model/Year Text Color: <br/>
                    <span style="color:#ccc;font-size:10px;">(Set the make, model, year and engine text color)</span></b></td>
                  <td valign="top"><input type="text" name="customsearch_module[mmy_text_color]" value="<?php if(isset($modules['mmy_text_color'])){echo $modules['mmy_text_color'];}?>" class="form-control color" /></td>
                </tr>
                <tr>
                  <td><b>Enable Module</b></td>
                  <td valign="top"><select name="customsearch_status" id="input-status" class="form-control">
                      <?php if ($customsearch_status) { ?>
                      <option value="1" selected="selected"><?php echo $text_enabled; ?></option>
                      <option value="0"><?php echo $text_disabled; ?></option>
                      <?php } else { ?>
                      <option value="1"><?php echo $text_enabled; ?></option>
                      <option value="0" selected="selected"><?php echo $text_disabled; ?></option>
                      <?php } ?>
                    </select></td>
                </tr>
                </div>
                
              </table>
            </div>
          </div>
          <div id="tab-help" class="tab-pane">
            <div>Email this address <a href="mailto:devsolver@gmail.com">devsolver@gmail.com</a></div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript" src="http://jscolor.com/jscolor/jscolor.js"></script>
<script type="text/javascript">
function showpreview(obj){
		if(obj.value != 'Default'){
			var imgname = '<?php echo HTTP_SERVER; ?>view/javascript/mmy_utility/preview/' + obj.value + '.png';
			jQuery("#prevImg").attr("src",imgname);
		}
		else{
			jQuery("#prevImg").attr("src","");
		}
	}
</script>
<?php echo $footer; ?>