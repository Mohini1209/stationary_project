function multiply()
{
var n1=$("#quantity").val();
var n2=$("#price").val();
total=(+n1)*(+n2);
$("#total").val(total);
}