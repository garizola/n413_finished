<?php
include("n413connect.php");
include("head.php");
$sql = "SELECT * FROM `list`
	 		 ORDER BY RAND() LIMIT 1";
$result = mysqli_query($link, $sql);
$row = mysqli_fetch_array($result, MYSQLI_BOTH);
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-12 text-center mt-5">
            <h1>AMP JAM Site</h1>
        </div> <!-- /col-12 -->
    </div> <!-- /row -->
    <div class="row">
        <div class="col-12 text-center text-success">
            <h3>Incredible Artists</h3>
        </div> <!-- /col-12 -->
    </div> <!-- /row -->
    <div class="row mt-4">
        <!-- navigation -->
        <div class="col-1"></div><!-- spacer -->
        <div class="col-2 mt-5 text-dark">
            <a href="list.php" class="text-dark">
                <h4>List of Artists</h4>
            </a> <br />
            <a href="form.php" class="text-dark">
                <h4>Contact Us</h4>
            </a>
        </div>
        <div class="col-6 text-center">
            <a href="list.php"><img src="images/<?php echo $row["image"]; ?>" width="100%" ; /><br />
                <h2 class="text-dark">
                    <?php echo $row["item"]; ?>
                </h2>
            </a>
        </div><!-- image placeholder -->
    </div> <!-- /row -->
</div> <!-- /container-fluid -->

<script>
    var this_page = "home";
    var page_title = 'AMP JAM Site | Dinosaur Top Ten';

    $(document).ready(function () {
        document.title = page_title;
        $("#" + this_page + "_item").addClass('active');
        $("#" + this_page + "_link").append(' <span class="sr-only">(current)</span>');
    }
    ); //document.ready

</script>