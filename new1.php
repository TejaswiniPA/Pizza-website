<!DOCTYPE html>
<html lang="en">

<head>
	<title>GFG- Store Data</title>
</head>

<body>
	<center>
		<h1>Storing Form data in Database</h1>

		<form action="insert.php" method="post">
			
			
<p>
				<label for="firstName">First Name:</label>
				<input type="text" name="first_name" id="first_name">
			</p>



			
			
<p>
				<label for="lastName">Last Name:</label>
				<input type="text" name="last_name" id="last_name">
			</p>


			
<p>
				<label for="Date">Date:</label>
				<input type="date" name="date" id="date">
			</p>


			
			
			
<p>
				<label for="Address">Address:</label>
				<input type="text" name="address" id="address">
			</p>


			<label for="orders">Select the item you want!:</label>
			<select name="orders" id="orders" class="form-control">
                                            <option value="Margherita">Margherita</option>
                                            <option value="Farmhouse">Farmhouse</option>
                                            <option value="Indi Tandoori Paneer">Indi Tandoori Paneer</option>
                                            <option value="Non veg Supreme">Non veg Supreme</option>
                                            <option value="Chicken Dominator">Chicken Dominator</option>
                                            <option value="Garlic Breadsticks">Garlic Breadsticks</option>
                                            <option value="Stuffed Garlic Breadsticks">Stuffed Garlic Breadsticks</option>
                                            <option value="Chocolava Cake">Chocolava Cake</option>
                                        </select>
			
			
<p>
				<label for="emailAddress">Email Address:</label>
				<input type="text" name="email" id="email">
			</p>


			
			<input type="submit" value="Submit">
		</form>
	</center>
</body>

</html>
