<?php
/**
 * Created by PhpStorm.
 * User: MeitsWorkPc
 * Date: 28.06.2019
 * Time: 10:02
 */

namespace App\D;


interface IReport
{
    function renderReport() : string;
}