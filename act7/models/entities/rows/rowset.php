<?php


	class rowset
	{
		protected $data;
		
		function __construct()
		{
			$this->data= json_decode(file_get_contents(Config::instance()->path));
		}
		public function find($id)
		{
			foreach($this->data as $row)
			{
				if($row->id==$id)
					return $row;
			}
		}
		public function add($row)
		{
			$row=$row->getData();
			foreach($this->data as $object)
			{
				if($object->id == $row["id"] || $row["id"]=="")
				{
					echo "ID UNAVAILABLE!";
					return 0;
				}						
			}	
			$this->data[]=$row;
		}
		 public function save()
		{
			$r_data = json_encode($this->data);
			return file_put_contents(Config::instance()->path, $r_data);
		}
		public function getData()
		{
			return $this->data;
		}
		public function update($row)
		{
			foreach($this->data as &$object)
			{
				if($object->id == $row["id"])
				{
					$object=$row;
				}						
			}
		}
	}

