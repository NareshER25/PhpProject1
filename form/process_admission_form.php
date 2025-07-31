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

            public $datapdo,$localhost, $dbname, $conn, $query, $result, $row;

            function moredata() {
                
            }

            function fetch_data() {
                $this->localhost = "127.0.0.1";
                $this->dbname = "studata";
                try {

                    $this->datapdo = new PDO("mysql:host=$this->localhost; dbname=$this->dbname;", "root", "admin@123");
                    $this->query = "SELECT fname,mname,lname,mobile,email FROM admission_form";
                    $this->result = $this->datapdo->query($this->query);
                    
                    if ($this->result->rowCount() > 0) {
                        echo '<table border align="center" > <tr> <th> Name </th> <th> Phone </th> <th> Email </th> </tr>';
                        while ($row = $this->result->fetch(PDO::FETCH_ASSOC))
                        {
                            echo '<tr>' . '<td>' . $row["fname"] . " " . $row["mname"] . " " . $row["lname"] . '</td>' . '<td>' . $row["mobile"] . '</td>' . '<td>' . $row["email"] . '</td>' . '<tr>' . '<br>';
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
