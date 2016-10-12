	<?php 
			
			$dir = "img/";

			// Sort in ascending order - this is default
			$a = scandir($dir);
			
			$b = array_diff(scandir($dir), array('..', '.'));

			//print_r($a);
			echo '<ul>';
			foreach ($b as $filez) 
			{
				if(is_dir('img/'.$filez)){
				}
				else{echo '<li>'.$filez.'</li>';}
				
			}
			echo '</ul>';
	?>
