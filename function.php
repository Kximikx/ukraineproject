<?php
    function get_places(){

        global $conn;
        $sql="SELECT * FROM places";
        $result=mysqli_query($conn, $sql);
        $places=mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $places;
    }
?>