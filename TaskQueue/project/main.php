<?php 

/*
 * Main menu
 */

$win = new SDPanel();
$win->setCaption("Tasks list");

$table = new Table();
$table->setClass("table.Menu");

//Home button
$table_home = new Table();
$table_home->setClass("table.MenuItem");
$table_home->setColumnsStyle("20%;80%");

$img_home = new Image();
$img_home->setImage("img/Android/hdpi/ic_action.png");
$img_home->setClass("image.MenuItem");

$lbl_home = new Label();
$lbl_home->setCaption("Home");
$lbl_home->setClass("label.MenuItem");

$table_home->onTap(home());
$table_home->addControl($img_home,1,1,1,1,"Center","Middle");
$table_home->addControl($lbl_home,1,2,1,1,"Left","Middle");

//Add button
$table_add = new Table();
$table_add->setClass("table.MenuItem");
$table_add->setColumnsStyle("20%;80%");

$img_add = new Image();
$img_add->setImage("img/Android/hdpi/ic_add.png");
$img_add->setClass("image.MenuItem");

$lbl_add = new Label();
$lbl_add->setCaption("Add task");
$lbl_add->setClass("label.MenuItem");

$table_add->onTap(add());
$table_add->addControl($img_add,1,1,1,1,"Center","Middle");
$table_add->addControl($lbl_add,1,2,1,1,"Left","Middle");

//Deleted button
$table_deleted = new Table();
$table_deleted->setClass("table.MenuItem");
$table_deleted->setColumnsStyle("20%;80%");

$img_deleted = new Image();
$img_deleted->setImage("img/Android/hdpi/ic_deleted.png");
$img_deleted->setClass("image.MenuItem");

$lbl_deleted = new Label();
$lbl_deleted->setCaption("Archived tasks");
$lbl_deleted->setClass("label.MenuItem");

$table_deleted->onTap(deleted());
$table_deleted->addControl($img_deleted,1,1,1,1,"Center","Middle");
$table_deleted->addControl($lbl_deleted,1,2,1,1,"Left","Middle");

//$table_space = new Table();
//$table->addControl($table_space,1,1);
$table->addControl($table_home,2,1);
$table->addControl($table_add,3,1);
$table->addControl($table_deleted,4,1);


$win->addControl($table);
$win->Render();


function Slide(){	
	$win->Open("mainThumb");		
}

function home(){
	$win->Open("mainThumb");
}

function add(){
	$win->Open("TaskDetail");
}

function deleted()
{
	$statusList = new InputNumeric();
	$statusList=3;
	$win->Open("mainThumb", $statusList);	
}



?>