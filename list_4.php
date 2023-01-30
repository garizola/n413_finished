    <?php
        include("n413connect.php");
        $sql = "SELECT id, item, description, image FROM `list`";
        $result = mysqli_query($link, $sql);
        $records = array();
        while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)){
            $records[] = $row;
        }
    ?>
    <DOCTYPE html>
    <html>
        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
            <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
            <title>Full Stack Amp Jam List Project</title>
            <style>
                body  { font-family:Arial; }
                img   { display:inline-block;vertical-align:top;height:75px;margin-left:50px;margin-right:20px;margin-bottom:10px; }
                .desc { display:inline-block;width:60%;font-family:Arial;margin-bottom:10px;cursor:pointer;}
            </style>
        </head>
        <body>
            <h2>Full Stack Amp Jam List Project</h2>
            <?php
            foreach ($records as $record){
                echo '
                    <div>
                        <img src="images/'.$record["image"].'" />
                        <div class="desc" onclick="show_alert('.$record["id"].', \''.$record["item"].'\');"> <b>'.$record["item"].'</b> '.$record["description"].'</div>
                    </div>';
            }
            ?>
        </body>
        <script>
            function show_alert(id,item){
                alert("You have clicked Item "+id+", "+item+".");
            }
        </script>
    </html>