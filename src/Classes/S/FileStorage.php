<?php
/**
 * Created by PhpStorm.
 * User: Meits
 * Date: 24-Apr-19
 * Time: 14:16
 */

namespace App\S;


class FileStorage implements IStorage
{

    private $filename;

    /**
     * FileStorage constructor.
     * @param $filename
     */
    public function __construct($filename)
    {
        $this->filename = $filename;
    }


    function save($data)
    {
        file_put_contents($this->filename, $data);
    }
}