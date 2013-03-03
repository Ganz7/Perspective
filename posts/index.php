<? ob_start(); ?>
<!DOCTYPE html>
<html>
<head>
		<title>Posts | Ganz7</title>

		<link rel="stylesheet" type="text/css" href="/Perspective/css/post_blue_on_white.css"/>
		<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
		<!--<script type="text/javascript">
			$(document).ready(function(){
				$("#main").scroll(function(){
					s=$("#main").scrollTop();
					$("#main #title").css("-webkit-transform","translateY(" + (s/3) + "px");
				})
			})
		</script>-->
		
</head>	
<body>
	<div id="main">
		<div id="title" class="title_container">
			<p class="post_title">Posts</p>
		<hr/>	
		</div>

		<div id="posts" class="post_container">
				<?php
			      require('connect.php');	
			
  				$query = mysql_query("SELECT * FROM post_table ORDER BY pid DESC LIMIT 0,10");
  				
  				while($post_rec=mysql_fetch_array($query))
  				{
  						$blogid = $post_rec['pid'];
  						$blogtitle = $post_rec['title'];
  						
  						echo "<p class=\"post\"><a class=\"post\" href=\"view.php?id=$blogid\">$blogtitle</a></p>";
  						
			     }
		       ?>	
		</div>
	</div>

	<div class="footer">
		<p class="footer_text big"><img src="/Perspective/img/fracture_white.png" height="100px" width="80px"/><br/>Ganz7
		<table class="footer-table">
			<tr>
					<td><a href="" target="_blank" class="link_white medium">About</a></td>
					<td class="footer_text medium">~</td>
					<td><a href="" target="_blank" class="link_white medium">Home</a></td>
					<td class="footer_text medium">~</td>
					<td><a href="" target="_blank" class="link_white medium">Code</a></td>
			</tr>
		</table>
		<br/>
		<bdi class="footer_text small">Shoot me a mail ~ <a href="mailto:ganzse7en@gmail.com" class="link_white small" class="small link_white" target="_blank">ganzse7en@gmail.com</a></bdi>
		</p>
		<br/>
		<hr class="seperator_white">
		<p class="footer_text small">Form.Follows.Function</p>
	</div>
	
</body>
</html>
<? ob_flush(); ?>