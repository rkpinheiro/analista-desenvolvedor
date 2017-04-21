<?php
namespace App\Q1;

class PrintHundred
{
	
	function __construct() { }

	public function printCustomHundred()
	{
		$limit = 100;
		$result = [];
		for ($i=1; $i <= $limit; $i++) {
			$value = '';
			if ($i % 3 == 0) {
			 	$value .= 'Fizz';
			} 
			if ($i % 5 == 0) {
			 	$value .= 'Bizz';
			}
			if (empty($value)) {
				$value = $i;
			}
			array_push($result, $value);
		}

		return $result;
	}

}