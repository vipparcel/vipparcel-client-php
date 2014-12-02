<?php

class VP_Request_Account_Personal_Details extends VP_Abstract_Request
{
    public function info_method()
    {
        return self::METHOD_GET;
    }

    public function info_url()
    {
        return '/account/personalInfo/details';
    }

    public function info_params()
    {
        return array(
            'authToken'
        );
    }

}