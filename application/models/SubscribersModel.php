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
	protected static $table = 'mailing_subscribers';

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

	/**
	*This method gets and returns this tables column names in an array.
	*@param null
	*@return array The field names in array format
	*/
	public static function getTableColumnNames()
	{
		//set the first row in table to get table fields
		$first_row = static::Query()->from(self::$table)->first();

		//loop through result making the table field names
		foreach($first_row->query_fields() as $key => $field_info)
		{
			//get the column name
			$columns[] = $field_info->name;

		}

		//remove the id field and return
		return array_slice($columns, 1);

	}

}