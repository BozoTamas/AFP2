<?php

class auth_model extends Model {
	
	public function validate_Member() {

    $valid = true;
    $errorMessage = array();
    foreach ($_POST as $key => $value) {
        if (empty($_POST[$key])) {
            $valid = false;
        }
    }
	
	if($valid == true) {
        if ($_POST['password'] != $_POST['password_confirm']) {
            $errorMessage[] = 'A jelszónak egyeznie kell';
            $valid = false;
        }
	}
        
        if (!isset($error_message)) {
            if (! filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
                $errorMessage[] = "Érvénytelen e-mail cím!";
                $valid = false;
            }
		}
	}
		
	public function user_Exists($username, $email) {

    $query = "SELECT * FROM `users` WHERE `name` = ? OR `email` = ?";
    $paramType = "ss";
    $paramArray = array($username, $email);
    $memberCount = $this->ds->numRows($query, $paramType, $paramArray);
    
    return $memberCount;
	}
		
	public function new_User($username, $password, $email) {
		
		global $errors; //hibák számát tárolja, ha nagyobb mint 0, nem engedi a reget

    $passwordHash = md5($password);
    $query = "INSERT INTO `users` (`name`, `email`, `password`) VALUES (?, ?, ?)";
    $paramType = "ssss";
    $paramArray = array(
        $username,
		$email,
        $passwordHash
    );
	/*if (empty($username)) {  //vizsgálja, hogy beírt-e valamit a júzer az adott helyre
		array_push($errors, "Írjon be felhasználót");  
	}
	if (empty($email)) { 
		array_push($errors, "Írjon be e-mail címet"); 
	}
	if (empty($password_1)) { 
		array_push($errors, "Írjon be jelszót"); 
	}
	*///if (count($errors) == 0) { //ha 0 a hibaszám akkor feltölti az adatbázisba
    $insertId = $this->ds->insert($query, $paramType, $paramArray);
    return $insertId;
	//	}
	}
	
	public function user_Login($username, $password) {
		global $errors, $database;
	if (empty($username)) {
		array_push($errors, "A bejelentkezéshez szükséges a felhasználónév");
	}
	if (empty($password)) {
		array_push($errors, "A bejelentkezéshez szükséges a jelszó");
	}
	if (count($errors) == 0) {
	$query = "SELECT * FROM `users` WHERE `name` = ? OR `password` = ?";
	$result = mysqli_query($database, $query);
		}
	}
	
	/*Lejárat trigger
	CREATE TRIGGER Outdated_File AFTER UPDATE ON expiration FOR EACH ROW
	
}

	

	
