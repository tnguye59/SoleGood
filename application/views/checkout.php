<?php

?>

<html>
<head>
	<title>Checkout</title>
		<meta charset = "utf-8">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="/assets/css/checkout.css">
</head>
<body>
	<div id = "wrapper">
		<div class = "page-header">
			<a id = "home" href = "#">Home</a>
			<a id = "logout" href = "#">Logout</a>
		</div>

		<div id = "maincontent">
			<form action = " " method = "post">
				<fieldset>
					<legend>Billing Address</legend>
					<label>First Name:</label><input type = 'text' name = 'first_name'>	
					<label>Last Name:</label><input type = 'text' name = 'last_name'>
					<label>Email:</label><input type = 'text' name = 'email'>
					<label>Confirm Email:</label><input type = 'text' name = 'conf_email'>

					<label>Address 1:</label><input type = 'text' name = 'address_one'>
					<label>Address 2:</label><input type = 'text' name = 'address_two'>
					<label>City:</label><input type = 'text' name = 'city'>
					<label>State:</label><select name = 'state'>
												<option value="AL">Alabama</option>
												<option value="AK">Alaska</option>
												<option value="AZ">Arizona</option>
												<option value="AR">Arkansas</option>
												<option value="CA">California</option>
												<option value="CO">Colorado</option>
												<option value="CT">Connecticut</option>
												<option value="DE">Delaware</option>
												<option value="DC">District Of Columbia</option>
												<option value="FL">Florida</option>
												<option value="GA">Georgia</option>
												<option value="HI">Hawaii</option>
												<option value="ID">Idaho</option>
												<option value="IL">Illinois</option>
												<option value="IN">Indiana</option>
												<option value="IA">Iowa</option>
												<option value="KS">Kansas</option>
												<option value="KY">Kentucky</option>
												<option value="LA">Louisiana</option>
												<option value="ME">Maine</option>
												<option value="MD">Maryland</option>
												<option value="MA">Massachusetts</option>
												<option value="MI">Michigan</option>
												<option value="MN">Minnesota</option>
												<option value="MS">Mississippi</option>
												<option value="MO">Missouri</option>
												<option value="MT">Montana</option>
												<option value="NE">Nebraska</option>
												<option value="NV">Nevada</option>
												<option value="NH">New Hampshire</option>
												<option value="NJ">New Jersey</option>
												<option value="NM">New Mexico</option>
												<option value="NY">New York</option>
												<option value="NC">North Carolina</option>
												<option value="ND">North Dakota</option>
												<option value="OH">Ohio</option>
												<option value="OK">Oklahoma</option>
												<option value="OR">Oregon</option>
												<option value="PA">Pennsylvania</option>
												<option value="RI">Rhode Island</option>
												<option value="SC">South Carolina</option>
												<option value="SD">South Dakota</option>
												<option value="TN">Tennessee</option>
												<option value="TX">Texas</option>
												<option value="UT">Utah</option>
												<option value="VT">Vermont</option>
												<option value="VA">Virginia</option>
												<option value="WA">Washington</option>
												<option value="WV">West Virginia</option>
												<option value="WI">Wisconsin</option>
												<option value="WY">Wyoming</option>
											</select>
					<label>Zip Code:</label><input type = 'text' name = 'zipcode'>
				</fieldset>

				<fieldset>
					<legend>Shipping Address</legend>
						<label>First Name:</label><input type = 'text' name = 'first_name'>	
					<label>Last Name:</label><input type = 'text' name = 'last_name'>
					<label>Email:</label><input type = 'text' name = 'email'>
					<label>Confirm Email:</label><input type = 'text' name = 'conf_email'>

					<label>Address 1:</label><input type = 'text' name = 'address_one'>
					<label>Address 2:</label><input type = 'text' name = 'address_two'>
					<label>City:</label><input type = 'text' name = 'city'>
					<label>State:</label><select name = 'state'>
												<option value="AL">Alabama</option>
												<option value="AK">Alaska</option>
												<option value="AZ">Arizona</option>
												<option value="AR">Arkansas</option>
												<option value="CA">California</option>
												<option value="CO">Colorado</option>
												<option value="CT">Connecticut</option>
												<option value="DE">Delaware</option>
												<option value="DC">District Of Columbia</option>
												<option value="FL">Florida</option>
												<option value="GA">Georgia</option>
												<option value="HI">Hawaii</option>
												<option value="ID">Idaho</option>
												<option value="IL">Illinois</option>
												<option value="IN">Indiana</option>
												<option value="IA">Iowa</option>
												<option value="KS">Kansas</option>
												<option value="KY">Kentucky</option>
												<option value="LA">Louisiana</option>
												<option value="ME">Maine</option>
												<option value="MD">Maryland</option>
												<option value="MA">Massachusetts</option>
												<option value="MI">Michigan</option>
												<option value="MN">Minnesota</option>
												<option value="MS">Mississippi</option>
												<option value="MO">Missouri</option>
												<option value="MT">Montana</option>
												<option value="NE">Nebraska</option>
												<option value="NV">Nevada</option>
												<option value="NH">New Hampshire</option>
												<option value="NJ">New Jersey</option>
												<option value="NM">New Mexico</option>
												<option value="NY">New York</option>
												<option value="NC">North Carolina</option>
												<option value="ND">North Dakota</option>
												<option value="OH">Ohio</option>
												<option value="OK">Oklahoma</option>
												<option value="OR">Oregon</option>
												<option value="PA">Pennsylvania</option>
												<option value="RI">Rhode Island</option>
												<option value="SC">South Carolina</option>
												<option value="SD">South Dakota</option>
												<option value="TN">Tennessee</option>
												<option value="TX">Texas</option>
												<option value="UT">Utah</option>
												<option value="VT">Vermont</option>
												<option value="VA">Virginia</option>
												<option value="WA">Washington</option>
												<option value="WV">West Virginia</option>
												<option value="WI">Wisconsin</option>
												<option value="WY">Wyoming</option>
											</select>
					<label>Zip Code:</label><input type = 'text' name = 'zipcode'>
				</fieldset>
			<input type = "submit" value = "Place Order">
			</form>
		<button id = "backtocart"><a href="#">Back to Cart</a></button>	
		</div>
	</div>

</body>
</html>