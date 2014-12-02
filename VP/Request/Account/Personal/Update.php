<?php

class VP_Request_Account_Personal_Update extends VP_Abstract_Request
{
    public function info_method()
    {
        return self::METHOD_PUT;
    }

    public function info_url()
    {
        return '/account/personalInfo/update';
    }

    public function info_params()
    {
        return array(
            'authToken',
            'firstName',
            'lastName',
            'state',
            'city',
            'postalCode',
            'streetAddress1',
            'streetAddress2',
            'driverLicence',
        );
    }

}