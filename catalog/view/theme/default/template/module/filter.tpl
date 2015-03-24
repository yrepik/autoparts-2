<div class="panel panel-default">
  <div class="panel-heading"><?php echo $heading_title; ?></div>
  <div class="list-group">
    <?php foreach ($filter_groups as $filter_group) { ?>
        <select name="filter[]" id="filter-group<?php echo $filter_group['filter_group_id']; ?>" class="form-control">
                <option name="filter[]" value> <?php echo $filter_group['name']; ?> </option>

        <?php foreach ($filter_group['filter'] as $filter) { ?>
        <?php if (in_array($filter['filter_id'], $filter_category)) { ?>
                <option name="filter[]" value="<?php echo $filter['filter_id']; ?>" selected> <?php echo $filter['name']; ?> </option>
        <?php } else { ?>
                <option name="filter[]" value="<?php echo $filter['filter_id']; ?>"> <?php echo $filter['name']; ?> </option>
        <?php } ?>
        <?php } ?>
        </select>
   
    <?php } ?>
  </div>
  <div class="panel-footer text-right">
    <button type="button" id="button-filter" class="btn btn-primary"><?php echo $button_filter; ?></button>
  </div>
</div>
<script type="text/javascript"><!--
$('#button-filter').on('click', function() {
        filter = [];

        $('option[name^=\'filter\']:selected').each(function(element) {
                console.log(this.value);
                filter.push(this.value);
        });
	
	if (document.URL.indexOf("anasayfa") != -1) {
		location = '/tum-urunler&filter=' + filter.join(',');
	} else {
		location = '<?php echo $action; ?>&filter=' + filter.join(',');
	}
});
//--></script>
 
