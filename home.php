<!DOCTYPE html>
<html>
    <head>
        <title>FISH RECONIZER</title>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="main.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.39/css/uikit.min.css" />
    </head>
    <body>
        
        <!--
        <form action="index_main.php" enctype="multipart/form-data" method="post">
            Select image :
            <input type="file" name="file"><br/>
            <input type="submit" value="Upload" name="Submit1"> <br/>
        </form>    -->
        
        <div class="wrapper">
        <div class="text">
            <h1>SOMETHING FISHY</h1>
            <p>Upload an image</p>
                <form action="home.php" enctype="multipart/form-data" method="post">
                <input type="file" name="file" style="color:white"><br/>
                <input type="submit" value="Upload" name="Submit1"> <br/><br><br>
                <div id="text"></div>
                
                </form>
                <?php
                    if(isset($_POST['Submit1']))
                    { 
                        $filepath = "fishackathon/".$_FILES["file"]["name"];
                        
                        if(move_uploaded_file($_FILES["file"]["tmp_name"], $filepath)) 
                        {
                            echo "<div uk-lightbox>";
                            echo "<div>";
                            echo "<img src=".$filepath." height=300 width=300 />";
                            echo "</div>";
                            echo "</div><br>";
                            echo "<a href='index_2.php' style='text-decoration:none;color:white;font-size:30px'>Match</a>";
                        } 
                        else 
                        {
                            echo "<p style='color:white'>Error !!</p>";
                        }
                    } 
                ?>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.39/js/uikit.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.39/js/uikit-icons.min.js"></script>
    

       
    </body>
</html>
