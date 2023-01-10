<!--
Name: Sukanvisa Pearyoo & Maksim Samoylenko
Date: 1/5/2023
URL: https://github.com/sukanvisapearyoo/CupcakeFundrasier
Summary: Using forms, type your name and choose your cupcake flavor(s),
after submitting, gives a receipt of users input, and price at the end.
-->

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cupcake fundraiser</title>
</head>
<body>
<h1> Cupcake Choices...</h1>
<form method="post" action="process.php">
    <!--    User types their name here -->
    <label for="name">Your Name:</label>
    <input type="text" id="name" name="name" >
    <!-- User selects their choice of cupcake flavor(s)-->
    <label><input type="checkbox" value="The Grasshopper" name="flavor[]">The Grasshopper</label>
    <label><input type="checkbox" value="Whiskey Maple Bacon" name="flavor[]">Whiskey Maple Bacon</label>
    <label><input type="checkbox" value="Carrot Walnut" name="flavor[]">Carrot Walnut</label>
    <label><input type="checkbox" value="Salted Caramel Cupcake" name="flavor[]">Salted Caramel Cupcake</label>
    <label><input type="checkbox" value="Red Velvet" name="flavor[]">Red Velvet</label>
    <label><input type="checkbox" value="Lemon Drop" name="flavor[]">Lemon Drop</label>
    <label><input type="checkbox" value="Tiramisu" name="flavor[]">Tiramisu</label>
    <input type="submit" value="Submit">
</form>
</body>
</html>