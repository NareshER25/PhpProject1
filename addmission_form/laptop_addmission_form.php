<html>
    <head>
    <title>
        Addmission Form
    </title>
        <style>
            body
            {
                background: #988eed;
                margin: 0px;
                padding: 0px;
                
            }
            .container
            {
                max-width: 700px;
                margin: 40px auto;
                padding: 30px;
                box-shadow: 0 4px 10px rgba(0 , 0, 0, 0.1);
                border-radius: 5px;
                border:  2px white;
                background: darkslateblue;
            
            }
            h2
            {
                text-align: center;
                color: white;
                border: 1px solid white;
                border-radius: 3px;
                padding-top: 10px;
                padding-bottom: 10px;
            }
            .one
            {
                color: white;
            }
            .two
            {
                
            }
            button
            {
               padding-left: 250px;
               padding-right: 250px;
               border-radius: 10px;
               border: 1px solid white;
               
                
            }
            #fname
            {
                
            }
            </style>
    </head>
    <body>
        <div class="container">
            <h2>Admission Form</h2>
            <form id="adform"> 
                <input type="text" id="fname" placeholder="First Name">
                
                <input type="text" id="Mname" placeholder="Middle Name">
                 
                <input type="text" id="lname" placeholder="Last Name">
                
                <input type="tel" id="tel" placeholder="Enter mobile no">
                <br>
                <br>
                <input type="text" id="address" placeholder="Email Address">
                
                
                <label class="one"> Select Gender :</label>
                
                <input type="radio" name="option" value="male">Male
                <input type="radio" name="option" value="female">Female
                <input type="radio" name="option" value="other"> Other
                
                <br>
                <br>
                <label class="one"> Education </label> 
                
                <label class="two">
                <select>
                    <option name="eduction">Education</option>
                    <option name="SSC"> SSC </option>
                    <option name="HSC"> HSC </option>
                    <option name="Gradution"> Graduation </option>
                    <option name="Diploma"> Diploma </option>
                    <option name="Post Graduation"> Post Graduation </option>
                </select>
                </label>
                
                
                <label class="one"> language </label>
                
                <label class="two">
                    <select>
                        <option name="language"> Language </option>
                        <option name="marathi"> Marathi </option>
                        <option name="Hindi"> Hindi </option>
                        <option name="Gujrati"> Gujrati </option>
                        <option name="English"> English </option>
                        <option name="others"> Others </option>
                    </select>
                </label>
                
                
                <label class="one">Percentage</label>
                
                <select id="per" >
                <?php
                for($i=1;$i<=100;$i++)
                {
                    echo '<option value="$i">'.$i.'</option>';
                }
                ?>
                </select>
                
                <label class="one"> Passing Year</label>
                
                <select>
                <?php
                for($i=1800;$i<=2025;$i++)
                {
                    echo '<option value="$i">'.$i.'</option>';
                }
                ?>
                </select>
                
                <br>
                <br>
                <input type="text" name="wing" placeholder="Wing/Flat No">

                <input type="text" name="Building" placeholder="Building/Society">
                
                <input type="text" name="Area" placeholder="Area">
                
                <input type="text" name="City" placeholder="City">
                <br>
                <br>
                <input type="text" name="Landmark" placeholder="Land Mark">
                <input type="text" name="Pincode" placeholder="Pin Code">
                <br>
                <br>
                <label class="one">Date of Birth
                <br>
                <input type="date" name="dob" placeholder="">
                
                
                <label class="one"> Blood group </label>
                
                <select>
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
                
                <label class="one"> Country </label>
                
                <select>
                    <option name="country"> Country </option>
                    <option name="India"> India </option>
                </select>
                
                <label class="one"> State </label>
               
                <select>
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
                <br><br>
                <input type="text" name="ref" placeholder="Reference By">
                
                <input type="file" name="file" placeholder="Upload Your Photo">
                <br>
                <br>
                <br>
            </form>
            <button type="Submit" Value="Submit" > Submit </button>
        </div>
    </body>
</html>



