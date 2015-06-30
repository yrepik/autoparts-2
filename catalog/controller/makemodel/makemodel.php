<?php 
class ControllerMakemodelMakemodel extends Controller { 	
	public function index() { 
		
		$this->load->model('makemodel/makemodel');
				
		$this->load->model('tool/image'); 
		
		if (isset($this->request->get['syear'])) {
			$year = $this->request->get['syear'];
		} else {
			$year = '';
		}
		
		if (isset($this->request->get['make'])) {
			$make = $this->request->get['make'];
		} else {
			$make = '';
		} 
		
		if (isset($this->request->get['model'])) {
			$model = $this->request->get['model'];
		} else {
			$model = '';
		}
		
		$url = '';
		
		$data['products'] = array();
		
		if (isset($this->request->get['syear']) && isset($this->request->get['make']) && isset($this->request->get['model'])) {
			$data_filter = array(
				'year'   	=> $year, 
				'make'   	=> $make, 
				'model'  	=> $model
			);
								
			$product_total = $this->model_makemodel_makemodel->getTotalMMYProducts($data_filter);
								
			$results = $this->model_makemodel_makemodel->getProducts($data_filter);
			if($results){			
				foreach ($results as $result) {
					if ($result['image']) {
						$image = $this->model_tool_image->resize($result['image'], $this->config->get('config_image_product_width'), $this->config->get('config_image_product_height'));
					} else {
						$image = false;
					}
					
					if (($this->config->get('config_customer_price') && $this->customer->isLogged()) || !$this->config->get('config_customer_price')) {
						$price = $this->currency->format($this->tax->calculate($result['price'], $result['tax_class_id'], $this->config->get('config_tax')));
					} else {
						$price = false;
					}
					
					if ((float)$result['special']) {
						$special = $this->currency->format($this->tax->calculate($result['special'], $result['tax_class_id'], $this->config->get('config_tax')));
					} else {
						$special = false;
					}	
					
					if ($this->config->get('config_tax')) {
						$tax = $this->currency->format((float)$result['special'] ? $result['special'] : $result['price']);
					} else {
						$tax = false;
					}				
					
					if ($this->config->get('config_review_status')) {
						$rating = (int)$result['rating'];
					} else {
						$rating = false;
					}
				
					$data['products'][] = array(
						'product_id'  	=> $result['product_id'],
						'thumb'       	=> $image,
						'name'        	=> $result['name'],
						'description' 	=> utf8_substr(strip_tags(html_entity_decode($result['description'], ENT_QUOTES, 'UTF-8')), 0, 100) . '..',
						'price'       	=> $price,
						'special'     	=> $special,
						'tax'         	=> $tax,
						'rating'      	=> $result['rating'],
						'reviews'     	=> sprintf($this->language->get('text_reviews'), (int)$result['reviews']),
						'href'        	=> $this->url->link('product/product', $url . '&product_id=' . $result['product_id'])
					);
				}
			}	
		}
		
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['column_right'] = $this->load->controller('common/column_right');
		$data['content_top'] = $this->load->controller('common/content_top');
		$data['content_bottom'] = $this->load->controller('common/content_bottom');
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');
		$data['breadcrumbs'] = array();
		
		$this->load->language('makemodel/makemodel');

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/home')
		);
					
		$data['heading_title'] = $this->language->get('text_search');
		
		
		$data['text_empty'] = $this->language->get('text_empty');
    	$data['text_critea'] = $this->language->get('text_critea');
    	$data['text_search'] = $this->language->get('text_search');
		$data['text_keyword'] = $this->language->get('text_keyword');
		$data['text_category'] = $this->language->get('text_category');
		$data['text_sub_category'] = $this->language->get('text_sub_category');
		$data['text_quantity'] = $this->language->get('text_quantity');
		$data['text_manufacturer'] = $this->language->get('text_manufacturer');
		$data['text_model'] = $this->language->get('text_model');
		$data['text_price'] = $this->language->get('text_price');
		$data['text_tax'] = $this->language->get('text_tax');
		$data['text_points'] = $this->language->get('text_points');
		$data['text_compare'] = sprintf($this->language->get('text_compare'), (isset($this->session->data['compare']) ? count($this->session->data['compare']) : 0));
		$data['text_display'] = $this->language->get('text_display');
		$data['text_list'] = $this->language->get('text_list');
		$data['text_grid'] = $this->language->get('text_grid');		
		$data['text_sort'] = $this->language->get('text_sort');
		$data['text_limit'] = $this->language->get('text_limit');
		$data['button_continue'] = $this->language->get('button_continue');
		
		$data['entry_search'] = $this->language->get('entry_search');
    	$data['entry_description'] = $this->language->get('entry_description');
		  
    	$data['button_search'] = $this->language->get('button_search');
		$data['button_cart'] = $this->language->get('button_cart');
		$data['button_wishlist'] = $this->language->get('button_wishlist');
		$data['button_compare'] = $this->language->get('button_compare');

		$data['compare'] = $this->url->link('product/compare');
		
		if (file_exists(DIR_TEMPLATE . $this->config->get('config_template') . '/template/makemodel/makemodel.tpl')) {
			$this->response->setOutput($this->load->view($this->config->get('config_template') . '/template/makemodel/makemodel.tpl', $data));
		} else {
			$this->response->setOutput($this->load->view('default/template/makemodel/makemodel.tpl', $data));
		}
  	}
}
?>