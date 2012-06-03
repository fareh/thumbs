<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Resize Image</title>
<style>
#container {
	width:765px;
	margin: auto 0;
}
#container .thumb img {
	visibility:hidden;
}
#container .thumb, #container .thumb1 {
	float:left;
}
body {
	width:100%;
	margin:auto 0;
}
</style>
</head>

<body>
<div id="container">
  <div class="thumb1"> <img src="voiture.jpg" /> </div>
  <div class="thumb"> <img src="voiture.jpg"  /> </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script> 
<script type="text/javascript" src="dev-skills.thumb.js"></script> 
<script type="text/javascript" >
jQuery(document).ready(function() {
		<?php $base_uri_dir = dirname($_SERVER['REQUEST_URI']); ?>
		jQuery('.thumb').thumbs({path:'<?php echo $base_uri_dir ?>' , width: 100, height:130});	 
     });
	 </script>
</body>
</html>