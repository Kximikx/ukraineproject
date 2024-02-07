<?php
    function get_places(){

        global $conn;
        $sql="SELECT * FROM places";
        $result=mysqli_query($conn, $sql);
        $places=mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $places;
    }

    function get_place_by_id($place_id){

        global $conn;
        $sql="SELECT * FROM places WHERE id=". $place_id;
        $result=mysqli_query($conn, $sql);
        $place=mysqli_fetch_assoc($result);
        return $place;
    }
?>