<?php
	require_once 'alchemyapi.php';
	$alchemyapi = new AlchemyAPI('YOUR_API_KEY');
	
	$DATA='Any news'; //the news goes in here
	
	$FLAVOR='text';
	$response = $alchemyapi->keywords($FLAVOR, $DATA, array('sentiment'=>0));
    // $response = $alchemyapi->keywords('text', 'Bunnies are nice but sometimes robots are evil', array('sentiment'=>1));
    foreach ($response['keywords'] as $keyword) {
        echo $keyword['text'], PHP_EOL;
    }
?>
