<?php namespace Models;

/**
 *This model handles all queries to the mailing list.
 *@author Geoffrey Oliver <geoffrey.oliver2@gmail.com>
 *@copyright 2015 - 2020 Geoffrey Oliver
 *@category Models
 *@package Models\Lists
 */
class ListsModel extends Model{
	
	/**
	 *@var string The table name associated with this model
	 */
	protected $table = 'mailing_lists';

	/**
	 *This method returns all lists names from the database
	 *
	 *@param null
	 *@return ...
	 */
	public static function all()
	{
		#...do something

	}	


}