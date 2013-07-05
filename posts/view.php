<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="/css/post_blue_on_white.css"/>

	<link rel="icon" href="/img/fracture_bluee.ico"/>
	<link rel="shortcut icon" href="/img/fracture_bluee.ico"/>

	<script type="text/javascript">
	      var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
	      document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
	    </script>
	    <script type="text/javascript">
	      try {
	      var pageTracker = _gat._getTracker("UA-29903327-1");
	      pageTracker._trackPageview();
	      } catch(err) {}</script>

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

	<!--Banner Start-->
		<div>
			<table cellspacing="0" style="height:10px; width:100%; border:none;">
				<tr>
					<td class="header-block" style="background-color:#82B9FF;"></td>
					<td class="header-block" style="background-color:#69AAFF;"></td>
					<td class="header-block" style="background-color:#529DFF;"></td>
					<td class="header-block" style="background-color:#378EFF;"></td>
					<td class="header-block" style="background-color:#0F78FF;"></td>
					<td class="header-block" style="background-color:#0068ED;"></td>
					<td class="header-block" style="background-color:#0060DB;"></td>
				</tr>
			</table>
		</div>
	<!--Banner End-->

	<div id="main">
		<div id="title" class="title_container">


			<?php
				require('connect.php');

				$id = $_GET['id'];

				$query = mysql_query("SELECT * FROM post_table WHERE pid=$id");
				$post_rec=mysql_fetch_array($query);
				$blogpost = $post_rec['post'];
				$blogtitle = $post_rec['title'];
				$timeline = $post_rec['timeline'];

				echo "<p class=\"post_title\">$blogtitle</p>";
				echo "<p class=\"post_timeline\">$timeline</p>";
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
		<p class="footer_text big"><img src="/img/fracture_white.png" height="100px" width="80px"/><br/>Ganz7
		<table class="footer-table">
			<tr>
					<td><a href="/about.html" class="link_white medium">About</a></td>
					<td class="footer_text medium">|</td>
					<td><a href="/"  class="link_white medium">Home</a></td>
					<td class="footer_text medium">|</td>
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