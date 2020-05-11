<?php
session_start();
require"new1.php";
session_destroy();

?>
<script>
{
    window.location="login.php";
}
</script>
