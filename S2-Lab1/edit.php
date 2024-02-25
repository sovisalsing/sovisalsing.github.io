<?php
include "db_conn.php";

$id = $_GET['id'];
if (isset($_POST['submit'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $gender = $_POST['gender'];
    $status = $_POST['status'];
    $date = $_POST['date'];
    $reason = $_POST['reason'];

    $sql = "UPDATE `crud` SET `firstname` = '$firstname', `lastname` = '$lastname', `gender` = '$gender', `status` = '$status'
    , `date` = '$date', `reason` = '$reason' WHERE id = $id";

    $result = mysqli_query($conn, $sql);

    if($result) {
        header("Location: index.php?msg=New record updated successfully!");
    }
    else {
        echo "Failed: " . mysqli_error($conn);
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP CRUD APP</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <header>
        <?php include('navbar.php'); ?>
    </header>
    <div class="container mt-5 justify-content-center align-items-center">
        <h2 class="text-center mb-4">Edit Student's Attendance</h2>
        <?php
        $id = $_GET['id'];
        $sql = "SELECT * FROM crud WHERE id = $id LIMIT 1";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        ?>
        <div class="row justify-content-center">
            <div class="col-6">
                <form action="" method="post">
                    <div class="mb-3">
                        <div class="row">
                            <div class="col-6">
                                <label for="" class="form-label">First Name</label>
                                <input type="text" class="form-control" id="" name="firstname" value="<?php echo $row['firstname'] ?>">
                            </div>
                            <div class="col-6">
                                <label for="" class="form-label">Last Name</label>
                                <input type="text" class="form-control" id="" name="lastname" value="<?php echo $row['lastname'] ?>">
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <div class="row">
                            <div class="col-3"><label class="form-label">Gender</label></div>
                            <div class="col-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" id="male" value="Male" <?php echo ($row['gender'] == 'Male') ? 'checked' : ''; ?>>
                                    <label class="form-check-label" for="male">
                                        Male
                                    </label>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" id="female" value="Female" <?php echo ($row['gender'] == 'Female') ? 'checked' : ''; ?>>
                                    <label class="form-check-label" for="female">
                                        Female
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="mb-3">
                        <div class="row">
                            <div class="col-3"><label class="form-label">Status</label></div>
                            <div class="col-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="status" id="absent" value="A" <?php echo ($row['status'] == 'A') ? 'checked' : ''; ?>>
                                    <label class="form-check-label" for="absent">Absent</label>
                                </div>
                            </div>

                            <div class="col-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="status" id="permission" value="P" <?php echo ($row['status'] == 'P') ? 'checked' : ''; ?>>
                                    <label class="form-check-label" for="permission">Permission</label>
                                </div>
                            </div>

                            <div class="col-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="status" id="present" value="✓" <?php echo ($row['status'] == '✓') ? 'checked' : ''; ?>>
                                    <label class="form-check-label" for="present">Present</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <div class="row">
                            <div class="col-6">
                                <label for="" class="form-label">Date</label>
                                <input type="date" class="form-control" id="date" name="date" value="<?php echo $row['date'] ?>">
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Reason</label>
                        <textarea class="form-control" id="" name="reason" rows="4"><?php echo $row['reason'] ?></textarea>
                    </div>


                    <div class="text-center">
                        <button type="submit" class="btn btn-success" name="submit">Update</button>
                        <a href="index.php" type="button" class="btn btn-danger">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>

</html>