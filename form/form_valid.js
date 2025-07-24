$(document).ready(function () {
    $(".sub").click(function () {
        $("#su").animate({
            width: '70%'

        });
    });
});
$(document).ready(function () {
    let today = new Date();
    let newmonths = ((today.getMonth()+1) < 10 )? ("0" + (today.getMonth()+1)): (today.getMonth()+1);
    let lastdate = (today.getFullYear() - 18) + '-' + (newmonths) + '-' + today.getDate();    
    $('#dob').attr('min', '1996-01-01');
    $('#dob').attr('max', lastdate);
});

let isvalid = true;
function testerror()
{
    isvalid = true;
    $(".inpu").each(function (index, element) {
        const val_to_check = $(this).val();
        const mess = document.getElementById($(this).attr('id') + "_error");
        const pattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        const namepattern = /^[a-zA-Z\\s]+$/;
        if ($(this).attr('id') === 'fname' || $(this).attr('id') === 'mname' || $(this).attr('id') === 'ln' || $(this).attr('id') === 'wing' || $(this).attr('id') === 'area' || $(this).attr('id') === 'city' || $(this).attr('id') === 'building' || $(this).attr('id') === 'reference' || $(this).attr('id') === 'dob' || $(this).attr('id') === 'landmark')
        {
            if ($(this).attr('id') === 'fname' || $(this).attr('id') === 'mname' || $(this).attr('id') === 'ln')
            {
                if (!(namepattern.test(val_to_check)))
                {
                    mess.innerText = 'Please Enter a Valid Name';
                    mess.style.display = 'block';
                    $(this).addClass("inpu_error");
                    $(".inpu_error:first").focus();
                    isvalid = false;
                } else
                {
                    mess.style.display = 'none';
                    $(this).removeClass("inpu_error");
                }
            } else if ($(this).attr('id') === 'dob')
            {
                let dobVal = $('#dob').val();
                let dobError = document.getElementById("dob_error");
                if (dobVal !== '')
                {
                    let dobDate = new Date(dobVal);
                    let today = new Date();
                    let date18YearsAgo = new Date();
                    date18YearsAgo.setFullYear(today.getFullYear() - 18);
                    if (dobDate > date18YearsAgo) {
                        dobError.innerText = 'You must be at least 18 years old';
                        dobError.style.display = 'block';
                        $('#dob').addClass("inpu_error");
                        $('#dob').focus();
                        isvalid = false;
                    } else
                    {
                        dobError.style.display = 'none';
                        $('#dob').removeClass("inpu_error");
                    }
                } else
                {
                    mess.innerText = 'Please fill the input field';
                    mess.style.display = 'block';
                    $(this).addClass("inpu_error");
                    $(".inpu.inpu_error:first").focus();
                    isvalid = false;
                }


            } else
            {
                if (val_to_check === '')
                {
                    mess.innerText = 'Please fill the input field';
                    mess.style.display = 'block';
                    $(this).addClass("inpu_error");
                    $(".inpu.inpu_error:first").focus();
                    isvalid = false;
                } else
                {
                    mess.style.display = 'none';
                    $(this).removeClass("inpu_error");
                }
            }
        } else if ($(this).attr('id') === 'em' || $(this).attr('id') === 'mob' || $(this).attr('id') === 'pincode')
        {
            if ($(this).attr('id') === 'em')
            {
                if (!(pattern.test(val_to_check)))
                {
                    mess.innerText = "Please Fill the valid email";
                    mess.style.display = 'block';
                    $(this).addClass("inpu_error");
                    $(".inpu.inpu_error:first").focus();
                    isvalid = false;
                } else
                {
                    mess.style.display = "none";
                    $(this).removeClass("inpu_error");
                }
            } else if ($(this).attr('id') === 'mob')
            {
                if (val_to_check === '' || val_to_check.includes(" "))
                {
                    mess.innerText = (val_to_check === '') ? 'Please fill the input field' : 'Spaces are not allowed';
                    mess.style.display = 'block';
                    $(this).addClass("inpu_error");
                    $(".inpu.inpu_error:first").focus();
                    isvalid = false;
                } else if (!(val_to_check.length === 10) || isNaN(val_to_check))
                {
                    mess.innerText = isNaN(val_to_check) ? 'Enter Number only' : 'Please Enter Number 10 digit Number';
                    mess.style.display = 'block';
                    $(this).addClass("inpu_error");
                    $(".inpu.inpu_error:first").focus();
                    isvalid = false;
                } else
                {
                    mess.style.display = "none";
                    $(this).removeClass("inpu_error");
                }
            } else if ($(this).attr('id') === 'pincode')
            {
                if (val_to_check === '' || val_to_check.includes(" "))
                {
                    mess.innerText = (val_to_check === '') ? 'Please fill the input field' : 'Spaces are not allowed';
                    mess.style.display = 'block';
                    $(this).addClass("inpu_error");
                    $(".inpu.inpu_error:first").focus();
                    isvalid = false;
                } else if (!(val_to_check.length === 6) || isNaN(val_to_check))
                {
                    mess.innerText = isNaN(val_to_check) ? 'Enter Number only' : 'Please Enter 6 digit Pincode';
                    mess.style.display = 'block';
                    $(this).addClass("inpu_error");
                    $(".inpu.inpu_error:first").focus();
                    isvalid = false;
                } else
                {
                    mess.style.display = "none";
                    $(this).removeClass("inpu_error");
                }
            }
        } else if ($(this).attr('name') === 'option')
        {
            let ischecked = $("input[name = 'option']:checked").length > 0;
            let sel_mess = document.getElementById("gender_error");
            if (!(ischecked))
            {
                sel_mess.innerText = 'Please Select Gender';
                sel_mess.style.display = 'block';
                $("input[name = 'option']").addClass("input_error");
                $("input[name = 'option']").focus();
            } else
            {
                sel_mess.style.display = 'none';
                $("input[name = 'option']").removeClass("input_error");
            }
        }
    });
    $(".sel").each(function (index, element) {
        const sel_to_check = $(this).val();
        const sell_mess = document.getElementById($(this).attr('id') + "_sel");
        if (sel_to_check === '')
        {
            sell_mess.innerText = 'Please fill the input field';
            sell_mess.style.display = 'block';
            $(this).addClass("inpu_error");
            $(".inpu.inpu_error:first").focus();
            isvalid = false;
        } else {
            sell_mess.style.display = 'none';
            $(this).removeClass("inpu_error");
        }
    });
}
function fmllname()
{
    testerror();
    return isvalid;
}