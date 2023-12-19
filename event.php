	<?php
			include('config/setup.php');
			session_start();
?>
<!-- user login required code -->
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
 <!-- banner -->
		    <div class="row">
  <div class="col-xs-6 col-sm-12">
	<img src="images/events-banner.jpg" height: 250px; style="border: 2px solid gray; max-width: 100%" class="responsive">
</div>
</div>
</div>
	   	 	<div class="jumbotron">
				<div id="details">
		<div class="row" style="margin-bottom: 20px">
		<div class="col-md-6" style="border: 1px dotted gray;;">
			<!-- <h3 style="color: yellowgreen; font-family: 'Righteous', cursive;">Our Team</h3> -->
			<img src="images/bag.jpg" width="300px" height="200px" style="border: 2px solid green; margin-left: 40px; padding: 10px"/>
			<img src="images/bag (2).jpg"  width="300px" height="200px" style="border: 2px solid green; margin-left: 40px; padding: 10px"/>
			<div class="subcontent" style="margin-top: 10px">
  	  			<?php
  						@$q = "SELECT * FROM pages WHERE id =24";
						$r= mysqli_query($dbc, $q);
						$page= mysqli_fetch_assoc($r);
						$title= $page['title'];
						$blurb = substr($page['tca'], 0,2470); 
				?>
				
             <h3 style="font-weight: bold"> Distribution of bags to the students </h3>
				<p style=" font-family:'Stardos Stencil'; text-align: justify; font-size: 15px">Bidhannagar Social Welfare Society, go by the saying 'Teach Them Young' (source). It is a known fact "the younger the brain is, the more receptive it is. Now, to build schools accessible to all and then to bring the young brains into it to impart education, is a huge task at hand, for our society. We have taken up the challenge, in whatever miniscule way, but successfully breaking barrages and cruising forward. The next challenge lies in getting the right/trained teaching staff for these schools. Though India has no dearth of educated, trained and willing teachers, but, due to various, obvious, visible and invisible factors, many deserving candidates are still counted as unemployed. It's a case of a small canvass with loads of colors with few quality painters. We have successfully tried bridging the gaps with our initiatives; where in volunteers, social workers, paid part timers etc are contributing, through us, in the national vision of education to all. We believe, collectively we all can together, bring about a qualitative change in our society. And here again, in our projects, we take in, active support from, one and all, individuals, corporate, institutions, societies and Govt offices etc. Providing resources needed for imparting education to the underprivileged and less fortunate is a big challenge. External support becomes imperative, as the institutions, be it Govt managed or aided, run by social service organizations etc, in the rural and slum areas are always in want of better facilities. As education at grass-root level is the need of the hour, providing education to rural and slum children remains the major focus in our projects. We support these kids and their schools by providing what and where they lack, like books for the library, clothes and uniforms, school bags, desks and benches, kit required for learning/writing and several other items. We derive inspiration and satisfaction from seeing the immense joy and happiness on the faces of the children and gratitude on the faces of the teaching and management staff. To encourage the blind student towards the education, the Bidhannagar Social Welfare Society decided to visit the blind school named Bhimbar. And they motivate them allot towards education and distributed the bags to them. Though they cannot see us but we saw their inner happiness in their faces which made us really very happy. 
					
				</p>
			</div>
		</div>
				<div class="col-md-6" style="border: 1px dotted gray; float:left">
			<img src="images/aids.jpg" width="300px" height="200px" style="border: 2px solid green; margin-left: 10px; padding: 10px"/>
			<img src="images/aids31.jpg" width="300px" height="200px" style="border: 2px solid green; margin-left: 20px; padding: 10px"/>
			<div class="subcontent" style="margin-top: 20px">
  	  			<?php
  						@$q = "SELECT * FROM pages WHERE id =24";
						$r= mysqli_query($dbc, $q);
						$page= mysqli_fetch_assoc($r);
						$title= $page['title'];
						$blurb = substr($page['tca'], 7355,1945); 
				?>
				 <h3 style="font-weight: bold">Awareness programme on World's Aids Day </h3>
				<p style=" font-family:'Stardos Stencil'; text-align: justify; font-size: 15px">
