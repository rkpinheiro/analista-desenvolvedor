<?php
namespace App\Q2;

class StoredHeader
{
	protected $header;
	
	function __construct($header)
	{
		$this->header = $header;
	}

	public function checkSession($sessionName)
	{
		$sessionList = ['loggedin'];
		if (in_array($sessionName, $sessionList) && isset($_SESSION[$sessionName]) && $_SESSION[$sessionName]) {
			$this->setHeader($this->header);
			return true;
		}

		return false;
	}
	public function checkCookie($cookieName)
	{
		$cookieList = ['Loggedin'];
		if (in_array($cookieName, $cookieList) && isset($_COOKIE[$cookieName]) && $_COOKIE[$cookieName]) {
			$this->setHeader($this->header);
			return true;
		}

		return false;
	}

	private function setHeader($header)
	{
		return header("Location: {$header}");
	}

}