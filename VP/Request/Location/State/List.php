<?php

class VP_Request_Location_State_List extends VP_Abstract_Request
{
    public function info_method()
    {
        return self::METHOD_GET;
    }

    public function info_url()
    {
        return '/location/state/getList';
    }

    public function info_params()
    {
        return array(
            'authToken'
        );
    }

}