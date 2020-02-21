<?php

class VenuesController extends MvcPublicController {
	public function show() {
	    $object = $this->model->find_by_id($this->params['id'], array(
	      'includes' => array('Recipe')
	    ));
		// print_r($object);
		// wp_die();
	    $this->set('object', $object);
	  }
}
