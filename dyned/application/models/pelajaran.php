<?PHP
	class pelajaran extends CI_Model
	{
		//Property
		
		private $ID;
		private $user_id;
		private $pelajaran;
		
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

		public function set_pelajaran($value)
		{
			$this->pelajaran= $value;
		}
		public function get_pelajaran()
		{
			return $this->pelajaran;
		}
	
		//Method
		
		public function view_pelajaran()
		{
			$sql = "SELECT * 
					FROM pelajaran";
			
			return $this->db->query($sql);
		}
	}