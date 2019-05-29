<?php
/**
 * Created by PhpStorm.
 * User: Meits
 * Date: 29-May-19
 * Time: 16:06
 */

namespace App\I\B;


class QuickOrder implements OrderInterface
{

    private $product;

    /**
     * QuickOrder constructor.
     * @param $order
     */
    public function __construct($product)
    {
        $this->product = $product;
    }


    public function getPaymentMethod()
    {
        throw new \Exception("Error Payment");
    }

    public function getShipmentMethod()
    {
        throw new \Exception("Error Shipment");
    }

    public function getDiscount()
    {
        throw new \Exception("Error Discount");
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
        throw new \Exception("Error Comment");
    }

    public function getClientInfo()
    {
        return 'phone';
    }
}