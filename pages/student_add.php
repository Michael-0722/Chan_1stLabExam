<?php 
    include "db.php";

    $message = "";

    if(isset($_POST['submit'])){
        $student_id = $_POST['student_id'];
        $full_name = $_POST['full_name'];
        $email = $_POST['email'];
        $course=$_POST['course'];

        if($student_id == "" || $full_name == "" || $email == "" || $course == ""){
            $message = "Please fill in all fields.";
        }
        
        else{
            $sql = "INSERT INTO students (student_id, full_name, email, course)
            VALUES ('$student_id', '$full_name', '$email', '$course')";
            mysqli_query($conn, $sql);
            header("Location: students_lists.php");
            exit;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student</title>
    <link rel="stylesheet" href="../styles.css">
</head>
<body>
    <h2>Create Student Record</h2>

    <div class="form_style">
        <form method="post">
            <div class="form_group">
                <label>ID Number</label><br>
                <input type="text" name="student_id">
            </div>
            <div class="form_group">
                <label>Full Name</label><br>
                <input type="text" name="full_name">
            </div>
            <div class="form_group">
                <label>Email</label><br>
                <input type="email" name="email">
            </div>
            <div class="form_group">
                <label>Course</label><br>
                <input type="text" name="course">
            </div>
            <button type="submit" name="submit">Add Student</button>
            <button type="button" onclick="window.location.href='students_lists.php'">Cancel</button>
        </form>
    </div>
</body>
</html>