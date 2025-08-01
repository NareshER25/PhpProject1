<html>
    <head>
        <meta name="viewport" content="width=device-width ,initial-scale=1.0"/>
        <title>Addmission Form </title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
        <style>
            body
            {
                background-color: #988eed;
            }
/*            @media  (max-width:991px)
            {
                .n{
                    margin-top: 3%;
                }
                .p
                {
                    padding-right: 70%;
                    margin-bottom: 5%;
                }
                .d
                {
                    margin-bottom: 5%;
                }
                #r1
                {
                   display: grid;
                }
                .text
                {
                    tab-size: 15%;
                }
                .container
                {
                
                background-color: orchid;
                padding-top: 2%;
                margin-top: 3%; 
                border-radius: 4%;
                }
             

            }*/

            @media (max-width:991px)
            {
               .names
                {
                    padding-right:61%;
                    margin-left: 3%;
                    margin-bottom: 4%;
                }
                .email
                {
                    padding-right: 61%;
                    margin-left: 3%;
                }
                .gender
                {
                   
                    margin-left: 3%;
                    margin-bottom: 3%
                }
                .education
                {
                    margin-left: 3%;
                    margin-bottom: 1%;
                    display: block;
                }
                .ieducation
                {
                    margin-left: 3%;
                    padding-right: 70%;
                    margin-bottom: 3%;
                }
                .language
                {
                    margin-left: 3%;
                    margin-bottom: 1%;
                    display: block;
                }
                .ilanguage
                {
                    margin-left: 3%;
                    padding-right: 78%;
                    margin-bottom: 3%;
                }
                .percentage
                {
                    margin-left: 3%;
                    margin-bottom: 1%;
                    display: block;
                }
                .ipercentage
                {
                    margin-left: 3%;
                    padding-right: 85%;
                    margin-bottom: 3%;
                }
                .pass_year
                {
                    margin-left: 3%;
                    margin-bottom: 1%;
                    display: block;
                }
                .ipass_year
                {
                    margin-left: 3%;
                    padding-right: 84%;
                    margin-bottom: 3%;
                }
                .address
                {
                    padding-right:63%;
                    margin-left: 3%;
                    margin-bottom: 5%;
                }
                .dob
                {
                    margin-left: 3%;    
                }
                .idob
                {
                    padding-right: 70%;
                    margin-top: 1%;
                    margin-left: 3%;
                    margin-bottom: 4%;
                    
                }
                .bloodgrp
                {
                    margin-left: 3%;
                    margin-bottom: 1%;
                    display: block;
                }
                .ibloodgrp
                {
                    margin-left: 3%;
                    padding-right: 78%;
                    margin-bottom: 3%;
                }
            }


            
            
            input::placeholder
            {
                color: black !important;
                opacity: 1;
            }
            input
            {
                outline: none;

            }

            .container
            {
                max-width: 600px;
                background-color: orchid;
                padding-top: 2%;
                margin-top: 3%; 
                border-radius: 4%;
            }

        </style>    
    </head>

    <body>

        <form class="container">

            <h2 class="fw-bold text-center display-4 border border-5 border-dark rounded-pill mt-5 mb-5">Admission Form</h2>

            <div class="row">
              
                <div  class="col-lg-3">
                    <input class="names col-lg-12  bg-transparent border border-top-0 border-start-0 border-end-0 border-dark text-white" type="text" id="fname" placeholder="First Name">
                </div>
                <div  class="col-lg-3">
                    <input class="names col-lg-12  bg-transparent border border-top-0 border-start-0 border-end-0 border-dark text-white" type="text" id="Mname" placeholder="Middle Name">
                </div>
                <div  class="col-lg-3">
                    <input class="names col-lg-12  bg-transparent border border-top-0 border-start-0 border-end-0 border-dark text-white" type="text" id="lname" placeholder="Last Name">
                </div>
                <div  class="col-lg-3" >
                    <input class="names col-lg-12  bg-transparent border border-top-0 border-start-0 border-end-0 border-dark text-white" type="tel" id="tel" placeholder="Enter mobile no">
                </div>
                
            </div>  

            <div class="row">
                <div class="col-lg-6">
                    <input class="email col-lg-12  mb-3 mt-3 bg-transparent border border-top-0 border-start-0 border-end-0 border-dark text-white" type="text" id="address" placeholder="Email Address">
                </div>

                <span class="col-lg-6 mt-3  fw-bold gender">Gender : 
                    <span class="col-lg-6 "> </span>
                    <br>
                    <input id="male" class=" col-lg-1  mb-3" type="radio" name="option" value="male">male
                    <input id="female" class=" col-lg-1 mb-3" type="radio" name="option" value="female">female
                    <input id="other" class="col-lg-1  mb-3" type="radio" name="option" value="other">Others</span>
            </div>


            <div class="row">
                <div class="col-lg-3 ">
                    <span class=" block col-lg-12 fw-bold text education">🎓Education</span> 

                    <select class="col-lg-12 mt-1 bg-transparent text ieducation">
                        <option name="eduction">Education</option>
                        <option name="SSC"> SSC </option>
                        <option name="HSC"> HSC </option>
                        <option name="Gradution"> Graduation </option>
                        <option name="Diploma"> Diploma </option>
                        <option name="Post Graduation"> Post Graduation </option>
                    </select>
                </div>    


                <div class="col-lg-3">
                    <span class=" col-lg-12 fw-bold bg-transparent language">🗣️language</span>
                    <select class=" col-lg-12 mt-1 bg-transparent ilanguage">
                        <option name="language"> Language </option>
                        <option name="marathi"> Marathi </option>
                        <option name="Hindi"> Hindi </option>
                        <option name="Gujrati"> Gujrati </option>
                        <option name="English"> English </option>
                        <option name="others"> Others </option>
                    </select>
                </div>

                <div class="col-lg-3">
                    <span class="col-lg-12 fw-bold percentage">%Percentage</span>
                    <select class=" col-lg-12 mt-1 bg-transparent ipercentage">
                        <?php
                        for ($i = 1; $i <= 100; $i++) {
                            echo '<option value="$i">' . $i . '</option>';
                        }
                        ?>
                    </select>
                </div>

                <div class="col-lg-3">
                    <span class=" col-lg-12 fw-bold pass_year">📅Pass Year</span>
                    <select class=" col-lg-12 mt-1 bg-transparent ipass_year">
                        <?php
                        for ($i = 1800; $i <= 2025; $i++) {
                            echo '<option value="$i">' . $i . '</option>';
                        }
                        ?>
                    </select>
                </div>

                <div class="row mt-4">
                    <div class="col-lg-3">
                        <input class="address col-lg-12 mb-3 bg-transparent border border-top-0 border-start-0 border-end-0 border-dark text-white" type="text" name="wing" placeholder="Wing/Flat No">
                    </div>
                    <div class="col-lg-3">
                        <input class="address col-lg-12 mb-3 bg-transparent border border-top-0 border-start-0 border-end-0 border-dark text-white" type="text" name="Building" placeholder="Building/Society">
                    </div>
                    <div class="col-lg-3">
                        <input class="address col-lg-12 mb-3 bg-transparent border border-top-0 border-start-0 border-end-0 border-dark text-white" type="text" name="Area" placeholder="Area">
                    </div>
                    <div class="col-lg-3">
                        <input class="address col-lg-12 mb-3 bg-transparent border border-top-0 border-start-0 border-end-0 border-dark text-white" type="text" name="City" placeholder="City">
                    </div>
                </div>


                <div class="row mt-3">
                    <div class="col-lg-6">
                        <input class="address col-lg-12 mb-3 bg-transparent border border-top-0 border-start-0 border-end-0 border-dark text-white" type="text" name="Landmark" placeholder="Land Mark">
                    </div>
                    <div class="col-lg-6">
                        <input class="address col-lg-12 mb-3 bg-transparent border border-top-0 border-start-0 border-end-0 border-dark text-white" type="text" name="Pincode" placeholder="Pin Code">
                    </div>
                </div>


                <div class="row">

                    <div class=" col-lg-3">
                        <span class=" col-lg-12 mb-1 fw-bold dob">📅Date of Birth</span>

                        <input class="idob col-lg-12 mb-2 bg-transparent border border-top-0 border-start-0 border-end-0 border-dark" type="date" name="dob" placeholder="">
                    </div>

                    <div class="col-lg-3">
                        <span class="col-lg-12 fw-bold bloodgrp">💉Blood group</span>
                        <select class="ibloodgrp col-lg-12 mt-1 bg-transparent" >
                            <option name="bg"> Blood Group </option>
                            <option name="A+"> A+ </option>
                            <option name="A-"> A- </option>
                            <option name="b+"> B+ </option>
                            <option name="B-"> B- </option>
                            <option name="AB+"> AB+ </option>
                            <option name="Ab-"> AB- </option>
                            <option name="O+"> O+ </option>
                            <option name="O-"> O- </option>
                        </select>
                    </div>

                    <div class="col-lg-3">
                        <span class="col-lg-12 mb-1 fw-bold">🌎Country</span>

                        <select class="col-lg-12 bg-transparent">
                            <option name="country"> Country </option>
                            <option name="India"> India </option>
                        </select>
                    </div>

                    <div class="col-lg-3">
                        <span class="col-lg-12 mb-1 fw-bold">🗽State</span>
                        <select class="col-lg-12 bg-transparent">
                            <option name="state"> select state </option>
                            <option name="Andra pradesh"> Andra Pradesh </option>
                            <option name="Arunachal pradesh"> Arunachal Pradesh </option>
                            <option name="Assam"> Assam </option>
                            <option name="Bihar"> Bihar </option>
                            <option name="Chattisgarh"> Chattisgarh </option>
                            <option name="Delhi"> Delhi </option>
                            <option name="Goa"> Goa </option>
                            <option name="haryana">Haryana </option>
                            <option name="Himachal Pradesh"> Himachal Pradesh </option>
                            <option name="Jarkhand"> Jarkhand </option>
                            <option name="Karnataka"> Karnataka </option>
                            <option name="Kerala"> Kerala </option>
                            <option name="Madhya Pradesh"> Madhya Pradesh </option>
                            <option name="Maharashtra"> Maharashtra </option>
                            <option name="manipur"> manipur </option>
                            <option name="meghalaya"> meghalaya </option>
                            <option name="mizoram"> mizoram </option>
                            <option name="nagaland"> nagaland </option>
                            <option name="odisa"> odisa </option>
                            <option name="Punjab"> punjab </option>
                            <option name="rajashtan">rajashtan </option>
                            <option name="sikkim"> sikkim </option>
                            <option name="tamil nadu"> tamil nadu</option>
                            <option name="teleangana"> telangana </option>
                            <option name="uttarakhand"> uttarakhand </option>
                            <option name="uttar pradeshh"> uttar pradesh</option>
                            <option name="West Bengal"> West bengal</option>
                        </select>
                    </div>

                </div>

                <div class="row mt-3">
                    <div class="col-lg-6">
                        <input class="col-lg-12 mb-3 bg-transparent border border-top-0 border-start-0 border-end-0 border-dark text-white" type="text" name="ref" placeholder="Reference By">
                    </div>
                    <div class="col-lg-6">
                        <input class="col-lg-12 mb-3" type="file" name="file" placeholder="Upload Your Photo">
                    </div>
                </div>

                <div class="row">
                    <span class="col-lg-3"></span>
                    <button class=" col-lg-6  mb-3  mr-4 ml-4 border-1 border-dark rounded-pill text-center " type="Submit" Value="Submit" > Submit </button>  
                
                </div> 


        </form>


    </body>
</html>

