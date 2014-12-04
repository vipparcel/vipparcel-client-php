<?php

class VP_Request_Shipping_Label_Calculate extends VP_Abstract_Request
{

    public function is_international()
    {
        if (empty($this->_params['mailClass'])) {
            throw new VP_Exception('Required parameter not passed: mailClass');
        }
        return (strpos($this->_params['mailClass'], 'International') !== FALSE);
    }

    public function info_method()
    {
        return self::METHOD_POST;
    }

    public function info_url()
    {
        return '/shipping/label/calculate';
    }

    public function get_params()
    {
        // @TODO deprecated
        $this->_params['labelType'] = ($this->is_international() ? 'international' : 'domestic');
        return parent::get_params();
    }


    public function info_params()
    {
        $international = array(
            'authToken',
            'mailClass',
            'weightOz',
            'insuredValue',
            'senderPostalCode',
            'countryId',
            'labelType',
        );

        $domestic = array(
            'authToken',
            'mailClass',
            'weightOz',
            'insuredValue',
            'service',
            'senderPostalCode',
            'recipientPostalCode',
            'dimensionalWeight', // @TODO array
            'labelType',
        );

        return ($this->is_international() ? $international : $domestic);

    }

}