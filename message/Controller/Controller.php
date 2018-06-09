<?php 
/**
* 
*/
class Controller
{
	public function display($action)
	{
		include ('./'.$action.'.php');
	}
}