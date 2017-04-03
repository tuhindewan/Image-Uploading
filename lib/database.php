<?php include_once 'config.php'; ?>


<?php  


/**
* Database class
*/
class Database
{
	public $host   = DB_HOST;
	public $user   = DB_USER;
	public $pass   = DB_PASS;
	public $dbname = DB_NAME;



	public $link;
	public $error;
	public function __construct()
	{
		$this->ConnectDb();
	}

	private function ConnectDb(){
		$this->link = new mysqli($this->host, $this->user, $this->pass, $this->dbname);

		if (!$this->link) {
			$this->error = "Connection Failed....".$this->link->connect_error();
		}
	}

	public function insert($data)
	{
		$insert_row = $this->link->query($data) or die($this->link->error.__LINE__);
		if ($insert_row) {
			return $insert_row;

		}
		else
		{
			return false;
		}
	}

	public function select($data)
	{
		$result = $this->link->query($data) or die($this->link->error.__LINE__);
		if ($result->num_rows > 0) {
			return $result;

		}
		else
		{
			return false;
		}
	}
}


?>