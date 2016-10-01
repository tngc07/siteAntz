<html>
 
<head>   
 
<!-- 1 -->
<link href="css/dropzone.css" type="text/css" rel="stylesheet" />
 
<!-- 2 -->
<script src="js/dropzone.js"></script>
 
</head>
 
<body>
 
<!-- 3 -->
<form id="my-awesome-dropzone" method="post" action="upload.php" class="dropzone" enctype="multipart/form-data"></form>


<script>
	
Dropzone.options.myAwesomeDropzone = { 
	
	maxFilesize: 8,
	addRemoveLinks: true,
	/*acceptedFiles: ".png, .jpg, .jpeg, .mp4"*/	 
	
};
	
</script>
   
</body>
 
</html>
