<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Home extends Controller_Application {

	public function action_index()
	{
	  $this->template->title .= " - Home";
	  $this->template->content = View::factory("home");
	}

} // End Home
