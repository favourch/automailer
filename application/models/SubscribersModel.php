<?php namespace Models;

/**
 *This model handles all queries to the subscribers list.
 *@author Geoffrey Oliver <geoffrey.oliver2@gmail.com>
 *@copyright 2015 - 2020 Geoffrey Oliver
 *@category Models
 *@package Models\Subscribers
 */
class SubscribersModel extends Model{
	
	/**
	 *@var string The table name associated with this model
	 */
	protected $table = 'mailing_subscribers';

	/**
	 *This method returns all lists names from the database
	 *
	 *@param null
	 *@return array The rows of all lists in array
	 */
	public static function all()
	{
		//get the array of lists\
		$lists = static::Query()->from(self::$table)->all();

		return $lists;
		
	}	


}