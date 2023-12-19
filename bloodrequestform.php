
<?php
if(isset($_POST['submit']))
{
	include('config/connection.php');
	$pname=$_POST['pname'];
	$p_age=$_POST['page'];
	$rname=$_POST['rname'];
	$pbloodgroup=$_POST['pbloodgroup'];
	$rbloodgroup=$_POST['rbloodgroup'];
	$date=$_POST['date'];
	$units=$_POST['units'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$address=$_POST['address'];
	$city=$_POST['city'];
	$state=$_POST['state'];
	$raddress=$_POST['raddress'];
	$hospital=$_POST['hospital'];
	$comments=$_POST['comments'];				
	$insert="INSERT INTO bloodneed(patient,request_by,p_age,p_bloodgroup,r_bloodgroup,dor,units,email,phone,	address,city,	state,r_address,hospital,comment)
	 VALUES('$pname','$rname','$p_age','$pbloodgroup','$rbloodgroup','$date','$units','$email','$phone','$address','$city','$state','$raddress','$hospital','$comments')";
	$r=mysqli_query($dbc, $insert);
	if($r)
	{
		echo "<script>alert('Successful')</script>";
	}
	else {
	echo "<script>alert('Unsuccessful')</script>";
	}
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
   <title>  Blood Request Form</title>
    <!-- Bootstrap -->
    <link rel="icon" href="images/logocopy.png" type="image/jpg" style="border-radius: 90%" media="screen" title="no title" charset="utf-8"/>
    <link rel="stylesheet" href="css/font-awesome.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/campform.css" rel="stylesheet" />
    <link rel="js/bootstrap.min.js" rel="stylesheet">
<link rel="stylesheet" href="config/style.css" />
    <?php include('config/style.css') ?>	     
	<?php include('config/js.php') ?>
	</head>
<!-- END -->
<body>


<div class="container">

    <form class="well form-horizontal" action=" bloodrequestform.php" method="post"  id="contact_form">
<fieldset>

<!-- Form Name -->
<legend>Create Request</legend>

	<div align="right"  class="linktxt"  style="color: red">* Mark fields are mandatory</div>	
				<div class="left" style="width:265px;">	</div>
<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label">Patient's Name<font class="formclr" style="color: red">*</font>
  	</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="pname" placeholder="Patient's Name" class="form-control"  type="text"/>
    </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">Patient's Age<font class="formclr" style="color: red">*</font>
  	</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="page" placeholder="Age of patient" class="form-control"  type="text"/>
    </div>
  </div>
</div>
<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >Name<font class="formclr" style="color: red">*</font></label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-road"></i></span>
  <input name="rname" placeholder="Name" class="form-control"  type="text"/>
    </div>
  </div>
</div>


<!-- Text input-->
 <div class="form-group"> 
  <label class="col-md-4 control-label">Paitent's Blood Group<font class="formclr" style="color: red">*</font></label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="	glyphicon glyphicon-tint"></i></span>
    <select name="pbloodgroup" class="form-control selectpicker" >
      <option value=" " >Select</option>
      <option>A+</option>
      <option>O+</option> 
<option>B+</option>
     <option>AB+</option> 
<option>A-</option>
     <option>O-</option> 
<option>B-</option>
   <option>AB-</option> 
      <option>Other</option> 
    </select>
    </div>
  </div>
</div>

<div class="form-group"> 
  <label class="col-md-4 control-label">Your Blood Group<font class="formclr" style="color: red">*</font></label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="	glyphicon glyphicon-tint"></i></span>
    <select name="rbloodgroup" class="form-control selectpicker" >
      <option value=" " >Select</option>
      <option>A+</option>
      <option>O+</option> 
<option>B+</option>
     <option>AB+</option> 
<option>A-</option>
     <option>O-</option> 
<option>B-</option>
   <option>AB-</option> 
      <option>Other</option> 
    </select>
    </div>
  </div>
</div>


<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >Date</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
  <input name="date" placeholder="Date" class="form-control"  type="date"/>
    </div>
  </div>
</div>
  
  
  <div class="form-group">
  <label class="col-md-4 control-label">Number of units required<font class="formclr" style="color: red">*</font></label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-menu-down"></i></span>
  <input  name="units" class="form-control"  type="number"/>
    </div>
  </div>
</div>


<!-- Text input-->
       <div class="form-group">
  <label class="col-md-4 control-label">E-Mail<font class="formclr" style="color: red">*</font></label>  
    <div class="col-md-4 inputGroupContainer">
    	    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
  <input name="email" placeholder="E-Mail Address" class="form-control"  type="text"/>
  
    </div>
    </div>
    </div>

<!-- Text input-->
       
<div class="form-group">
  <label class="col-md-4 control-label">Phone</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
  <input name="phone" placeholder="(845)555-1212" class="form-control" type="text"/>
    </div>
  </div>
</div>

<!-- Text input-->
      
<div class="form-group">
  <label class="col-md-4 control-label">Address</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <input name="address" placeholder="Address" class="form-control" type="text"/>
    </div>
  </div>
</div>

<!-- Text input-->
 
<div class="form-group">
  <label class="col-md-4 control-label">City</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <input name="city" placeholder="city" class="form-control"  type="text"/>
    </div>
  </div>
</div>

<!-- Select Basic -->
   
<div class="form-group"> 
  <label class="col-md-4 control-label">State</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <select name="state" class="form-control selectpicker" >
      <option value=" " >Please select your state</option>
      <option>Andhra Pradesh</option> 
<option>Arunachal Pradesh</option>
<option>Assam</option>
<option>Bihar </option>
<option>Chhattisgarh</option>
<option>Goa</option>
<option>Gujarat </option>
<option>Haryana </option>
<option>Himachal Pradesh </option>
<option>Jammu and Kashmir</option>
<option>Jharkhand</option>
<option>Karnatak</option>
<option>Kerala </option>
<option>Madhya Pradesh </option>
<option>Maharashtra </option>
<option>Manipur </option>
<option>Meghalaya</option>
<option>Mizoram</option>
<option>Nagaland</option>
<option>Odisha </option>
<option>Punjab </option>
<option>Rajasthan </option>
<option>Sikkim </option>
<option>Tamil Nadu </option>
<option>Telangana</option>
<option>Tripura </option>
<option>Uttar Pradesh</option>
<option>Uttarakhand </option>
<option>West Bengal </option>
      
    </select>
  </div>
</div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label">Your Address</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <input name="raddress" placeholder="Address" class="form-control" type="text"/>
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >Hospital</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="hospital" placeholder="Hospital" class="form-control"  type="text"/>
    </div>
    <p style="margin-bottom:  ; text-transform: lowercase">The name and address of the hospital where the patient is admitted. Please mention the city as well.</p>
  </div>
</div>



<!-- Text area -->
  
<div class="form-group">
  <label class="col-md-4 control-label">Additional Comments</label>
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
        	<textarea class="form-control" name="comments" placeholder="Message"></textarea>
  </div>
  </div>
</div>
<!-- Success message -->
<!-- <div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Thanks for contacting us, we will get back to you shortly.</div> -->

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4">
    <button name="submit"    class="btn btn-warning"  type="submit">Send <span class="glyphicon glyphicon-send"></span></button>
  </div>
</div>

</fieldset>
</form>
</div><!-- /.container -->
    
    <!-- <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js'></script>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js'></script>
    	<script src="js/index.js"></script>
    <script type="text/javascript">
     $(document).ready(function() {
    $('#contact_form').bootstrapValidator({
        // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
           name: {
                validators: {
                        stringLength: {
                        min: 4,
                    },
                        notEmpty: {
                        message: 'Please supply Patients Name'
                    }
                }
            },
              fields: {
           age: {
                validators: {
                        stringLength: {
                        min:1,
                        max:100,
                    },
                        notEmpty: {
                        message: 'Please supply age of patient '
                    }
                }
            },
                fields: {
           name: {
                validators: {
                        stringLength: {
                        min: 4,
                    },
                        notEmpty: {
                        message: 'Please supply Patients Name'
                    }
                }
            },
           bloodgroup: {
                validators: {
                    },
                    notEmpty: {
                        message: 'Please supply Blood Group of patient'
                    }
                }
            },
               bloodgroup: {
                validators: {
                    },
                    notEmpty: {
                        message: 'Please supply your Blood Group'
                    }
                }
            },
            email: {
                validators: {
                    notEmpty: {
                        message: 'Please supply your email address'
                    },
                    emailAddress: {
                        message: 'Please supply a valid email address'
                    }
                }
            },
            phone: {
                validators: {
                    notEmpty: {
                        message: 'Please supply your phone number'
                    },
                    phone: {
                        country: 'IN',
                        message: 'Please supply a vaild phone number with area code'
                    }
                }
            },
            address: {
                validators: {
                     stringLength: {
                        min: 8,
                    },
                    notEmpty: {
                        message: 'Please supply your street address'
                    }
                }
            },
            city: {
                validators: {
                     stringLength: {
                        min: 4,
                    },
                    notEmpty: {
                        message: 'Please supply your city'
                    }
                }
            },
            state: {
                validators: {
                    notEmpty: {
                        message: 'Please select your state'
                    }
                }
            },
            employee: {
                validators: {
                    notEmpty: {
                        message: 'Please supply your employee'
                    },
                  notEmpty: {
                        message: 'Please supply your employee'
                    }
                }
            },
             date: {
                validators: {
                    notEmpty: {
                        message: 'Please supply your date'
                    },
                     notEmpty: {
                        message: 'Please supply a valid date'
                    }
                }
            },
            comment: {
                validators: {
                      stringLength: {
                        min: 10,
                        max: 200,
                        message:'Please enter at least 10 characters and no more than 200'
                    },
                    notEmpty: {
                        message: 'Please supply a description of your camp'
                    }
                    }
                }
            }
        })
        .on('success.form.bv', function(e) {
            $('#success_message').slideDown({ opacity: "show" }, "slow") // Do something ...
                $('#contact_form').data('bootstrapValidator').resetForm();

            // Prevent form submission
            e.preventDefault();

            // Get the form instance
            var $form = $(e.target);

            // Get the BootstrapValidator instance
            var bv = $form.data('bootstrapValidator');

            // Use Ajax to submit form data
            $.post($form.attr('action'), $form.serialize(), function(result) {
                console.log(result);
            }, 'json');
        });
});
</script> -->
    </body>
</html>