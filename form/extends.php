<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> detail </title>
    </head>
    <body>
        <?php

        class accep_data {

            public $localhost, $dbname, $conn, $query, $result, $row;

            function moredata() {
                
            }

            function fetch_data() {
                $this->localhost = "127.0.0.1";
                $this->dbname = "studata";
                try {

                    $this->datapdo = new PDO("mysql:host=$this->localhost; dbname=$this->dbname;", "root", "admin@123");
                    $this->query = "SELECT fname,mname,lname,mobile,email,gender,education,languagee,percentage,passyear,wing,building,areas,city,landmark,pincode,dob,bloodrp,country,state,referencee FROM admission_form";
                    $this->result = $this->datapdo->query($this->query);
                    if ($this->result->rowCount() > 0) {
                        echo '<table border align="center" > <tr> <th> Name </th> <th> Phone </th> <th> Email </th>  <th> gender </th> <th> Education </th> <th> Language </th> <th> Percentage </th> <th> Pass Year </th> <th> Wing </th> <th> Building </th> <th> Area </th> <th> City </th> <th> Landmark </th> <th> Pincode </th> <th> Date of Birth </th> <th> BloodGrp </th> <th> Country </th> <th> State </th> <th> Reference </th> </tr>';
                        while ($row = $this->result->fetch(PDO::FETCH_ASSOC)) {
                            echo '<tr>' . '<td>' . $row["fname"] . " " . $row["mname"] . " " . $row["lname"] . '</td>' . '<td>' . $row["mobile"] . '</td>' . '<td>' . $row["email"] . '</td>' . '<td>' . $row["gender"] . '</td>'. '<td>'.$row["education"] .'</td>'. '<td>' . $row["languagee"] . '</td>' .'<td>' . $row["percentage"] . '</td>' .'<td>' . $row["passyear"] . '</td>' .'<td>' . $row["wing"] . '</td>' .'<td>' . $row["building"] . '</td>' .'<td>' . $row["areas"] . '</td>' .'<td>' . $row["city"] . '</td>' .'<td>' . $row["landmark"] . '</td>' .'<td>' . $row["pincode"] . '</td>' .'<td>' . $row["dob"] . '</td>' .'<td>' . $row["bloodrp"] . '</td>' .'<td>' . $row["country"] . '</td>' .'<td>' . $row["state"] . '</td>' .'<td>' . $row["referencee"] . '</td>' .'<tr>' . '<br>';
                        }
                        echo '</table>';
                    } else {
                        echo ' Values Not Found';
                    }
                } catch (Exception $ex) {
                    echo $ex;
                }
            }
        }

        $accept_data = new accep_data();
        $accept_data->fetch_data();
        ?>
    </body>
</html>

