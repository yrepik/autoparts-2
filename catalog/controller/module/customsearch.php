<?php  
class ControllerModulecustomsearch extends Controller {
	public function index($setting) {					
		$this->load->model('make/make');
		$results = $this->model_make_make->getMakeDetails();
		foreach ($results as $result) {		
			$data['make'][] = array(
				'makeid'			=> $result['makeid'],
				'makename' 		 	=> $result['makename']
			);
		}
		
		$data['header_text'] = 'Car/Car Parts Filter';
		$data['header_text_color'] = '333333';
		$data['make_text'] = 'Make:';
		$data['model_text'] = 'Model:';
		$data['year_text'] = 'Year:';
		$data['theme'] = "Default";
		$data['mmy_text_color'] = '333333';
		
		$data['c_make'] = '';
		$data['c_model'] = '';
		$data['c_year'] = '';
		$data['c_model_html'] = '<select onchange="getYearData(this);" id="model" name="model" class="form-control"><option value="-1">Model seçiniz</option>';
		$data['c_year_html'] = ' <select id="year" name="year" class="form-control"><option value="-1">Üretim yılını seçiniz</option>';
		
		/*get all information*/
		/*model drop load*/
		if($data['c_make'] != '' && $data['c_make'] > 0){
			$query_model = $this->db->query("select * from " . DB_PREFIX . "model where makeid='".(int)$data['c_make']."' order by modelname ASC");
			if($query_model->num_rows){
				foreach($query_model->rows as $mResults){
					if($data['c_model'] != '' && $data['c_model'] > 0 && $data['c_model'] == $mResults['modelid']) {
						$data['c_model_html'] .= "<option selected='selected' value='" . $mResults['modelid'] . "'>" . $mResults['modelname'] . "</option>";
					}
					else{
						$data['c_model_html'] .= "<option value='" . $mResults['modelid'] . "'>" . $mResults['modelname'] . "</option>";
					}
				}
			}
		}
		
		/*year drop load*/
		if($data['c_model'] != '' && $data['c_model'] > 0){
			$query_year = $this->db->query("select * from " . DB_PREFIX . "year where makeid='".(int)$data['c_make']."' and modelid='".(int)$data['c_model']."' order by yearname ASC");
			if($query_year->num_rows){
				foreach($query_year->rows as $yResults){
					if($data['c_year'] != '' && $data['c_year'] > 0 && $data['c_year'] == $yResults['yearid']) {
						$data['c_year_html'] .= "<option selected='selected' value='" . $yResults['yearid'] . "'>" . $yResults['yearname'] . "</option>";
					}
					else{
						$data['c_year_html'] .= "<option value='" . $yResults['yearid'] . "'>" . $yResults['yearname'] . "</option>";
					}
				}
			}
		}
		
		/*engine drop load*/
		if($data['c_year'] != '' && $data['c_year'] > 0){
			$query_engine = $this->db->query("select * from " . DB_PREFIX . "engine where makeid='".(int)$data['c_make']."' and modelid='".(int)$data['c_model']."' and yearid='".(int)$data['c_year']."' order by enginename ASC");
			if($query_engine->num_rows){
				foreach($query_engine->rows as $eResults){
					if($data['c_engine'] != '' && $data['c_engine'] > 0 && $data['c_engine'] == $eResults['engineid']) {
						$data['c_engine_html'] .= "<option selected='selected' value='" . $eResults['engineid'] . "'>" . $eResults['enginename'] . "</option>";
					}
					else{
						$data['c_engine_html'] .= "<option value='" . $eResults['engineid'] . "'>" . $eResults['enginename'] . "</option>";
					}
				}
			}
		}
		/**/
		
		$data['c_model_html'] .= "</select>";
		$data['c_year_html'] .= "</select>";
		
		if ($this->config->get('customsearch_module')) { 
			$config_mmy = $this->config->get('customsearch_module');
			if(isset($config_mmy['header_text']) && $config_mmy['header_text'] != ''){
				$data['header_text'] = $config_mmy['header_text'];
			}
			if(isset($config_mmy['header_text_color']) && $config_mmy['header_text_color'] != ''){
				$data['header_text_color'] = $config_mmy['header_text_color'];
			}
			if(isset($config_mmy['template'])){
				$data['theme'] = $config_mmy['template'];
			}
			if(isset($config_mmy['make_text']) && $config_mmy['make_text'] != ''){
				$data['make_text'] = $config_mmy['make_text'];
			}
			if(isset($config_mmy['model_text']) && $config_mmy['model_text'] != ''){
				$data['model_text'] = $config_mmy['model_text'];
			}
			if(isset($config_mmy['year_text']) && $config_mmy['year_text'] != ''){
				$data['year_text'] = $config_mmy['year_text'];
			}
			if(isset($config_mmy['engine_text']) && $config_mmy['engine_text'] != ''){
				$data['engine_text'] = $config_mmy['engine_text'];
			}
			if(isset($config_mmy['mmy_text_color']) && $config_mmy['mmy_text_color'] != ''){
				$data['mmy_text_color'] = $config_mmy['mmy_text_color'];
			}
		}
			
		if (file_exists(DIR_TEMPLATE . $this->config->get('config_template') . '/template/module/custom_search.tpl')) {
			return $this->load->view($this->config->get('config_template') . '/template/module/custom_search.tpl', $data);
		} else {
			return $this->load->view('default/template/module/custom_search.tpl', $data);
		}
	}
}
?>
