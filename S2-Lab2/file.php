<html>

<head>
</head>

<body>
    <?php
    echo '<a href="form.php"><button style="padding:10px;" ><-Form</button></a>';
    if (isset($_POST['n_xml'])) {
        $content = $_POST['n_xml'];
        $xml = '<?xml version="1.0"?>
                    <dictionary>
                        <record>
                            <head>' . $content . '</head>
                        </record>
                    </dictionary>';
        $file = fopen("xml/" . $content . ".xml", "w") or die("Unable to open file!");
        fwrite($file, $xml);
        fclose($file);
        echo "File xml/$content.xml has been created with the provided content in the 'xml/' directory.";
    }
    ?>
</body>

</html>