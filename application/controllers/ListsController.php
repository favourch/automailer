<?php namespace Controllers;

/**
 *This class handles mailing lists management
 *@author Geoffrey Oliver <geoffrey.oliver2@gmail.com>
 *@copyright 2015 - 2020 Geoffrey Oliver
 *@category Controllers
 *@package Controllers\Lists
 *@link https://github.com/gliver-mvc/gliver
 *@license http://opensource.org/licenses/MIT MIT License
 *@version 1.0.1
 */

use Helpers\View\View;
use Models\ListsModel;

class ListsController extends BaseController {

	/**
	 *This method loads the homepage 
	 *
	 *@param null
	 *@return void
	 */
	public function getIndex()
	{
		//get all list names from the database
		$data['lists'] = ListsModel::all();

		//get the ending date today
		View::render('lists/home', $data);

	}

	/**
	 *This loads the page for adding a new list
	 *
	 *@param null
	 *@return void
	 */
	public function getAddnew()
	{
		//get all list names from the database
		$data['lists'] = ListsModel::all();

		//get the ending date today
		View::render('lists/home', $data);

	}
	
}

