<!-- Page Heading -->
    <div class="row">
        <div class="col-12">
		
<?php echo validation_errors(); ?>
<?php echo form_open('account/incomestatement'); ?>
<div class="row form-inline">	
 <div class="form-group">
<label for="sdate"> من </label> 
  <input type="date" class="form-control"  name="sdate" id="sdate" value="<?php echo set_value('sdate'); ?>"  >
     </div>
  <div class="form-group">
      <label for="edate"> الى </label> 
  <input type="date" class="form-control"  name="edate" id="edate" value="<?php echo set_value('edate'); ?>"  >
   </div>
  <input type="text" class="form-control"  name="par" id="par" value="<?php echo set_value('par'); ?>"  hidden>
  <input type="submit" value=" عرض " class="btn btn-primary" />
</form>
   </div>

<br>
<br>

<? if(!empty($account)):?>


<table id="myTable"  cellpadding="5" border="" class="table table-hover table-baccounted"><thead><tr> </tr>
<tr><th scope="col">الـبيــــــــــــــــــــــــان</th><th scope="col"></th>
<th scope="col">جـــزئي</th><th scope="col">كلـــي</th></tr></thead>

<tbody>

<tr><td><h4> الايرادات</h4></td><td></td><td></td><td></td></tr>

<tr><td>الايرادات </td><td><?=number_format($account['pincome'])?></td><td></td><td><?=number_format($account['pincome'])?></td></tr>

<tr><td> المشتريات</td><td></td><td><?=number_format($account['purchase'])?></td><td></td></tr>

<tr><td> مخزون آخر المدة</td><td></td><td>0</td><td></td></tr>

<tr><td> مجمل الربح</td><td></td><td></td><td></td></tr>

<tr><td><h4>المصروفات</h4></td><td></td><td></td><td></td></tr>
<tr><td>مصروفات الفصل الاول</td><td></td><td></td><td></td></tr>

<tr><td>المرتبات</td><td><?=number_format($account['psalary'])?></td><td><?=number_format($account['salary'])?></td><td></td></tr>

<tr><td>مصروفات الفصل الثاني</td><td></td><td></td><td></td></tr>
<tr><td>الكهرباء والمياه</td><td><?=number_format($account['311'])?></td><td></td><td></td></tr>
<tr><td>ادوات مكتبية</td><td><?=number_format($account['312'])?></td><td></td><td></td></tr>
<tr><td>ضيافة </td><td><?=number_format($account['313'])?></td><td></td><td></td></tr>
<tr><td>مردودات</td><td><?=number_format($account['314'])?></td><td></td><td></td></tr>
<tr><td>مطبوعات</td><td><?=number_format($account['315'])?></td><td></td><td></td></tr>
<tr><td>حوافز</td><td><?=number_format($account['316'])?></td><td></td><td></td></tr>
<tr><td>م نظافةو نفايات</td><td><?=number_format($account['317'])?></td><td></td><td></td></tr>
<tr><td>واتصالات انترنت</td><td><?=number_format($account['318'])?></td><td></td><td></td></tr>
<tr><td>صيانة عامه</td><td><?=number_format($account['319'])?></td><td></td><td></td></tr>
<tr><td>صيانة اجهزةومعدات</td><td><?=number_format($account['3110'])?></td> <td></td><td></td></tr>
<tr><td>صيانة اندور</td><td><?=number_format($account['3111'])?></td> <td></td><td></td></tr>
<tr><td>صيانة اوتدور</td><td><?=number_format($account['3112'])?></td> <td></td><td></td></tr>
<tr><td>ترحيل </td><td><?=number_format($account['3113'])?></td> <td></td><td></td></tr>
<tr><td>ايجار</td><td><?=number_format($account['3114'])?></td> <td></td><td></td></tr>
<tr><td>مصروفات بنكية  </td><td><?=number_format($account['3115'])?></td> <td></td><td></td></tr>
<tr><td>اهلاك</td><td><?=number_format($account['3116'])?></td> <td></td><td></td></tr>
<tr><td>	
ديون هالك </td><td><?=number_format($account['3117'])?></td> <td></td><td></td></tr>
<tr><td>مصروفات ليزر</td><td></td> <td></td><td></td></tr>

<tr><td>اجمالي مصروفات  </td><td><?=number_format($account['ptexp'])?></td><td></td><td></td></tr>

<tr><td>اجمالي مصروفات القسم الثاني</td><td></td><td><?=number_format($account['ptexp'])?></td><td></td></tr>

<tr><td>اجمالي مصروفات </td><td></td><td></td><td><?=number_format($account['salary']+$account['ptexp'])?></td></tr>
<tr><td>صافي الربح او الخسائر   قبل الضرائب</td><td></td><td></td><td><?=number_format($account['salary']+$account['ptexp']+$account['pincome']+$account['purchase'])?></td></tr>
<tr><td>الضرائب و الزكاة</td><td></td><td></td><td><?=number_format($account['tax'])?></td></tr>
<tr><td>صافي الربح او الخسائر    </td><td></td><td></td><td><?=number_format($account['salary']+$account['ptexp']+$account['pincome']+$account['purchase']+$account['tax'])?></td></tr>
</tbody></table>
<? endif;?>

</div>
</div>