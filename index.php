<?php include 'connection.php'; ?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <div>
            <form action="" method="POST">
                <input type="text" name="author name" placeholder="author name"> <br><br>
                <input type="text" name="book name" placeholder="book name"> <br><br>
                <input type="number" name="book number" placeholder="book number"> <br><br>
                <input type="submit" name="save_btn" value="save"> <br><br>
            </form>
        </div>
        <?php
        if (isset($_POST['save_btn'])) {
            $fname = $_POST['author name'];
            $lname = $_POST['book name'];
            $age = $_POST['book number'];
            $query = "INSERT INTO details(author name,book name,book number) VALUES ('$aname','$bname','$bnum')";
            $data = mysqli_query($con, $query);
            if ($data) {
                ?>
                <script type="text/javascript">
                    alert("Data Saved Successfully");
                </script>
                <?php
            }
            else {
                ?>
                <script type="text/javascript">
                    alert("Please try again");
                </script>
                <?php
            }
        }
        ?>
    </body>
</html>