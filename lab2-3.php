<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

<h2 class="p1"><i class="fa-solid fa-house-user"></i> การดึงข้อมูลจากตารางมากกว่า 1 ตาราง (join table)</h2>
<div class="content">
xxxxxxxx
</div>

<h2 class="p1"><i class="fa-solid fa-house-user"></i> ทดสอบดึงตาราง tbroom</h2>
<div class="content">
    <table class="table table-striped table-bordered"> 
        <thead>
            <th>ROOMID</th>
            <th>ROOMNAME</th>
            <th>DETAIL</th>
            <th>ROOMTYPEID</th>
        </thead>
        <tbody>
<?php
include"dbcon.php";//ติดต่อฐานข้อมูล
$sql="SELECT * FROM tbroom";
$query=$conn->query($sql);
while($row=$query->fetch_object()){
?>
            <tr>
                <td><?=$row->roomid?></td>
                <td><?=$row->roomname?></td>
                <td><?=$row->detail?></td>
                <td><?=$row->roomtypeid?></td>
            </tr>
<?php
}
?>
        </tbody>
    </table>
    <div><a href="lab2-4.php"><button class="btn btn-primary"><i class="fa-solid fa-hotel"></i> ADD ROOM</button></a></div>
</div>

<h2 class="p1"><i class="fa-solid fa-house-user"></i> ทดสอบดึงตาราง tbroomtype</h2>
<div class="content">
    <table class="table table-striped table-bordered"> 
        <thead>
            <th>ROOMTYPEID</th>
            <th>ROOMTYPENAME</th>
            <th>PRICE</th>
        </thead>
        <tbody>
<?php
include"dbcon.php";//ติดต่อฐานข้อมูล
$sql="SELECT * FROM tbroomtype";
$query=$conn->query($sql);
while($row=$query->fetch_object()){
?>
            <tr>
                <td><?=$row->roomtypeid?></td>
                <td><?=$row->roomtypename?></td>
                <td><?=$row->price?></td>
            </tr>
<?php
}
?>
        </tbody>
    </table>
</div>

<h2 class="p1"><i class="fa-solid fa-house-user"></i> ทดสอบดึงตารางมากกว่า 1 ตาราง</h2>
<div class="content">
    <table class="table table-striped table-bordered"> 
        <thead>
            <th>ROOMNAME</th>
            <th>ROOMTYPENAME</th>
            <th>PRICE</th>
        </thead>
        <tbody>
<?php
include"dbcon.php";//ติดต่อฐานข้อมูล
$sql="SELECT * FROM tbroom INNER JOIN tbroomtype ON tbroom.roomtypeid=tbroomtype.roomtypeid";
$query=$conn->query($sql);
while($row=$query->fetch_object()){
?>
            <tr>
                <td><?=$row->roomname?></td>
                <td><?=$row->roomtypename?></td>
                <td><?=$row->price?></td>
            </tr>
<?php
}
?>
        </tbody>
    </table>
</div>