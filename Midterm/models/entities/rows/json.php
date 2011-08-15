<?php
require_once "abstract.php";
require_once "config.php";

class Json extends Abstracted {
    
    protected $_modified = array();
    protected $_data = array();
    
    public function save()
    {
        $data = json_encode($this->_data);
        return file_put_contents(Config::instance()->path, $data);
    }
}
    
