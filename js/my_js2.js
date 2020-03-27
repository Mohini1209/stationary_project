function product_price()
{
var product_name=$("#product_name").val();
var sub_cat_name=$("#sub_cat_name").val();
var category_name=$("#category_name").val();
var datastring="product_name="+product_name+"&sub_cat_name="+sub_cat_name+"&category_name="+category_name;
$.ajax({
type:"POST",
url:"ajax2.php",
data:datastring,
cache:false,
success:function(result)
{
$("#price").val(result);
}
});
}