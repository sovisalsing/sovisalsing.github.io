<html>

<head>
</head>

<body>
    <div style="display:flex;justify-content:space-around">
        <div>
            <form action="file.php" method="POST">
                <h1>Create a New XML File</h1>
                <label for="n_xml">Enter Name:</label>
                <input type="text" name="n_xml" id="n_xml" required><br><br>
                <div style="text-align: center;margin-top:20px;">
                    <input type="submit" value="Create New File" style="width:120px;height:30px;"><br>
                </div>
            </form>
        </div>
        <div>
            <form action="insert.php" method="POST">
                <h1>Add Word for dictionary</h1>
                <label for="word">Name:</label>
                <input type="text" name="word" id="word" required><br><br>
                <label for="name">Pos:</label>
                <input type="text" name="pos" id="pos" required><br><br>
                <label for="definition">Definition:</label><br>
                <textarea name="definition" id="definition" required style="width:558px;height:124px;"></textarea><br><br>
                <label for="alpha">Select a letter for add word:</label>
                <select name="alpha" id="alpha">
                    <?php
                    for ($i = ord('a'); $i <= ord('z'); $i++) {
                        $letter = chr($i);
                        echo "<option value='$letter'>$letter</option>";
                    }
                    ?>
                </select><br>
                <div style="text-align: center;margin-top:20px;">
                    <input type="submit" value="Add New Word" style="width:120px;height:30px;"><br>
                </div>

            </form>
        </div>
        <div>
            <form action="read.php" method="POST">
                <h1>Read Dictionary</h1>
                Please select for read <select name="read" id="read">
                    <?php
                    for ($i = ord('a'); $i <= ord('z'); $i++) {
                        $letter = chr($i);
                        echo "<option value='$letter'>$letter</option>";
                    }
                    ?>
                </select><br>
                <div style="text-align: center;margin-top:20px;">
                    <input type="submit" value="Read Dictionary" style="width:120px;height:30px;"><br>
                </div>
            </form>
        </div>
    </div>
</body>

</html>