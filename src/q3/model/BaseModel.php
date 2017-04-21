<?php 
namespace App\Q3\Model;

use DatabaseConnection as DB;

class BaseModel extends AnotherClass
{
	protected $db;
	protected $query;
	protected $table;

	function __construct(DB $db)
	{
		$this->db = $db;
		$this->query = "select * from {$table} "
	}

	public function get()
	{
		if ($result = $this->db->query($this->query)) {
			return $result; 
		}
		return false;
	}

	public function orderBy($field, $order = 'desc')
	{
		$this->query .= "order by {$field} {$order}" 
		return $this;
	}
}