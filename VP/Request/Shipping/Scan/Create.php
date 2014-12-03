<?php

class VP_Request_Shipping_Scan_Create extends VP_Abstract_Request
{
    public function info_method()
    {
        return self::METHOD_POST;
    }

    public function info_url()
    {
        return '/shipping/scanForm/create';
    }

    public function info_params()
    {
        return array(
            'authToken',
            'labels',
            'address', // @TODO check array
        );
    }

}