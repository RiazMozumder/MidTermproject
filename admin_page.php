
<!DOCTYPE html>
<html>

<style>
	


.profileimg{
	border-radius: 50%;
}

</style>
<body>


	<center><h3>ADMIN PROFILE</h3>
		<hr width="40%"></hr>
	<img class="profileimg" src="image.jpg" height="100px" width="100px"> 
	

	<form method="POST" action="project/Add_Admin.php"  class="form">

	<table class="table">

		<tr>
			<td>Username:</td>
			<td><input type="text" name="name" value="" size="20" /></td>
		</tr>

        <tr>
			<td>Password:</td>
			<td> <input type="number" name="password" value="" size="20"/></td>
	
		</tr>

		<tr>
			<td>Email:</td>
			<td> <input type="Email" name="email" value=""  size="20"/></td>
	
		</tr>

		<tr>
			<td>Phone:</td>
			<td> <input type="number" name="phone" value="" size="20" /></td>
	
		</tr>

		<tr>
			<td>Id:</td>
			<td> <input type="number" name="id" value="" size="20"/></td>
	
		</tr>

		<tr>
			<td>Status:</td>
			<td><input type="text" name="status" value="" size="20" size="21" /></td>
		</tr>

		<tr>
			<td>Address:</td>
			<td><input type="text" name="address" value="" size="20" /></td>
		</tr>
		<tr>
			<td>Gender:</td>
		      <td><input type="text" name="gender" value="" size="20" /></td>
		</tr>


	
		<tr>
			<td>
			
				<input type="Button" name="" value="Update">
				
			</td>
			<td>
				
				<input type="Button" name="" value="Delete">
				
				<a href="Add_Admin.php"> Add admin</a>
				<a href="admin_activity.php"> Activity</a>
		</td>
				
		
		
		

		</tr>
	</table>

</form>

</CENTER>

     <!--  <div class="col-lg-6" id="button">	 
	           <button type="button"><a href="#">Add Admin</a></button> 
	   </div>

-->

	</body>
		
	
</html>