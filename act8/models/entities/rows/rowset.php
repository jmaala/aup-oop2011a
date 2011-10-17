<?php

	class rowset
	{
		
		protected $data=array();
		
		function __construct()
		{
			require 'connect.php';

			//$this->data= json_decode(file_get_contents(Config::instance()->path));
			$coll=$table->find();
			foreach($coll as $row)
			{
				$this->data[0][]=$row;
			}
			//var_dump($this->data);
			//die();
		}
		public function find($id)
		{
			foreach($this->data as $row)
			{
				if($row[0]['id']==$id)
					return $row;
			}
		}
		public function add($row)
		{
			require 'connect.php';
			$row=$row->getData();
			#$x=0;
			foreach($this->data as $object)
			{
				if($object[0]['id'] == $row["id"] || $row["id"]=="")
				{
					echo "ID UNAVAILABLE!";
					return 0;
				}
				#$x=$x+1;						
			}	
			$table->insert($row);
		}
		 /*public function save()
		{
			require 'connect.php';
			$table->remove();
			$table->insert($this->data);
			$r_data = json_encode($this->data);
			return file_put_contents(Config::instance()->path, $r_data);
		}*/
		public function getData()
		{
			return $this->data;
		}
		public function update($row)
		{
			foreach($this->data as &$object)
			{
				if($object['id'] == $row["id"])
				{
					$object=$row;
				}						
			}
		}
	}

