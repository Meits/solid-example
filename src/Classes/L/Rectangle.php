<?php
/**
 * Created by PhpStorm.
 * User: Meits
 * Date: 27-May-19
 * Time: 15:28
 */

namespace App\L;


class Rectangle
{
    protected $width;
    protected $height;

    /**
     * Rectangle constructor.
     * @param $width
     * @param $height
     */
    public function __construct($width = 0, $height = 0)
    {
        $this->width = $width;
        $this->height = $height;
    }

    /**
     * @param $height
     */
    public function setHeight($height) {
        $this->height = $height;
    }

    /**
     * @return mixed
     */
    public function getHeight() {
        return $this->height;
    }

    /**
     * @param $width
     */
    public function setWidth($width) {
        $this->width = $width;
    }

    /**
     * @return mixed
     */
    public function getWidth() {
        return $this->width;
    }

    /**
     * @return mixed
     */
    public function area() {
        return $this->width * $this->height;
    }
}