<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Contact extends Controller_Application {

	public function action_index()
	{
	  $this->template->title .= " - Contact";
	  $this->template->content = View::factory("contact");
	}

} // End Home
