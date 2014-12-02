<?php

class VP_Request_Account_Balance_History extends VP_Abstract_Request
{
    public function info_method()
    {
        return self::METHOD_GET;
    }

    public function info_url()
    {
        return '/account/balance/getHistory';
    }

    public function info_params()
    {
        return array(
            'authToken',
            'limit',
            'offset',
            'orderBy'
        );
    }

}