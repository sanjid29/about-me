<?php
session_start();
include('data.php');
$name = $_POST["name"];
$pass = $_POST["password"];
?>
<?php if($name==null or $pass==null):?>
<script>
window.onload = function() {
    alert("Fill The Complete Form :(");
    
    window.location.replace("http://practice.stage0615.activationltd.com");
}
</script>
<?php else:?> 
<?php
$qry="SELECT NAME,PASSWORD FROM users WHERE NAME='$name' and PASSWORD='$pass'";

$result = $conn->query($qry);

if ($result->num_rows==1)
{
$_SESSION["name"]=$name;
}
else
$_SESSION["name"]=null;
?>
<?php if($_SESSION["name"]==null): ?>
<script>
window.onload = function() {
    alert("Wrong Input :(");
    
    window.location.replace("http://practice.stage0615.activationltd.com");
}
</script>
<?php else: ?>
<script>
window.onload = function() {
    alert("User Signed In :(");
    
    window.location.replace("http://practice.stage0615.activationltd.com/main.php");
}
</script>
<?php endif ?>
<?php endif ?>

