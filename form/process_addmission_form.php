
<?php

class Accept_data {

    public $new_email_name, $imageFileType, $uploadOk, $target_file, $target_dir, $email_name, $datapdo, $choose, $query, $conn, $localhost, $dbname, $fname, $mname, $lname, $mobile, $email, $male, $education, $language, $percentage, $passyear, $wing, $building, $area, $city, $landmark, $pincode, $dob, $bloodgrp, $country, $state, $reference;

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

    function upload_data() {
        $this->localhost = "127.0.0.1";
        $this->dbname = "studata";

//        $this->email_name = str_replace(['@','.'], '_', $_POST['em']);
        $this->email_name = $_POST['em'];
        $this->target_dir = "/Applications/XAMPP/xamppfiles/htdocs/PhpProject1/form/photo/";
        $this->target_file = $this->target_dir . basename($_FILES["choose"]["name"]);
        $this->uploadOk = 1;
        $this->imageFileType = strtolower(pathinfo($this->target_file, PATHINFO_EXTENSION));
        $this->new_email_name = 'photo/' . $this->email_name . '.' . $this->imageFileType;
// Check if image file is a actual image or fake image
        if (isset($_POST["submit"])) {
            $check = getimagesize($_FILES["choose"]["tmp_name"]);
            if ($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
                $this->uploadOk = 1;
            } else {
                echo "File is not an image.";
                $this->uploadOk = 0;
            }
        }
// Check if file already exists
        if (file_exists($this->new_email_name)) {
            echo "Sorry, file already exists.";
            $this->uploadOk = 0;
        }
// Check file size
        if ($_FILES["choose"]["size"] > 358400) {
            echo "Sorry, your file is too large.";
            $this->uploadOk = 0;
        }
// Allow certain file formats
        if ($this->imageFileType != "jpg" && $this->imageFileType != "jpeg") {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $this->uploadOk = 0;
        }
// Check if $uploadOk is set to 0 by an error
        if ($this->uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["choose"]["tmp_name"], $this->new_email_name)) {
//                echo "the file" . $this->new_email_name . "Uploaded in the" . $this->target_dir;
            } else {
                echo "Sorry File Not Uploaded";
                $this->uploadOk = 0;
            }
        }

        try {
            $this->datapdo = new PDO("mysql:host=$this->localhost; dbname=$this->dbname;", "root", "admin@123");
            $this->query = "insert into admission_form(fname,mname,lname,mobile,email,gender,education,languagee,percentage,passyear,wing,building,areas,city,landmark,pincode,dob,bloodrp,country,state,referencee,choose) values('" . $this->fname . "', '" . $this->mname . "',' " . $this->lname . "', " . $this->mobile . ", '" . $this->email . "', '" . $this->male . "', '" . $this->education . "', '" . $this->language . "', " . $this->percentage . ", " . $this->passyear . ", '" . $this->wing . "', '" . $this->building . "', '" . $this->area . "', '" . $this->city . "', '" . $this->landmark . "', " . $this->pincode . ", '" . $this->dob . "', '" . $this->bloodgrp . "', '" . $this->country . "', '" . $this->state . "', '" . $this->reference . "','" . $this->new_email_name . "')";
            $this->datapdo->exec($this->query);
        } 
        catch (Exception $ex) {
            echo $ex;
            $this->uploadOk = 0;
        }
        if ($this->uploadOk === 1)
        {
            echo ' <link rel="stylesheet" href="form.css">';
            echo '<p class="end">Thank You For Submitting</p>';
        }
        
    }
}

$acept_data = new Accept_data();
$acept_data->read_data();
$acept_data->upload_data();
?>
