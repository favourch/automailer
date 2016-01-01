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
use Helpers\Redirect\Redirect;
use Helpers\Path\Path;
use Models\SubscribersModel;
use Helpers\ArrayHelper\ArrayHelper;

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
		//get the ending date today
		View::render('lists/addnew');

	}

	/**
	*This method creats a mailing list in the database in the database
	*@param null
	*@return void
	*/
	public function postAddnew()
	{
		//upload the submitted file
		$upload_file = Upload::doUpload('list_csv', 'application/storage/mailing_list_csvs/');

		//proceed if file upload success
		if($upload_file->success === true)
		{
			//compose data to save in table
			$list_info = array(
				'name' => Input::get('list_name'),
				'description' => Input::get('list_description'),
				'recipients' => 0,
				'campaigns' => 0,
				'csv_file_path' => $upload_file->upload_path_relative,
			);

			//call model to save this information into the database
			$create_list = ListsModel::create($list_info);

			if($create_list->lastInsertId())			{

				//redirect to manage new list page
				$data = array('list_id'=>$create_list->lastInsertId());

				Redirect::with($data)->to('lists/managenew');

			}

		}

	}

	/**
	*This method loads a csv file content into the database for a new list
	*
	*@param null
	*@return void
	*/
	public function getManagenew()
	{
		//get the list id to manage
		$list_id = Input::get('list_id');

		//get information about this list
		$list_info = ListsModel::getById($list_id);

		//open the csv file
		$full_path = Path::base() . $list_info[0]['csv_file_path'];

		//get the first 10 lines
		$file_pointer = fopen($full_path, 'r');

		$itr = 5;

		while ( ! feof($file_pointer)) 
		{
			if($itr == 0) break;

			//read data into csv
			$data['list_data'][] = fgetcsv($file_pointer);

			--$itr;

		}

		//get the column list
		$data['column_list'] = $data['list_data'][0];

		//get table fielnames
		$data['table_fields'] = SubscribersModel::getTableColumnNames();

		//lod the view page with this information
		View::render('lists/managenew', $data);

	}

	/**
	*This method new list info into the database
	*@param null
	*@return void
	*/
	public function postManagenew()
	{
		echo "<pre>";print_r(ArrayHelper::clean(Input::get())->get());exit();

	}
	
}

