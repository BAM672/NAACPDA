<!DOCTYPE html>
<html lang="en-us">
    <head>
        <title>NAACPDA - Sign Up</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="STYLES/styles.css">
		<link rel="stylesheet" type="text/css" href="STYLES/styles.css">
		<link rel="stylesheet" type="text/css" href="STYLES/responsive-grid.css">
		<link rel="stylesheet" type="text/css" href="STYLES/buttons.css">

		<style>
			h1 {
				margin: 20px 0 10px;
				font-weight: 800;
				color: #11274C;
			}
			.line {
				border: 0;
				height: 1px;
				border: 1px solid #11274C;
			}
			#formfill {
				margin: 0 auto 15px;
				padding: 20px;
			}
			label { font-weight: bold; color: #11274C; }
			input[type=text], input[type=email],
			input[type=password],textarea {
				width: 100%;
				height: 40px;
				margin: 8px 0;
				padding: 8px 12px;
				font-size: 16px;
				border: 1px solid #CCC;
				outline: none;
				font-family: Open Sans, Helvetica, Arial;
				border-radius: 5px;
			}
			input[type=text]:focus, input[type=email]:focus,
			input[type=password]:focus, textarea:focus { border: 1px solid #F4A433; }
			input[type=radio] { margin: 20px 10px; }
			input[type=radio]:selected { background-color: #F4A433; }
			textarea { height: 120px; resize: none; }
			input[type=submit] { margin-top: 12px !important; }
			h2 { margin-bottom: 15px; color: #11274C; }
			p { color: #CCC; }
		</style>
    </head>

    <body>

        <!-- INCLUDING HEADER -->
        <?php include('INCLUDES/header.html'); ?>
        <div class="clear"></div>
		
		<!-- CONTENT -->
		<div id="container">
			<h1>Join the NAACP Family</h1>
			<hr class="line">
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sed lorem nec ante feugiat congue. bibendum sapien vel fringilla molestie.</p>

			<form id="formfill" class="col-6-lg col-sm" action="#" method="post">
				<h2>Contact Information</h2>
				<label for="fname">First Name</label>
				<br><input class="info" type="text" name="fname" placeholder="First Name" required><br>
				<label for="lname">Last Name</label>
				<br><input class="info" type="text" name="lname" placeholder="Last Name" required><br>
				<label for="email">Email</label>
				<br><input class="info" type="email" name="email" placeholder="Valid email" required><br>
				<label for="address">Address</label>
				<br><input class="info" type="text" name="address" placeholder="Address"><br>
				<label for="city">City</label>
				<br><input class="info" type="text" name="city" placeholder="City" required><br>
				<label for="state">State/Region/Province</label>
				<br><input class="info" type="text" name="state" placeholder="State" required><br>
				<label for="zipcode">Zipcode</label>
				<br><input class="info" type="text" name="state" placeholder="Zipcode" required><br>
				<label for="phone">Phone Number</label>
				<br><input class="info" type="text" name="phone" placeholder="Phone Number"><br>
			</form> <!-- END OF FORM -->

			<form id="formfill" class="col-6-md col-sm" action="#" method="post">
				<h2>Payment Information</h2>
				<label for="fullnamecard">Full Name</label><br>
				<input class="info" type="text" name="fullnamecard" placeholder="Full name on card" required><br>
				<label for="paypaluser">PayPal (Email) Account</label><br>
				<input class="info" type="text" name="paypaluser" placeholder="Valid PayPal account (Email)" required><br>
				<label for="paypalpass">PayPal Password</label><br>
				<input class="info" type="password" name="paypalpass" required><br>
				<input class="btn btn-yellow btn-rnd btn-lrg btn-full" type="submit" value="Sign Me Up!">
			</form> <!-- END OF FORM -->
		</div> <!-- END OF CONTAINER -->
		<div class="clear"></div>

		<!-- INCLUDING FOOTER -->
        <?php include('INCLUDES/footer.html'); ?>
	</body>
</html>
