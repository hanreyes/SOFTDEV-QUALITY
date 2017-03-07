<?php
function ExtendedAddSlash(&$params){
	foreach($params as &$var){
		//check if $var is an array, if yes it will start another ExtendedAddSlash() function to loop to each key inside
		is_array($var) ? ExtendedAddSlash($var) : $var=addslashes($var);
	}
}

	ExtendedAddSlash($_POST);
	
	$submission_id = $_POST['submission_id'];
	$photo = $_POST['photoof'];
	$first_name = $_POST['nameof'][0];
	$middle_name = $_POST['nameof'][1];
	$last_name = $_POST['nameof'][2];
	$address = $_POST['address5'][0].", ".$_POST['address5'][1].", ".$_POST['address5'][2];
	$marital_status = $_POST['maritalstatus'];
	$sex = $_POST['sex'];
	$birthdate = $_POST['dateof'][0]."/".$_POST['dateof'][1]."/".$_POST['dateof'][2];
	$age = $_POST['age'];
	$occupation = $_POST['occupation'];
	$date_of_disappearance = $_POST['dateof15'][0]."/".$_POST['dateof15'][1]."/".$_POST['dateof15'][2];
	$time_of_disappearance = $_POST['dateof15'][3].":".$_POST['dateof15'][4]." ".$_POST['dateof15'][5];
	$last_seen = $_POST['wherewas'];
	$relationship_with_person = $_POST['relationshipwith'];
	$height = $_POST['height'];
	$weight = $_POST['weight26'];
	$eye_color = $_POST['eyecolor'];
	$hair_length = $_POST['length'];
	$hair_color = $_POST['color'];
	$facial_hair = $_POST['type'];
	$facial_hair_color = $_POST['color32'];
	$facial_hair_length = $_POST['length33'];
	$ear_shape = $_POST['shapeof'];
	$eyebrows_size = $_POST['eyebrows69'];
	$nose_size = $_POST['nose70'];
	$hand_size = $_POST['hands71'];
	$feet_size = $_POST['feet72'];
	$distinguishing_features = implode("; ", $_POST['input53']);
	$scar_location = implode("; ", $_POST['whereis']);
	$tattoo_location = implode("; ", $_POST['whereis55']);
	$birthmark_location = implode("; ", $_POST['whereis56']);
	$mole_location = implode("; ", $_POST['whereis65']);
	$upper_garment = $_POST['uppergarment66'];
	$upper_garment_color = $_POST['uppergarment'];
	$lower_garment = $_POST['lowergarment'];
	$lower_garment_color = $_POST['lowegarment74'];
	$footwear = $_POST['footwearworn'];
	$eyewear = $_POST['eyewear75'];
	$glasses_color = $_POST['glassescolor76'];
	$contact_lens_color = $_POST['contactlens'];
	
	
	
	//db connection
	$db_host = 'localhost';
	$db_username = 'root';
	$db_password = '';
	$db_name = 'afterlife';
	$db_connect = mysqli_connect($db_host, $db_username, $db_password, $db_name) or die(mysqli_error());
	
	//search submission ID
	$query = "SELECT FROM missing WHERE submission_id = '$submission_id'";
	$sqlsearch = mysqli_query($db_connect, $query);
	$resultcount = mysqli_num_rows($sqlsearch);
	
	if($resultcount > 0){
		mysqli_query($db_connect, "UPDATE missing SET
					photo = '$photo',
					first_name = '$first_name',
					middle_name = '$middle_name',
					last_name = '$last_name',
					address = '$address',
					marital_status = '$marital_status',
					sex = '$sex',
					birthdate = '$birthdate',
					age = '$age',
					occupation = '$occupation',
					date_of_disappearance = '$date_of_disappearance',
					time_of_disappearance = '$time_of_disappearance',
					last_seen = '$last_seen',
					relationship_with_person = 'relationship_with_person',
					height = '$height',
					weight = '$weight',
					eye_color = '$eye_color',
					hair_length = '$hair_length',
					hair_color = '$hair_color',
					facial_hair = '$facial_hair',
					facial_hair_color = '$facial_hair_color',
					facial_hair_length = '$facial_hair_length',
					ear_shape = '$ear_shape',
					eyebrows_size = '$eyebrows_size',
					nose_size = '$nose_size',
					hand_size = '$hand_size',
					feet_size = '$feet_size',
					distinguishing_features = '$distinguishing_features',
					scar_location = '$scar_location',
					tattoo_location = '$tattoo_location',
					birthmark_location = '$birthmark_location',
					mole_location = '$mole_location',
					upper_garment = '$upper_garment',
					upper_garment_color = '$upper_garment_color',
					lower_garment = '$lower_garment',
					lower_garment_color = '$lower_garment_color',
					footwear = '$footwear',
					eyewear = '$eyewear',
					glasses_color = '$glasses_color',
					contact_lens_color = '$contact_lens_color'")
		or die(mysqli_error($db_connect));
	}else{
		mysqli_query($db_connect, "INSERT INTO missing 
					(submission_id, photo, first_name, middle_name, last_name, address, marital_status, sex, birthdate,
					occupation, date_of_disappearance, time_of_disappearance, last_seen, relationship_with_person, height,
					weight, eye_color, hair_length, hair_color, facial_hair, facial_hair_color, facial_hair_length,
					ear_shape, eyebrows_size, nose_size, hand_size, feet_size, distinguishing_features, scar_location,
					tattoo_location, birthmark_location, mole_location, upper_garment, upper_garment_color, lower_garment,
					lower_garment_color, footwear, eyewear, glasses_color, contact_lens_color)
					VALUES
					('$submission_id', '$photo', '$first_name', '$middle_name', '$last_name', '$address', '$marital_status', '$sex', '$birthdate',
					'$occupation', '$date_of_disappearance', '$time_of_disappearance', '$last_seen', '$relationship_with_person', '$height',
					'$weight', '$eye_color', '$hair_length', '$hair_color', '$facial_hair', '$facial_hair_color', '$facial_hair_length',
					'$ear_shape', '$eyebrows_size', '$nose_size', '$hand_size', '$feet_size', '$distinguishing_features', '$scar_location',
					'$tattoo_location', '$birthmark_location', '$mole_location', '$upper_garment', '$upper_garment_color', '$lower_garment',
					'$lower_garment_color', '$footwear', '$eyewear', '$glasses_color', '$contact_lens_color')")
		or die(mysqli_error($db_connect));
	}
?>