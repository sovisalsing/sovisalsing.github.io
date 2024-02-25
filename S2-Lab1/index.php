<?php include('db_conn.php');
        session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP CRUD APP</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        .sticky-header th {
            position: sticky;
            top: 0;
        }
    </style>
</head>

<body>
    <?php include('navbar.php'); ?>
    <div class="container mt-5">
        <?php
        if (isset($_GET['msg'])) {
            $msg = $_GET['msg'];
            echo
            '
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                ' . $msg . '
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            ';

            // Unset the message to prevent it from being displayed again on refresh
            unset($_GET['msg']);
        }
        ?>
        <a href="add_new.php" class="btn btn-primary">Add New</a><br><br>

        <table class="table table-hover text-start">
            <thead class="table-dark sticky-header">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Firstname</th>
                    <th scope="col">Lastname</th>
                    <th scope="col">ID</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Status</th>
                    <th scope="col">Date</th>
                    <th scope="col">Reason</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <?php
            $sql = "SELECT * FROM crud";
            $result = mysqli_query($conn, $sql);
            $counter = 1; // Initialize counter variable
            while ($row = mysqli_fetch_assoc($result)) {
            ?>
                <tbody>
                    <tr>
                        <th scope="row"><?php echo $counter ?></th>
                        <td><?php echo $row['firstname'] ?></td>
                        <td><?php echo $row['lastname'] ?></td>
                        <td><?php echo $row['id'] ?></td>
                        <td><?php echo $row['gender'] ?></td>
                        <td><?php echo $row['status'] ?></td>
                        <td><?php echo $row['date'] ?></td>
                        <td><?php echo $row['reason'] ?></td>
                        <td>
                            <a href="edit.php?id=<?php echo $row['id'] ?>" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
                            <a href="delete.php?id=<?php echo $row['id'] ?>" class="link-dark"><i class="fa-solid fa-trash fs-5 me-3"></i></a>
                        </td>
                    </tr>
                </tbody>
            <?php
                $counter++; // Increment the counter variable
            }
            ?>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>

</html>