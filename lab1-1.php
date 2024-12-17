<?php
    //index.php
    include"dbcon.php";//เชื่อมกับฐานข้อมูล
    $sql="SELECT * FROM tbstudent";
    $query=$conn->query($sql); //นำคำสั่ง sql ไปกระทำกับฐานข้อมูล
    while($rs=$query->fetch_object()){
        echo $rs->stdid.". ".$rs->firstname.
        "&nbsp;".$rs->lastname."<br>".
        $rs->address."<br><br>";
    }

    echo"<hr>";//แสดงเส้นคั่น

    $sql2="SELECT * FROM tbstudent
                    WHERE stdid='4'";
    $query2=$conn->query($sql2); //นำคำสั่ง sql ไปกระทำกับฐานข้อมูล
    while($rs2=$query2->fetch_object()){
        echo $rs2->stdid.". ".$rs2->firstname.
        "&nbsp;".$rs2->lastname."<br>".
        $rs2->address."<br><br>";
    }

    echo"<hr>";//แสดงเส้นคั่น

    $sql3="SELECT * FROM tbstudent
                    WHERE firstname like '%ร%'";
    $query3=$conn->query($sql3); //นำคำสั่ง sql ไปกระทำกับฐานข้อมูล
    while($rs3=$query3->fetch_object()){
        echo $rs3->stdid.". ".$rs3->firstname.
        "&nbsp;".$rs3->lastname."<br>".
        $rs3->address."<br><br>";
    }
?>