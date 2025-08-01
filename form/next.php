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
                    $offset = isset($_GET['offset']) ? (int) $_GET['offset'] : 0;
                    $this->query = "SELECT * FROM admission_form order by roll_no LIMIT 1 OFFSET $offset";
                    $totalQuery = $this->datapdo->query("SELECT COUNT(*) FROM admission_form");
                    $total = $totalQuery->fetchColumn();
//                    $this->query = "SELECT fname,mname,lname,mobile,email,gender,education,languagee,percentage,passyear,wing,building,areas,city,landmark,pincode,dob,bloodrp,country,state,referencee,choose FROM admission_form";
                    $this->result = $this->datapdo->query($this->query);
                    echo '<!DOCTYPE html>
                    <html>
                      <head>
                              <title>Addmission Form</title>
                              <meta charset="utf-8">
                              <meta name="viewport" content="width=device-width, initial-scale=1.0">
                              <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
                              <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
                              <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
                              <script src="form_valid.js" ></script>
                              <link rel="stylesheet" href="form.css">
                       </head>
                    <body class="body">
                    <form>';
                    if ($this->result->rowCount() > 0) {
                        while ($row = $this->result->fetch(PDO::FETCH_ASSOC)) {
                            echo'       <div class="container">
                                      <h3 class="up display-5  text-center text-black border mt-1 border-dark border-5 mb-3 rounded-pill bg-light pos wid">Admission Form</h3>
                                      <div class=" row"  >
                                         <div class="la col-sm-3" >
                    <input readonly value=" ' . $row["fname"] . '" id="fname" class=" inpu mar  col-sm-12 bg-transparent border-white border-top-0 border-start-0 mt-2 border-end-0 text-white wid" type="text" name="fname" placeholder="First name" >
                                        
                                      </div>
                    <div class="laa col-sm-3" >
                                        <input readonly value=" ' . $row["mname"] . '" id="mname" class="inpu mar col-sm-12 bg-transparent border-white border-top-0 border-start-0 mt-2 border-end-0 text-white wid" type="text" name="mname" placeholder="Middle name">
                    </div>
                    <div class="raa col-sm-3" >
                                     <input readonly value=" ' . $row["lname"] . '" id="ln" class="inpu mar col-sm-12  bg-transparent border-white border-top-0 border-start-0 mt-2 border-end-0 text-white wid wid" type="text" name="ln"  placeholder="Last name"  >
                    </div>
                    <div class="ra col-sm-3" >
                                       <input readonly value=" ' . $row["mobile"] . '" id="mob" class="inpu mar col-sm-12  bg-transparent border-white border-top-0 border-start-0 mt-2 border-end-0 text-white wid" type="text" name="mob" placeholder="Mobile no"  >
                    </div>
                </div>
                    <div class=" row mt-3">
                    <div class="la col-sm-6" >
                                       <input readonly value=" ' . $row["email"] . '" id="em" name="em" class="inpu mar col-sm-12 bg-transparent border-white border-top-0 border-start-0 border-end-0 text-white wid" type="text" name="em" placeholder="Email Address">
                    </div>
                    <div class="ra col-sm-6">
                                      <span class="inpu mar col-sm-12 text-black wid"><b class="text-white">Select Gender</b>
                                         <br>
                            <span class="col-sm-6">
                                             <input disabled  ' . ($row["gender"] === 'male' ? ' checked' : '') . ' id="m" class="inpu col-sm-1 " type="radio" name="option" value="male">male
                                             <input disabled  ' . ($row["gender"] === 'female' ? 'checked ' : '') . ' id="f" class="inpu col-sm-1 " type="radio" name="option" value="female">female
                                             <input disabled  ' . ($row["gender"] === 'other' ? 'checked' : '') . 'id="o" class="inpu col-sm-1 " type="radio" name="option" value="other">other 
                            </span>
                        </span>
                    </div>
                </div>
               <div class="row mt-4">
                    <div class="la col-lg-3" >
                        <span class="col-lg-12 mt-4 fw-bold text-white">Education</span>
                        <br>
                    <select id="education" class="sel mar col-sm-12 bg-transparent border-white text-dark wid" name="education" placeholder="Education Qualification"  >
                            <option  value="">' . $row["education"] . '</option>
                        </select>
                    </div>
                 <div class="laa col-lg-3" >
                        <span class="col-lg-12 mt-4 fw-bold text-white">Language</span>
                        <br>
                        <select id="language" class="sel mar col-sm-12 bg-transparent border-white text-dark wid" name="language" placeholder="language" >
                           <option  value="">' . $row["languagee"] . '</option>
                        </select>
                    </div>
                    <div class="raa col-lg-3" >
                        <span class="col-lg-12 mt-4 fw-bold text-white">Percentage</span>
                        <br>
                        <select id="percentage" class="sel mar col-sm-12 bg-transparent border-white text-dark wid" name="percentage" placeholder="percentage" >
                            <option  value="">' . $row["percentage"] . '</option>
                        </select>
                    </div>
                 <div class="ra col-lg-3" >
                        <span class="col-lg-12 mt-4 fw-bold text-white">Passing Year</span>
                        <br>
                        <select id="passyear" class="sel mar col-sm-12 bg-transparent border-white text-dark wid" name="passyear" placeholder="Passing year" >
                            <option value="">' . $row["passyear"] . '</option>
                        </select>  
                    </div>
                </div>
                   <div class="row mt-4"> 
                    <div class="la col-sm-3" >
                        <input readonly value=" ' . $row["wing"] . '" id="wing" class="inpu mar col-sm-12 bg-transparent border-white border-top-0 border-start-0 border-end-0 text-white wid" type="text" name="wing" placeholder="Wing/flat no" >
                    </div>
                    <div class="laa col-sm-3" >
                        <input readonly value=" ' . $row["building"] . '"  id="building" class="inpu mar col-sm-12 bg-transparent border-white border-top-0 border-start-0 border-end-0 text-white wid" type="text" name="building" placeholder="Building" >
                    </div>
                    <div class="raa col-sm-3" >
                        <input readonly value=" ' . $row["areas"] . '" id="area" class="inpu mar col-sm-12 bg-transparent border-white border-top-0 border-start-0 border-end-0 text-white wid" type="text" name="area"   placeholder="Area"  >
                    </div>
                    <div class="ra col-sm-3" >
                        <input readonly value=" ' . $row["city"] . '" id="city" class="inpu mar col-sm-12 bg-transparent border-white border-top-0 border-start-0 border-end-0 text-white wid" type="text" name="city"   placeholder="City"  >
                    </div>
                </div>
              <div class="row mt-4">
                    <div class="la col-sm-6" >
                        <input readonly value=" ' . $row["landmark"] . '" id="landmark" class="inpu mar col-sm-12 bg-transparent border-white border-top-0 border-start-0 border-end-0 text-white wid" type="text" name="landmark"   placeholder="Landmark"  >
                    </div>
                    <div class="ra col-sm-6" >
                        <input readonly value=" ' . $row["pincode"] . '" id="pincode" class="inpu mar col-sm-12 bg-transparent border-white border-top-0 border-start-0 border-end-0 text-white wid" type="text" name="pincode"  placeholder="Pincode"  >
                    </div>
                </div>
                      <div class="row mt-4">
                    <div class="la col-lg-3" >
                        <span class="col-lg-12 mt-4 text-white"><b>Dob</b></span>
                        <input readonly value="' . $row["dob"] . '" id="dob" class="inpu mar col-sm-12 bg-transparent border-white border-top-0 border-start-0 border-end-0 text-white wid" type="date" name="dob" placeholder="Date-of-Birth" >
                    </div>
                    <div class="la col-lg-3" >
                        <span class="col-sm-12 mt-4 fw-bold text-white">Blood-Group</span>
                        <select  id="bldgrp" class="sel mar col-sm-12 bg-transparent border-white text-dark wid" name="bldgrp" >
                            <option value="">' . $row["bloodrp"] . '</option>
                        </select>
                    </div>
                      <div class="ra col-lg-3" >
                        <span class="col-sm-12 mt-4 fw-bold text-white">Country</span>
                        <select id="countryy" class="sel mar col-sm-12 bg-transparent border-white text-dark wid" name="countryy" >
                            <option value="">' . $row["country"] . '</option>
                        </select>
                    </div>
              <div class="ra col-lg-3" >
                        <span class="col-lg-3 mt-4 fw-bold text-white">State</span>
                        <select id="state" class="sel mar col-sm-12 bg-transparent border-white text-dark wid"  name="state" ><!-- comment -->
                            <option value="" >' . $row["state"] . '</option>
                        </select>
                    </div>
                </div>
             <div class="row mt-5">
                    <div class="la col-sm-6" >
                        <input readonly value="' . $row["referencee"] . '" id="reference" class="inpu mar col-sm-12 bg-transparent border-white border-top-0 border-start-0 border-end-0 text-white wid" type="text" name="reference" placeholder="Reference By"  >
                    </div>
                    <div class="ra col-sm-6" >
                    <img src=" ' . $row["choose"] . '" width="200" height="100" alt="Photo">
                    </div>';
                            $prev = $offset - 1;
                            $next = $offset + 1;

                            echo '<div class="text-center mt-4">';
                            if ($offset > 0) {
                                echo '<a href="?offset=' . $prev . '" class="btn btn-primary me-2">Previous</a>';
                            }
                            if ($offset + 1 < $total)
                            {
                            echo '<a href="?offset=' . $next . '" class="btn btn-primary">Next</a>';
                            }
                            echo '</div>';
                            echo' </div>';
                        }
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

