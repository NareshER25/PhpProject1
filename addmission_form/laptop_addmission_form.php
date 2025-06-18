<html>
    <head>
    <title>Addmission Form </title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
    </head>
    <body>
        <div>
            <h2>Admission Form</h2>
            <form id="adform"> 
                <input type="text" id="fname" placeholder="First Name">
                
                <input type="text" id="Mname" placeholder="Middle Name">
                 
                <input type="text" id="lname" placeholder="Last Name">
                
                <input type="tel" id="tel" placeholder="Enter mobile no">
               
                <input type="text" id="address" placeholder="Email Address">
                
                <label class="one"> Select Gender :</label>
                
                <input type="radio" name="option" value="male">Male
                <input type="radio" name="option" value="female">Female
                <input type="radio" name="option" value="other"> Other
                
                
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
                
                
                <input type="text" name="wing" placeholder="Wing/Flat No">

                <input type="text" name="Building" placeholder="Building/Society">
                
                <input type="text" name="Area" placeholder="Area">
                
                <input type="text" name="City" placeholder="City">
                
                <input type="text" name="Landmark" placeholder="Land Mark">
                
                <input type="text" name="Pincode" placeholder="Pin Code">
                
                <label class="one">Date of Birth</label>
                
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
                
                <input type="text" name="ref" placeholder="Reference By">
                
                <input type="file" name="file" placeholder="Upload Your Photo">
                
            </form>
            <button type="Submit" Value="Submit" > Submit </button>
        </div>
    </body>
</html>



