<link rel="stylesheet" href="../style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
<title>เข้าสู่ระบบ</title>

<div class="content col-4 m-auto">
    <div><h2 class="text-center">USER LOGIN</h2></div>
    <form action="../action.php" method="post">
        <div class="mb-3">
            <label class="form-label">USERNAME</label>
            <input type="text" 
            class="form-control form-control-lg"
            name="tusername"
            placeholder="ระบุชื่อผู้ใช้..." required>
        </div>
        <div class="mb-3">
            <label class="form-label">PASSWORD</label>
            <input type="password" 
            class="form-control form-control-lg"
            name="tpassword"
            placeholder="ระบุรหัสผ่าน..." required>
        </div>
        <div>
            <input type="submit" name="bLogin"class="btn btn-primary" value="เข้าสู่ระบบ">
            <input class="btn btn-danger " type="reset" value="เคลียร์ข้อมูล"></div>
        </div>
    </form>
</div>