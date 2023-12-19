<?php
if(isset($_POST['code']) && isset($_POST['number']))
{
	
	// Authorisation details.
	$username = "ritamrjk@gmail.com";
	$hash = "0cecc56f63c736963698dfb34da3487647a34e460bb0e00bdcc0d9f7af2d1174";

	// Config variables. Consult http://api.textlocal.in/docs for more info.
	$test = "0";


	// Data for text message. This is the text message data.
	$sender = "BSWSTN"; // This is who the message appears to be from.
	$numbers = $_POST['code'].$_POST['number']; // A single number or a comma-seperated list of numbers
	$message = $_POST['message'];
	// 612 chars or less
	// A single number or a comma-seperated list of numbers
	$message = urlencode($message);
	$data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
	$ch = curl_init('http://api.txtlocal.com/send/?');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($ch); // This is the result from the API
	if($result == true){
		echo "<script>alert('Successful')</script>";
	}
	curl_close($ch);
	}
?>
<div id="contact-form">
	<div>
		<h1>send sms to the donors</h1> 
	</div>
		<p id="failure">Oopsie...message not sent.</p>  
		<p id="success">Your message was sent successfully. Thank you!</p>

		   <form method="post" action="msg.php">
			<div>
		      <label for="name">
		      	<span class="required">Username: *</span> 
		      	<input type="text" id="name" name="name" value="" placeholder="Your Name" required="required" tabindex="1" autofocus="autofocus" />
		      </label> 
			</div>
			<!-- <div>
		      <label for="hash">
		      	<span class="required">Hash: *</span>
		      	<input type="text" id="hash" name="hash" value="" placeholder="Your Hash Key" tabindex="2" required="required" />
		      </label>  
			</div> -->
			<!-- <div>
		      <label for="sender">
		      	<span class="required">Sender: *</span>
		      	<input type="text" id="sender" name="sender" value="" placeholder="Sender" tabindex="3" required="required" />
		      </label>  
			</div> -->
									<div>
		      <label for="country code:">
		      	<span class="required">Country Code: *</span>
					<select name="code">
						<option value="91">India +91</option>
						<option value="977">Nepal +977</option>
					</select>
		      </label>  
			</div>
						<div>
		      <label for="number">
		      	<span class="required">Number: *</span>
		      	<input type="number" id="number" name="number" value="" placeholder="Number" tabindex="4" required="required" />
		      </label>  
			</div>
			<div>		          
		      <label for="message">
		      	<span class="required">Message: *</span> 
		      	<textarea id="message" name="message" placeholder="Please write your message here." tabindex="5" required="required" style="text-align: justify">
</textarea> 
		      </label>  
			</div>
			<div>		           
		      <button name="submit" type="submit" id="submit" >SEND</button> 
			</div>
		   </form>

	</div>
  