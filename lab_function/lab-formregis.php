<link rel="stylesheet" href="../style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
<title>เพิ่มข้อมูลผู้ใช้</title>
<h2 class="p1"><a href="lab-formlogin.php"><i class="fa-solid fa-book"></i></a>เพิ่มข้อมูลผู้ใช้</h2>
<div class="content">
    <form action="../action.php" method="post">
    <div class="mb-3">
            <label class="form-label">FIRSTNAME</label>
            <input type="text" class="form-control"name="tfirstname" placeholder="ระบุชื่อผู้ใช้..." required>
    </div>
        <div class="mb-3">
            <label class="form-label">LASTNAME</label>
            <input type="text" class="form-control"name="tlastname" placeholder="ระบุนามสกุล..."required>
        </div>
        <div class="mb-3">
            <label class="form-label">USERNAME</label>
            <input type="text" class="form-control"name="tusername" placeholder="ระบุ USERNAME..."required>
        </div>
        <div class="mb-3">
            <label class="form-label">PASSWORD</label>
            <input type="password" class="form-control"name="tpassword" placeholder="ระบุ PASSWORD..."required>
        </div>
        
        <div><input type="submit" name="bSubmituser"class="btn btn-primary" value="บันทึกข้อมูล">
        <input class="btn btn-danger" type="reset" value="เคลียร์ข้อมูล"></div>

        
    </form>
</div>
    </form>
</div>
