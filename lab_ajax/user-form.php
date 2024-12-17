
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
<div class="user-detail">
    <h2>Insert User Data</h2>
    <p id="msg"></p>
    <form id="userForm" method="POST">
          <label class="form-label">Full Name</label>
          <input type="text" class="form-control" placeholder="Enter Full Name" name="fullName" required>
          <label class="form-label">Email Address</label>
          <input type="email" class="form-control" placeholder="Enter Email Address" name="emailAddress" required>
          <label class="form-label">City</label>
          <input type="city" class="form-control" placeholder="Enter Full City" name="city" required>
          <label class="form-label">Country</label>
          <input type="text" class="form-control" placeholder="Enter Full Country" name="country" required><br>
          <button type="submit" class="btn btn-success">Submit</button>
    </form>
        </div>
</div>
<hr><br>

<h2 class="p1"><i class="fa-solid fa-house-user"></i> รายชื่อข้อมูลทั้งหมด</h2>
<div class="content">
    <table class="table table-striped table-bordered table-hover"> 
        <thead>
            <th>FULLNAME</th>
            <th>EMAIL-ADDRESS</th>
            <th>CITY</th>
            <th>COUNTRY</th>
            <th>CREATED-AT</th>
        </thead>
        <tbody>
<?php
include"database.php";//ติดต่อฐานข้อมูล
$sql="SELECT * FROM usertable";
$query=$conn->query($sql);
while($row=$query->fetch_object()){
?>
            <tr>
                <td><?=$row->id?></td>
                <td><?=$row->fullName?></td>
                <td><?=$row->emailAddress?></td>
                <td><?=$row->city?></td>
                <td><?=$row->country?></td>
                <td><?=$row->created_at?></td>
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