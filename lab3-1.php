<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

<h2 class="p1"><i class="fa-solid fa-house-user"></i> หนังสือทั้งหมด</h2>
<div class="content">
    <table class="table table-striped table-bordered"> 
        <thead>
            <th>BOOKID</th>
            <th>BOOKNAME</th>
            <th>AUTHOR</th>
            <th>PRICE</th>
            <th>STOCK</th>
            <th>BOOKTYPEID</th>
        </thead>
        <tbody>
<?php
include"dbcon.php";//ติดต่อฐานข้อมูล
$sql="SELECT * FROM tbbook";
$query=$conn->query($sql);
while($row=$query->fetch_object()){
?>
            <tr>
                <td><?=$row->bookid?></td>
                <td><?=$row->bookname?></td>
                <td><?=$row->author?></td>
                <td><?=$row->price?></td>
                <td><?=$row->stock?></td>
                <td><?=$row->booktypeid?></td>
            </tr>
<?php
}
?>
        </tbody>
    </table>
    <div><a href="lab3-2.php"><button class="btn btn-primary"><i class="fa-solid fa-hotel"></i> ADD BOOK</button></a></div>
</div>
<hr>





<h2 class="p1"><i class="fa-solid fa-house-user"></i> ประเภทของหนังสือ</h2>
<div class="content">
    <table class="table table-striped table-bordered"> 
        <thead>
            <th>BOOKTYPEID</th>
            <th>BOOKTYPENAME</th>
        </thead>
        <tbody>
<?php
include"dbcon.php";//ติดต่อฐานข้อมูล
$sql="SELECT * FROM tbbooktype";
$query=$conn->query($sql);
while($row=$query->fetch_object()){
?>
            <tr>
                <td><?=$row->booktypeid?></td>
                <td><?=$row->booktypename?></td>
            </tr>
<?php
}
?>
        </tbody>
    </table>
    <div><a href="lab3-2.php"><button class="btn btn-primary"><i class="fa-solid fa-hotel"></i> ADD BOOKTYPE</button></a></div>
</div>




<hr>
<h2 class="p1"><i class="fa-solid fa-house-user"></i> TBBOOKTYPE</h2>
<div class="content">
    <table class="table table-striped table-bordered"> 
        <thead>
            <th>BOOKNAME</th>
            <th>BOOKTYPENAME</th>
            <th>PRICE</th>
        </thead>
        <tbody>
<?php
include"dbcon.php";//ติดต่อฐานข้อมูล
$sql="SELECT * FROM tbbook INNER JOIN tbbooktype ON tbbook.booktypeid=tbbooktype.booktypeid";
$query=$conn->query($sql);
while($row=$query->fetch_object()){
?>
            <tr>
                <td><?=$row->bookname?></td>
                <td><?=$row->booktypename?></td>
                <td><?=$row->price?></td>
            </tr>
<?php
}
?>
        </tbody>
    </table>
</div>
