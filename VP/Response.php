<?php

class VP_Response {

    protected $_response;

    public function __construct(\Guzzle\Http\Message\Response $response)
    {
        $this->_response = $response;
    }

    public function response_client()
    {
        return $this->_response;
    }

    public function has_errors()
    {
        $result = $this->as_array();
        return $result['statusCode'] >= 400;
    }

    public function get_errors($single = TRUE)
    {
        $result = $this->as_array();
        if ( ! empty($result['error'])) {
            $errors = (array) $result['error'];
            return ($single ? array_shift($errors) : $errors);
        }
        return FALSE;
    }

    public function as_array()
    {
        return json_decode($this->response_client()->getBody(TRUE), TRUE);
    }

    public function as_object()
    {
        return json_decode($this->response_client()->getBody(TRUE), FALSE);
    }
}