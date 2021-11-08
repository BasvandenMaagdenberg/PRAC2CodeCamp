<?php

$action = $_POST['action'];

if($action == 'create')
{
	// variable
	$book_title = $_POST['book_title'];
	// check if title isnt empty
	if(empty($book_title))
 	{
		$errors[] = "Vul de titel van het boek in."; 
		header("Location: ../admin/invoer/boekeninvoer.php?error=vul een geldige titel in");
	}
	
	$book_autheur = $_POST['book_autheur'];
	if (empty($book_autheur)) 
	{
		$errors[] = "beschrijf de taak in het kort.";
		header("Location: ../admin/invoer/boekeninvoer.php?error=vul een geldige naam van een autheur in");
	}

	$book_img_url = $_POST['book_img_url'];
	if (empty($book_img_url)) 
	{
		$errors[] = "kies een afbeelding.";
		header("Location: ../admin/invoer/boekeninvoer.php?error=dit is geen geldig bestand");
	}

	$book_price = $_POST['book_price'];
	if (!is_numeric($book_price)) 
	{
		$errors[] = "voer een prijs in";
		header("Location: ../admin/invoer/boekeninvoer.php?error= voer een geldig bedrag in");
	}

	if (isset($errors)) 
	{ 
		var_dump($errors); 
		die(); 
	}

	// stap 1
	require_once 'conn.php';

	// stap 2
	$query = "INSERT INTO boeken (book_title, book_autheur, book_img_url, book_price) VALUES (:book_title, :book_autheur, :book_img_url, :book_price)";

	// STAP 3
	$statement = $conn->prepare($query);

	// stap 4
	$statement->execute([
		":book_title" => $book_title,
		":book_autheur" => $book_autheur,
		":book_img_url" => $book_img_url,
		":book_price" => $book_price
	]);

	// stap 5
	header("Location: {$base_url}admin/index.php?msg=boek toegevoegd!");
}


