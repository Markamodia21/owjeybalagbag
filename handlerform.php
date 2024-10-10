
<?php 

require_once 'dbConfig.php'; 
require_once 'models.php';

if (isset($_POST['insertNewStudentBtn'])) {
	$firstName = trim($_POST['first_name']);
	$lastName = trim($_POST['last_name']);
	$gender = trim($_POST['contact_number']);
	$yearLevel = trim($_POST['date_of_reservation']);
	$section = trim($_POST['time_of_reservation']);
	$adviser = trim($_POST['services']);
	$religion = trim($_POST['request_barber']);

	if (!empty($firstName) && !empty($lastName) && !empty($gender) && !empty($yearLevel) && !empty($section)  && !empty($section)  && !empty($adviser) && !empty($religion)) {
			$query = insertIntoStudentRecords($pdo, $firstName, $lastName, 
			$gender, $yearLevel, $section, $adviser, $religion);

		if ($query) {
			header("Location: ../index.php");
		}

		else {
			echo "Insertion failed";
		}
	}

	else {
		echo "Make sure that no fields are empty";
	}
	
}


if (isset($_POST['insertNewStudentBtn'])) {
	$firstName = trim($_POST['first_name']);
	$lastName = trim($_POST['last_name']);
	$gender = trim($_POST['contact_number']);
	$yearLevel = trim($_POST['date_of_reservation']);
	$section = trim($_POST['time_of_reservation']);
	$adviser = trim($_POST['services']);
	$religion = trim($_POST['request_barber']);

	if (!empty($student_id) && !empty($firstName) && !empty($lastName) && !empty($gender) && !empty($yearLevel) && !empty($section) && !empty($adviser) && !empty($religion)) {

		$query = updateAStudent($pdo, $student_id, $firstName, $lastName, $gender, $yearLevel, $section, $adviser, $religion);

		if ($query) {
			header("Location: ../index.php");
		}
		else {
			echo "Update failed";
		}

	}

	else {
		echo "Make sure that no fields are empty";
	}

}





if (isset($_POST['deleteStudentBtn'])) {

	$query = deleteAStudent($pdo, $_GET['student_id']);

	if ($query) {
		header("Location: ../index.php");
	}
	else {
		echo "Deletion failed";
	}
}




?>
