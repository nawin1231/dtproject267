
<!DOCTYPE html>
<html>
<title>Index</title>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
<!--====form section start====-->
<div class="content">
<h2 class="p1"> กรอกข้อมูลห้องพัก</h2>
    <p id="msg"></p>
    <form id="userForm" method="POST">
          <label class="form-label">Room Name</label>
          <input type="text" class="form-control" placeholder="Enter Full Name" name="troomname" required>
          <label class="form-label">Detail</label>
          <input type="text" class="form-control" placeholder="Enter Email Address" name="tdetail"required>
          <label class="form-label">Room Type</label>
        <select class="form-control" name="troomtypeid">
<?php
    include"database.php";
    $sql="SELECT *FROM tbroomtype";
    $query=$conn->query($sql);
    while($row=$query->fetch_object()){
?>
            <option value="<?=$row->roomtypeid?>"><?=$row->roomtypename?></option>
<?php } ?>
            </select><br>
          <button type="submit" class="btn btn-success">Submit</button>
    </form>
        </div>
</div>
<hr><br>

<h2 class="p1"><i class="fa-solid fa-house-user"></i> ข้อมูลห้องพักทั้งหมด</h2>
<div class="content">
    <table class="table table-striped table-bordered table-hover"> 
        <thead>
            <th>ROOM ID</th>
            <th>ROOMNAME</th>
            <th>DETAIL</th>
            <th>ROOM TYPE</th>
        </thead>
        <tbody>
<?php
include"database.php";//ติดต่อฐานข้อมูล
$sql="SELECT * FROM tbroom INNER JOIN tbroomtype ON tbroom.roomtypeid=tbroomtype.roomtypeid";
$query=$conn->query($sql);
while($row=$query->fetch_object()){
?>
            <tr>
                <td><?=$row->roomid ?></td>
                <td><?=$row->roomname?></td>
                <td><?=$row->detail?></td>
                <td><?=$row->roomtypename?></td>
            </tr>
<?php
}
?>
        </tbody>
    </table>
</div>
<hr>

<!--====form section start====-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript" src="ajax-script.js"></script>
</body>
</html>