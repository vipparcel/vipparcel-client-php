<?php

class VP_Request_Shipping_Label_Mailclasses extends VP_Abstract_Request
{
    public function info_method()
    {
        return self::METHOD_GET;
    }

    public function info_url()
    {
        return '/shipping/label/mailClasses';
    }

    public function info_params()
    {
        return array(
            'authToken'
        );
    }

}