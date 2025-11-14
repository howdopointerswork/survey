<?php

//function that creates var and inserts into array
//create array of label names and pass as well outside function

/*to-do:
- Input verification, no empties
- Concat function
- Posts should be filtered




*/

ini_set('display_errors', 1); 
ini_set('display_startup_errors', 1); 
error_reporting(E_ALL);   




function processResult($name, $inputs){

	$result = $_POST[$name] ?? '';

	echo $result;

}


	



	$names = ['a1', 'a2', 'b1', 'b2', 'b3', 'c', 'd1', 'd2', 'e1', 'e2', 'f1', 'f2', 'g1', 'g2', 'g3', 'g4', 'h1', 'h2', 'h3', 'h4', 'i1', 'i2', 'j1', 'j2', 'j3', 'k1', 'k2', 'l1', 'l2', 'l3', 'l4', 'l5', 'con', 'opt'];

	$ids = [4 => "Check", 5 => "Check", 9 => "String", 10 => "String", 11 => "String", 12 => "Scale", 13 => "Scale", 14 => "Scale", 15 => "Scale", 23 => "String", 24 => "String", 25 => "String", 26 => "String", 27 => "String", 28 => "String", 29 => "String", 30 => "String", 31 => "String", 32 => "Bool", 33 => "Bool"];

	$entries = [];
	

	$i = 0;

	if($_SERVER["REQUEST_METHOD"] === "POST"){


		//processResult($names[0], $names);

		$action = $_POST['action'] ?? '';



		include('database.php');

		createResults($db);
		createPetition($db);

		//add each to array for insertion
		//sign entry separately
	if($action == "Submit"){



		foreach($names as $index => $name){


			
			$current = filter_input(INPUT_POST, $name);

			
			if(!isset($current)){

				$current = 0;
			}
			//echo "<br>index: " . $index;
			//echo "<br>name: " . $name;
	
			
			
			if($index==array_keys($ids)[$i] /*&& isset($ids[$i])*/){

	
				

				if(!isset($current)){
					$current = "Null";
				}


					switch(strtolower($ids[$index])){

						case "check":
							//loop arr and concat
					
						//	echo count($_POST) . "<br>";
						 
							if(isset($_POST[$names[$index]])){

								$concat = '';
								
								
								foreach($_POST[$names[$index]] as $curr){

									$concat .= $curr;
								}

								array_push($entries, $concat);
						
							}
							else{
								if(!isset($concat)){

									$concat = '';
								}
								array_push($entries, $concat);			

							}

							break;

						case "string":
							//loop arr and encode
				
							array_push($entries, $current);
							break;

						case "scale":
							//loop arr and measure scale using step?
						
							array_push($entries, $current);
							break;

						default:
			
							array_push($entries, $current);


					}
				
					
					

					//switch

					//exception names array with i var for index
			
						

							

			//	}

				++$i;
				
			
				
			}else{
			

				if(!is_array($current)){
						
		
					array_push($entries, $current);
				}
				
			}

			

	}
	if(!empty($entries)){

		recordResults($db, $entries);
		include('end.php');
	}
}
	elseif($action == "sign"){

		recordSignature($db);
		include('survey.html');
	}
		


	//insert here

	$db->close();

}




?>
