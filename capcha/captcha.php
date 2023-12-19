<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
   <title>  <?php echo 'faqs'.'|'.$site_title; ?>  </title>
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


<canvas id="prob-canvas" width="200" height="100"
style="border:1px solid #d3d3d3;">
Your browser does not support the canvas element.
</canvas>
<div id="human-valid">
  <div>
    <button id="prove-it" button-func="notARobot()">Not a Robot</button>
    <span id="prompt"><- click to prove you are human!</span>
  </div>
  <div id="human-block">
  </div>
</div>

<script>
	$('#prove-it').click(function(){
  const data = $(this).attr('button-func');
  $('#prompt').remove();
  eval(data);
})

$('#solve-button').click(function(){
  const data = $(this).attr('button-func');
  eval(data);
});

function notARobot(){
  let a = Math.floor((Math.random() * 100) + 1);
  let b = Math.floor((Math.random() * 100) + 1);
  // let question = `${a} + ${b}`
  let answer = `${a + b}`;
  const verify = `<div id="q-block"><div id="human-question"></div><input id="human-solution"></input><button id="solve-button" onclick="solveHuman(${answer})">Submit</button></div>`
  let canvas = document.getElementById('prob-canvas');
  let canvasText = canvas.getContext("2d");
  canvasText.font = "36px san-serif";
  canvasText.fillText(`${a} + ${b}`,50,50);
  $('#human-block').append(verify);
  $('#prove-it').remove();
}

function solveHuman(ans){
  let solution = parseInt(ans);
  if (parseInt($('#human-solution').val()) === solution){
    $('#q-block').remove();
    $('#human-block').append("You're human! Please wait for reload!");
  } 
  else {
    $('#q-block').remove();
    $('#human-block').append("No droids or bad maths people allowed! Please wait for reload!");
  }
  setTimeout(function(){ window.location.href = window.location.href; }, 3000);
}
	
</script>
</body>
</html>

