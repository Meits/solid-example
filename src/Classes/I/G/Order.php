<?php
/**
 * Created by PhpStorm.
 * User: Meits
 * Date: 29-May-19
 * Time: 16:56
 */

namespace App\I\G;


class Order implements Orderable, PaymentInterface, ShipmentInterface, DiscountInterface
{

    function getTotalPrice()
    {
        // TODO: Implement getTotalPrice() method.
    }

    function getClientInfo()
    {
        // TODO: Implement getClientInfo() method.
    }

    function getDiscount()
    {
        // TODO: Implement getDiscount() method.
    }

    function getPaymentMethod()
    {
        // TODO: Implement getPaymentMethod() method.
    }

    function getShipmentMethod()
    {
        // TODO: Implement getShipmentMethod() method.
    }
}