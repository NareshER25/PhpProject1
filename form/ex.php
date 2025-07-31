<?php

class Accept_data {

    public $datapdo, $choose, $query, $conn, $localhost, $dbname, $fname, $mname, $lname, $mobile, $email, $male, $education, $language, $percentage, $passyear, $wing, $building, $area, $city, $landmark, $pincode, $dob, $bloodgrp, $country, $state, $reference;

    function read_data() {

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->fname = empty(filter_input(INPUT_POST, 'fname', FILTER_SANITIZE_SPECIAL_CHARS)) ? "NO FIRST NAME" : (filter_input(INPUT_POST, 'fname', FILTER_SANITIZE_SPECIAL_CHARS));
            $this->mname = empty(filter_input(INPUT_POST, 'mname', FILTER_SANITIZE_SPECIAL_CHARS)) ? "NO MIDDLE NAME" : (filter_input(INPUT_POST, 'mname', FILTER_SANITIZE_SPECIAL_CHARS));
            $this->lname = empty(filter_input(INPUT_POST, 'ln', FILTER_SANITIZE_SPECIAL_CHARS)) ? "NO LAST NAME" : (filter_input(INPUT_POST, 'ln', FILTER_SANITIZE_SPECIAL_CHARS));
            $this->mobile = empty(filter_input(INPUT_POST, 'mob', FILTER_SANITIZE_NUMBER_INT)) ? "NO NAME" : (filter_input(INPUT_POST, 'mob', FILTER_SANITIZE_NUMBER_INT));
            $this->email = empty(filter_input(INPUT_POST, 'em', FILTER_SANITIZE_EMAIL)) ? "NO NAME" : (filter_input(INPUT_POST, 'em', FILTER_SANITIZE_EMAIL));
            $this->male = empty(filter_input(INPUT_POST, 'option', FILTER_SANITIZE_SPECIAL_CHARS)) ? "NO NAME" : (filter_input(INPUT_POST, 'option', FILTER_SANITIZE_SPECIAL_CHARS));
            $this->education = empty(filter_input(INPUT_POST, 'education', FILTER_SANITIZE_STRING)) ? "NO FIRST NAME" : (filter_input(INPUT_POST, 'education', FILTER_SANITIZE_STRING));
            $this->language = empty(filter_input(INPUT_POST, 'language', FILTER_SANITIZE_STRING)) ? "NO FIRST NAME" : (filter_input(INPUT_POST, 'language', FILTER_SANITIZE_STRING));
            $this->percentage = empty(filter_input(INPUT_POST, 'percentage', FILTER_SANITIZE_STRING)) ? "NO FIRST NAME" : (filter_input(INPUT_POST, 'percentage', FILTER_SANITIZE_STRING));
            $this->passyear = empty(filter_input(INPUT_POST, 'passyear', FILTER_SANITIZE_STRING)) ? "NO FIRST NAME" : (filter_input(INPUT_POST, 'passyear', FILTER_SANITIZE_STRING));
            $this->wing = empty(filter_input(INPUT_POST, 'wing', FILTER_SANITIZE_SPECIAL_CHARS)) ? "NO FIRST NAME" : (filter_input(INPUT_POST, 'wing', FILTER_SANITIZE_SPECIAL_CHARS));
            $this->building = empty(filter_input(INPUT_POST, 'building', FILTER_SANITIZE_SPECIAL_CHARS)) ? "NO FIRST NAME" : (filter_input(INPUT_POST, 'building', FILTER_SANITIZE_SPECIAL_CHARS));
            $this->area = empty(filter_input(INPUT_POST, 'area', FILTER_SANITIZE_SPECIAL_CHARS)) ? "NO FIRST NAME" : (filter_input(INPUT_POST, 'area', FILTER_SANITIZE_SPECIAL_CHARS));
            $this->city = empty(filter_input(INPUT_POST, 'city', FILTER_SANITIZE_SPECIAL_CHARS)) ? "NO FIRST NAME" : (filter_input(INPUT_POST, 'city', FILTER_SANITIZE_SPECIAL_CHARS));
            $this->landmark = empty(filter_input(INPUT_POST, 'landmark', FILTER_SANITIZE_SPECIAL_CHARS)) ? "NO FIRST NAME" : (filter_input(INPUT_POST, 'landmark', FILTER_SANITIZE_SPECIAL_CHARS));
            $this->pincode = empty(filter_input(INPUT_POST, 'pincode', FILTER_SANITIZE_SPECIAL_CHARS)) ? "NO FIRST NAME" : (filter_input(INPUT_POST, 'pincode', FILTER_SANITIZE_SPECIAL_CHARS));
            $this->dob = empty(filter_input(INPUT_POST, 'dob', FILTER_SANITIZE_STRING)) ? "NO FIRST NAME" : (filter_input(INPUT_POST, 'dob', FILTER_SANITIZE_STRING));
            $this->bloodgrp = empty(filter_input(INPUT_POST, 'bldgrp', FILTER_SANITIZE_STRING)) ? "NO FIRST NAME" : (filter_input(INPUT_POST, 'bldgrp', FILTER_SANITIZE_STRING));
            $this->country = empty(filter_input(INPUT_POST, 'countryy', FILTER_SANITIZE_STRING)) ? "NO FIRST NAME" : (filter_input(INPUT_POST, 'countryy', FILTER_SANITIZE_STRING));
            $this->state = empty(filter_input(INPUT_POST, 'state', FILTER_SANITIZE_STRING)) ? "NO FIRST NAME" : (filter_input(INPUT_POST, 'state', FILTER_SANITIZE_STRING));
            $this->reference = empty(filter_input(INPUT_POST, 'reference', FILTER_SANITIZE_SPECIAL_CHARS)) ? "NO FIRST NAME" : (filter_input(INPUT_POST, 'reference', FILTER_SANITIZE_SPECIAL_CHARS));
        }
    }

    function display() {
        echo $this->fname;
        echo '<br>';
        echo $this->mname;
        echo '<br>';
        echo $this->lname;
        echo '<br>';
        echo $this->mobile;
        echo '<br>';
        echo $this->email;
        echo '<br>';
        echo $this->male;
        echo '<br>';
        echo $this->education;
        echo '<br>';
        echo $this->language;
        echo '<br>';
        echo $this->percentage;
        echo '<br>';
        echo $this->passyear;
        echo '<br>';
        echo $this->wing;
        echo '<br>';
        echo $this->building;
        echo '<br>';
        echo $this->area;
        echo '<br>';
        echo $this->city;
        echo '<br>';
        echo $this->landmark;
        echo '<br>';
        echo $this->pincode;
        echo '<br>';
        echo $this->dob;
        echo '<br>';
        echo $this->bloodgrp;
        echo '<br>';
        echo $this->country;
        echo '<br>';
        echo $this->state;
        echo '<br>';
        echo $this->reference;
        echo '<br>';
        echo $this->choose;
    }

    function upload_data() {
        $this->localhost = "127.0.0.1";
        $this->dbname = "studata";

        try {
            $this->datapdo = new PDO("mysql:host=$this->localhost; dbname=$this->dbname;", "root", "admin@123");
            $this->query = "insert into admission_form(fname,mname,lname,mobile,email,gender,education,languagee,percentage,passyear,wing,building,areas,city,landmark,pincode,dob,bloodrp,country,state,referencee) values('" . $this->fname . "', '" . $this->mname . "',' " . $this->lname . "', " . $this->mobile . ", '" . $this->email . "', '" . $this->male . "', '" . $this->education . "', '" . $this->language . "', " . $this->percentage . ", " . $this->passyear . ", '" . $this->wing . "', '" . $this->building . "', '" . $this->area . "', '" . $this->city . "', '" . $this->landmark . "', " . $this->pincode . ", '" . $this->dob . "', '" . $this->bloodgrp . "', '" . $this->country . "', '" . $this->state . "', '" . $this->reference . "')";
            $this->datapdo->exec($this->query);
        } catch (Exception $ex) {
            echo $ex;
        }
    }
}

$target_dir = "/Applications/XAMPP/xamppfiles/htdocs/PhpProject1/form/";
$target_file = $target_dir . basename($_FILES["choose"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["choose"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["choose"]["size"] > 358400) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "jpeg" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["choose"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["choose"]["name"])). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}




$acept_data = new Accept_data();
$acept_data->read_data();
$acept_data->display();
$acept_data->upload_data();
?>
