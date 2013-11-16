<html>

<head>
<title>
Post Your Wall
</title>

</head>

<body>

<script>
function result()
{
var xmlhttp="";
var input=document.getElementById("input").value;
var k=document.getElementById("k").value;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("show_r").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","Act_Rev.php?input="+input+"&k="+k,true);
xmlhttp.send();
}
</script>
<br>
<div>Assignment 2:</div>
<br>
<br>
<form name="form1">
Input Text<input type="text" name="input" id="input">
Input ID  <input type="text" name="k" id="k">
<input type="button" value="post" onclick="result()">
</form>
<br>

<div>Result:</div>

<div>
<p><span id="show_r"></span></p>
</div>

</body>

</html>
