
<!DOCTYPE html>
<html>

<style>
	


.profileimg{
	border-radius: 50%;
}

</style>
<body>

	<center><h3>WELCOME TO ONLINE EDUCATION PLATFORM!</h3>


	
        

	<form method="POST" action="store_admin_data.php" class="form">


	<table class="table">


<tr>
			<td>Add image:</td>
			<td><input type="file" name="image" value="" size="20" /></td>
		</tr>


		<tr>
			<td>Username:</td>
			<td> <input type="text" name="Username" value=""/></td>

        <tr>
			<td>Password:</td>
			<td> <input type="number" name="Password" value=""/></td>
	
		</tr>

		<tr>
			<td>Email:</td>
			<td> <input type="Email" name="Email" value=""  size="20"/></td>
	
		</tr>

		<tr>
			<td>Phone:</td>
			<td> <input type="number" name="Phone" value=""/></td>
	
		</tr>

		<tr>
			<td>Id:</td>
			<td> <input type="number" name="id" value=""/></td>
	
		</tr>

		<tr>
			<td>Status:</td>
			<td><input type="text" name="Status" value="" size="20" /></td>
		</tr>

		<tr>
			<td>Address:</td>
			<td><input type="text" name="address" value="" size="20" /></td>
		</tr>


	
		<tr>
				<td>Gender:</td>
				<td>
				<input type="radio" name="Gender" value="Male">Male
				<input type="radio" name="Gender" value="Female">Female
				<input type="radio" name="Gender" value="Other"> Other 
				
               </td>
			</tr>

		<tr>

			<td>
			 	<input type="submit" name="SUBMIT" value="SUBMIT">  
				
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