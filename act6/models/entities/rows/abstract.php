<?php
require_once "config.php";

abstract class Abstract_json {
    
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
        $r_data = json_encode($this->data);
        return file_put_contents(Config::instance()->path, $r_data);
    }
    
		
    public function __set($column, $value)
    {
        if(in_array($column, $this->columns) && (!isset($this->data[$column]) || $this->data[$column] != $value))
        {
            $this->data[$column] = $value;
        }
    }
}
