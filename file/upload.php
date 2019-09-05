<?php

include "connect.php";


$data=json_decode(file_get_contents("php://input"));




	if(!empty($_FILES['image1']))
	{
		
		if ((($_FILES["image1"]["type"] == "image/png") || ($_FILES["image1"]["type"] == "image/jpg")|| ($_FILES["image1"]["type"] == "image/gif"))) 
		{

			if (($_FILES["image1"]["error"] > 0))
			{
            		echo "File is error";
        	} 
        	else 
        		{

					$ext = pathinfo($_FILES['image1']['name'],PATHINFO_EXTENSION);
					$image = time().date("dmY").'1'.'.'.$ext;
                	// your Project file upload path
                	move_uploaded_file($_FILES["image1"]["tmp_name"], "C:\\xampp\\htdocs\\project final\\project\\upload\\".$image);
                	
					$insertquery="insert into ads values ('$image')";
						if(mysqli_query($connect, $insertquery))
								{
									echo 'Ad Posted';
								}
								else
								{
									echo 'not inserted';
								}
					
				}
		}
		else
		{
			echo "file must be in jpeg, jpg, png, gif";
		}
	}
	else
	{
		echo "Image Is Empty";
	}


?>