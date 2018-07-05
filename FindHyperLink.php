<?php
	class FindHyperLink{
		function findLinks($fileContent){
			$files = file_get_Contents($fileContent);
			$count = 0;
			for($i=0;$i<strlen($files);$i++){
				if(strcmp($files[$i],'<')==0){
					while(strcmp($files[$i],'h')!==0){
					 	$i++;
					}
						if(strcmp($files[$i+3],'f')==0 && (strcmp($files[$i+2],'e'))==0 &&(strcmp($files[$i+1],'r'))==0){
							$i=$i+6; 
							while(strcmp($files[$i],'"')!==0){ 
								echo $files[$i];
								$i++;
							}
							$count++;
							echo "\n";
						}
				}
			}
			echo $count;
		}
	}
