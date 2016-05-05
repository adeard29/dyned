<?PHP
	class biodata extends CI_Model
	{
		//Property
		
		private $ID;
		private $user_id;
		private $alamat;
		private $telepon;
		
		public function set_ID($value)
		{
			$this->ID = $value;
		}
		public function get_ID()
		{
			return $this->ID;
		} 

		public function set_user_id($value)
		{
			$this->user_id= $value;
		}
		public function get_user_id()
		{
			return $this->user_id;
		}

		public function set_alamat($value)
		{
			$this->alamat= $value;
		}
		public function get_alamat()
		{
			return $this->alamat;
		}

		public function set_telepon($value)
		{
			$this->telepon= $value;
		}
		public function get_telepon()
		{
			return $this->telepon;
		}
	
		//Method
		
		public function view_biodata()
		{
			$sql = "SELECT * 
					FROM biodata";
			
			return $this->db->query($sql);
		}
	}