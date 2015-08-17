<?php
include_once('globals.php');

class dbmanager {

	private $con=null;

	static private $instance=null;

	private function __construct(){}

	public static function getInstance(){
		if(self::$instance==null)
		{
			self::$instance=new dbmanager();
		}
		return self::$instance;
	}

	public function connectToDB(){
		$this->con = mysql_connect(config::getDBServer(), config::getDBUser(), config::getDBPwd());
		if (!$this->con){
			die('Could not connect: ' . mysql_error());
		}
		mysql_set_charset('utf8');
		mysql_select_db(config::getDBName(), $this->con);
		mysql_query("BEGIN");
	}

	public function disconnectFromDB(){
		mysql_query("COMMIT");
		mysql_close($this->con);
	}

	public function executeQuery($sql){
		$result = mysql_query($sql);
		if($result == false){
			mysql_query("ROLLBACK");
			//throw new Exception('Fallo al realizar la operación en la base de datos: '.mysql_error());
		}
		return $result;
	}
}
?>
