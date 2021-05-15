<a href = "<?php echo add_query_arg(['action'=>'add']); ?>"> ثبت وظیفه جدید </a>
<div class="wrap">
<h1> لیست وظایف </h1>
<table class="widefat">
<thead>
<tr>
<th>شماره </th>
<th>عنوان  </th>
<th>شرح </th>
<th>مهلت انجام</th>
<th>حذف</th>
<th>ویرایش</th>

<tr>
</thead>
<tbody>
<?php foreach($hame as $mytable): ?>
<tr>
<td><?php echo $mytable->id; ?></td>
<td><?php echo $mytable->title; ?></td>
<td><?php echo $mytable->description; ?></td>
<td><?php echo $mytable->deadline; ?></td>
<td><a href = "<?php echo add_query_arg(['action'=>'delete','item'=>$mytable->id]); ?>">
حذف کردن</a></td>
<td><a href = "<?php echo add_query_arg(['action'=>'update','item'=>$mytable->id]); ?>">
ویرایش</a></td>
</tr>
<?php endforeach; ?>
</tbody>
</table>
</div>


