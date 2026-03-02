<?php
    include "db.php";

    $result = mysqli_query($conn, "SELECT * FROM students"); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Records</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <h2>Student Records</h2>
    <a href="student_add.php">Add Student +</a>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Course</th>
            <th>Action</th>
        </tr>
        <?php while ($s =mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td><?php echo $s['student_id']; ?></td>
                <td><?php echo $s['full_name']; ?></td>
                <td><?php echo $s['email']; ?></td>
                <td><?php echo $s['course']; ?></td>
                <td><a href="student_edit.php? id=<?php echo $s['student_id'] ?>">Edit</a></td>
                <td><a href="student_delete.php? id=<?php echo $s['student_id'] ?>">Delete</a></td>
            </tr> 
        <?php } ?>
        
    </table>
</body>
</html>