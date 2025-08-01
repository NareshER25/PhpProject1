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

            public $localhost, $dbname, $conn, $query, $result, $row,$i;

            function moredata() {
                
            }

            function fetch_data() {
                $this->localhost = "127.0.0.1";
                $this->dbname = "studata";
                try {
                    $this->i=1;
                    $this->datapdo = new PDO("mysql:host=$this->localhost; dbname=$this->dbname;", "root", "admin@123");
                    $this->query = "SELECT roll_no,fname,mname,lname,mobile,email FROM admission_form";
                    $this->result = $this->datapdo->query($this->query);
                    if ($this->result->rowCount() > 0) {
                        echo '<table border align="center" > <tr> <th> Roll_no </th>  <th> Name </th> <th> Phone </th> <th> Email </th> <th> more details </th>';
                        while ($row = $this->result->fetch(PDO::FETCH_ASSOC)) {
                            $value= $this->i++;
                            echo '<tr>' . '<td>' . $row["roll_no"] . '</td>'.'<td>' . $row["fname"] . " " . $row["mname"] . " " . $row["lname"] . '</td>' . '<td>' . $row["mobile"] . '</td>' . '<td>' . $row["email"] .'</td>' . '<td> <a href="next.php">more details</a> </td>';
                            echo$value;
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

