<!DOCTYPE html>
<html lang="en-us">
    <head>
        <title>NAACPDA | Contact Us</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
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
				margin: 0 auto 12px;
				padding: 20px;
			}
			label { font-weight: bold; color: #11274C; }
			input[type=text], textarea {
				width: 100%;
				height: 40px;
				margin: 8px 0;
				padding: 8px 12px;
				font-size: 16px;
				border: 1px solid #CCC;
				outline: none;
				font-family: Open Sans, Helvetica, Arial;
			}
			input[type=text]:focus, textarea:focus { border: 1px solid #F4A433; }
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
			<h1>Contact</h1>
			<hr class="line">
			
			<div class="col-4-lg col-6-md col-sm">
				<h2>Contact Information</h2>
				<p>NAACP Dona Ana</p>
				<p>2550 Don Roser Drive</p>
				<p>Las Cruces, NM 88004</p>
				<p>(575)224-2643</p>
			</div>

			<form id="formfill" class="col-8-lg col-6-md col-sm" action="#" method="post">
				<label for="name">Name</label>
				<br><input class="info" type="text" name="name" placeholder="Name" required><br>
				<label for="email">Email</label>
				<br><input class="info" type="text" name="email" placeholder="Valid email" required><br>
				<label for="message">Message</label>
				<br><textarea name="message" placeholder="Write message here..." required></textarea><br>
				<input class="btn btn-yellow btn-rnd btn-full" type="submit">
			</form> <!-- END OF FORM -->

		</div> <!-- END OF CONTAINER -->
		<div class="clear"></div>

		<!-- INCLUDING FOOTER -->
        <?php include('INCLUDES/footer.html'); ?>
	</body>
</html>
