<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>S2-Lab 5</title>
</head>
<body>
    <?php
        if(isset($_POST['mybut'])) {
            $tmp_name = $_FILES['myfile']['tmp_name'];
            $name = $_FILES['myfile']['name'];
            $size = $_FILES['myfile']['size'];
            $filetype = $_FILES['myfile']['type'];
            $error = $_FILES['myfile']['error'];
            echo "Temporary file: $tmp_name <br>";
            echo "Original file: $name <br>";
            echo "Size: $size <br>";
            echo "File Type: $filetype <br>";
            echo "Error: $error <br>";

            move_uploaded_file($tmp_name, "img/" . $name);
        }
        else {
    ?>
    <form action="index.php" method="POST" enctype="multipart/form-data">
        Upload your file:
        <input type="file" name="myfile" id="">
        <input type="submit" value="Upload" name="mybut">
    </form>
    <?php
        }
    ?>
</body>
</html>