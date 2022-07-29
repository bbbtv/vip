<script type="text/javascript">   
function password() {   
var testV = 1;   
var pass1 = prompt('请输入密码:','');   
while (testV < 3) {   
if (!pass1)    
history.go(-1);   
if (pass1 == "666") {//设置密码
alert('口令正确，进行跳转');   
window.location.href="http://dy.tt66.site/index.php";//添加你要跳转的页面
break;   
}    
testV+=1;   
var pass1 =    
prompt('密码错误','');   
}   
if (pass1!="password" & testV ==3)    
history.go(-1);   
return " ";   
}    
document.write(password());   
</script>