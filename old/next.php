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
				 <li><a href="blog.html" class="current">Blog</a></li>
            </ul>    	
        </div> <!-- end of templatemo_menu -->
    
    </div> <!-- end of header -->
</div> <!-- end of header wrapper -->

<div id="templatemo_main_wrapper">
	<div id="templatemo_main">
	<div id="comment_form">
                    <h3>Category Based Results.</h3>
                    
                       
                        
                          
                        
 <?php
	$con=mysql_connect("localhost","root","");
	mysql_select_db("vit",$con);
	$cate=$_POST['category'];
$result=mysql_query("SELECT * FROM new WHERE cat='$cate'",$con); 
echo '<table border=2 cellspacing="0" cellpadding="0" align="center" width="800">';
echo '<tr>';
echo '<td align="center"><b>';
echo "Posted By" ;
echo '</td>';
echo '<td align="center"><b>';
echo "Topic";
echo '</td>';
echo '<td align="center" ><b>'; 
echo "Details";
echo '</td>';
echo '</tr>';
while($row=mysql_fetch_array($result))
{
$sn=$row['name'];
$top=$row['topic'];
$det=$row['det'];
echo '<tr><td>';
echo $sn;
echo "</td><td><a href='test.php?sn=$sn'>";
echo $top;
echo '</td><td>';
echo $det;
echo '</td></tr>';
}
echo '</table>';
mysql_close($con);
?>
 
                    
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
				 <li><a href="blog.html">Blog</a></li>
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