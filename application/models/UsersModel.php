<?php namespace Models;

/**
 *This model handles all user related queries.
 *@author Geoffrey Oliver <geoffrey.oliver2@gmail.com>
 *@copyright 2015 - 2020 Geoffrey Oliver
 *@category Models
 *@package Models\Users
 */
class UsersModel extends Model{
	
	/**
	 *@var string The table name associated with this model
	 */
	protected static $table = 'users';

	/**
	 *This method creates a user into the database
	 *
	 *@param array $data The user data in an array
	 *@return void
	 */
	public static function create($data)
	{
		//imsert records into the database
		$inserted = static::Query()->from(self::$table)->save($data);

		//return the boolean for true|false
		return $inserted;

	}	

	/**
	 *This method checks if a user exists in the database
	 *
	 *@param array $data The user email and password pair to check
	 *@return array with user info on success or Boolean False on failure
	 */
	public static function checkUser($data)
	{
		//compose query to check for this user
		$user = static::Query()->from(self::$table)->where('email = ?', $data['email'])->all();

		//check if this user was found
		if( $user ){

			//return the first use found
			return $user[0];

		}

		//user not found 
		else{

			//return boolean false
			return false;

		}
		
	}	

	/**
	 *This function method does what you want it to do and has to be static
	 *
	 *@param ...
	 *@return ...
	 */
	public static function update()
	{
		#...do something

	}	

	/**
	 *This function method does what you want it to do and has to be static
	 *
	 *@param ...
	 *@return ...
	 */
	public static function delete()
	{
		#...do something

	}

	/**
	 *This function method does what you want it to do and has to be static
	 *
	 *@param ...
	 *@return ...
	 */
	public static function all()
	{
		//perform query to get list of all users
		$users = static::Query()->from(self::$table)->all();

		//return the rows found
		return $users;

	}	


}