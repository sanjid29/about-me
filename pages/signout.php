<?php
session_destroy();
?>
<script>
window.onload = function() {
    alert("You Signed Out :(");
    window.location.replace("?id=overview");
}
</script>
