<?php namespace Controllers;

/**
 *This class performs use authentication
 *@author Geoffrey Oliver <geoffrey.oliver2@gmail.com>
 *@copyright 2015 - 2020 Geoffrey Oliver
 *@category Controllers
 *@package Controllers\Login
 */

use Drivers\Templates\View;
use Models\UsersModel;
use Helpers\Input\Input;
use Helpers\Session\Session;
use Helpers\Redirect\Redirect;

class LoginController extends BaseController {

	/**
	 *This method loads the login form 
	 *
	 *@param null
	 *@return void
	 */
	public function getIndex()
	{

		//load the login form
		View::render('login/form');

	}

	/**
	 *This method parses user submitted login info 
	 *
	 *@param array $data The user information submitted inthe form data
	 *@return void
	 */
	public function postIndex()
	{
		//prepare user info to send to the database
		$data = array(

			'email' => Input::get('email'),
			'password' => Input::get('password')
		);

		//check if use exists
		$user = UsersModel::checkUser($data);

		//check if user was found
		if( $user ){

			//check if the passwords do not match
			if( $user['password'] != md5($data['password']) ){

				//reload the form with error message
				$data['error'] = 'Invalid Password. Try again!';

				//load the form
				View::render('login/form', $data);
			}

			//password is correct - set user data in session
			Session::set('userInfo', $user);

			//check if this is admin user, //redirect to the appropriate user
			if( $user['user_type'] == 'admin' ) Redirect::to($user['user_type']);

			//else, redirect to the home controller
			Redirect::to('home');

		}

		//user was not found, load login form with error message
		else{

			//compose the error information
			$data['error'] = 'User not found!';

			//reload the form with the error message
			View::render('login/form', $data);

		}

	}
	/**
	 *This method loads the login form 
	 *
	 *@param null
	 *@return void
	 */
	public function getForget()
	{

		//load the forgot password form
		View::render('login/forgot-password-form');

	}

	/**
	 *This method parses user submitted login info 
	 *
	 *@param null
	 *@return void
	 */
	public function postForget()
	{
		echo "<pre>"; print_r(Input::get()); exit();
		//load the login form
		View::render('login/form');

	}
	/**
	 *This method loads the login form 
	 *
	 *@param null
	 *@return void
	 */
	public function getLogout()
	{

		//load the login form
		View::render('login/form');

	}
	
}

