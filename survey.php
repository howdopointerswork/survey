<?php

//function that creates var and inserts into array
//create array of label names and pass as well outside function

function processResult($name, $inputs){

	$result = $_POST[$name] ?? '';

	echo $result;

}

	$names = ['a1', 'a2', 'b1', 'b2', 'b3', 'c', 'd1', 'd2', 'e1', 'e2', 'f1', 'f2', 'g1', 'g2', 'g3', 'g4', 'h1', 'h2', 'h3', 'h4', 'i1', 'i2', 'j1', 'j2', 'j3', 'k1', 'k2', 'l1', 'l2', 'l3', 'l4', 'l5', 'con', 'opt'];

	if($_SERVER["REQUEST_METHOD"] === "POST"){

		processResult($names[0], $names);
		processResult($names[1], $names);
		processResult($names[2], $names);


/*		$result_b1 = $_POST['b1'] ?? '';

		echo $result_b1;*/

		/*$result_b2 = $_POST['b2'] ?? '';

		echo $result_b2;*/



		


	$db = new SQLite3("survey.db");


	$db->exec("CREATE TABLE IF NOT EXISTS results (

	id INTEGER PRIMARY KEY AUTOINCREMENT,

	a1 INTEGER NOT NULL,
	a2 INTEGER NOT NULL,

	b1 INTEGER NOT NULL,
	b2 INTEGER NOT NULL,
	b3 TEXT NOT NULL,

	c TEXT NOT NULL,

	d1 INTEGER NOT NULL,
	d2 INTEGER NOT NULL,

	e1 INTEGER NOT NULL,
	e2 TEXT,

	f1 TEXT,
	f2 TEXT,

	g1 INTEGER NOT NULL,
	g2 INTEGER NOT NULL,
	g3 INTEGER NOT NULL,
	g4 INTEGER NOT NULL,
	
	h1 INTEGER NOT NULL,
	h2 INTEGER NOT NULL,
	h3 INTEGER NOT NULL,
	h4 INTEGER NOT NULL,

	i1 INTEGER NOT NULL,
	i2 INTEGER NOT NULL,

	j1 INTEGER NOT NULL,
	j2 TEXT,
	j3 TEXT,

	k1 TEXT,
	k2 TEXT,

	l1 TEXT NOT NULL,
	l2 TEXT NOT NULL,
	l3 TEXT NOT NULL,
	l4 TEXT NOT NULL,
	l5 INTEGER NOT NULL,

	con INTEGER NOT NULL,
	opt INTEGER NOT NULL

)");



	//test values 

	//insert here

	$db->close();

}


?>