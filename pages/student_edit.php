<?php
    include "db.php";

    $id = $_GET['id'];

    $get = mysqli_query($conn, "SELECT * FROM students WHERE student_id = $id");
    $data = mysqli_fetch_assoc($get);

    if(isset($_POST['update'])){
        $student_id = $_POST['student_id'];
        $full_name = $_POST['full_name'];
        $email = $_POST['email'];
        $course = $_POST['course'];

        mysqli_query($conn, "UPDATE students SET student_id = '$student_id', full_name = '$full_name', email = '$email', course = '$course' WHERE student_id = $id");
        header("Location: students_lists.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Student</title>
    <link rel="stylesheet" href="../styles.css">
</head>
<body>
    <h2>Edit Student</h2>

    <div class="form_style">
        <form method="post">
            <div class="form_group">
                <label>Student ID</label>
                <input type="text" name="student_id" value="<?php echo $data['student_id']; ?>">
            </div>
        
            <div class="form_group">
                <label>Name</label>
                <input type="text" name="full_name" value="<?php echo $data['full_name']; ?>">
            </div>    
        
            <div class="form_group">
                <label>Email</label>
                <input type="text" name="email" value="<?php echo $data['email']; ?>">
            </div>
        
            <div class="form_group">
                <label>Course</label>
                <input type="text" name="course" value="<?php echo $data['course']; ?>">
            </div> 
            <button type="submit" name="update">Update Student</button>
            <button type="button" onclick="window.location.href='students_lists.php'">Cancel</button>                              
        </form>
    </div>
    
</body>
</html>