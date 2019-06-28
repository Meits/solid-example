<?php
/**
 * Created by PhpStorm.
 * User: MeitsWorkPc
 * Date: 28.06.2019
 * Time: 8:45
 */

namespace App\D;


class View
{
    public function renderReport($doctor, $patient, $data) {
        return $doctor.'<br>'.$patient.'<br>'.$data;
    }
}