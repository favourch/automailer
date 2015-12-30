<?php namespace Controllers;

/**
 *This class performs use registration
 *@author Geoffrey Oliver <geoffrey.oliver2@gmail.com>
 *@copyright 2015 - 2020 Geoffrey Oliver
 *@category Controllers
 *@package Controllers\Signup
 */

use Helpers\View\View;
use Models\UsersModel;
use Helpers\Input\Input;
use Helpers\Redirect\Redirect;

class SignupController extends BaseController {

	/**
	 *This method loads the signup form 
	 *
	 *@param null
	 *@return void
	 */
	public function getIndex()
	{

		//load the singup form
		View::render('signup/form');

	}

	/**
	 *This method parses user submitted signup info 
	 *
	 *@param array $data The post submited form data
	 *@return void
	 */
	public function postIndex()
	{
		//prepare the user information for sending to the database
		$data = array(

			'email' => Input::get('email'),
			'password' => md5(Input::get('password')),
			'first_name' => Input::get('first_name'),
			'last_name' => Input::get('last_name'),
			'status' => 'online',
			'user_type' => 'user',
			'activated' => true

		);

		//call model to insert records into the database
		$userCreated = UsersModel::create($data);

		//check if user was created
		if( $userCreated ){

			//redirect user to the login page
			Redirect::to('login');

		}

	}

	
}

