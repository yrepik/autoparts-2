<?php
class ControllerYearYear extends Controller {
	private $error = array();
	public function index() {
		$this->load->language('make/make');

		$this->document->setTitle($this->language->get('heading_title3'));
		
		$this->getList();
	} 
		
	public function getList() {		
		$url = '';
		if (isset($this->request->get['page'])) {
			$url .= '&page=' . $this->request->get['page'];
		}
		
		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}
		
		if (isset($this->session->data['success'])) {
			$data['success'] = $this->session->data['success'];
		
			unset($this->session->data['success']);
		} else {
			$data['success'] = '';
		}
		
		$data['heading_title'] = $this->language->get('heading_title3');
		$data['add_new'] = $this->language->get('add_new');
	
  		$data['breadcrumbs'] = array();

   		$data['breadcrumbs'][] = array(
       		'text'      => $this->language->get('text_home'),
			'href'      => $this->url->link('common/home', 'token=' . $this->session->data['token'], 'SSL'),
      		'separator' => false
   		);
		
		$this->load->model('make/make');
		$data['year'] = array();
		$results = $this->model_make_make->getYearDetails();
		foreach ($results as $result) {		
			$data['year'][] = array(
				'yearid'			=> $result['yearid'],
				'yearname' 		 	=> $result['yearname'],
				'makeid'      		=> $result['makeid'],
				'makename'      	=> $result['makename'],
				'modelid'      		=> $result['modelid'],
				'modelname'      	=> $result['modelname']
			);
		}
		
		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('year/year.tpl', $data));	
  }
}
?>