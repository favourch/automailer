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
	protected static $table = 'mailing_lists';

	/**
	 *This method returns all lists names from the database
	 *
	 *@param null
	 *@return ...
	 */
	public static function all()
	{
		$list = static::Query()->from(self::$table)->all();

		//return the lists found
		return $list->result();

	}	

	/**
	*This method creates a mailing list into the directory
	*@param array $list_info The array with the list info to save
	*@return int The list id after creation
	*/
	public static function create($list_info)
	{
		//call method to save info in the database
		$save_list = static::Query()->from($self::$table)->save($list_info);

		//return the list_id
		return $save_list->lastInsertId();

	}


}