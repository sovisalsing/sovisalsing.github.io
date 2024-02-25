<html>

<head>
</head>

<body>
    <?php
    echo '<a href="form.php"><button style="padding:10px;" ><-Form</button></a>';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $word = $_POST["word"];
        $pos = $_POST["pos"];
        $definition = $_POST["definition"];

        $alpha_ = $_POST["alpha"];

        // if (substr($word, 0, 1) === substr($alpha_, 0, 1)) {
            echo ' Success';
            $alpha = ('xml/' . $alpha_ . '.xml');

            $xml = simplexml_load_file($alpha);

            $record = $xml->addChild('record');
            $record->addChild('word', $word);
            $record->addChild('pos', $pos);
            $record->addChild('def', $definition);

            $xml->asXML($alpha);
        // } 
        // else {
        //     echo '<br>Between Words and Directories are Different!<br>';
        //     echo 'Please go back form and try again';
        // }
    }
    ?>
</body>

</html>