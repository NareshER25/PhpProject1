<!DOCTYPE html>
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
        <form onsubmit="return fmllname()" action="process_addmission_form.php" method="POST" enctype="multipart/form-data">
            <div class="container">
                <h3 class="up display-5  text-center text-black border mt-1 border-dark border-5 mb-3 rounded-pill bg-light pos wid">Admission Form</h3>
                <div class=" row"  >
                    <div class="la col-sm-3" >
                        <input id="fname" class=" inpu mar  col-sm-12 bg-transparent border-white border-top-0 border-start-0 mt-2 border-end-0 text-white wid" type="text" name="fname" placeholder="First name"  onfocus="this.placeholder = ''" onblur="this.placeholder = 'First Name'" >
                        <div id="fname_error" class="error blink"></div>
                    </div>
                    <div class="laa col-sm-3" >
                        <input id="mname" class="inpu mar col-sm-12 bg-transparent border-white border-top-0 border-start-0 mt-2 border-end-0 text-white wid" type="text" name="mname" placeholder="Middle name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Middle Name'" >
                        <div id="mname_error" class="error blink"></div>
                    </div>
                    <div class="raa col-sm-3" >
                        <input id="ln" class="inpu mar col-sm-12  bg-transparent border-white border-top-0 border-start-0 mt-2 border-end-0 text-white wid wid" type="text" name="ln"  placeholder="Last name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Last Name'" >
                        <div id="ln_error" class="error blink"></div>
                    </div>
                    <div class="ra col-sm-3" >
                        <input id="mob" class="inpu mar col-sm-12  bg-transparent border-white border-top-0 border-start-0 mt-2 border-end-0 text-white wid" type="text" name="mob" placeholder="Mobile no" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Mobile no'"   >
                        <div id="mob_error" class="error blink"></div>
                    </div>
                </div>

                <div class=" row mt-3">
                    <div class="la col-sm-6" >
                        <input id="em" name="em" class="inpu mar col-sm-12 bg-transparent border-white border-top-0 border-start-0 border-end-0 text-white wid" type="text" name="em" placeholder="Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email id'"  >
                        <div id="em_error" class="error blink"></div>
                    </div>
                    <div class="ra col-sm-6">
                        <span class="inpu mar col-sm-12 text-black wid"><b class="text-white">Select Gender</b>
                            <br>
                            <span class="col-sm-6">
                                <input id="m" class="inpu col-sm-1 " type="radio" name="option" value="male">male
                                <input id="f" class="inpu col-sm-1 " type="radio" name="option" value="female">female
                                <input id="o" class="inpu col-sm-1 " type="radio" name="option" value="other">other 
                                <div id="gender_error" class="error blink"></div>
                            </span>
                        </span>
                        <div id="gend_error" class="error blink"></div>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="la col-lg-3" >
                        <span class="col-lg-12 mt-4 fw-bold text-white">Education</span>
                        <br>
                        <select id="education" class="sel mar col-sm-12 bg-transparent border-white text-dark wid" name="education" placeholder="Education Qualification"  ><!-- comment -->

                            <option value="">Education</option>
                            <option value="10th">10th</option>
                            <option value="11th">11th</option>
                            <option value="12th">12th</option>
                        </select>
                        <div id="education_sel" class="error blink"></div>
                    </div>

                    <div class="laa col-lg-3" >
                        <span class="col-lg-12 mt-4 fw-bold text-white">Language</span>
                        <br>
                        <select id="language" class="sel mar col-sm-12 bg-transparent border-white text-dark wid" name="language" placeholder="language" ><!-- comment -->

                            <option value="">Language</option>
                            <option value="Hindi">Hindi</option>
                            <option value="English">English</option>
                            <option value="marathi">Marathi</option>
                        </select>
                        <div id="language_sel" class="error blink"></div>
                    </div>

                    <div class="raa col-lg-3" >
                        <span class="col-lg-12 mt-4 fw-bold text-white">Percentage</span>
                        <br>
                        <select id="percentage" class="sel mar col-sm-12 bg-transparent border-white text-dark wid" name="percentage" placeholder="percentage" >

                            <option value="">percentage</option>
                            <script>
                            for (let i = 0; i <= 100; i++) {
                                document.write( "<option>" + i + "</option>");
                            }
                            </script>
                        </select>
                        <div id="percentage_sel" class="error blink"></div>
                    </div>

                    <div class="ra col-lg-3" >
                        <span class="col-lg-12 mt-4 fw-bold text-white">Passing Year</span>
                        <br>
                        <select id="passyear" class="sel mar col-sm-12 bg-transparent border-white text-dark wid" name="passyear" placeholder="Passing year" ><!-- comment -->
                            <option id='opt' value="">year</option>
                            <script>
                                for (let i = 1995; i <= 2025; i++)
                                {   
                                document.write('<option>'+i+'</option>');
                                    
                                }
                            </script>
                        </select>  
                        <div id="passyear_sel" class="error blink"></div>
                    </div>
                </div>

                <div class="row mt-4"> 
                    <div class="la col-sm-3" >
                        <input  id="wing" class="inpu mar col-sm-12 bg-transparent border-white border-top-0 border-start-0 border-end-0 text-white wid" type="text" name="wing" placeholder="Wing/flat no" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Wing/flat no'" >
                        <div id="wing_error" class="error blink"></div>
                    </div>
                    <div class="laa col-sm-3" >
                        <input  id="building" class="inpu mar col-sm-12 bg-transparent border-white border-top-0 border-start-0 border-end-0 text-white wid" type="text" name="building" placeholder="Building" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Building/society'" >
                        <div id="building_error" class="error blink"></div>
                    </div>
                    <div class="raa col-sm-3" >
                        <input  id="area" class="inpu mar col-sm-12 bg-transparent border-white border-top-0 border-start-0 border-end-0 text-white wid" type="text" name="area"   placeholder="Area" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Area'" >
                        <div id="area_error" class="error blink"></div>
                    </div>
                    <div class="ra col-sm-3" >
                        <input  id="city" class="inpu mar col-sm-12 bg-transparent border-white border-top-0 border-start-0 border-end-0 text-white wid" type="text" name="city"   placeholder="City" onfocus="this.placeholder = ''" onblur="this.placeholder = 'City'" >
                        <div id="city_error" class="error blink"></div>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="la col-sm-6" >
                        <input  id="landmark" class="inpu mar col-sm-12 bg-transparent border-white border-top-0 border-start-0 border-end-0 text-white wid" type="text" name="landmark"   placeholder="Landmark" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Landmark'" >
                        <div id="landmark_error" class="error blink"></div>
                    </div>
                    <div class="ra col-sm-6" >
                        <input  id="pincode" class="inpu mar col-sm-12 bg-transparent border-white border-top-0 border-start-0 border-end-0 text-white wid" type="text" name="pincode"  placeholder="Pincode" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Pincode'" >
                        <div id="pincode_error" class="error blink"></div>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="la col-lg-3" >
                        <span class="col-lg-12 mt-4 text-white"><b>Dob</b></span>
                        <input id="dob" class="inpu mar col-sm-12 bg-transparent border-white border-top-0 border-start-0 border-end-0 text-white wid" type="date" name="dob" placeholder="Date-of-Birth" >
                        <div id="dob_error" class="error blink"></div>
                    </div>

                    <div class="la col-lg-3" >
                        <span class="col-sm-12 mt-4 fw-bold text-white">Blood-Group</span>
                        <select  id="bldgrp" class="sel mar col-sm-12 bg-transparent border-white text-dark wid" name="bldgrp" >
                            <option value="">Blood-group</option>
                            <option>O+</option>
                            <option>O-</option>
                            <option>A+</option>
                            <option>A-</option>
                            <option>B+</option>
                            <option>B-</option>
                            <option>AB+</option>
                            <option>AB-</option>
                        </select>
                        <div id="bldgrp_sel" class="error blink"></div>
                    </div>

                    <div class="ra col-lg-3" >
                        <span class="col-sm-12 mt-4 fw-bold text-white">Country</span>
                        <select id="countryy" class="sel mar col-sm-12 bg-transparent border-white text-dark wid" name="countryy" ><!-- comment -->

                            <option value="">country</option>
                            <option>India</option>
                        </select>
                        <div id="countryy_sel" class="error blink"></div>
                    </div>

                    <div class="ra col-lg-3" >
                        <span class="col-lg-3 mt-4 fw-bold text-white">State</span>
                        <select id="state" class="sel mar col-sm-12 bg-transparent border-white text-dark wid"  name="state" ><!-- comment -->

                            <option value="" >select state</option>
                            <option>Andhra pradesh</option>
                            <option>Arunachal pradesh</option>
                            <option>Assam</option>
                            <option>Bihar</option>
                            <option>Chhattisgarh</option>
                            <option>Goa</option>
                            <option>Gujarat</option>
                            <option>Haryana</option>
                            <option>Himachal Pradesh</option>
                            <option>Jharkhand</option>
                            <option>Karnataka</option>
                            <option>Kerala</option>
                            <option>Madhya Pradesh</option>
                            <option>Maharashtra</option>
                            <option>Manipur</option>
                            <option>Meghalaya</option>
                            <option>Mizoram</option>
                            <option>Nagaland</option>
                            <option>Odisha</option>
                            <option>Punjab</option>
                            <option>Rajasthan</option>
                            <option>Sikkim</option>
                            <option>Tamil Nadu</option>
                            <option>Telangana</option>
                            <option>Tripura</option>
                            <option>Uttar Pradesh</option>
                            <option>Uttarakhand</option>
                            <option>West Bengal</option>
                        </select>
                        <div id="state_sel" class="error blink"></div>
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="la col-sm-6" >
                        <input id="reference" class="inpu mar col-sm-12 bg-transparent border-white border-top-0 border-start-0 border-end-0 text-white wid" type="text" name="reference" placeholder="Reference By" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Refercence By'" >
                        <div id="reference_error" class="error blink"></div>
                    </div>
                    <div class="ra col-sm-6" >

                        <input id="choose" class="inpu mar col-sm-12 bg-transparent border-white border-top-0 border-start-0 border-end-0 text-white wid" type="file" name="choose"  placeholder="Upload Your photo" accept="image/jpeg">
                        <div id="choose_error" class="error blink"></div>
                    </div>
                </div>

                <div  class="dw col-sm-12 mt-4 text-center">
                    <button id="su" class="sub col-sm-6 mt-3 border border-5 bg-white border-white rounded-pill text-center display-9 text-black " type="submit">Submit</button>
                </div>
            </div>
        </form>
    </body>
</html>
