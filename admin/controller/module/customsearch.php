<?php
class ControllerModuleCustomSearch extends Controller {
	private $error = array(); 
	
	public function index() {   
		$this->load->language('module/customsearch');

		$this->document->setTitle($this->language->get('heading_title'));
		
		$this->load->model('setting/setting');
				
		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {

			$this->model_setting_setting->editSetting('customsearch', $this->request->post);		
					
			$this->session->data['success'] = $this->language->get('text_success');
						
			$this->response->redirect($this->url->link('extension/module', 'token=' . $this->session->data['token'], 'SSL'));
		}
				
		$data['heading_title'] = $this->language->get('heading_title');
		$data['news'] = $this->language->get('new_entry');
		$data['text_enabled'] = $this->language->get('text_enabled');
		$data['text_disabled'] = $this->language->get('text_disabled');
		$data['text_content_top'] = $this->language->get('text_content_top');
		$data['text_content_bottom'] = $this->language->get('text_content_bottom');		
		$data['text_column_left'] = $this->language->get('text_column_left');
		$data['text_column_right'] = $this->language->get('text_column_right');
		$data['text_column_slide'] = $this->language->get('text_column_slide');
				
		$data['entry_banner'] = $this->language->get('entry_banner');
		$data['entry_dimension'] = $this->language->get('entry_dimension'); 
		$data['entry_layout'] = $this->language->get('entry_layout');
		$data['entry_position'] = $this->language->get('entry_position');
		$data['entry_status'] = $this->language->get('entry_status');
		$data['entry_sort_order'] = $this->language->get('entry_sort_order');
		
		$data['button_save'] = $this->language->get('button_save');
		$data['button_cancel'] = $this->language->get('button_cancel');
		$data['button_add_module'] = $this->language->get('button_add_module');
		$data['button_remove'] = $this->language->get('button_remove');
		
 		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}
		
		if (isset($this->error['dimension'])) {
			$data['error_dimension'] = $this->error['dimension'];
		} else {
			$data['error_dimension'] = array();
		}
		
  		$data['breadcrumbs'] = array();

   		$data['breadcrumbs'][] = array(
       		'text'      => $this->language->get('text_home'),
			'href'      => $this->url->link('common/home', 'token=' . $this->session->data['token'], 'SSL'),
      		'separator' => false
   		);

   		$data['breadcrumbs'][] = array(
       		'text'      => $this->language->get('text_module'),
			'href'      => $this->url->link('extension/module', 'token=' . $this->session->data['token'], 'SSL'),
      		'separator' => ' :: '
   		);
		
   		$data['breadcrumbs'][] = array(
       		'text'      => $this->language->get('heading_title'),
			'href'      => $this->url->link('module/customsearch', 'token=' . $this->session->data['token'], 'SSL'),
      		'separator' => ' :: '
   		);
		
		$data['action'] = $this->url->link('module/customsearch', 'token=' . $this->session->data['token'], 'SSL');
		
		$data['cancel'] = $this->url->link('extension/module', 'token=' . $this->session->data['token'], 'SSL');
		
		$data['modules'] = array();
		
		if (isset($this->request->post['customsearch_module'])) {
			$data['modules'] = $this->request->post['customsearch_module'];
		} elseif ($this->config->get('customsearch_module')) { 
			$data['modules'] = $this->config->get('customsearch_module');
		}
		
		if (isset($this->request->post['customsearch_status'])) {
			$data['customsearch_status'] = $this->request->post['customsearch_status'];
		} else {
			$data['customsearch_status'] = $this->config->get('customsearch_status');
		}
		
		/*Settings work here*/
		//$data['mmy_config'] = array();
		
		/*if (isset($this->request->post['mmy_settings'])) {
			$data['mmy_config'] = $this->request->post['mmy_settings'];
		} elseif ($this->config->get('mmy_settings')) { 
			$data['mmy_config'] = $this->config->get('mmy_settings');
		}*/
			
						
		$this->load->model('design/layout');
		
		$data['layouts'] = $this->model_design_layout->getLayouts();
		
		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('module/customsearch.tpl', $data));
	}
	
	protected function validate() {
		if (!$this->user->hasPermission('modify', 'module/customsearch')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		return !$this->error;
	}
}
?>