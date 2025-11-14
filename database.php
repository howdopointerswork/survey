<?php

$db = new SQLite3("survey.db");

function createResults($db){

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

}


function createPetition($db){
	
	$db->exec("CREATE TABLE IF NOT EXISTS petition (

			id INTEGER PRIMARY KEY AUTOINCREMENT,

			name TEXT NOT NULL,
			email TEXT NOT NULL,
			signature TEXT NOT NULL
	


	)");

}



function recordResults($db, $entries){

	
	$query = "INSERT INTO results (a1, a2, b1, b2, b3, c, d1, d2, e1, e2, f1, f2, g1, g2, g3, g4, h1, h2, h3, h4, i1, i2, j1, j2, j3, k1, k2, l1, l2, l3, l4, l5, con, opt) VALUES(:a1, :a2, :b1, :b2, :b3, :c, :d1, :d2, :e1, :e2, :f1, :f2, :g1, :g2, :g3, :g4, :h1, :h2, :h3, :h4, :i1, :i2, :j1, :j2, :j3, :k1, :k2, :l1, :l2, :l3, :l4, :l5, :con, :opt)";

	$statement = $db->prepare($query);

	$statement->bindValue(':a1', $entries[0]);
	$statement->bindValue(':a2', $entries[1]);
	$statement->bindValue(':b1', $entries[2]);
	$statement->bindValue(':b2', $entries[3]);
	$statement->bindValue(':b3', $entries[4]);
	$statement->bindValue(':c', $entries[5]);
	$statement->bindValue(':d1', $entries[6]);
	$statement->bindValue(':d2', $entries[7]);
	$statement->bindValue(':e1', $entries[8]);
	$statement->bindValue(':e2', $entries[9]);
	$statement->bindValue(':f1', $entries[10]);
	$statement->bindValue(':f2', $entries[11]);
	$statement->bindValue(':g1', $entries[12]);
	$statement->bindValue(':g2', $entries[13]);
	$statement->bindValue(':g3', $entries[14]);
	$statement->bindValue(':g4', $entries[15]);
	$statement->bindValue(':h1', $entries[16]);
	$statement->bindValue(':h2', $entries[17]);
	$statement->bindValue(':h3', $entries[18]);
	$statement->bindValue(':h4', $entries[19]);
	$statement->bindValue(':i1', $entries[20]);
	$statement->bindValue(':i2', $entries[21]);
	$statement->bindValue(':j1', $entries[22]);
	$statement->bindValue(':j2', $entries[23]);
	$statement->bindValue(':j3', $entries[24]);
	$statement->bindValue(':k1', $entries[25]);
	$statement->bindValue(':k2', $entries[26]);
	$statement->bindValue(':l1', $entries[27]);
	$statement->bindValue(':l2', $entries[28]);
	$statement->bindValue(':l3', $entries[29]);
	$statement->bindValue(':l4', $entries[30]);
	$statement->bindValue(':l5', $entries[31]);
	$statement->bindValue(':con', $entries[32]);
	$statement->bindValue(':opt', $entries[33]);

	$statement->execute();


}


function recordSignature($db){

	$query = "INSERT INTO petition (name, email, signature, studentid) VALUES(:name, :email, :signature, :studentid)";

	$statement = $db->prepare($query);

	$name = filter_input(INPUT_POST, 'name');

	$num = filter_input(INPUT_POST, 'num');

	$email = filter_input(INPUT_POST, 'email');

	$sig = filter_input(INPUT_POST, 'sig');

	$statement->bindValue(':name', $name);
	$statement->bindValue(':email', $email);
	$statement->bindValue(':signature', $sig);
	$statement->bindValue(':studentid', $num);

	$statement->execute();
}


?>
