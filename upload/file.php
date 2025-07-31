


<!--$target_dir = "/Applications/XAMPP/xamppfiles/htdocs/PhpProject1/upload";
$target_file = $target_dir. basename($_FILES["choose"]);-->


<!--
//
//   echo "<b>File to be uploaded: </b>" . $_FILES["choose"]["name"] . "<br>";
//   echo "<b>Type: </b>" . $_FILES["choose"]["type"] . "<br>";
//   echo "<b>File Size: </b>" . $_FILES["choose"]["size"]/1024 . "<br>";
//   echo "<b>Store in: </b>" . $_FILES["choose"]["tmp_name"] . "<br>";
//
//   if (file_exists($_FILES["choose"]["name"])){
//      echo "<h3>The file already exists</h3>";
//   } else {
//      move_uploaded_file($_FILES["choose"]["tmp_name"], $_FILES["choose"]["name"]);
//      echo "<h3>File Successfully Uploaded</h3>";
//   }
//-->


<?php
if (isset($_POST['choose'])) 
{

    $filename = $_FILES["choose"]["name"];
    $tempname = $_FILES["choose"]["tmp_name"];
    $folder = "/Applications/XAMPP/xamppfiles/htdocs/PhpProject1/upload". $filename;

    $db = PDO("mysql:host=$this->localhost; dbname=$this->dbname;","root","admin@123");

    // Get all the submitted data from the form
    $sql = "INSERT INTO image (filename) VALUES ('$filename')";

    // Execute query
    mysqli_query($db, $sql);

    // Now let's move the uploaded image into the folder: image
    if (move_uploaded_file($tempname, $folder)) {
        echo "<h3>&nbsp; Image uploaded successfully!</h3>";
    } else {
        echo "<h3>&nbsp; Failed to upload image!</h3>";
    }
}
?>