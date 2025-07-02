var isvalid = true;


function firstname()
{
    let firstn = document.getElementById("fname").value;
    let ffnerror = document.getElementById("fnerror");

    if (firstn.includes(" ") || (firstn === "") )
    {
        firstn.includes(" ")?(ffnerror.textContent='First Name Should Not Conatin space'):(ffnerror.textContent='First Name Should Not Be Empty');
        ffnerror.style.display = 'block';
        isvalid = false;
    
    }
    else
    {
       
        ffnerror.style.display = "none";
      
    }
    
}

function middlename()
{
    let middlen = document.getElementById("mname").value;
    let mmnerror = document.getElementById("mnerror");
    if (middlen.includes(" ") || middlen ==="")
    {
        middlen.includes(" ")?(mmnerror.textContent='Middle Name Should Not Conatin Space'):(mmnerror.textContent='Middle Name Should Not Be Empty');
        mmnerror.style.display = 'block';
        isvalid = false;
    } 
     else
    {
        mmnerror.style.display = "none";
    }
    

}

function lastname()
{

    let lastn = document.getElementById("lname").value;
    let llnerror = document.getElementById(("lnerror"));

    if (lastn.includes(" ") || lastn === "")
    {
        lastn.includes(" ")?(llnerror.textContent='Last Name Should Not Contain Space'):(llnerror.textContent='Last Name Sould Not Be Empty');
        llnerror.style.display = 'block';
        isvalid = false;
    }  else
    {
        
        llnerror.style.display = "none";
       
    }
   
}


function mobileno()
{
    let num = document.getElementById("mob").value;
    let mobberror = document.getElementById("moberror");

    if (!(num.length=== 10) || isNaN(num))
    {
        isNaN(num) ? (mobberror.textContent='Enter Number only'):(mobberror.textContent='Please Enter Number 10 digit Number');
        mobberror.style.display = 'block';
        isvalid = false;
    } else
    {
       
        mobberror.style.display = "none";
        
    }
    
}

function email()
{
    let emaill = document.getElementById("em").value;
    let emailerrorr = document.getElementById("emailerror");
    if(emaill.includes("@") && emaill.includes("."))
    {
        emailerrorr.style.display = "none";
        
    } else
    {
        emailerrorr.textContent = 'Error Email Should Contain @ and Period';
        emailerrorr.style.display = 'block';
        isvalid = false;
        
    }
    
}


function gender()
{
    let male = document.getElementById("m").checked; //true
    let female = document.getElementById("f").checked; // false 
    let other = document.getElementById("o").checked; //false
    let gennerror = document.getElementById("generror");

    if (!male && !female && !other)
    {
        gennerror.textContent = 'Please Select Gender';
        gennerror.style.display = 'block';
        isvalid = false;
    } else
    {
        gennerror.textContent = '';
        gennerror.style.display = "none";
        
    }
   
}

function education()
{
    let educationn = document.getElementById("education").value;
    let edderror = document.getElementById("ederror");
    if (educationn === "")
    {
        edderror.textContent = 'Please Select The education field';
        edderror.style.display = 'block';
        isvalid = false;
    } else
    {
        edderror.textContent = '';
        edderror.style.display = "none";
       
    }
    
}
function language()
{

    let languagee = document.getElementById("language").value;
    let langgerror = document.getElementById("langerror");
    if (languagee === "")
    {
        langgerror.textContent = 'Please Select The language';
        langgerror.style.display = 'block';
        isvalid = false;
    } else
    {
        langgerror.textContent = '';
        langgerror.style.display = "none";
        
    }
    
}

function percentage()
{

    let percentagee = document.getElementById("percentage").value;
    let perrerror = document.getElementById("pererror");
    if (percentagee === "")
    {
        perrerror.textContent = 'Please Select The Percentage';
        perrerror.style.display = 'block';
        isvalid = false;
    } else
    {
        perrerror.textContent = '';
        perrerror.style.display = "none";
        
    }
    
}

function passyear()
{

    let passyearr = document.getElementById("passyear").value;
    let passserror = document.getElementById("passerror");
    if (passyearr === "")
    {
        passserror.textContent = 'Please Select The Pass Year';
        passserror.style.display = 'block';
        isvalid = false;
    } else
    {
        passserror.textContent = '';
        passserror.style.display = "none";
       
    }
    
}

function wing()
{

    let wingg = document.getElementById("wing").value;
    let winggerror = document.getElementById("wingerror");


    if (wingg === "")
    {
        winggerror.textContent = 'Please Fill the Wing/flat No';
        winggerror.style.display = 'block';
        isvalid = false;
    } else
    {
        winggerror.textContent = '';
        winggerror.style.display = "none";
        
    }
    

}

