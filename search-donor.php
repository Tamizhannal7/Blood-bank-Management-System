<?php
//error_reporting(0);
include('includes/config.php');
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Blood Bank Donar Management System | Search Blood Donor </title>
	<!-- Meta tag Keywords -->
	
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--// Meta tag Keywords -->

	<!-- Custom-Files -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link rel="stylesheet" href="css/fontawesome-all.css">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //Custom-Files -->

	<!-- Web-Fonts -->
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
	    rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
	    rel="stylesheet">
	<!-- //Web-Fonts -->

</head>

<body>
	<?php include('includes/header.php');?>

	<!-- banner 2 -->
	<div class="inner-banner-w3ls">
		<div class="container">

		</div>
		<!-- //banner 2 -->
	</div>
	<!-- page details -->
	<!-- <div class="breadcrumb-agile">
		<div aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item">
					<a href="index.php">Home</a>
				</li>
				<li class="breadcrumb-item active" aria-current="page">Blood Donar List</li>
			</ol>
		</div>
	</div> -->
	<!-- //page details -->

	<!-- contact -->
	<div class="agileits-contact py-5">
		<div class="py-xl-5 py-lg-3">
			<form name="donar" method="post" style="padding-left: 30px;">
<div class="row">



<div class="col-lg-4 mb-4">
<div class="font-italic">Blood Group<span style="color:red">*</span> </div>
<div><select name="bloodgroup" class="form-control" required>
<?php $sql = "SELECT * from  tblbloodgroup ";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{               ?>  
<option value="<?php echo htmlentities($result->BloodGroup);?>"><?php echo htmlentities($result->BloodGroup);?></option>
<?php }} ?>
</select>
</div>
</div>


<div class="col-lg-4 mb-4">
<div class="font-italic">Location </div>
<div><textarea class="form-control" name="location"></textarea></div>
</div>

</div>

<div class="row">
<div class="col-lg-4 mb-4">
<div><input type="submit" name="sub" class="btn btn-primary" value="submit" style="cursor:pointer"></div>
</div>
</div>
       <!-- /.row -->
</form>

	<div class="agileits-contact py-5">
		<div class="py-xl-5 py-lg-3">
			<?php
				if(isset($_POST['sub']))
{
$status=1;
$bloodgroup=$_POST['bloodgroup'];
$location=$_POST['location']; 

$sql = "SELECT * from tblblooddonars where (status=:status and BloodGroup=:bloodgroup) ||  (Address=:location)";
$query = $dbh -> prepare($sql);
$query->bindParam(':status',$status,PDO::PARAM_STR);
$query->bindParam(':bloodgroup',$bloodgroup,PDO::PARAM_STR);
$query->bindParam(':location',$location,PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{ ?>

			<div class="w3ls-titles text-center mb-5">
				<h3 class="title">Search Blood Donor</h3>
				<span>
					<i class="fas fa-user-md"></i>
				</span>
			
			</div>
			<div class="d-flex">
				
				<div class="row package-grids mt-5" style="padding-left: 50px;">
			<?php	foreach($results as $result)
{ ?>
					<div class="col-md-6 pricing">
					
					<div class="price-top">
						<a href="single.html">
							<img src="images/blood-donor.jpg" alt="Blood Donor" style="border:1px #000 solid" class="img-fluid" />
						</a>
						<h3><?php echo htmlentities($result->FullName);?>
						</h3>
					</div>
					<div class="price-bottom p-4">
				<table class="table table-bordered">

    <tbody>
      <tr>
        <th>Gender</th>
        <td><?php echo htmlentities($result->Gender);?></td>
      </tr>
      <tr>
        <td>Blood Group</td>
        <td><?php echo htmlentities($result->BloodGroup);?></td>
      </tr>
      <tr>
        <td>Mobile No.</td>
        <td><?php echo htmlentities($result->MobileNumber);?></td>
      </tr>

         <tr>
        <td>Email ID</td>
        <td><?php echo htmlentities($result->EmailId);?></td>
      </tr>

               <tr>
        <td>Age</td>
        <td><?php echo htmlentities($result->Age);?></td>
      </tr>

        <tr>
        <td>Address</td>
        <td><?php echo htmlentities($result->Address);?></td>
      </tr>

<tr>
        <td>Message</td>
        <td><?php echo htmlentities($result->Message);?></td>
      </tr>

    </tbody>
</table>
						<a class="btn btn-primary" style="color:#fff"  href="contact-blood.php?cid=<?php echo $result->id;?>">Request</a>
					</div>
				</div> <?php }}
else
{
echo htmlentities("No Record Found");

}


            } ?>
			
			
			</div>
			</div>
		</div>
	</div>
	<!-- //contact -->

	


	<?php include('includes/footer.php');?>

	<!-- Js files -->
	<!-- JavaScript -->
	<script src="js/jquery-2.2.3.min.js"></script>
	<!-- Default-JavaScript-File -->

	<!-- banner slider -->
	<script src="js/responsiveslides.min.js"></script>
	<script>
		$(function () {
			$("#slider4").responsiveSlides({
				auto: true,
				pager: true,
				nav: true,
				speed: 1000,
				namespace: "callbacks",
				before: function () {
					$('.events').append("<li>before event fired.</li>");
				},
				after: function () {
					$('.events').append("<li>after event fired.</li>");
				}
			});
		});
	</script>
	<!-- //banner slider -->

	<!-- fixed navigation -->
	<script src="js/fixed-nav.js"></script>
	<!-- //fixed navigation -->

	<!-- smooth scrolling -->
	<script src="js/SmoothScroll.min.js"></script>
	<!-- move-top -->
	<script src="js/move-top.js"></script>
	<!-- easing -->
	<script src="js/easing.js"></script>
	<!--  necessary snippets for few javascript files -->
	<script src="js/medic.js"></script>

	<script src="js/bootstrap.js"></script>
	<!-- Necessary-JavaScript-File-For-Bootstrap -->

	<!-- //Js files -->

</body>

</html>