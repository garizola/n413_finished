<?php
    include("n413connect.php");
    include("head.php");
    
    function sanitize($item){
            global $link;
            $item = html_entity_decode($item);
            $item = trim($item);
            $item = stripslashes($item);
            $item = strip_tags($item);
            $item = mysqli_real_escape_string( $link, $item );
            return $item;
        }
        
        $name = "";
        $email = "";
        $comment = "";
        
        if(isset($_POST["name"])) { $name = sanitize($_POST["name"]); }
    	if(isset($_POST["email"])) { $email = sanitize($_POST["email"]); }
        if(isset($_POST["comment"])) { $comment = sanitize($_POST["comment"]); }
        
        $sql = "INSERT INTO `form_responses` (`id`, `name`, `email`, `comment`, `timestamp`) 
        	VALUES (NULL, '".$name."', '".$email."', '".$comment."', CURRENT_TIMESTAMP)";
        $result = mysqli_query($link, $sql);
?>
    
<div class="container-fluid">
    <div class="row">
        <div class="col-12 text-center mt-5">
            <h2>Full Stack Amp Jam Contact Form Project</h2>
        </div> <!-- /col-12 -->
    </div> <!-- /row -->
    <div class="row mt-5">
        <div class="col-4"></div>  <!-- spacer -->
        <div class="col-4 text-center">
        <?php
            if($result){
                echo '<p>Thank you for submitting your comment. <br/>';
            }else{
                echo '<p>Sorry, but something went wrong.  Please try again later. <br/>';
            }
        ?>
            <span class="mt-5 float-right"><i>The Web Site Team</i></span></p>
        </div> <!-- /.col-4 -->
    </div> <!-- /.row --> 
</div>  <!-- /.containeer-fluid --> 
</body>
<script>
    var this_page = "contact";
    var page_title = 'AMP JAM Site | Contact Form';
		
    $(document).ready(function(){ 
            document.title = page_title;
            $("#"+this_page+"_item").addClass('active'); 
            $("#"+this_page+"_link").append(' <span class="sr-only">(current)</span>');
        }); //document.ready
</script>
</html>