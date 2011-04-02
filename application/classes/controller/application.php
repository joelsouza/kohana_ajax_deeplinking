<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Application extends Controller_Template {
  
	public function before(){
	  parent::before();
	  $this->template->title = "Kohana ajax deep linking";
	}
	
	public function after(){
	  parent::after();
	  if($this->request->is_ajax()){
	    $this->response->body($this->template->content);
	  }
	}
	
} // End Welcome
