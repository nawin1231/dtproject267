<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

<h2 class="p1"><i class="fa-solid fa-house-user"></i> ความหมายของ CSS</h2>
<div class="content">
CSS ย่อมาจาก Cascading Style Sheets คือภาษาที่ใช้อธิบายรูปร่างและลักษณะของ ไฟล์ HTML • Style Sheet 
คือไฟล์ที่เขียนด้วยภาษา CSS เพื่อให้ไฟล์ HTML อ้างอิงการกำหนดรูปร่าง และลักษณะ ซึ่งไฟล์นี้จะมีนามสกุลเป็น .css • 
ในการเรียกใช้ไฟล์ .css ใน HTML เราจะเพิ่มแท็ก link ระหว่างแท็ก head
</div>
<h2 class="p1"><i class="fa-brands fa-css"></i> รูปแบบการใช้งาน CSS</h2>
<div class="content">
การเขียน CSS มีหลายรูปแบบในการจัดการหลัก ๆ มีอยู่ 3 รูปแบบ ซึ่งในแต่ละรูปแบบก็จะมีจุดประส์ในการใช้งานที่แตกต่างกัน 
แต่ยังใช้ไวยากรณ์ของภาษา CSS ยังคงเดิม เพียงแค่รูปแบบการจัดวางที่แตกต่างกัน โดยทั้งทั้งหมด 3 รูปแบบ ดังนี้<br>
-Inline Style Sheet <br>
-Internal Style Sheet<br>
-External Style Sheet<br>
</div>

<h2 class="p1"><i class="fa-solid fa-list"></i> การสร้างฟอร์ม (FORM)</h2>
<div class="content">
    <form action="action.php" method="post">
    <div class="mb-3">
            <label class="form-label">First Name</label>
            <input type="text" class="form-control"name="tfirstname" placeholder="ระบุชื่อ...">
        </div>
        <div class="mb-3">
            <label class="form-label">Last Name</label>
            <input type="text" class="form-control"name="tlastname" placeholder="ระบุนามสกุล...">
        </div>
        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" class="form-control"name="temail" placeholder="ระบุ E-mail...">
        </div>
        <div class="mb-3">
            <label class="form-label">Address</label>
            <textarea class="form-control" rows="3" name="taddress" placeholder="ระบุที่อยู่..."></textarea>
        </div>
        <div><input type="submit" name="bSubmitStudent"class="btn btn-primary" value="บันทึกข้อมูล"></div><br>
    </form>
</div>