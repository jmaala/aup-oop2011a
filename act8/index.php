<?php

require_once "models/entities/rows/row.php";
require_once "models/entities/rows/rowset.php";
require_once "models/model.php";

$x=0;
$row = new row();
$rowset = new rowset();
/*echo "Enter list Limit:";
$limit=trim(fgets(STDIN));
echo "Enter the id you want to find:";
$id=trim(fgets(STDIN));
$model = new data_model((array('limit'=>$limit,'id'=>$id)));
echo "This is the list\n";
print_r($model->getList());
echo "This is ID ".$id."\n";
print_r($model->getItem());
echo "The total items in the list: ".$model->getTotal();*/


while($x!=5)
	{
			echo "
		  1. Add info\n
		  2. Edit info\n
		  3. Display info\n
		  4. Search ID\n
		  5. Exit\n
		  Enter your choice: ";
		  $x=trim(fgets(STDIN));
		  
		  switch($x)
		  {
			  case 1:
				$rowset = new rowset();
				$row = new row();
				$file = fopen("php://stdin", "r");

				foreach($row->getColumns() as $column)
				{
					echo ucwords($column).":";
					$row->$column = trim(fgets($file));
				}			
				$rowset->add($row);
				
				
			 break;
			 case 2:
				$rowset = new rowset();
				$row = new row();
				echo "Enter user id for updates: ";
				$id = trim(fgets(STDIN));
				$row->data = $rowset->find($id);
				foreach($row->getColumns() as $column)
				{
					$row->id=$id;
					if($column!="id")
					{
						echo ucwords($column).":";
						$row->$column = trim(fgets(STDIN));
					}
				}
				$rowset->update($row->getData());
				$rowset->save();
				
			 break;
			 case 3:
				print_r($rowset);
			 break;
			 case 4:
				$rowset = new rowset();
				echo "Enter user id: ";
				$id= trim(fgets(STDIN));
				$row_f = $rowset->find($id);
				print_r($row_f);
			 break;
		  }
	}

die();
