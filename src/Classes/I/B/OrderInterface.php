<?php
/**
 * Created by PhpStorm.
 * User: Meits
 * Date: 29-May-19
 * Time: 15:58
 */

namespace App\I\B;


interface OrderInterface
{
     function getPaymentMethod();
     function getShipmentMethod();
     function getDiscount();
     function getTotalPrice();
     function getClientComment();
     function getClientInfo();
}