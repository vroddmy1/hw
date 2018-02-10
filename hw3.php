<?php 
	$a = [
		"Africa" => ["Loxodonta", "Panthera leo", "Panthera pardus", "Hippopotamus", "Hippotigris"],
		"America" => ["Alopex lagopus", "Vulpes macrotis", "Vulpes velox", "Leopardus pardalis", "Puma concolor"],
		"Russia" => ["Ursus arctos", "Panthera tigris altaica", "Equus ferus przewalskii Poliakov", "Sus scrofa", "Meles meles"] 
	];
	echo "<pre>";
	print_r($a);

	$result = [];
	foreach ($a as $country) {
    $result = array_merge ($result, array_filter ($country, function ($item){
    	 return count (explode (' ', $item)) === 2; 
	    	}
    	)	
	);
}
/*echo "<pre>";
print_r($result);*/
foreach ($result as $value1) {
  	$split[] = explode (' ', $value1);
  	}
echo "<pre>";
print_r($split);
foreach ($split as $names => $words) {
	$first_word[] = $words[0];
	$second_word[] = $words[1];
	shuffle($first_word);
	shuffle($second_word);
}
echo "<pre>";
print_r($first_word);
echo "<pre>";
print_r($second_word);
?>
