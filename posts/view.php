<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="/Perspective/css/post_blue_on_white.css"/>


	<?php
				require('connect.php');	
				
				$id = $_GET['id'];
				
				$query = mysql_query("SELECT * FROM post_table WHERE pid=$id");
				$post_rec=mysql_fetch_array($query);
				$blogtitle = $post_rec['title'];
				$blogtitle = strip_tags($blogtitle);
				echo "<title>$blogtitle</title>"
	?>
</head>

<body>
	<div id="main">
		<div id="title" class="title_container">
			

			<?php
				require('connect.php');	
				
				$id = $_GET['id'];
				
				$query = mysql_query("SELECT * FROM post_table WHERE pid=$id");
				$post_rec=mysql_fetch_array($query);
				$blogpost = $post_rec['post'];
				$blogtitle = $post_rec['title'];
				
				echo "<p class=\"post_title\">$blogtitle</p>";			
			?>
		<hr/>	
		</div>

		<div id="posts" class="post_container">

			<?php
				echo "<p class=\"post_text\">$blogpost</p>"
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