function building()
{

    let buildingg = document.getElementById("building").value;
    let buildderror = document.getElementById("buildingerror");
    if (buildingg === "")
    {
        buildderror.textContent = 'Please Fill the Building';
        buildderror.style.display = 'block';
        isvalid = false;
    }
    else
    {
        buildderror.textContent = '';
        buildderror.style.display = "none";
        
    }

}

function area()
{

    let Areaa = document.getElementById("area").value;
    let areaaerror = document.getElementById("areaerror");
    if (Areaa === "")
    {
        areaaerror.textContent = 'Please Fill the Area';
        areaaerror.style.display = 'block';
        isvalid = false;
    } else
    {
        
        areaaerror.style.display = "none";
        
    }
}
    
    function city()
    {
          
    let cityy=document.getElementById("city").value;
    let cityyerror=document.getElementById("cityerror");
    if(cityy=== "")
    {
        cityyerror.textContent = 'Please Fill the city';
        cityyerror.style.display = 'block';
        isvalid = false;
    }  
    else
    {
        cityyerror.style.display='none';
    }
        
    }
    
    function landmark()
    {
        
            
    let landmarkk=document.getElementById("landmark").value;
    let landmarkkerror=document.getElementById("landmarkerror");
    if(landmarkk=== "")
    {
        landmarkkerror.textContent="Please Fill the landmark";
        landmarkkerror.style.display='block';
        isvalid =false;
    }
    else
    {
        landmarkkerror.style.display="none";
    }
    }
    
    
      
function reference()
{

    let referencee=document.getElementById("reference").value;
    let referencerror=document.getElementById("referenceerror");
    if( referencee==="")
    {
        referencerror.textContent='please fill the reference by';
        referencerror.style.display='block';
        isvalid= false;
    }
    else
    {
        referencerror.style.display='none';
    }

}
    function bloodgroup()
    {
    let bloodgrp=document.getElementById("bldgrp").value;
    let bloodgrperror=document.getElementById("bloodgrouperror");
    if(bloodgrp==="")
    {
        bloodgrperror.textContent='please select the bloodgroup';
        bloodgrperror.style.dispaly='block';
        isvalid= false;
    }
    else
    {
        bloodgrperror.style.dispaly='none';
    }
    }
    
    function state()
    {
            let statee=document.getElementById("stateee").value;
            let staterrorr=document.getElementById("stateerror");
    if(statee==="")
    {
        staterrorr.textContent='Please Select The State';
        staterrorr.style.display='block';
        isvalid= false;
    }
    else
    {
        staterrorr.style.display='none';
    }
    }

    function country()
    {
    let countryyy=document.getElementById("countryy").value;
    let countryerrorr=document.getElementById("countryerror");
    if(countryyy==="")
    {
        countryerrorr.textContent='Please Select The Country';
        countryerrorr.style.display='block';
        isvalid=false;
    }
     else
    {
        countryerrorr.style.display='none';
    }
    }
    



function dob()
{
   
    let dobb=document.getElementById("dob").value;
    let doberrorr=document.getElementById("doberror");
    if(dobb==="")
    {
        doberrorr.textContent='Please Select The Date Of Birth';
        doberrorr.style.display='block';
        isvalid = false;
    }
   else
    {
        doberrorr.style.display='none';
    }
}

function pincode()
{

    let pincodee=document.getElementById("pincode").value;
    let pincodeerror=document.getElementById("pincodeerror");
    
    if(pincodee==="")
    {
        pincodeerror.textContent="Please Fill The Pincode";
        pincodeerror.style.display="block";
        isvalid = false;
    }
    else
    {
        pincodeerror.style.display="none";
       
    }
}
function choose()
{
    

     let choosee= document.getElementById("choose").value;
     let chooseerror=document.getElementById("choserror");
     
     if (choosee==="")
     {
         chooseerror.textContent='Please Select The Photo';
         chooseerror.style.display='block';
         isvalid=false;
     }
     else
     {
         chooseerror.style.display='none';
     }
}

function fmllname()
{
    
    

    
    firstname() ;
    middlename();
    lastname();
    mobileno();
    email();
    gender();
    education();
    language();
    percentage();
    passyear();
    wing();
    building();
    area();
    city();
    bloodgroup();
    state();
    country();
    dob();
    reference();
    choose();
    landmark();
    pincode();
    
    
    return isvalid;
}




