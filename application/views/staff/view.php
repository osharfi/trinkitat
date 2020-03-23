 <div class="row">
        <div class="col-12">

<?php
echo '<h2>'.$staff_item['name'].'</h2>';
?>

<table>
<tr><td>الهاتف</td><td><?=$staff_item['phone'];?></td></tr>
<tr><td>الوظيفة</td><td><?=$staff_item['position'];?></td></tr>
<tr><td>المؤهل</td><td><?=$staff_item['certificate'];?></td></tr>
<tr><td>الحساب</td><td><?=$staff_item['account'];?></td></tr>
<tr><td>المرتب الاساسي</td><td><?=$staff_item['salary'];?></td></tr>
<tr><td>بدل سكن</td><td><?=$staff_item['living'];?></td></tr>
<tr><td>علاوة فنية</td><td><?=$staff_item['bonus'];?></td></tr>
<tr><td>بدل ترحيل</td><td><?=$staff_item['transport'];?></td></tr>
<tr><td>اجمالي المرتب</td><td><?=$staff_item['transport']+$staff_item['bonus']+$staff_item['living']+$staff_item['salary'];?></td></tr>

<br>
</table>

<br>    </div>
    </div>