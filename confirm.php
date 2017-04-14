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
	<br/><br/><br/><br/>
	
	<?php
$sid=$_POST["Student_ID"];
$name=$_POST["Student_name"];
$login=$_POST["Login_name"];
$pass=$_POST["Password"];
$dept=$_POST["Department"];
$lev=$_POST["Level"];
$email=$_POST["Email"];
$mob=$_POST["Mobile"];
$group=$_POST["Group_of_work"];
$comment=$_POST["Comment"];
if($sid&&$name&&$login&&$pass&&$dept&&$lev&&$email&&$mob&&$group)
{
 $con=mysql_connect('localhost','root','') or die("couldn't connect");
 mysql_select_db("demoday",$con) or die ("couldn't select DB");
$insert= "INSERT INTO organizer (Student_ID,Student_Name,Login_Name,Password,Department,Level,Email,Mobile,Group_Of_Work,Comment) 
VALUES ('$sid','$name','$login','$pass','$dept','$lev','$email','$mob','$group','$comment')";
$ins=mysql_query($insert);
if(!$ins){
echo "inserted unsuccessfully" .mysql_error(); }
  if(!$con)
 { 
 die ("could not connect" .mysql_error());
} 
mysql_close($con);
}else echo " please fill in the the required fields";

?>
	
	
<center> <b> <h1> Thank you for registering and we will contact you soon! </h1><b/> <center/>
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>

  <p id="footer">Copyright © 2011 DemoDay | All Rights Reserved  </p>
</div>
</body>
</html>