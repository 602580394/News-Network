<?php
        $servername = "localhost";
        $username = "root";
        $password = "12345678";
        $dbname = "qikan";
        // 创建连接
        $conn = new mysqli($servername, $username, $password, $dbname);
        mysqli_query($conn, "set names 'UTF8'");
 /*if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
    else
    {
        echo "<p>Connected successfully</p>";
    }
*/
?>