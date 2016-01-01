<?php namespace Controllers;

/**
 *This class handles user management.
 *@author Geoffrey Oliver <geoffrey.oliver2@gmail.com>
 *@copyright 2015 - 2020 Geoffrey Oliver
 *@category Controllers
 *@package Controllers\Users
 */

use Drivers\Templates\View;
use Models\UsersModel;

class HomeController extends BaseController {

	/**
	 *This method loads the users and admin  homepage 
	 *
	 *@param null
	 *@return void
	 */
	public function getIndex()
	{

		//get the ending date today
		View::render('admin/home');

	}	

	/**
	 *This method loads the users and admin  homepage 
	 *
	 *@param null
	 *@return void
	 */
	public function postIndex()
	{

		//get the ending date today
		View::render('admin/home');

	}	

	/**
	 *This method loads the users and admin  homepage 
	 *
	 *@param null
	 *@return void
	 */
	public function getUpdate()
	{

		//get the ending date today
		View::render('admin/home');

	}	

	/**
	 *This method loads the users and admin  homepage 
	 *
	 *@param null
	 *@return void
	 */
	public function postUpdate()
	{

		//get the ending date today
		View::render('admin/home');

	}

	/**
	 *This method loads the users and admin  homepage 
	 *
	 *@param null
	 *@return void
	 */
	public function getDelete()
	{

		//get the ending date today
		View::render('admin/home');

	}	

	/**
	 *This method loads the users and admin  homepage 
	 *
	 *@param null
	 *@return void
	 */
	public function postDelete()
	{

		//get the ending date today
		View::render('admin/home');

	}	


}