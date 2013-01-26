<?php
$m = new Memcached();
$m->addServer('localhost', 11211);

if(!$m->get('array')){
	$array = array('1' => 'Teste','2' => 'Teste 2');	
	$m->set('array', $array, 40);
	echo "No cache<br />";
}else{
	$array = $m->get('array');
	echo "cache<br />";
}

print_r($array);

