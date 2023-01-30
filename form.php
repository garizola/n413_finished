<?php
include("head.php");
?>
<style>
	/*#form-container { width:30%;margin-left:40%;margin-top:100px; }*/
	/*input { font-size:18px;margin-bottom:20px; }*/
	/*textarea {height:100px;width:300px;margin-bottom:30px;font-size:16px; }*/
	/*#submit	{float:right;}*/
</style>

<div class="container-fluid">
	<div class="row">
		<div class="col-12 text-center text-success mt-5">
			<h2>Full Stack Amp Jam Contact Form Project</h2>
		</div> <!-- /col-12 -->
	</div> <!-- /row -->
	<form method="POST" action="n413post.php">
		<div class="row mt-5">
			<div class="col-4"></div> <!-- spacer -->
			<div id="form-container" class="col-4">
				Name: <input type="text" id="name" name="name" class="form-control" value="" placeholder="Enter Name"
					required /><br />
				E-mail: <input type="email" id="email" name="email" class="form-control" value=""
					placeholder="Enter E-mail" required /><br />
				Comment: <textarea id="comment" name="comment" class="form-control" value=""
					placeholder="Add your comment here:"></textarea><br />
				<button type="submit" id="submit" class="btn btn-primary float-right">Submit</button>
			</div> <!-- /#form-container" -->

		</div> <!-- /row -->
	</form>
</div> <!-- /container-fluid -->
</body>
<script>
	var this_page = "contact";
	var page_title = 'AMP JAM Site | Contact Form';

	$(document).ready(function () {
		document.title = page_title;
		$("#" + this_page + "_item").addClass('active');
		$("#" + this_page + "_link").append(' <span class="sr-only">(current)</span>');
	}); //document.ready
</script>

</html>