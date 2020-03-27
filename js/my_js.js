function cat_subcat()
{
var category_name=$("#category_name").val();
var datastring="category_name="+category_name;
//alert(datastring);
$.ajax({
type:"POST",
url:"ajax.php",
data:datastring,
cache:false,
success:function(result)
{
$("#sub_cat_name").html(result);
}
});
}