India has the third-largest number of people living with HIV in the world, approximately 2.1 million. Thanks to an inflow of funds and the initiatives taken by the government, communities, NGOs, and individuals,the past decade has seen a 50% decline in the number of new HIV infections. But the battle is far from won.Despite the progress made, India still accounts for most of the estimated 3,40,000 new infections in the Asia-Pacific region last year. Estimates also show a global reduction of almost 90% in funding towards the war on HIV over the past three years.HIV/AIDS is not just a battle with the virus, but also a battle for dignity. The social stigma associated with those infected, the lack of sex education, and the general neglect towards the LGBT community and their rights
add to the problem.Although much more needs to be done, we the member of Bidhannagar Social Welfare Societydecided to take the awareness programme in the rural areas like Madati Paikara where they are not aware of this disease.So we decided to organise a free healthcamp on the event of World's Aids Day. Hoping that on the event of World AIDS Day,it will help us start a meaningful discourse on what more needs to be done to make Bidhannagar HIV free also India and make lives of those living with HIV better.Bidhannagar Social Welfare Society is a society for formulation of policy and implementation of programmes for prevention and control of HIV/AIDS. The members of Bidhannagar Social Welfare Society was not sure whether the people at rural areas would come up for the health camp . But the people turned up to the located place and the members were very much exicited to interact with the villagers. Through this camp they come to know about such disease and were happy to follow the constructor at the programme. They also conduct programmes that support underprivileged girls in Madati.
</p>
			</div>
		</div>
		<!--hre-->

		</div>
			<div class="row" style="margin-bottom: 20px">
		<div class="col-md-6" style="border: 1px dotted gray;">
			<!-- <h3 style="color: yellowgreen; font-family: 'Righteous', cursive;">Our Team</h3> -->
			<img src="images/clean.jpg" width="300px" height="200px" style="border: 2px solid green; margin-left: 40px; padding: 10px"/>
			<img src="images/clean1.jpg"  width="300px" height="200px" style="border: 2px solid green; margin-left: 40px; padding: 10px"/>
			<div class="subcontent" style="margin-top: 10px">
  	  			<?php
  						@$q = "SELECT * FROM pages WHERE id =24";
						$r= mysqli_query($dbc, $q);
						$page= mysqli_fetch_assoc($r);
						$title= $page['title'];
						$blurb = substr($page['tca'], 3535,1820); 
				?>
				<h3 style="font-weight: bold">Cleanliness Program</h3>
				<p style=" font-family:'Stardos Stencil'; text-align: justify; font-size: 15px">
Swachh Bharat Abhiyan is a cleanliness campaign in India that aims to clean up the streets, roads and various infrastructures of the Indian cities and the rural areas. This cleanliness drive is being carried out to pay a tribute to Mahatma Gandhi who had envisioned India as a clean country free of unpleasant sites and diseases. The main moto of this cleanliness drive is to achieve a disease free India. Bidhan Nagar Social Welfare Society play a very crucial role in the promotion of Swachh Bharat Abhiyan. They work in direct contact with the local people. Keeping the city clean is everyone's duty and to ensure that people are made aware of this civic duty the NGOs play a very crucial role. In ensuring the success of this cleanliness mission the NGOs play their part in the following ways.NGOs take up the task of educating the local mass making them aware of the need to keep their surrounding clean. Ngo(s) could also adopt certain villages or areas in requirement of proper sanitation facilities and carry on the cleanliness drive in those areas. NGOs could also work closely with the municipality to execute a daily cleaning plan in a certain area. This NGOs even visit schools to teach the children the importance of cleanliness. NGOs can also facilitate workshops on how to recycle and reuse non biodegradable wastes into livelihood programs. NGOs from time to time conduct research on specific areas to specifically dispose waters, improved toilets, improved composting processes and many more.Many a times NGOs are given access to the Swachh Bharat city local circles to share community initiatives with the citizens and mobilize them to lend their helping hand whenever required. NGOs often take up the task to set up waste management systems and monitor the same.
</p>
			</div>
		</div>
		<div class="col-md-6" style="border: 1px dotted gray;">
			<img src="images/cult.jpg" width="300px" height="200px" style="border: 2px solid green; margin-left: 10px; padding: 10px"/>
			<img src="images/cultural.jpg" width="270px" height="200px" style="border: 2px solid green; margin-left: 20px; padding: 10px"/>
			<div class="subcontent" style="margin-top: 20px">
  	  			<?php
  						@$q = "SELECT * FROM pages WHERE id =24";
						$r= mysqli_query($dbc, $q);
						$page= mysqli_fetch_assoc($r);
						$title= $page['title'];
						$blurb = substr($page['tca'], 5355,1083); 
				?>
				<h3 style="font-weight: bold">Cultural Program</h3>
				<p style=" font-family:'Stardos Stencil'; text-align: justify; font-size: 15px">Cultural activities are activities where people spend their leisure time attending cultural venues and events. For example, cultural activities include going to art galleries, museums, libraries, operas, concerts and the cinema. People want to get feelings of well-being and gain more knowledge by participating in cultural activities. In Bidhannagar Social Welfare Society cultural activities are organize where people of any age can take part especially students participate in cultural activities which influences the development of students in many aspects, such as for entertainment and knowledge. The involvement of students in cultural activities can help them develop a well-rounded education. BSWS involve many types of activities like singing, dancing, recitation, games, etc. Interested people take part in this program but whole society attends the program and also gains some knowledge from it. This program is type of festival in Bidhannagar, which come once in year and people of that area excitedly wait for this cultural program of BSWS.</p>
			</div>
		</div>
		</div>
		<div class="row" style="margin-bottom: 20px">
		<div class="col-md-6" style="border: 1px dotted gray; ">
			<!-- <h3 style="color: yellowgreen; font-family: 'Righteous', cursive;">Our Team</h3> -->
			<img src="images/ludo.jpg" width="300px" height="200px" style="border: 2px solid green; margin-left: 40px; padding: 10px"/>
			<img src="images/ludo1.jpg"  width="300px" height="200px" style="border: 2px solid green; margin-left: 40px; padding: 10px"/>
			<div class="subcontent" style="margin-top: 10px">
  	  			<?php
  						@$q = "SELECT * FROM pages WHERE id =24";
						$r= mysqli_query($dbc, $q);
						$page= mysqli_fetch_assoc($r);
						$title= $page['title'];
						$blurb = substr($page['tca'], 6445,915); 
				?>
				<h3 style="font-weight: bold">Indoor Games</h3>
				<p style=" font-family:'Stardos Stencil'; text-align: justify; font-size: 15px">As we know that some house-wife in the rural areas are meant for the kitchen and in the household department only. Apart from this they don't get any chance or a way to come out and take part in any of the curricular activities. So BSWS decided that women of that area should not only stuck with house hold works their must come out of house and take part in an activities which will give break from their daily schedule and bit of enjoyment too. So the NGO organize an indoor game (Ludo) for women. Maximum women of that locality were present in an event; many were excited these thing was happening for first time in Bidhannagar. Huge amount of women took part, this small game made them very happy. In this way BSWS encourage women to get involve in new thing rather than sitting in house. For housewives indoor games are organized yearly by Bidhannagar Social Welfare Society. </p>
			</div>
		</div>
		<div class="col-md-6" style="border: 1px dotted gray;">
			<img src="images/blanket.jpg" width="300px" height="200px" style="border: 2px solid green; margin-left: 10px; padding: 10px"/>
			<img src="images/blanket (2).jpg" width="300px" height="200px" style="border: 2px solid green; margin-left: 5px; padding: 10px"/>
			<div class="subcontent" style="margin-top: 20px">
  	  			<?php
  						@$q = "SELECT * FROM pages WHERE id =24";
						$r= mysqli_query($dbc, $q);
						$page= mysqli_fetch_assoc($r);
						$title= $page['title'];
						$blurb = substr($page['tca'], 2470,1065); 
				?>
				<h3 style="font-weight: bold">Blanket Distribution to the old and poor people</h3>
				<p style=" font-family:'Stardos Stencil'; text-align: justify; font-size: 14px">Bidhannagar a city-based NGO, distributed blankets and woolens among poor and shelter less peoples and needy at the railway station road, and different place of the city. Every year, during the season of shivering cold in the months of December & January, the volunteers of Bidhan Nagar Social Welfare Society along with some local residents visit in search of the poor people on the coldest night from midnight till 3.00 am. "With the night temperature dipping low and dense fog engulfing the city, the homeless and the destitute on the streets and roadside have just plastic sheets to save themselves from cold. The blanket donation is just to help the poor in distress" said Bapan Das, an entrepreneur and founder member of the NGO. "Cold waves have already claimed many lives in the past days and are affecting many sleeping out on the streets and footpaths, such as rickshaw-pullers and beggars. We are urging people to come forward to donate warm clothes, bed sheets and quilts, he added. </p>
			</div>
		</div>
		</div>
				</div>
					</div>
		       	
	<div class="jumbotron" style="background-color: #63d471;
