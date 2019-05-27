<?php
/**
 * Created by PhpStorm.
 * User: Meits
 * Date: 27-May-19
 * Time: 15:38
 */

namespace App\L;


class Square extends Rectangle {

    public function setHeight($value) {
        $this->width = $value;
        $this->height = $value;
    }

    public function setWidth($value) {
        $this->width = $value;
        $this->height = $value;
    }
}