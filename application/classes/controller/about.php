<?php defined('SYSPATH') or die('No direct script access.');

class Controller_About extends Controller_Application {

	public function action_index()
	{
	  $this->template->title .= " - About";
	  $this->template->content = View::factory("about");
	}

} // End Home
