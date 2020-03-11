<?php
	session_Start();

	if(isset($_REQUEST['Login']))
	{
		$id = $_REQUEST['id'];
		$password = $_REQUEST['Password'];
		$file = fopen("admin_info.txt",'r');
		
		if(empty($id) || empty($password))
		{
			header("Location: login.php");
		}
		else
		{
			while(!feof($file))
			{
				$info = fgets($file);
				$data = explode('|',$info);
				$flag = false;

				if($id == $data[5] && $password == $data[2])
				{
					$flag = true;

					$image=$_SESSION['image'] = trim($data[0]);
					$_SESSION['name'] = trim($data[1]);
					$_SESSION['password'] = trim($data[2]);
					$_SESSION['email'] = trim($data[3]);
					$_SESSION['phone'] = trim($data[4]);
					$_SESSION['id'] = trim($data[5]);
					$_SESSION['status'] = trim($data[6]);
					$_SESSION['address'] = trim($data[7]);
					$_SESSION['gender'] = trim($data[8]);
					

					header("Location: admin_page.php");
				}
			}

			if($flag == false)
			{
				echo "Invalid Username or Password."."<br>";
			
			}
		}
	}
	else
	{
		header("location: login.php");
	}

	echo $image;
?>