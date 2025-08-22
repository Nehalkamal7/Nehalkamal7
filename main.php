
<html>
<body>

<form action="welcome.php" method="POST">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
</form>

</body>
</html>

<html>
<body>

Welcome <?php echo $_POST["Name"]; ?><br>
Your email address is: <?php echo $_POST["E-mail"]; ?>

</body>
</html>