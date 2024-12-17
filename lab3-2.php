<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

<h2 class="p1"><a href="lab3-1.php"><i class="fa-solid fa-book"></i></a> เพิ่มข้อมูลหนังสือ</h2>
<div class="content">
    <form action="action.php" method="post">
    <div class="mb-3">
            <label class="form-label">Book Name</label>
            <input type="text" class="form-control"name="tbookname" placeholder="ระบุชื่อหนังสือ...">
    </div>
        <div class="mb-3">
            <label class="form-label">Author</label>
            <input type="text" class="form-control"name="tauthor" placeholder="ระบุชื่อผู้เขียนหรือผู้แต่ง...">
        </div>
        <div class="mb-3">
            <label class="form-label">Price</label>
            <input type="number" class="form-control"name="tprice" placeholder="ระบุราคา...">
        </div>
        <div class="mb-3">
            <label class="form-label">Stock</label>
            <input type="number" class="form-control"name="tstock" placeholder="ระบุจำนวนคงเหลือ...">
        </div>
        <div class="mb-3">
            <label class="form-label">Book Type</label>
            <select class="form-control" name="tbooktype">
<?php
    include"dbcon.php";
    $sql="SELECT *FROM tbbooktype";
    $query=$conn->query($sql);
    while($row=$query->fetch_object()){
?>
            <option value="<?=$row->booktypeid?>"><?=$row->booktypename?></option>
<?php } ?>
            </select>
        </div>
        <div><input type="submit" name="bSubmitbook"class="btn btn-primary" value="บันทึกข้อมูล"></div><br>
        
    </form>
</div>
    </form>
</div>

<h2 class="p1"><a href="lab3-1.php"><i class="fa-solid fa-book"></i></a> เพิ่มข้อมูลประเภทหนังสือ</h2>
<div class="content">
    <form action="action.php" method="post">
    <div class="mb-3">
            <label class="form-label">BookTYPE Name</label>
            <input type="text" class="form-control"name="tbooktypename1" placeholder="ระบุชื่อประเภทหนังสือ...">
    </div>
        <div><input type="submit" name="bSubmitbook1"class="btn btn-primary" value="บันทึกข้อมูล"></div><br>
        
    </form>
</div>
    </form>
</div>