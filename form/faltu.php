<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details</title>
    <style>
        table {
            border-collapse: collapse;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid #333;
            padding: 6px 12px;
        }
        img {
            border-radius: 4px;
        }
    </style>
</head>
<body>

<?php

class accep_data {

    function fetch_data() {
        $localhost = "127.0.0.1";
        $dbname = "studata";

        try {
            $pdo = new PDO("mysql:host=$localhost;dbname=$dbname", "root", "admin@123");
            $query = "SELECT fname, mname, lname, mobile, email, gender, education, languagee, percentage, passyear, wing, building, areas, city, landmark, pincode, dob, bloodrp, country, state, referencee, choose FROM admission_form";
            $result = $pdo->query($query);

            if ($result->rowCount() > 0) {
                echo '<table border="1" cellpadding="5">';
                echo '<tr>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Gender</th>
                    <th>Education</th>
                    <th>Language</th>
                    <th>Percentage</th>
                    <th>Pass Year</th>
                    <th>Wing</th>
                    <th>Building</th>
                    <th>Area</th>
                    <th>City</th>
                    <th>Landmark</th>
                    <th>Pincode</th>
                    <th>DOB</th>
                    <th>Blood Group</th>
                    <th>Country</th>
                    <th>State</th>
                    <th>Reference</th>
                    <th>Photo</th>
                </tr>';

                while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                    echo '<tr>';
                    echo '<td>' . $row["fname"] . ' ' . $row["mname"] . ' ' . $row["lname"] . '</td>';
                    echo '<td>' . $row["mobile"] . '</td>';
                    echo '<td>' . $row["email"] . '</td>';
                    echo '<td>' . $row["gender"] . '</td>';
                    echo '<td>' . $row["education"] . '</td>';
                    echo '<td>' . $row["languagee"] . '</td>';
                    echo '<td>' . $row["percentage"] . '</td>';
                    echo '<td>' . $row["passyear"] . '</td>';
                    echo '<td>' . $row["wing"] . '</td>';
                    echo '<td>' . $row["building"] . '</td>';
                    echo '<td>' . $row["areas"] . '</td>';
                    echo '<td>' . $row["city"] . '</td>';
                    echo '<td>' . $row["landmark"] . '</td>';
                    echo '<td>' . $row["pincode"] . '</td>';
                    echo '<td>' . $row["dob"] . '</td>';
                    echo '<td>' . $row["bloodrp"] . '</td>';
                    echo '<td>' . $row["country"] . '</td>';
                    echo '<td>' . $row["state"] . '</td>';
                    echo '<td>' . $row["referencee"] . '</td>';

                    // Image fetch logic
                    $imageBase = ($row["email"]);  // safer lowercase
                    $imagePathJpeg = 'photo/' . $imageBase . '.jpeg';
                    $imagePathJpg  = 'photo/' . $imageBase . '.jpg';

                    if (file_exists($imagePathJpeg)) {
                        $finalImage = $imagePathJpeg;
                    } elseif (file_exists($imagePathJpg)) {
                        $finalImage = $imagePathJpg;
                    } else {
                        $finalImage = 'default.jpg'; // fallback image
                    }

                    echo '<td><img src="' . $finalImage . '" width="100" height="100" alt="No image"></td>';
                    echo '</tr>';
                }

                echo '</table>';
            } else {
                echo '<p align="center">No records found.</p>';
            }

        } catch (Exception $ex) {
            echo '<p>Error: ' . $ex->getMessage() . '</p>';
        }
    }
}

$accept_data = new accep_data();
$accept_data->fetch_data();

?>

</body>
</html>
