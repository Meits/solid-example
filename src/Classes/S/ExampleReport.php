<?php
/**
 * Created by PhpStorm.
 * User: Meits
 * Date: 23-Apr-19
 * Time: 11:00
 */

namespace App\S;


class ExampleReport
{
    function getAuthor() {
        return "<p>Author</p>";
    }

    function getUser() {
        return "<p>User</p>";
    }

    function getData() {
        return "<p>Data</p>";
    }


    function renderReport() {
        echo $this->getAuthor(). '' . $this->getUser(). '' . $this->getData();
    }
}