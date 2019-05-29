<?php
/**
 * Created by PhpStorm.
 * User: Meits
 * Date: 29-May-19
 * Time: 16:05
 */

namespace App\I\B;


class Order implements OrderInterface
{

    private $product;

    /**
     * Order constructor.
     * @param $order
     */
    public function __construct($product)
    {
        $this->product = $product;
    }

    public function getPaymentMethod()
    {
        return "WebMoney";
    }

    public function getShipmentMethod()
    {
        return "Post";
    }

    public function getDiscount()
    {
        return 50;
    }

    public function getTotalPrice()
    {
        if($this->product) {
            return $this->product->price;
        }
        return null;
    }

    public function getClientComment()
    {
        return "Some Comment";
    }

    public function getClientInfo()
    {
        return "Email, Phone, Address";
    }
}