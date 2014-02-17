<?php require 'secure.inc.php'; ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Form Quest</title>
	
	<link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="css/mapstyle.css" type="text/css" media="screen" />
	
	<script type="text/javascript" src="js/jquery.7.1.min.js"></script>
	<script type="text/javascript" src="js/jquery.form.js"></script>
	<script type="text/javascript" src="js/core.js"></script>
</head>

<body>
	<div id="wrapper">
		<h2>Travel Hero Form Quest Information</h2>
		<p><a href="<?php echo $_SERVER['PHP_SELF']; ?>?logout=1">Logout</a></p>
		<p>The simplest way to create quest for your orignal.</p>
		
		<nav id="tab-nav">
            <ul>
				<li><a href="#theform" >Basic Info</a></li>
			</ul>
		</nav>
		
		<div class="clear"></div>
		
		<div id="tab-container">
			<div id="theform_tab" class="tab">
			
				<!-- simple file uploading form -->
				<img style="display:none" id="loader" src="images/loader.gif" alt="Loading...." title="Loading...." />
				<form id="form" action="uploader.php" method="post" enctype="multipart/form-data">
					<label>Photo upload:</label>
					<input id="uploadImage" type="file" accept="image/*" name="image" />
					<input id="button" type="submit" value="Upload" class="button">
				</form>
				<!-- preview action or error msgs -->
				<img id="preview" style="display:none" width=200px height=200px/>
				
				<form id="form_quest">
					<fieldset id="informationForm">
						<legend>Basic Info</legend>
						<label for="">Group Quest</label>
						
						<select name="parentQuest">
							<option value="NULL">none</option>
							<?php
								$host = '127.0.0.1';
								$username = 'user_hau';
								$password = '123456';
								$dbname = 'travel_hero';
								$conn = mysqli_connect($host, $username, $password, $dbname);
								
								if (mysqli_connect_errno())
									echo "Failed to connect to MySQL: " . mysqli_connect_error();
									
								// Select Parent Quest Id, name
								$result = mysqli_query($conn, "SELECT Id, Name FROM quest WHERE parent_quest_id IS NULL");
								
								while($row = mysqli_fetch_array($result)) {
									echo '<option value="' . $row['Id'] . '">' . $row['Name'] . '</option>';
								}
								
								mysqli_close($conn);
							?>
						</select>
						<br />
						
						<label>Quest Name</label>
						<input type="text" id="questName" name="questName" value="" />
						<br />
						<label>Description</label>
						<textarea rows="4" cols="50" id="questDescription" name="questDescription"></textarea> 
						<br />
						<label>Point</label>
						<select name="questPoint">
							<option value="100">Hard</option>
							<option value="50">Easy</option>
						</select>
						<br />
						
						<label>Url Donate</label>
						<input type="text" id="donateUrl" name="donateUrl" value="" />
						<br />
						
						<label for="">Address</label>
						<input type="text" id="address" name="address" value="" />
						<input type="button" value="Search" id="searchAddress" class="button"/>
						<br/>
						<input type="hidden" id="latitude" name="latitude" value="" />
						<input type="hidden" id="longitude" name="longitude" value="" />
						<input type="hidden" id="photoUrl" name="photoUrl" value="" />
					</fieldset>
					<input type="submit" value="Submit" id="submit" class="button"/>
					<div id="fp_message"></div>
				</form>
				
				<!-- preview map -->
				<div id="map_canvas"></div>
			</div>
		</div>
	</div>
	<footer id="footer">
		Copyright &copy; <?php echo date('Y'); ?> <a href="http://www.travelhero.be">ocean4</a>
	</footer>
</body>

</html>