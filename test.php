<?php

include("connection.php");

?>




<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>View page</title>
    <style>
        tr td {
            text-align: center;
        }

        table {
            margin-top: 25px;
        }
    </style>
</head>

<body>

    <h1 align="center">User Record</h1>

    <form action="" method="GET">
        <input type="text" name="search"> <input type="submit" name="sr" value="search">
    </form>

    <!--For search optiion-->



    <table border="1" align="center">
        <tr>
            <th width="10%">Id</th>
            <th width="10%">Name</th>
            <th width="10%">Email</th>
            <th width="25%">Mobile</th>
            <th width="25%">Password</th>
            <th width="10%">Edit</th>
            <th width="10%">Delete</th>


        </tr>
        <?php

        if (isset($_GET['sr'])) {
            $search = $_GET['search'];

            $sr = "select * from medicine where name like'%$search%'";
            $sr1 = mysqli_query($conn, $sr);

            while ($rw = mysqli_fetch_assoc($sr1)) {
        ?>

                <tr>
                    <td><?php echo $rw['id'];  ?></td>
                    <td><?php echo $rw['name'];  ?></td>
                    <td><?php echo $rw['email'];  ?></td>
                    <td><?php echo $rw['mobile'];  ?></td>
                    <td><?php echo $rw['password'];  ?></td>

                </tr>

            <?php

            }
        } else {
            //For showing user record



            $fetch = "SELECT * FROM `medicine`";
            $fe = mysqli_query($conn, $fetch);


            while ($row = mysqli_fetch_assoc($fe)) {
            ?>

                <tr>
                    <td><?php echo $row['id'];  ?></td>
                    <td><?php echo $row['name'];  ?></td>
                    <td><?php echo $row['email'];  ?></td>
                    <td><?php echo $row['mobile'];  ?></td>
                    <td><?php echo $row['password'];  ?></td>

                </tr>

        <?php

            }
        }

        ?>





    </table>

    <a href="index.php">Go to form</a>
</body>

</html>