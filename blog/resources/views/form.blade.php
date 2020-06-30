<!DOCTYPE html>
<html>
	<head>
 		<title>Sign Up</title>
	</head>

	<body>
		<h4>Sign Up Form</h4>
			<p>First name:</p>
				<form>
					<input type="text" placeholder="first name...">
				

			<p>Last name:</p>
				
					<input type="text" placeholder="last name...">
				

			<p>Gender:</p>
			
				<input type="radio" name="Gender" value="0" >Male <br>
				<input type="radio" name="Gender" value="1" >Female <br>
				<input type="radio" name="Gender" value="2" >Other 
			

			<p>Nationaly:</p>
			
				<select>
					<option>Indonesia</option>
					<option>Inggris</option>
					<option>Jepang</option>
					<option>Other</option>
				</select>
			

			<p>Language Spoken:</p>
			
				<input type="checkbox" name="Language Spoken">Bahasa Indonesia <br>
				<input type="checkbox" name="Language Spoken">Bahasa Inggris <br>
				<input type="checkbox" name="Language Spoken">Bahasa other
			
			<p>Bio:</p>
			
				<textarea cols="30" rows="5" placeholder="isikan bio anda"></textarea>


			</form>
			<form action="welcome">
				<input type="submit" value="Sign Up" name="Sign Up">
			</form>
	</body>

</html>