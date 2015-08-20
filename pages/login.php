<?php
session_start();
$name = $_POST["name"];
$pass = $_POST["password"];
if((!empty($name)) && (!empty($pass)))
{
$qry="SELECT NAME,PASSWORD FROM users WHERE NAME='$name' and PASSWORD='$pass'";

$result = $conn->query($qry);
if ($result->num_rows >0)
{
$_SESSION["name"]=$name;
}
else
$_SESSION["name"]=null;
}
?>
<?php if($_SESSION["name"]==null): ?>
<script>
window.onload = function() {
    alert("Wrong Input :(");
    window.location.replace("?id=overview");
}
</script>
<?php else: ?>
<script>
window.onload = function() {
    alert("USER SIGNED IN ");
    window.location.replace("?id=overview");
}
</script>
<?php endif ?>

