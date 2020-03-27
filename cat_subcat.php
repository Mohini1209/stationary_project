<?php
session_start();
if(!isset($_SESSION['username'])){
        //session is not set
        header('Location: http://localhost/stationary_project/project/index.php');
    }

?>
<html>
<script src="js/lib.js" type="text/javascript"></script>
<script src="js/my_js.js" type="text/javascript"></script>
<tr>
<select name="category_name" onchange="cat_subcat()" id="category_id" value=""required></td>
<option>select category</option>
<?php
include 'config.php';
$qry=mysql_query("select * from category");
while($data=mysql_fetch_array($qry))
{
?>
<option value="<?php echo $data['category_id']?>"><?php echo $data['category_name']?></option>
<?php
}
?>
<td>select sub category</td>
</select>
<select name="sub_cat_name" id="sub_cat_name">
<option></option>
</select>
</html>