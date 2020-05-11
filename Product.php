<?php
error_reporting(0);
 require"new1.php";
	if(isset($_POST['submit']))
	{   
		$name=$_POST['name'];
		$appliances=$_POST['appliances'];
		$quantity=$_POST['quantity'];
		$contact=$_POST['contact'];
		$shipment=$_POST['shipment'];
		$address=$_POST['address'];
		$city=$_POST['city'];
		$state=$_POST['state'];
		$manufacturing=$_POST['manufacturing'];
		
		if($name=="" && $appliances=="" && $quantity="" && $contact=="" && $shipment="" && $address=="" && $city="" && $state=="" && $manufacturing=="")
		{
			echo"please fill in all the information";
		}
		else
		{
			$reg_qry=$conn->query("INSERT INTO pro(name,appliances,quantity,contact,shipment,address,city,state,manufacturing)values('$name','$appliances','$quantity','$contact','$shipment','$address','$city','$state','$manufacturing')");
		 if($reg_qry)
		 {
			 ?>
<script type="text/javascript">
	window.location="index.php"
</script>
<?php
		 }
			 else
			 {
				 echo"unable to register";
			 }
		 }
		}
?>
<html>
<head>
<title>Product Registration Form</title>
	<link rel="stylesheet" href="style.css">
</head>
	<body>
<div class="container">
	<h1 class="title"><i>Product Registration Form</i></h1>
	<div class="productregform">
		<form method="post" action="Product.php">
			<div class="form-group">
				<label style="color: black"> Product Name:</label>
				<input type="text" name="name" id="name" class="form-controll">
			</div><br>
			<div class="form-group">
				<label style="color:black"Appliances:</label>
				<input type="radio" name="appliances" id="appliances" value="Home Appliances"> Home Appliances
 				<input type="radio" name="appliances" id="appliances" value="Industrial Appliances" required> Industrial Appliances
			</div><br>
			<div class="form-group">
				<label style="color: black">Please Specify The Quantity:</label><br>
				<input type="text" name="quantity" id="quantity" class="form-controll">
				</div><br>
			<div class="form-group">
				<label style="color: black">Phone:</label>
				<input type="integer" name="contact" id="contact" class="form-controll" autocomplete="off">
			</div><br>
			<div class="form-group">
				<label style="color: black">Date of shipment:</label>
				<input type="date" name="shipment" id="shipment" class="form-controll">
			</div><br>
			<div class="form-group">
				<label style="color: black">Customer Address:</label>
				<input type="text" name="address" id="address" class="form-controll">
							 </div><br>
				<div class="form-group">
					<label style="color: black">City:</label>
					<select name="city">
						<option>Chennai</option>
						<option>Thambaram</option>
						<option>Calicut</option>
						<option>Bangalore</option>
					</select>
					<label style="color: black">State:</label>
					<select name="state">
						<option>Tamilnadu</option>
						<option>Karnataka</option>
						<option>Kerala</option>
					</select>
				</div><br>
				<div class="form-group">
				<label style="color: black">Manufacturing:</label>
				<input type="radio" name="manufacturing" id="manufacturing" value=" india">India
					<input type="radio" name="manufacturing" id="manufacturing" value="Others">Others
			</div><br>
				<input type="submit" value=REGISTER name="submit" id="submit">
				<!--<button class="btnreg" name="submit" id="submit">Register</button>--></div>
					</form>
	</div>

</div>
</body>
</html>