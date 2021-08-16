<html>
    <head>
    <title>USERNAME/PASSWORD</title>
    </head>
<body>
    <?php
$username=$_POST['username'];
$password=$_POST['password'];
if ($username == "" and $password == ""){
    echo("NON SEI LOGGATO"); 
}
else{
  echo("SEI LOGGATO"); 
}

?>

</body>
</html>