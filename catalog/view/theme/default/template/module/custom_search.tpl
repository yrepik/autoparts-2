<h3 style="color:#<?php echo $header_text_color; ?> !important;"><?php echo $header_text; ?></h3>
<div style="margin-bottom:10px;">
  <div class="text-left">
    <label for="make" style="color:#<?php echo $mmy_text_color; ?> !important;" class="control-label"><?php echo $make_text; ?></label>
    <select onchange="getModel(this);" id="make" name="make" class="form-control">
      <option value="-1">Marka seçiniz</option>
      <?php foreach($make as $makes){ 
	    if($c_make == $makes[makeid]){
	  		echo "<option selected='selected' value='$makes[makeid]'>$makes[makename]</option>";
		}
		else{
			echo "<option value='$makes[makeid]'>$makes[makename]</option>";
		}
	  }?>
    </select>
  </div>
  <div class="text-left">
    <label style="color:#<?php echo $mmy_text_color; ?> !important;" for="model" class="control-label"><?php echo $model_text; ?></label>
    <?php if($c_model != '' && $c_model > 0) { ?>
		 <?php echo $c_model_html; ?>
	<?php } else { ?>
	<select onchange="getYearData(this);" disabled="disabled" id="model" name="model" class="form-control">
      <option value="-1">Model seçiniz</option>
    </select>
	<?php } ?>
  </div>
  <div class="text-left">
    <label style="color:#<?php echo $mmy_text_color; ?> !important;" for="year" class="control-label"><?php echo $year_text; ?></label>
	 <?php if($c_year != '' && $c_year > 0) { ?>
		 <?php echo $c_year_html; ?>
	<?php } else { ?>
    <select onchange="getEngineData(this);" disabled="disabled" id="year" name="year" class="form-control">
      <option value="-1">Üretim yılını seçiniz</option>
    </select>
	<?php } ?>
  </div>
   <div class="col-sm-2 text-left" style='margin-top:2%'>
  	<input type="button" onclick="validation();" class="btn btn-primary" id="button-search" value="Bul" style="margin-left: 200px;margin-top: 10px;">&nbsp;&nbsp;<img id="ajaxloader" style="display:none;" src="image/loder.gif" />
  </div>
  <div style="clear:both;"></div>
</div>
<style type="text/css">
	.ajloader{
		position:absolute;
		margin-top:60px;
		margin-left:50px;
		display:none;
	}
</style>
<script type="text/javascript">
function getModel(e){jQuery("#ajaxloader").show(),$.ajax({type:"GET",url:"admin/utility/getSearchModel.php?mId="+e.value,success:function(a){jQuery("#ajaxloader").hide(),jQuery("#model").html(""),jQuery("#model").html(a),e.value>0?(jQuery("#model").prop("disabled",!1),jQuery("#year").val(-1),jQuery("#year").prop("disabled",!0),jQuery("#engine").val(-1),jQuery("#engine").prop("disabled",!0)):(jQuery("#model").val(-1),jQuery("#model").prop("disabled",!0),jQuery("#year").val(-1),jQuery("#year").prop("disabled",!0),jQuery("#engine").val(-1),jQuery("#engine").prop("disabled",!0))}})}function getYearData(e){jQuery("#ajaxloader").show(),$.ajax({type:"GET",url:"admin/utility/getsearchyear.php?makeid="+$("#make").val()+"&modelid="+e.value,success:function(a){jQuery("#ajaxloader").hide(),jQuery("#year").html(""),jQuery("#year").html(a),e.value>0?(jQuery("#year").prop("disabled",!1),jQuery("#engine").val(-1),jQuery("#engine").prop("disabled",!0)):(jQuery("#year").val(-1),jQuery("#year").prop("disabled",!0),jQuery("#engine").val(-1),jQuery("#engine").prop("disabled",!0))}})}function getEngineData(e){jQuery("#ajaxloader").show(),$.ajax({type:"GET",url:"admin/utility/getsearchengine.php?makeid="+$("#make").val()+"&modelid="+$("#model").val()+"&yearid="+e.value,success:function(a){jQuery("#ajaxloader").hide(),jQuery("#engine").html(""),jQuery("#engine").html(a),e.value>0?jQuery("#engine").prop("disabled",!1):(jQuery("#engine").val(-1),jQuery("#engine").prop("disabled",!0))}})}function validation(){return"-1"==jQuery("#make").val()?(alert("Select Make"),!1):"-1"==jQuery("#model").val()?(alert("Model seçiniz"),!1):"-1"==jQuery("#year").val()?(alert("Üretim yılını seçiniz"),!1):"-1"==jQuery("#engine").val()?(alert("Select Engine"),!1):void gotoSearch()}function gotoSearch(){var e=jQuery("#year").val(),a=jQuery("#make").val(),r=jQuery("#model").val(),l=jQuery("#engine").val();window.location="index.php?route=makemodel/makemodel&syear="+e+"&make="+a+"&model="+r}
</script>
