<?PHP
	class karyawan extends CI_Model
	{
		//Property
		
		private $ID;
		private $email;
		private $username;
		private $password;
		
		public function set_ID($value)
		{
			$this->ID = $value;
		}
		public function get_ID()
		{
			return $this->ID;
		} 

		public function set_email($value)
		{
			$this->email= $value;
		}
		public function get_email()
		{
			return $this->email;
		}

		public function set_username($value)
		{
			$this->username= $value;
		}
		public function get_username()
		{
			return $this->username;
		}

		public function set_password($value)
		{
			$this->password= $value;
		}
		public function get_password()
		{
			return $this->password;
		}
	
		//Method
		
		public function view_karyawan()
		{
			$sql = "SELECT * 
					FROM user";
			
			return $this->db->query($sql);
		}
	}