<?php
$ds          = DIRECTORY_SEPARATOR;  //1
 
$storeFolder = 'uploads';   //2
 
if (!empty($_FILES)) {
     
    $tempFile = $_FILES['file']['tmp_name'];          //3             
      
    $targetPath =  $storeFolder . $ds;  //4
     
    $targetFile =  $targetPath. $_FILES['file']['name'];  //5
 
    move_uploaded_file($tempFile,$targetFile); //6
     
}
?>   

<!--
1.Store directory separator (DIRECTORY_SEPARATOR) to a simple variable. This is just a personal preference as we hate to type long variable name.
2.Declare a variable for destination folder.
3.If file is sent to the page, store the file object to a temporary variable.
4.Create the absolute path of the destination folder.
5.Create the absolute path of the uploaded file destination.
6.Move uploaded file to destination.
-->

<!--
<?php
	
echo $_POST['file'];

if(isset($_FILES['file'])){
        
		$name_array = $_FILES['file']['name'];
		$tmp_name_array = $_FILES['file']['tmp_name'];
		$type_array = $_FILES['file']['type'];
		$size_array = $_FILES['file']['size'];
		$error_array = $_FILES['file']['error'];
		
		for($i = 0; $i < count($tmp_name_array); $i++){
		move_uploaded_file($tmp_name_array[$i], "uploads/".$name_array[$i]);		
		}
		
}


?>
-->