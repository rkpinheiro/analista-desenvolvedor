<?php
namespace App\Q3;

use App\Q3\Model\User;

class MyUserClass
{
	function __construct()
	{

	}

	public function getUsers()
	{
		$users = new User();
		return $users->orderBy('name','desc')
			->get('name');
	}
}