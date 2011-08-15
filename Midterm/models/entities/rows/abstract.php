<?php

abstract class Abstracted {
    
    protected $columns = array();
    protected $data = array();
    
    public function getData()
    {
        return $this->data;
    }
    
    public function getColumns()
    {
        return $this->columns;
    }
    
    public function save()
    {
        return false;
    }
    
		
    public function __set($column, $value)
    {
        if(in_array($column, $this->columns) && (!isset($this->data[$column]) || $this->data[$column] != $value))
        {
            $this->data[$column] = $value;
        }
    }
}
