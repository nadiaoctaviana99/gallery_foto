<?php
    $koneksi = mysqli_connect("localhost","root","", "ukk_galerifotorpl1");

    function query($query){
        global $koneksi;
        $result = mysqli_query($koneksi,$query);
        $rows=[];

        while($row= mysqli_fetch_assoc($result)){
            $rows[]=$row;
        };

        return $rows;
    }

?>
