<?php

//retrieve html page for index
require_once('View/index.phtml');

//create new view object for retrieving data from database
$view = new stdClass();
$view->pageTitle = 'Homepage';