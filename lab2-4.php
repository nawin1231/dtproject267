<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

<h2 class="p1"><a href="lab2-3.php"><i class="fa-solid fa-list" ></i></a> เพิ่มข้อมูลห้องพัก</h2>
<div class="content">
    <form action="action.php" method="post">
    <div class="mb-3">
            <label class="form-label">Room Name</label>
            <input type="text" class="form-control"name="troomname" placeholder="ระบุชื่อห้อง...">
        </div>
        <div class="mb-3">
            <label class="form-label">Detail</label>
            <textarea class="form-control" rows="3" name="tdetail" placeholder="ระบุรายละเอียดห้อง..."></textarea>
        </div>
        <div class="mb-3">
            <label class="form-label">Room Type</label>
            <select class="form-control" name="troomtype">
<?php
    include"dbcon.php";
    $sql="SELECT *FROM tbroomtype";
    $query=$conn->query($sql);
    while($row=$query->fetch_object()){
?>
            <option value="<?=$row->roomtypeid?>"><?=$row->roomtypename?></option>
<?php } ?>
            </select>
        </div>
        <div><input type="submit" name="bSubmitRoom"class="btn btn-primary" value="บันทึกข้อมูล"></div><br>
    </form>
</div>