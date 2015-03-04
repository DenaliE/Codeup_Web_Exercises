<?php 

function add_car($cars){
   
    //tried to pass $car as $value. This gave an array to string conversion
   foreach ($cars as $car => $value) {
    echo "I own a {$value['year']} {$car}. Details below:" . PHP_EOL;
    echo "-------------------------------------------------------". PHP_EOL;
    echo "4 Door {$car}.". PHP_EOL;
    echo "Color:  {$value['year']}". PHP_EOL;
    echo "Mileage:  {$value['mileage']}". PHP_EOL;
        if ($value['sunroof'] == false){
        
        echo "Sunroof: No". PHP_EOL;
        
    }
        else {
           
            echo "Sunroof: Yes". PHP_EOL;
            
    }

    if ($value['convertable'] == false){
        
        echo "Convertable: No". PHP_EOL;
        
    }
        else {
           
            echo "Convertable: Yes". PHP_EOL;
            
    }
        
    echo "License NO:  {$value['license']}.". PHP_EOL. PHP_EOL;
   }
}

$cars = array(
    'Toyota Solara' => array(
        'year' => 2001,
        'doors' => 2,
        'color' => 'gray',
        'mileage' => 100000,
        'sunroof' => true,
        'convertable' => false,
        'license' => 'JSRULZ',
    ),

    'Honda Odyssey' => array(
        'year' => 2004, 
        'doors' => 4,
        'color' => 'marron',
        'mileage' => 60000,
        'sunroof' => false,
        'convertable' => false,
        'license' => 'ILUVPHP',
    ),

    'Cadillac Escalade' => array(
        'year' => 2014,
        'doors' => 4,
        'color' => 'white',
        'mileage' => 5000,
        'sunroof' => false,
        'convertable' => false,
        'license' => 'HTML5',
    ),

);
// <!-- Create a function that outputs the following:

// I own a 2014 Cadillac Escalade. Details below:
// ------------------------------------------------
// 4 Door 2014 Cadillac Escalade
// Color: white
// Milelage: 5000
// Sunroof: N/A
// Convertable: N/A
// Lincense NO: HTML5 -->

echo add_car($cars). PHP_EOL;



