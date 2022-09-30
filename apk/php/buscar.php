<?php
    if ($_SERVER ['REQUEST_METHOD'] == 'GET')
    {
        include('db.php');
        $id = $_GET ['id'];

        

        $query = "SELECT * FROM users Where id ='$id'";
        $result = $mysql -> query($query);

        if ($mysql -> affected_rows > 0)
        {
            while ($row = $result -> fetch_assoc())
            {
                $array = $row;
            }
            echo json_encode($array);
        }
        else
        {
            echo "no se encontro nada";
        }
        $result->close();
        $mysql->close();
    }
?>