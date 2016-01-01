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

use Drivers\Templates\View;
use Models\ListsModel;
use Helpers\Upload\Upload;
use Helpers\Input\Input;

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
		View::render('lists/addnew', $data);

	}

	/**
	*This method creats a mailing list in the database in the database
	*@param null
	*@return void
	*/
	public function postAddnew()
	{
		//upload the submitted file
		$upload_file = Upload::doUpload('list_csv', 'application/storage/mailing_list_csvs');

		//proceed if file upload success
		if($upload_file->success)
		{
			//compose data to save in table
			$list_info = array(
				'name' => Input::get('name'),
				'description' => Input::get('description'),
				'csv_file_path' => $upload_file->upload_path_relative,
			);

			//call model to save this information into the database
			$create_list = ListsModel::create($list_info);
			
		}

	}
	
}

