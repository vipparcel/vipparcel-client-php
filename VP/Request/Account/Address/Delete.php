<?php

class VP_Request_Account_Address_Delete extends VP_Abstract_Request
{
    public function info_method()
    {
        return self::METHOD_DELETE;
    }

    public function info_url()
    {
        return '/account/address/delete';
    }

    public function info_params()
    {
        return array(
            'authToken'
        );
    }

}