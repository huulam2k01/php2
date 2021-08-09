<?php
require_once "model/CustomerModel.php";
class CustomerController
{
    //phuong thuc
    static function viewCustomer()
    {
        $customer = new CustomerModel();

        require_once 'views/';
    }
}
