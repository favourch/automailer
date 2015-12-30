<?php namespace Controllers;

/**
 *This class loads the admin homepage.
 *@author Geoffrey Oliver <geoffrey.oliver2@gmail.com>
 *@copyright 2015 - 2020 Geoffrey Oliver
 *@category Controllers
 *@package Controllers\Admin
 */

use Helpers\View\View;
use Models\UsersModel;

class AdminController extends BaseController {

	/**
	 *This method loads the admin  homepage 
	 *
	 *@param null
	 *@return void
	 */
	public function getIndex()
	{
		// get a list of all  users fromt he database
		$data['users'] = UsersModel::all();

		//get the ending date today
		View::render('admin/home', $data);

	}

}