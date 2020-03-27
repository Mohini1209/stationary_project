function subcat_product()
{
var sub_cat_name=$("#sub_cat_name").val();
var category_name=$("#category_name").val();
var datastring="sub_cat_name="+sub_cat_name+"&category_name="+category_name;
$.ajax({
type:"POST",
url:"ajax1.php",
data:datastring,
cache:false,
success:function(result)
{
$("#product_name").html(result);
}
});
}
