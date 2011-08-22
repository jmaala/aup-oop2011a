<?php

final class Config {
    
    private $config;
    
    public static function instance()
    {
        static $instance;
        
        if(!($instance instanceof Config))
        {
            $instance = new Config();
        }
        
        return $instance;
    }
    
    function __get($key)
    {
        if(empty($this->_config))
        {
            $config = file_get_contents(realpath(dirname(__FILE__)).'/config.json');
            $this->_config = json_decode($config);
        }
        
        if(isset($this->_config->$key))
        {
            return $this->_config->$key;
        }
        
        return null;
    }
}
