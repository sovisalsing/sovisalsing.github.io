<!DOCTYPE html>
<html>

<head>
    <title>Dictionary</title>
</head>
<style>
    table {
        border-collapse: collapse;
    }

    td {
        border: 1px solid;
    }
</style>

<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $read = $_POST["read"];
    }
    ?>
    <table>
        <thead>
            <tr>
                <th style="width:120px;">Word</th>
                <th style="width:100px;">pos</th>
                <th style="width:700px;">Definition</th>
            </tr>
        </thead>
        <tbody>
            <?php
            echo '<a href="form.php"><button style="padding:10px;" ><-Form</button></a>';
            $read_xml = simplexml_load_file("xml/$read.xml");
            echo '<h1 style="font-family:serif;">&emsp;' . $read_xml->record->head . '</h1>';
            $tr = '';
            foreach ($read_xml->record as $record) {
                $tr = '<tr>';
                $tr .= '<td>' . $record->word . '</td>';
                $tr .= '<td>' . $record->pos . '</td>';
                $tr .= '<td>' . $record->def . '</td>';
                $tr .= '</tr>';
                echo $tr;
            }

            ?>
        </tbody>
    </table>
</body>

</html>