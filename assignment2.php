<html>

<head>
<title>
Post Your Wall
</title>
<link rel="stylesheet" href="bootstrap/css/bootstrap.css" >
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" >
<link rel="stylesheet" href="bootstrap/css/bootstrap-responsive.min.css" >
<link rel="stylesheet" href="bootstrap/css/bootstrap-responsive.css" >
<script src="bootstrap/js/bootstrap.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<style>
@charset 'UTF-8';
/* Starter CSS for Flyout Menu */
#cssmenu,
#cssmenu ul,
#cssmenu li #cssmenu a {
  list-style: none;
  margin: 0;
  padding: 0;
  border: 0;
  font-size: 14px;
  font-family: Helvetica;
  line-height: 1;
}
#cssmenu {
  width: auto;
}
#cssmenu ul {
  zoom: 1;
  background: #c4d4a1 url(pattern.png) top left repeat;
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  border-radius: 4px;
  border: 1px solid #a3bc6d;
  -moz-box-shadow: 0 3px 3px rgba(0, 0, 0, 0.3);
  -webkit-box-shadow: 0 3px 3px rgba(0, 0, 0, 0.3);
  box-shadow: 0 3px 3px rgba(0, 0, 0, 0.3);
}
#cssmenu ul:before {
  content: '';
  display: block;
}
#cssmenu ul:after {
  content: '';
  display: table;
  clear: both;
}
#cssmenu a,
#cssmenu a:link,
#cssmenu a:visited {
  padding: 15px 20px;
  display: block;
  text-decoration: none;
  color: #ffffff;
  text-shadow: 0 -1px 1px #7d9745;
  border-right: 1px solid #a3bc6d;
}
#cssmenu a:hover {
  color: #7d9745;
  text-shadow: 0 1px 1px #dae4c4;
}
#cssmenu li {
  float: left;
  border-right: 1px solid #cfdcb2;
}
#cssmenu li:hover {
  background: #b9cc90 url(pattern.png) top left repeat;
}
#cssmenu li:first-child {
  border-left: none;
  -webkit-border-radius: 4px 0 0 4px;
  -moz-border-radius: 4px 0 0 4px;
  border-radius: 4px 0 0 4px;
}

</style>
</head>

<body>
<div id='cssmenu'>
<ul>
   <li class='active'><a href='index.php'><span>Assignment 1</span></a></li>
   <li><a href='assignment2.php'><span>Assingment 2</span></a></li>
   
</ul>
</div>
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

<br>
<br>
<div style=" width:60%; margin-left:20%; box-shadow: 0px 0px 4px 0px;">
<div style="color:blue">Assignment 2:</div>
<br>
<form name="form1">
	<div style="padding:10px 10px 10px 300px">
	
      <input type="text" id="input" placeholder="Enter Text">
		<br>

      <input type="text" id="k" placeholder="Enter the K">
   </div>
<button style="margin-left:45%;" type="button" class="btn" onclick="result()">Post</button>
</form>
<br>

<div style="padding:0 20px 0 20px;color:blue" >Result
<div style="padding:5px 10px 5px 10px;background-color:pink">

<p><span id="show_r"></span></p>
</div> 
</div>

<br>
<br>
</div>



</div>
</body>

</html>
