<?php

require(ROOT . "model/BirthdayModel.php");

function index()
{
	render("birthday/index", array(
		'birthdays' => getAllBirthdays()
	));
}

function create()
{
	render("birthday/create");
}

function createSave()
{
	if (createBirthday()) {
		header("location:" . URL . "birthday/index");
		exit();
	} else {
		header("location:" . URL . "error/error_db");
		exit();
	}
}

function delete($id)
{
	if (deleteBirthday($id)) {
		header("Location:" . URL . "birthday/index");
		exit();
	} else {
		header("Location:" . URL . "error/error_db");
		exit();
	}

}

function edit($id)
{
	$birthday = getBirthday($id);
	render("birthday/edit", array(
		"birthday" => $birthday,
				"id" => $id
	));
}

function editSave($id)
{
	if (editBirthday($id)) {
		header("location:" . URL . "birthday/index");
		exit();
	} else {
		header("location:" . URL . "error/error_404");
		exit();
	}
}
