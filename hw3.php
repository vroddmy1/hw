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
$random = shuffle($a );
print_r("$random");
?>
