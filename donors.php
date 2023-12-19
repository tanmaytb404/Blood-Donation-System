<?php
			include('config/setup.php');
			session_start();
?>  
<!-- user login required code -->
<?php
include('config/connection.php'); 
	if(isset($_REQUEST['submit']))
	{
	$name=$_POST['name'];
	$username=$_POST['user_name'];
	$pwd=$_POST['user_password'];
	$dob=$_POST['date'];
	$sex=$_POST['sex'];
	$bloodgroup=$_POST['bloodgroup'];
	$weight=$_POST['weight'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$address=$_POST['address'];
	$city=$_POST['city'];
	$state=$_POST['state'];
	$diseas=$_POST['diseas'];
    $chk="";  
    foreach($diseas as $chk1)  
       {  
          $chk.= $chk1.",";  
       } 
	$insert="insert into donor_registration(name,user_name,pwd,dob,sex,bloodgroup,weight,email,phone,address,city,state,diseas) 
	values('$name','$username','$pwd','$dob','$sex','$bloodgroup','$weight','$email','$phone','$address','$city','$state','$chk')";
	$r=mysqli_query($dbc, $insert);

	if($r)
	{ 
		echo "<script>alert('Successful')</script>";
	} else {
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
	    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, width=device-width">
	    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	   <title>  <?php echo $page['title'].'|'.$site_title; ?>  </title>

	    <!-- Bootstrap -->
	    <link rel="icon" href="images/logocopy.png" type="image/jpg" style="border-radius: 90%" media="screen" title="no title" charset="utf-8"/>
	    <link rel="stylesheet" href="css/font-awesome.css">
	        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Aleo' rel='stylesheet'>
	    <link href="css/bootstrap.min.css" rel="stylesheet">
	    <link rel="js/bootstrap.min.js" rel="stylesheet">
	  	<link rel="stylesheet" href="config/style.css" />
	   <?php include('config/js.php') ?>
	</head>
<!-- END -->

<!-- START OF BODY PORTION -->	     
	<body>
		
<!-- wrapped body portion -->
		<div id="wrapper">
		    <div id="top">
		    	
		   	<?php include('template/activeuser.php'); ?>

			<marquee bgcolor="#228B22" behavior="alternate" style="height: 50px"><h3 style="font-family: Mangal; color: white; padding: 15px">Welcome to Bidhannagar Social Welfare Society &nbsp; <i class="fa fa-certificate" aria-hidden="true"></i> &nbsp;
			 বিধাননগর সোশ্যাল ওয়েলফেয়ার সোসাইটিতে আপনাকে স্বাগত জানাই   </h3></marquee>	 
	</div>		
<div style="font-size: medium; margin-bottom: -20px">			
<?php include('config/dropdown.php'); ?>
</div>
<!-- navigation menu using php data object:PDO -->

 
 <!--END TOP -->

<div class="container"  style="background-color: maroon; margin-top: 30px">

    <form class="well form-horizontal" action=" donors.php" method="post"  id="contact_form" style="margin-top: -20px" onsubmit="if(document.getElementById('agree').checked) { return true; } else { alert('Please indicate that you have read and agree to the Terms and Conditions and Privacy Policy');
     return false; }">
<fieldset>

<!-- Form Name -->
<legend><h3 style="text-transform: uppercase">Blood DONATION Form</h3></legend>

	<div align="right"  class="linktxt"  style="color: red">* Mark fields are mandatory</div>	
				<div class="left" style="width:265px;">	</div>
<style>
	.input-group-addon{
		width: 50px;
	}
</style>
<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label"> Name<font class="formclr" style="color: red">*</font></label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="name" placeholder=" Name" class="form-control" id="name"  type="text" required/>
    </div>
  </div>
</div>


<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label">Username</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="user_name" placeholder="Username" id="user_name" class="form-control"  type="text" required>
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
    	<p style="margin-bottom:  ; text-transform: lowercase">We recommend you enter the e-mail ID, which will help us get in touch with you in case you are not reachable by phone.
    	 It will be greater help if you could provide us your personal e-mail ID besides your corporate e-mail ID. You can always be reached to save a life!</p>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" >Password</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="user_password" placeholder="Password" class="form-control"  type="password" required>
    </div>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" >Confirm Password</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="confirm_password" placeholder="Password" class="form-control"  type="password" required>
    </div>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" >Date of Birth<font class="formclr" style="color: red">*</font></label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
  <input name="date" placeholder="min: 18yrs max:55yrs" class="form-control"  type="date"/>
    </div>
  </div>
</div>

<!-- radio checks -->
 <div class="form-group">
                        <label class="col-md-4 control-label">Select Your Gender:</label>
                        <div class="col-md-4" style="text-align: justify">
                        	                            <div class="radio">
                                <label>
                                    <input type="radio" name="sex" value="Male" checked="" />Male
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="sex" value="Female" /> Female
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="sex" value="Others" />Others
                                </label>
                            </div>                                                                             
                        </div>
                    </div>
                    <div class="form-group"> 
                    	
    <!-- Text input-->                	
  <label class="col-md-4 control-label">Blood Group<font class="formclr" style="color: red">*</font></label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="	glyphicon glyphicon-tint"></i></span>
    <select name="bloodgroup" class="form-control selectpicker" >
      <option value=" " >Select</option>
      <option>A+</option>
      <option>O+</option> 
<option>B+</option>
     <option>AB+</option> 
<option>A-</option>
     <option>O-</option> 
<option>B-</option>
   <option>AB-</option> 
    </select>
    </div>
  </div>
</div>

    <!-- Text input--> 
<div class="form-group">
  <label class="col-md-4 control-label">Weight<font class="formclr" style="color: red">*</font></label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-menu-down"></i></span>
  <input  name="weight" placeholder="(should be above 50 kg)" class="form-control"  type="number"/>
    </div>
  </div>
</div>

<!-- Text input-->    
<div class="form-group">
  <label class="col-md-4 control-label">Mobile Number<font class="formclr" style="color: red">*</font></label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
  <input name="phone" placeholder="+918899882277" class="form-control" type="text"/>
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
  <label class="col-md-4 control-label">City<font class="formclr" style="color: red">*</font></label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <input name="city" placeholder="city" class="form-control"  type="text"/>
    </div>
  </div>
</div>

<!-- Select Basic -->
<div class="form-group"> 
  <label class="col-md-4 control-label">State<font class="formclr" style="color: red">*</font></label>
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

<!-- Text input-->

<div class="form-group" style="border: 10px solid lightblue">
	<font class="subheadtxt" style="font-weight: bold">Please  check  your  eligibility  to  donate  blood</font>
</div>
			<div class="content" style="text-align: justify">
					<p><i class="glyphicon glyphicon-check"></i>&nbsp;My hemoglobin is not less than 12.5 grams.</p>		

					<p><i class="glyphicon glyphicon-check"></i>&nbsp;I am free from acute respiratory diseases and skin diseases.</p>	

					<p><i class="glyphicon glyphicon-check"></i>&nbsp;I do not carry any disease transmissible by blood transfusion.</p>

					<p><i class="glyphicon glyphicon-check"></i>&nbsp;I am not under medication for Malaria / Tuberculosis / Diabetes / Fits / Convulsions.</p>
					</div>
						 		

			<div class="content" style="text-align: justify">
							<style>
				.custom input[type=checkbox]{
    display: none;
    }
    label.custom span{
        margin-left: 5px;
        display: inline-block;
        user-select: none;
    }
    label.custom span::before{
        content: "\f00c";
        font-family: "FontAwesome";
        color: transparent;
        border-radius: 3px;
        background: white;
        border:1px dotted black;
        margin-right: 10px;
        padding: 0 5px;
        float: left;
    }
    label.custom input[type=checkbox]:checked + span::before{
        color: #fff;
        background: green;
    }
			</style>	
			<p>I have not suffered from &nbsp; <font class="formclr" style="color: red">#</font></p>		 		
			<p><label class='custom'><input type='checkbox' name='diseas[]' value='Hepatitis B' /><span>&nbsp; Hepatitis B</span></label></p>
    <p><label class='custom'><input type='checkbox' name='diseas[]' value='AIDS' /><span>&nbsp; AIDS</span></label></p>
    <p><label class='custom'><input type='checkbox' name='diseas[]' value='Cancer' /><span>&nbsp; Cancer</span></label></p>
    <p><label class='custom'><input type='checkbox' name='diseas[]' value='Kidney diseas' /><span>&nbsp; Kidney diseas</span></label></p>			 		
<p><label class='custom'><input type='checkbox' name='diseas[]' value='Heart disease' /><span>&nbsp; Heart disease</span></label></p>						 			
		</div>
	<input type="checkbox" required name="checkbox" value="check" id="agree" /> I have read the above eligibility criteria and confirm that I am eligible to donate blood.
<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4">
    <button name="submit" class="btn btn-warning" type="submit" id="submit" >Send <span class="glyphicon glyphicon-send"></span></button>
  </div>
</div>
</fieldset>
</form>
</div><!-- /.container -->
    
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js'></script>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js'></script>
    	<script src="js/index.js"></script>


<footer>
<?php include('template/footer.php'); ?>
	</footer>
</div>



    </body>
</html>