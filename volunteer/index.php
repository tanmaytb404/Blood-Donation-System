<?php
if(isset($_POST['search'])){
	$token=$_POST['token'];
	include ('../config/connection.php');
	$q="select * from donor_registration where keystringkey = '$token'";
	$r=mysqli_query($dbc, $q);
	$details=mysqli_fetch_assoc($r);
	if($details['keystringkey'] == $token){ ?>
<h2>DONOR DETAILS:</h2>

<table class="rtable">
  <thead>
    <tr>
      <th>NAME</th>
      <th>USERNAME</th>
      <th>DATE OF BIRTH</th>
      <th>SEX</th>
      <th>BLOOD GROUP</th>
       <th>WEIGHT</th>
        <th>NOT SUFFURED</th>
        <th>PHONE NO.</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><?php echo $details['name']; ?></td>
      <td><?php echo $details['user_name']; ?></td>
      <td><?php echo $details['dob']; ?></td>
      <td><?php echo $details['sex']; ?></td>
      <td><?php echo $details['bloodgroup']; ?></td>
      <td><?php echo $details['weight']; ?></td>
      <td><?php echo $details['diseas']; ?></td>
      <td><?php echo $details['phone']; ?></td>
    </tr>
  </tbody>
</table>
	<?php }else{
		echo "Please enter the token number carefully!";
		echo "<script>alert('REGISTERED DONOR NOT FOUND!')</script>";
	 }
	}
?>
<style>
	/*!
// CSS only Responsive Tables
// http://dbushell.com/2016/03/04/css-only-responsive-tables/
// by David Bushell
*/

.rtable {
  /*!
  // IE needs inline-block to position scrolling shadows otherwise use:
  // display: block;
  // max-width: min-content;
  */
  display: inline-block;
  vertical-align: top;
  max-width: 100%;
  
  overflow-x: auto;
  
  // optional - looks better for small cell values
  white-space: nowrap;

  border-collapse: collapse;
  border-spacing: 0;
}

.rtable,
.rtable--flip tbody {
  // optional - enable iOS momentum scrolling
  -webkit-overflow-scrolling: touch;
  
  // scrolling shadows
  background: radial-gradient(left, ellipse, rgba(0,0,0, .2) 0%, rgba(0,0,0, 0) 75%) 0 center,
              radial-gradient(right, ellipse, rgba(0,0,0, .2) 0%, rgba(0,0,0, 0) 75%) 100% center;
  background-size: 10px 100%, 10px 100%;
  background-attachment: scroll, scroll;
  background-repeat: no-repeat;
}

// change these gradients from white to your background colour if it differs
// gradient on the first cells to hide the left shadow
.rtable td:first-child,
.rtable--flip tbody tr:first-child {
  background-image: linear-gradient(to right, rgba(255,255,255, 1) 50%, rgba(255,255,255, 0) 100%);
  background-repeat: no-repeat;
  background-size: 20px 100%;
}

// gradient on the last cells to hide the right shadow
.rtable td:last-child,
.rtable--flip tbody tr:last-child {
  background-image: linear-gradient(to left, rgba(255,255,255, 1) 50%, rgba(255,255,255, 0) 100%);
  background-repeat: no-repeat;
  background-position: 100% 0;
  background-size: 20px 100%;
}

.rtable th {
  font-size: 11px;
  text-align: left;
  text-transform: uppercase;
  background: #f2f0e6;
}

.rtable th,
.rtable td {
  padding: 6px 12px;
  border: 1px solid #d9d7ce;
}

.rtable--flip {
  display: flex;
  overflow: hidden;
  background: none;
}

.rtable--flip thead {
  display: flex;
  flex-shrink: 0;
  min-width: min-content;
}

.rtable--flip tbody {
  display: flex;
  position: relative;
  overflow-x: auto;
  overflow-y: hidden;
}

.rtable--flip tr {
  display: flex;
  flex-direction: column;
  min-width: min-content;
  flex-shrink: 0;
}

.rtable--flip td,
.rtable--flip th {
  display: block;
}

.rtable--flip td {
  background-image: none !important;
  // border-collapse is no longer active
  border-left: 0;
}

// border-collapse is no longer active
.rtable--flip th:not(:last-child),
.rtable--flip td:not(:last-child) {
  border-bottom: 0;
}

/*!
// CodePen house keeping
*/

body {
  margin: 0;
  padding: 25px;
  color: #494b4d;
  font-size: 14px;
  line-height: 20px;
}

h1, h2, h3 {
  margin: 0 0 10px 0;
  color: #1d97bf;
}

h1 {
  font-size: 25px;
  line-height: 30px;
}

h2 {
  font-size: 20px;
  line-height: 25px;
}

h3 {
  font-size: 16px;
  line-height: 20px;
}

table {
  margin-bottom: 30px;
}

a {
  color: #ff6680;
}

code {
  background: #fffbcc;
  font-size: 12px;
}

</style>
<script>
	/*!
 * iOS doesn't respect the meta viewport tag inside a frame
 * add a link to the debug view (for demo purposes only)
 */
if (/(iPhone|iPad|iPod)/gi.test(navigator.userAgent) && window.location.pathname.indexOf('/full') > -1) {
  var p = document.createElement('p');
  p.innerHTML = '<a target="_blank" href="https://s.codepen.io/dbushell/debug/wGaamR"><b>Click here to view this demo properly on iOS devices (remove the top frame)</b></a>';
  document.body.insertBefore(p, document.body.querySelector('h1'));
}
</script>
<form class="navbar-form navbar-left" role="search" action="index.php" method="post">
  <div class="form-group">
  	<label for="token">Enter the token number:</label>
    <input type="text" name="token" class="form-control" placeholder="Search">
  </div>
  <button type="submit" name="search" class="btn btn-default">Search</button>
</form>