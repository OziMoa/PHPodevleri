<?php 

$planets = ["mercury", "venus", "earth","mars","jupiter","saturn","uranus","neptune","","", NULL];

$mapped_arry = array_map(function($p){ 
    global $planets;
    if($p == ""){
       return NULL;}
    else{
        return $p;}
    }, $planets);



$filtered_Planet = array_filter($mapped_arry, function($p){
    return $p != NULL ? $p : false;
});


function random_arr($FP,$count){
    $randomPlanets = array_rand($FP,$count);
    $output = [];
    foreach  ($randomPlanets as $key) {
        array_push($output, $FP[$key]);
    }
    return $output;
};


print_r(random_arr($filtered_Planet, 2));
print_r(random_arr($filtered_Planet, 3));
print_r(random_arr($filtered_Planet, 2));
print_r(random_arr($filtered_Planet, 4));
print_r(random_arr($filtered_Planet, 5));

?>

