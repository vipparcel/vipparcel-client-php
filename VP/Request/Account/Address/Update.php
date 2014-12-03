<?php

class VP_Request_Account_Address_Update extends VP_Abstract_Request
{
    public function info_method()
    {
        return self::METHOD_PUT;
    }

    public function info_url()
    {
        return '/account/address/update';
    }

    public function info_params()
    {
        return array(
            'authToken',
            'addressType',
            'firstName',
            'lastName',
            'state',
            'city',
            'postalCode',
            'address',
            'phone',
            'locationType',
            'countryId',
        );
    }

}