<div class = "wrap">
<h3>امکان ویرایش وظایف در اختیار شماست</h3>
<form action= "" method = "post">
<table class="form_table">
<?php foreach ($getoko as $getoko) : ?>

<tr valgin="top">
<th scop="row"> عنوان </th>
<td>
<input   type= "textbox" name= "textbox1" value="<?php echo  $getoko->title;?>">
</td>
</tr>

<tr valgin="top">
<th scop="row"> شرح </th>
<td>
<input   type= "textbox" name= "textbox2" value="<?php echo $getoko->description; ?>">
</td>
</tr>

<tr valgin="top">
<th scop="row"> مهلت انجام </th>
<td>
<input   type= "textbox" name= "textbox3" value="<?php echo $getoko->deadline; ?>">
</td>
</tr>

<?php endforeach; ?>


<tr valgin="top">
<th scop="row">  </th>
<td>
<input   type= "submit" name= "submit1" class="button" value="ذخیره سازی"/>
</td>
</tr>

</table>
</form>
</div>
