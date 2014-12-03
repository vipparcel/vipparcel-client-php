<?php

abstract class VP_Abstract_Request {

    const METHOD_POST = 'post';
    const METHOD_GET = 'get';
    const METHOD_PUT = 'put';
    const METHOD_DELETE = 'delete';

    protected $_item_id;
    protected $_params = array();

    public function __construct($item_id = NULL)
    {
        $this->_item_id = $item_id;
    }

    public function set_params(array $params = NULL)
    {
        $this->_params = $params;
        return $this;
    }

    public function get_params()
    {
        $info_params = $this->info_params();
        foreach ($this->_params as $key => $value) {
            if ( ! in_array($key, $info_params)) {
                throw new VP_Exception('Unknown parameter "'.$key.'" for '.get_called_class());
            }
        }

        return $this->_params;
    }

    public function get_url()
    {
        $url = $this->info_url();
        if ($this->_item_id !== NULL) {
            return $url.= '/'.$this->_item_id;
        }
        return $url;
    }

    public function get_method()
    {
        return $this->info_method();
    }

    abstract public function info_params();
    abstract public function info_url();
    abstract public function info_method();

}