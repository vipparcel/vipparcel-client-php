<?php

class VP_Request_Shipping_Pickup_Request extends VP_Abstract_Request
{
    public function info_method()
    {
        return self::METHOD_POST;
    }

    public function info_url()
    {
        return '/shipping/pickup/request';
    }

    public function info_params()
    {
        return array(
            'authToken',
            'address', // @TODO array
            'packages',
            'packageLocation',
            'specialInstructions',
        );
    }

}