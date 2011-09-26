<?php
require_once "entities/rows/rowset.php";
interface model
{
	function getList();
	function getItem();
	function getTotal();
}

class data_model implements model
{
	protected $state=array();
	protected $total;
	function __construct($state)
	{
		$this->state=$state;
	}
	function getList()
	{
		$data=array();
		$counter=0;
		$rowset = new rowset();
		$rowset = $rowset->getData();
		foreach($rowset as $row)
		{
			if($counter < $this->state['limit'])
			{
				$data[]=$row;
				$this->total=$this->total+1;
			}
			$counter=$counter+1;
		}
		return $data;
	}
	function getItem()
	{
		$rowset=new rowset();
		$row=$rowset->find($this->state['id']);
		return $row;
	}
	function getTotal()
	{
		return $this->total;
	}
}
