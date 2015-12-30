<?php namespace Models;

/**
 *This model creates user logs into the database.
 *@author Geoffrey Oliver <geoffrey.oliver2@gmail.com>
 *@copyright 2015 - 2020 Geoffrey Oliver
 *@category Models
 *@package Models\Log
 */
class UsersModel extends Model{
	
	/**
	 *@var string The table name associated with this model
	 */
	protected $table = 'logs';

	/**
	 *This method creates a user log into the database
	 *
	 *@param ...
	 *@return ...
	 */
	public static function create()
	{
		#...do something

	}	


}