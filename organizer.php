<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en">
<head>

<title>DemoDay</title>

<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />

<link rel="stylesheet" type="text/css" media="screen" href="style.css" />
 <script type = "text/javascript">
 <!--
 function roll_over(img_name, img_src)
   {
   document[img_name].src = img_src;
   }
   
   function validateForm()
{
var x=document.forms["myForm"]["Email"].value;
var atpos=x.indexOf("@");
var dotpos=x.lastIndexOf(".");
var msg="Not a valid e-mail address";
var mes="This field must be filled out";

  var id=document.forms["myForm"]["Student_ID"].value;
if (id==null || id=="")
  {
  document.getElementById("id").innerHTML= mes;
  return false;
  } else   document.getElementById("id").innerHTML= "";

   var nam=document.forms["myForm"]["Student_name"].value;
if (nam==null || nam=="")
  {
    document.getElementById("nam").innerHTML= mes;
  return false;
  } else     document.getElementById("nam").innerHTML= "";

   var log=document.forms["myForm"]["Login_name"].value;
if (log==null || log=="")
  {
  document.getElementById("log").innerHTML= mes;
  return false;
  } else document.getElementById("log").innerHTML= "";
   var pass=document.forms["myForm"]["Password"].value;
if (pass==null || pass=="")
  {
  document.getElementById("pass").innerHTML= mes;
  return false;
  }else document.getElementById("pass").innerHTML= "";
   
   var mail=document.forms["myForm"]["Email"].value;
if (mail==null || mail=="")
  {
  document.getElementById("val").innerHTML= mes;
  return false;
  } else document.getElementById("val").innerHTML= "";
   var mob=document.forms["myForm"]["Mobile"].value;
if (mob==null || mob=="")
  {
  document.getElementById("mob").innerHTML= mes;
  return false;
  } else document.getElementById("mob").innerHTML= "";

  //////// validate Email 
  if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
  {
  document.getElementById("val").innerHTML= msg;
  return false;
  } else  document.getElementById("val").innerHTML= "";
}
 // -->
      </script>
</head>
 
<body>

<div id="container"> 
  <div id="header">
  
  <a href=""><b>Contact Us</b></a> | <a href=""><b>About Us</b></a>&nbsp;&nbsp;&nbsp;
  <br/><br/></div>
  <div><center><img  src="DemoDayHeader.png" alt="header" /></center> 
  </div>
  
  <center><table class="table1"  border="0" background ="bar-images/bgbar.png" background="no-repeat" >
	<tr><td> 
	<a href="Home.html" onmouseover="roll_over('home', 'bar-images/home2.png')"
onmouseout="roll_over('home', 'bar-images/home.png')"><img src="bar-images/home.png" name="home"  /></a> </td>
<td> <a href="####" onmouseover="roll_over('project', 'bar-images/project2.png')"
onmouseout="roll_over('project', 'bar-images/project.png')"><img src="bar-images/project.png" name="project"   /></a> </td>
<td> <a href="####" onmouseover="roll_over('achievement', 'bar-images/achievement2.png')"
onmouseout="roll_over('achievement', 'bar-images/achievement.png')"><img src="bar-images/achievement.png" name="achievement"   /></a> </td>
<td> <a href="####" onmouseover="roll_over('news', 'bar-images/news2.png')"
onmouseout="roll_over('news', 'bar-images/news.png')"><img src="bar-images/news.png" name="news"  /></a> </td>
<td> <a href="####" onmouseover="roll_over('PhotoAlbum', 'bar-images/PhotoAlbum2.png')"
onmouseout="roll_over('PhotoAlbum', 'bar-images/PhotoAlbum.png')"><img src="bar-images/PhotoAlbum.png" name="PhotoAlbum"   /></a> 

	</td></tr>
	</table></center>
	
	
	
<h1 align="center" > Organizers registration form </h1> </br> </br>
<h2>* All fields are mandatory</h2></br> </br>
<form id="form1" name="myForm"   method="post" action="confirm.php" onsubmit="return validateForm();"> 
<label> Student ID : </label>
<input name="Student_ID" type="text" value="" maxlength='7'><ins id="id" style=color:red></ins>
<br/><br/>
<label> Student Name  : </label>
<input name="Student_name" type="text" value=""><ins id="nam" style=color:red></ins> 
<br/><br/>
<label> Login Name : </label>
<input name="Login_name" type="text" value="" ><ins id="log" style=color:red></ins> 
<br/><br/>
<label> Password  : </label>
<input name="Password" type="password" value="" maxlength='32'><ins id="pass" style=color:red></ins> 
<br/><br/>

<label> Department  : </label>
<select name="Department" >
<option value="d" selected ="true" > Select Department</option>
<option value="IT"> IT </option>
<option value="IS"> IS </option>
<option value="CS"> CS </option>
</select><ins id="dep" style=color:red></ins> 
</br> <br/>
<label> level  : </label>
<select name="Level" >
<option value="k" selected ="true" > Select level</option>
<option value="fifth"> Fifth </option>
<option value="sixth">  Sixth </option>
<option value="seventh"> Seventh  </option>
<option value="eighth">  Eighth </option>
<option value="ninth">  Ninth </option>
<option value="tenth"> Tenth  </option>
</select><ins id="lev" style=color:red></ins> <br/><br/>
<label> E-mail  : </label>
<input name="Email" type="text" value="" > <ins id="val" style=color:red></ins> 
<br/><br/>
<label>  Mobile  : </label>
<input name="Mobile" type="text" value="" maxlength='10'><ins id="mob" style=color:red></ins> 
<br/><br/>
<label> Group of Work  : </label>
<select name="Group_of_work" > 
<option value="m" selected ="true" > Select Committee</option>
<option value="design committee "> Design Committee </option>
<option value="Organize Committee">  Organizing Committee </option>
<option value="coordinate Committee"> Coordination Committee  </option>
<option value="advertise Committee">  Advertising Committee </option>
</select><ins id="gow" style=color:red></ins> 
<br/><br/>
<label>  Comments  : </label> 
<textarea name="Comment" rows=3 cols=30> </textarea> 
<br/><br/>
 <p align= "right" class="submit"><input type="submit" value="Join" style="width:6em"></p>

</form>
  
  <p id="footer">Copyright © 2011 DemoDay | All Rights Reserved  </p>
</div>
</body>
</html>