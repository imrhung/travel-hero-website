<?php
include('s3_controllers/imagecheck.php'); // getExtension Method

function getWidth() {
	
}

function getHeight() {

}

function scale($scale) {

}

function resize($width, $height) {

}

$msg='';
if($_SERVER['REQUEST_METHOD'] == "POST") {
	$name = $_FILES['image']['name'];
	$size = $_FILES['image']['size'];
	$tmp = $_FILES['image']['tmp_name'];
	$ext = getExtension($name);

	if(strlen($name) > 0) {
		// File format validation
		if(in_array($ext,$valid_formats)) {
			// File size validation
			if($size<(1024*1024)) {
				include('s3_controllers/s3_config.php');
				//Rename image name. 
				$actual_image_name = time().".".$ext;
				
				// get width
				$width = imagesx($tmp);
				// get height
				$height = imagesy($tmp);
				// scale
				$scaleWidth = $width * 50/100;
				$scaleHeight = $height * 50/100;
				// resize
				$new_image = imagecreatetruecolor($scaleWidth, $scaleHeight);
				//imagecopyresampled($new_image, $tmp, 0, 0, 0, 0, $scaleWidth, $scaleHeight, $width, $height);
      			$tmp = $new_image;
				
				if($s3->putObjectFile($tmp, $bucket , $actual_image_name, S3::ACL_PUBLIC_READ) ) {
					//$msg = "S3 Upload Successful."; 
					$s3file='http://'.$bucket.'.s3.amazonaws.com/'.$actual_image_name;
					echo $s3file;
					//echo "<img src='$s3file'/>";
					//echo 'S3 File URL:'.$s3file;
				} else
					$msg = "S3 Upload Fail.";

			} else
				$msg = "Image size Max 1 MB";
		} else
			$msg = "Invalid file, please upload image file.";
	} else
		$msg = "Please select image file.";
}
