<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="/css/post_blue_on_white.css"/>
	<link href="/css/kudos.css" media="screen" rel="stylesheet" type="text/css" />

	<link rel="icon" href="/img/fracture_bluee.ico"/>
	<link rel="shortcut icon" href="/img/fracture_bluee.ico"/>

	<script type="text/javascript" src="/js/jquery-1.9.1.min.js"></script>
	<script type="text/javascript" src="/js/jquery.cookie.js"></script>
	<script type="text/javascript" src="/js/kudos.js"></script>

	    <script type="text/javascript"> 
	      var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
	      document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
	    </script> 
	    <script type="text/javascript"> 
	      try {
	      var pageTracker = _gat._getTracker("UA-29903327-1");
	      pageTracker._trackPageview();
	      } catch(err) {}
	     </script>

	     <script type="text/javascript">
			// needs to be a string for jquery.cookie
			var postId = '1'; 
			$(function()
			{
				$("figure.kudoable").kudoable();
				// check to see if user has already kudod
				// fyi cookies do not work when you are viewing this as a file
				if($.cookie(postId) == 'true') {
					// make kudo already kudod
					$("figure.kudoable").removeClass("animate").addClass("complete");

					// your server would take care of the proper kudos count, but because this is a
					// static page, we need to set it here so it doesn't become -1 when you remove
					// the kudos after a reload
					//$(".num").html(1);
				}	

				// when kudoing
				$("figure.kudo").bind("kudo:active", function(e)
				{});

				// when not kudoing
				$("figure.kudo").bind("kudo:inactive", function(e)
				{});

				// after kudo'd
				$("figure.kudo").bind("kudo:added", function(e)
				{
					var element = $(this);
					// set cookie so user cannot kudo again for 7 days
					$.cookie(postId, 'true', { expires: 7 });
				});
				// after removing a kudo
				$("figure.kudo").bind("kudo:removed", function(e)
				{
					var element = $(this);
					// remove cookie
					$.removeCookie(postId);
				});
			});
		</script>

	<?php
				require('connect.php');	
				
				$id = $_GET['id'];
				$queryStatement = "SELECT * FROM post_table WHERE pid='$id'";
				$queryStatement = mysql_real_escape_string($queryStatement);
				$query = mysql_query($queryStatement);
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
				$queryStatement = "SELECT * FROM post_table WHERE pid='$id'";
				$queryStatement = mysql_real_escape_string($queryStatement);
				$query = mysql_query($queryStatement);
				$post_rec=mysql_fetch_array($query);
				$blogpost = $post_rec['post'];
				$blogtitle = $post_rec['title'];
				$timeline = $post_rec['timeline'];
				
				echo "<p class=\"post_title\">$blogtitle</p>";
				echo "<p class=\"post_timeline\">$timeline</p>";		
			?>
			<figure class="kudo kudoable" data-id="1">
				<a class="kudobject">
					<div class="opening"><div class="circle">&nbsp;</div></div>
				</a>
				<a href="#kudo" class="count">
					<span class="num">0</span>
					<span class="txt">Kudos</span>
				</a>
			</figure>
		<hr/>	
		</div>

		<div id="posts" class="post_container">

			<?php
				echo "<p class=\"post_text\">$blogpost</p>"
			?>
		</div>
	</div>

	<div class="footer">
		<p class="footer_text big"><img src="/img/fracture_white.png" height="100px" width="80px"/><br/>Ganz7
		<table class="footer-table">
			<tr>
					<td><a href="/about.html" class="link_white footer_text medium">About</a></td>
					<td class="footer_text medium">|</td>
					<td><a href="/"  class="link_white footer_text medium">Home</a></td>
					<td class="footer_text medium">|</td>
					<td><a href="" target="_blank" class="link_white footer_text medium">Code</a></td>
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