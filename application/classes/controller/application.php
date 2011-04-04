<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Application extends Controller_Template {
  
  public $template = 'layouts/application';
  
	public function before(){
	  parent::before();
	  
	  // load default view
    $view_path = implode(Array($this->request->directory(), $this->request->controller(), $this->request->action()), "/");
    $this->template->content = View::factory($view_path);
    
	  $this->template->title = "Kohana ajax deep linking";
	}
	
	public function after(){
	  parent::after();
	  if($this->request->is_ajax()){
	    $this->response->body($this->template->content);
	  }
	}
	
} // End Welcome
