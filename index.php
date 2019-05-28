<?php
/**
 * Created by PhpStorm.
 * User: Viktor
 * Date: 01.05.2019
 * Time: 6:22
 */

use App\L\CompositeView;
use App\L\LayoutBuilder;
use App\L\PartialView;

require "vendor/autoload.php";

//$report = new \App\S\Report();
//$template = new \App\S\HtmlTemplate();

//$template->render($report->renderReport());


/*$report = new \App\O\Report();
//$repository = new \App\O\ReportRepository($report, new \App\O\FIleSave('file.txt'));
$repository = new \App\O\ReportRepository($report, new \App\O\DataBaseSave("localhost",'root','','solid'));
$repository->save();*/

////
/*$page = new \App\L\TestAbout();
echo $page->render();*/

/*$rectangle = new \App\L\Square();
$rectangle->setWidth(5);
$rectangle->setHeight(4);


var_dump($rectangle->area());*/

define('TEMPLATE', __DIR__);

/*$masterLayout = new \App\L\CompositeView();
$header = new \App\L\PartialView("header.php");
$header->content = 'This is the header section';
$body = new PartialView('body.php');
$body->content = 'This is the body section';
$footer = new PartialView('footer.php');
$footer->content ='This is the footer section'; // add the partials to the composite view
$masterLayout->addViews(array(
    $header,
    $body,
    $footer
)); // render the partials in one go
echo $masterLayout->render();*/


/*$layoutBuilder = new LayoutBuilder; // add some views to the layout builder
$layoutBuilder->attachViews(array(
    new PartialView,
    new CompositeView
)); // generate the layouts with the attached views
$layoutBuilder->build();*/

$user = new \App\L\Example\UserDb();
echo $user->getUser()->firstName;
