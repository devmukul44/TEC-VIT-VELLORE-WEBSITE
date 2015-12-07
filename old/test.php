<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>TEC-The Electronic Club Of VIT</title>
<meta name="keywords" content="blue, marble, design, theme, web, free templates, website templates, CSS, HTML" />
<meta name="description" content="Blue Marble Theme is a free website template provided by templatemo.com" />
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />

</head>
<body>

<div id="templatemo_header_wrapper">
	<div id="templatemo_header">
    
    	<div id="site_title">
            <a href="http://www.tecvit.in"><span>THE ELECTRONICS CLUB</span></a>
        </div> <!-- end of site_title -->
        
        <div id="social_box">
        	</div>
        
        <div id="templatemo_menu">
            <ul>
                <li><a href="index.html" >Home</a></li>
                <li><a href="events.html">Events</a></li>
				 <li><a href="projects.html">Projects</a></li>
				  <li><a href="about.html">About Us</a></li>
				   <li><a href="undercon.html">Riviera'14</a></li>
                <li><a href="gravitas.html">Gravitas'13</a></li>
                <li><a href="contact.html">Contact Us</a></li>
				 <li><a href="blog.php" class="current">Blog</a></li>
            </ul>    	
        </div> <!-- end of templatemo_menu -->
    
    </div> <!-- end of header -->
</div> <!-- end of header wrapper -->

<div id="templatemo_main_wrapper">
	<div id="templatemo_main">
	<div id="comment_form">
                    <?php  
error_reporting(E_ERROR | E_PARSE);    
$con=mysql_connect("localhost","root","");
mysql_select_db("vit",$con);
$sn1=$_GET["sn"];
$sn2=$sn1;
$result = mysql_query("SELECT * FROM new WHERE name ='$sn1'",$con);
while($row=mysql_fetch_array($result))
{
$nam=$row['name'];
$top=$row['topic'];
$det=$row['det'];
echo "<font size=5><b>"."Topic: "."</b><u>".$top."</u></font><br><br>";
echo "<font size=5><b>"."Details: "."</b><u>".$det."</u></font><br><br>";
echo "<font size=5><b>"."Posted By: "."</b><u>".$nam."</u></font><br><br>";
}
echo '</fieldset>';
mysql_close($con);
?>
<?php
$ame=$_POST['Nam'];
$com=$_POST['comm'];
if($ame !=""){
$con1=mysql_connect("localhost","root","");
mysql_select_db("vit",$con1);
$ins="INSERT into comments(name,comment,m_no) VALUES ('$ame','$com','$sn1')";
$sql=mysql_query($ins,$con1);
}
?>
<br><br><font size=4 align=center>Your Suggestions</font><br><br>
<?php

$conn=mysql_connect("localhost","root","");
mysql_select_db("vit",$conn);
$result = mysql_query("SELECT * FROM comments WHERE m_no ='$sn2'",$conn);

$result1 = mysql_query("SELECT * FROM comments WHERE m_no ='$sn2'",$conn);

if(!($row=mysql_fetch_array($result1)))
{
echo 'NO COMMENTS' ;

}
else{
while($row=mysql_fetch_array($result))
{
$namee=$row["name"];
$comn=$row["comment"];
$ss=$row["m_no"];
echo "<div data-role='content' data-theme='c'>";
echo '<h3>'."Name: ".'<u>'.$namee.'</u>';
echo '<h3>'."Comments: ".'<u>'.$comn.'</u></h3><br><br>';
echo "</div>";
echo "<br>";
}}
echo "<hr>";
echo '<font size=3 align="center">'."Got Some Suggestions??Feel Free To Share!!".'</font><br>';
mysql_close($conn);
                  
    ?>

<form action="test.php?sn=<?php echo $sn2; ?>" method="POST">

<table border="0", cellspacing="0" cellpadding="5" >
<tr>
<td><b>Name: </b></td>
<td><input type="text" name="Nam" size=30 required  data-theme="d">
<input type="hidden" name=sn1 value="<?php echo $sn2; ?>"></td>
</tr>
<tr>
<td><b>Comments: </b></td>
<td><textarea rows=5 cols=50 name="comm" data-theme="d" required>
</textarea>
</td></tr>
</table>
<input type="submit" name="Submit" value="Submit" data-mini="true" data-corners="false">

</form>                
            </div>
			
			<br><br>
    	
		
            
        
        	
                      
        	
			
     
        
        <div id="templatemo_sidebar">
        	
        </div>
    
		<div class="cleaner"></div>
    </div> <!-- end of main -->
</div> <!-- end of main wrapper -->

<div id="templatemo_footer_wrapper">
	<div id="templatemo_footer">
    	
        <div class="footer_col_w300">
            <h4>Our Pages</h4>
            <ul class="tmo_list">
                <li><a href="index.html" class="current">Home</a></li>
                <li><a href="events.html">Events</a></li>
				 <li><a href="projects.html">Projects</a></li>
				  <li><a href="about.html">About Us</a></li>
				   <li><a href="undercon.html">Riviera'14</a></li>
                <li><a href="gravitas.html">GRAVITAS'13</a></li>
                <li><a href="contact.html">Contact Us</a></li>
				 <li><a href="blog.php">Blog</a></li>
            </ul>            
        </div>
        
        <div class="footer_col_w300">
            <h4>Follow Us</h4><br><br>
            <a href="http://www.facebook.com/tec.vit"><img src="images/facebook.png" alt="facebook" /></a>
            <a href="#"><img src="images/twitter.png" alt="twitter" /></a>
            <a href="#"><img src="images/feed.png" alt="feed" /></a>       
        </div>
        
        <div class="footer_col_w300 last">
            <h4>About Us</h4>
            <p>We are trying to provide an education that results in understanding and sharing with others . Our motto is to impart practical approach along with theoretical knowledge gained in classes.
 We being a non-profit organization have  always conducted free theory and hands-on sessions on various topics related to electronics. TEC has a functioning core committee of its own which is formed on the basis of the performances in core committee selections .In the course of almost one and half year , we have organized several hands-on sessions related to basic electronic components and their usage.</p>
           <p>Copyright © 2014 <a href="http://www.tecvit.in">The Electronics Club - "TEC VIT"</a> <br /> Designed by <a href="#"><strong>Arpit Sethi</strong></a></p> 
        </div>
    
		<div class="cleaner"></div>
    </div> <!-- end of templatemo_footer -->
</div> <!-- end of templatemo_footer wrapper -->


<script type='text/javascript' src='js/logging.js'></script>
</body>
</html>