<?php
    class DBConnection {
    public  function getDBConnection() {
        $con = mysqli_connect("localhost","root","","online_banking_system");
        return $con;
    }
}
