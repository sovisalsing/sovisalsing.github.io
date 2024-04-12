<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>S2-Lab 5</title>
</head>

<body>
    <?php
    if (isset($_POST['mybut'])) {
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

        $allowed_image_types = array(
            'image/webp', 'image/jpeg', 'image/jpg', 'image/png', 'image/gif', 'image/avif'
        );
        if (in_array($filetype, $allowed_image_types)) {
            move_uploaded_file($tmp_name, "img/" . $name);
        }
        $allowed_video_types = array(
            'video/mkv',
            'video/mp4',
            'video/mpeg',
            'video/ogg',
            'video/webm',
            'video/quicktime',
            'video/x-msvideo',
            'video/x-flv',
            'video/wmv',
            'video/x-ms-wmv', // WMV video format
            'video/vnd.dlna.mpeg-tts', // AVCHD
            'video/x-ms-asf', // AVI
            'video/3gpp', // mov
        );
        if (in_array($filetype, $allowed_video_types)) {
            move_uploaded_file($tmp_name, "video/" . $name);
        }

        $allowed_application_types = array(
            'application/pdf',
            'application/msword', // DOC
            'application/vnd.ms-excel', // Excel
            'application/vnd.ms-powerpoint', // PowerPoint
            'application/vnd.ms-visio.drawing',
            'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
            // Add more application file types as needed
        );
        
        if (in_array($filetype, $allowed_application_types)) {
            move_uploaded_file($tmp_name, "application/" . $name);
        }

    } else {
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