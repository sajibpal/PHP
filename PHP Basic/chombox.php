<!DOCTYPE HTML>
<html>
<head>
</head> 
<body>

<form action="select.php" method="post">
Name: <input type="text" name="name" ><br>
E-mail: <input type="text" name="email" ><br>
Manufacturer : <select id="cmbMake" name="Make" >
   <option value="">Select Manufacturer</option>
   <option value="Any">--Any--</option>
   <option value="Toyota">Toyota</option>
   <option value="Nissan">Nissan</option>
</select><br>
<input type="submit" name="submit" value="Submit">
</form>

</body>
</html>