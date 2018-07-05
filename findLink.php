<?php
#	$files = file_get_contents("http://www.example.com");
	$files = file_get_contents("https://www.unicourt.com");

	for($i=0;$i<strlen($files);$i++){
		if(strcmp($files[$i],'<')==0){

			if(strcmp($files[$i+1],'a')==0){
				while(strcmp($files[$i++],'h')!=0);
				$i=$i+5;		
				while((strcmp($files[$i],'"')!==0)){									
					echo $files[$i];
					$i++;
				}
				echo "\n";
			}
		}
		
	}
?>
