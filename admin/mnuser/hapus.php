<?php

include("../../config/config.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM menu_u WHERE noId='$id'";
    $query = mysqli_query($link, $sql);
}

?>
<script>
    window.location = 'data.php';
</script>