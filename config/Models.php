<?php
include "CRUD.php";
include "functions.php";

function user() {
	$crud = new CRUD;
	$crud->table = "user";
	return $crud;
}

function test() {
	$crud = new CRUD;
	$crud->table = "test";
	return $crud;
}

function patient() {
	$crud = new CRUD;
	$crud->table = "patient";
	return $crud;
}

function section() {
	$crud = new CRUD;
	$crud->table = "section";
	return $crud;
}

function sub_section() {
	$crud = new CRUD;
	$crud->table = "sub_section";
	return $crud;
}

function cbc() {
	$crud = new CRUD;
	$crud->table = "cbc";
	return $crud;
}

function ua() {
	$crud = new CRUD;
	$crud->table = "ua";
	return $crud;
}

function sqar() {
	$crud = new CRUD;
	$crud->table = "sqar";
	return $crud;
}

function hiv() {
	$crud = new CRUD;
	$crud->table = "hiv";
	return $crud;
}

function csc() {
	$crud = new CRUD;
	$crud->table = "csc";
	return $crud;
}

function ksa() {
	$crud = new CRUD;
	$crud->table = "ksa";
	return $crud;
}

function appointment() {
	$crud = new CRUD;
	$crud->table = "appointment";
	return $crud;
}

?>
