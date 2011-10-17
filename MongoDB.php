<?php
	$con= new Mongo();
	$db=$con->oop;
	$data=array(
		"id"=>"0",
		"name"=>"Jed",
		"age"=>"19",
		"gender"=>"Male");		
	//this is how you get your table
	$table=$db->jobm_nameslist;
	//this is how you insert
	$table->remove();
	$table->insert($data);
	//this is how you get all rows;
	//$table->find();//iterator
	//limit results
	//$table->find()->limit(5);
	$data=array(
		"id"=>"1",
		"name"=>"lol",
		"age"=>"19",
		"gender"=>"Male");	
	$table->insert($data);

	$coll=$table->find();
		foreach($coll as $row)
		{
			echo $row["name"];
		}

