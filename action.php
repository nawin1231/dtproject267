<?php
    include"dbcon.php";//ให้รู้จักกับฐานข้อมูล
    if(isset($_REQUEST['bSubmitStudent'])){
    $firstname=$_REQUEST['tfirstname'];//รับค่าจาก textbox ที่ชือ tfirstname
    $lastname=$_REQUEST['tlastname'];
    $email=$_REQUEST['temail'];
    $address=$_REQUEST['taddress'];

    echo $firstname. $lastname. $email. $address;
    $sql="INSERT INTO tbstudent
            VALUE(null,'$firstname','$lastname','$email','$address')";
    $query=$conn->query($sql);
    echo"<META HTTP-EQUIV='refresh' CONTENT='3; URL=lab2-2.php'>";
    //หลังจากบันทึก หน่วง 3 วินาที ให้ย้อนกลับไป lab2-2.php
    
    }elseif(isset($_REQUEST['bSubmitRoom'])){
        //ส่วนของการรับค่าจากหน้าเว็บ
        $roomname=$_REQUEST['troomname'];
        $detail=$_REQUEST['tdetail'];
        $roomtype=$_REQUEST['troomtype'];
    echo $roomname.$detail.$roomtype;
    $sql="INSERT INTO tbroom
            VALUE(null,'$roomname','$detail','$roomtype')";
    $query=$conn->query($sql);
    echo"<META HTTP-EQUIV='refresh' CONTENT='3; URL=lab2-4.php'>";
    }elseif(isset($_REQUEST['bSubmitbook'])){
        //ส่วนของการรับค่าจากหน้าเว็บ
        $bookname=$_REQUEST['tbookname'];
        $author=$_REQUEST['tauthor'];
        $price=$_REQUEST['tprice'];
        $stock=$_REQUEST['tstock'];
        $booktype=$_REQUEST['tbooktype'];
    echo $bookname.$author.$price.$stock.$booktype;
    $sql="INSERT INTO tbbook
            VALUE(null,'$bookname','$author','$price','$stock','$booktype')";
    $query=$conn->query($sql);
    echo"<META HTTP-EQUIV='refresh' CONTENT='3; URL=lab3-1.php'>";
    }elseif(isset($_REQUEST['bSubmitbook1'])){
        //ส่วนของการรับค่าจากหน้าเว็บ
        $booktypename1=$_REQUEST['tbooktypename1'];
    echo $booktypename1;
    $sql="INSERT INTO tbbooktype
            VALUE(null,'$booktypename1')";
    $query=$conn->query($sql);
    echo"<META HTTP-EQUIV='refresh' CONTENT='3; URL=lab3-1.php'>";
    }elseif(isset($_REQUEST['bSubmituser'])){
        //ส่วนของการรับค่าจากหน้าเว็บ
        $firstname=$_REQUEST['tfirstname'];
        $lastname=$_REQUEST['tlastname'];
        $username=$_REQUEST['tusername'];
        $password=$_REQUEST['tpassword'];
        $hashValue=md5($password);
    echo "บันทึกเสร็จสิ้น";
    $sql="INSERT INTO tbuser
            VALUE(null,'$firstname','$lastname','$username','$hashValue')";
    $query=$conn->query($sql);
    echo"<META HTTP-EQUIV='refresh' CONTENT='3; URL=lab_function/lab-formregis.php'>";
    }elseif(isset($_REQUEST['bLogin'])){
        $username=$_REQUEST['tusername'];
        $password=$_REQUEST['tpassword'];
        $hashValue=md5($password);
        $sql="SELECT * FROM tbuser
                WHERE username='$username'and password='$hashValue'";
        $query=$conn->query($sql);
        $rs=$query->fetch_object();//ดึงข้อมูลตัวที่หาเจอมาเก็บที่ตัวแปร $rs
        $numrows=$query->num_rows;//นับจำนวนแถวที่หาเจอ จะคืนค่ากลับมาเป็นตัว int เสมอ

        if($numrows>0){
                echo "ล็อคอินสำเร็จ";
        }else{
                echo "ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง";
        }
    echo"<META HTTP-EQUIV='refresh' CONTENT='3; URL=lab_function/lab-formlogin.php'>";
    }
?>