VIPparcel APIs Client Library for PHP
====================

## Requirements ##
* [PHP 5.3.3 or higher](http://www.php.net/)
* [PHP cURL extension] (http://php.net/manual/en/book.curl.php)
* [PHP JSON extension](http://php.net/manual/en/book.json.php)
* [Composer] (https://github.com/composer/composer)

## Developer Documentation ##
https://vipparcel.com/docs/api/

## Dependence ##
* [Guzzle HTTP client] (https://github.com/guzzle/guzzle)

## Installation ##
Run the Composer command

```bash
composer require "vipparcel/client" 
```

After installing, you need to require Composer's autoloader:

```php
require 'vendor/autoload.php';
```

## Examples ##
```php
$client = new VP_Client();
$client->auth_token('KEY');
$client->is_test(TRUE); // production or test request (default: production)
        
$request = new VP_Request_Account_Balance_History();
$request->set_params(array('limit' => 10, 'orderBy' => array('created' => 'ASC')));

$client->request($request); // set request object

$result = $client->execute(); // send request (return object VP_Response)
print_r($result->has_errors()); // boolean
print_r($result->get_errors()); // boolean false || array
print_r($result->as_object()); // result as stdClass object
print_r($result->as_array()); // result as array
```

```php
$client = new VP_Client();
$client->auth_token('KEY');
$client->request(new VP_Request_Shipping_Label_Info(144241)); // with item id
$result = $client->execute();
...
```

## Request Objects ##

Account > Address
* [POST] VP_Request_Account_Address_Create
* [GET] VP_Request_Account_Address_List
* [GET] VP_Request_Account_Address_Info
* [PUT] VP_Request_Account_Address_Update
* [DELETE] VP_Request_Account_Address_Delete

Account > Balance
* [GET] VP_Request_Account_Balance_Current
* [GET] VP_Request_Account_Balance_History

Account > Personal Info
* [GET] VP_Request_Account_Personal_Details
* [PUT] VP_Request_Account_Personal_Update

Shipping > Label
* [GET] VP_Request_Shipping_Label_Info
* [GET] VP_Request_Shipping_Label_List
* [GET] VP_Request_Shipping_Label_Images
* [POST] VP_Request_Shipping_Label_Calculate
* [POST] VP_Request_Shipping_Label_Print

Shipping > Pickup
* [GET] VP_Request_Shipping_Pickup_List
* [GET] VP_Request_Shipping_Pickup_Info
* [POST] VP_Request_Shipping_Pickup_Request

Shipping > Refund
* [GET] VP_Request_Shipping_Refund_Info
* [GET] VP_Request_Shipping_Refund_List
* [GET] VP_Request_Shipping_Refund_Labels
* [POST] VP_Request_Shipping_Refund_Request

Shipping > Scan Form
* [GET] VP_Request_Shipping_Scan_Info
* [GET] VP_Request_Shipping_Scan_List
* [GET] VP_Request_Shipping_Scan_Labels
* [POST] VP_Request_Shipping_Scan_Create

Shipping > Tracking
* [GET] VP_Request_Shipping_Tracking_Info

Location > Country
* [GET] VP_Request_Location_Country_List

Location > State
* [GET] VP_Request_Location_State_List