background-image: linear-gradient(315deg, #63d471 0%, #233329 74%);
 height:100px auto; border-top: 2px black outset" >
					    <div class="row" style="width: 990px; margin-left: 200px">
  <div class="col-xs-3 col-sm-3">
				<a href="https://www.google.com/maps/dir//bidhan+nagar+siliguri/@26.4860593,88.2070637,13z/data=!4m8!4m7!1m0!1m5!1m1!1s0x39e4541c1a7543bd:0x150484e8a34dcb41!2m2!1d88.2420832!2d26.4860636"
					 style="text-decoration: none">
					<h2 style="font-family: Mangal; color: white;  font-size: 25px"><i class="fas fa-car "  style="color: black"></i>&nbsp;VISIT BSWS</h2>
					</a>
</div>
  <div class="col-xs-3 col-sm-3">	
					<a href="#" style="text-decoration: none">
						<h2 style="font-family: Mangal; color: white;  font-size: 25px"><i class="fas fa-hand-holding-usd" style="color: red"></i>&nbsp;DONATE</h2>
						</a>
</div>
 <div class="col-xs-3 col-sm-3">		
					<a href="#" style="text-decoration: none">
						<h2 style="font-family: Mangal; color: white; font-size: 25px"><i class="fa fa-ambulance" aria-hidden="true"></i> &nbsp;AMBULANCE</h2>
						</a>
</div>
 <div class="col-xs-3 col-sm-3">					
					<a href="#" style="text-decoration: none"><h2 style="font-family: Mangal; color: white; font-size: 25px"><i class="fas fa-phone-volume" style="color: black"></i>&nbsp;CONTACT US</h2>
				</a>
</div>
			</div>
		</div>
<!-- FOOTER AREA -->

	<footer style="margin-top: -23px">
<?php include('template/footer.php'); ?>
	</footer>
	         
	</body>
<!-- END OF BODY -->
</html>
