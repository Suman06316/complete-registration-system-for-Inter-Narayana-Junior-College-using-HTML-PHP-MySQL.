<?php
include "config.php";

$message = "";

if (isset($_POST['register'])) {
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $course = $_POST['course'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];

    $query = "INSERT INTO students (full_name, email, phone, course, gender, dob)
              VALUES ('$full_name', '$email', '$phone', '$course', '$gender', '$dob')";

    if (mysqli_query($conn, $query)) {
        $message = "✅ Registration Successful!";
    } else {
        $message = "❌ Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Inter Narayana Junior College - Registration</title>
    <style>
        body {
            font-family: Arial;
            background: #f2f2f2;
        }
        .container {
            width: 400px;
            background: #fff;
            padding: 20px;
            margin: 50px auto;
            border-radius: 8px;
            box-shadow: 0 0 10px #ccc;
        }
        h2 {
            text-align: center;
        }
        input, select {
            width: 100%;
            padding: 8px;
            margin: 8px 0;
        }
        button {
            width: 100%;
            padding: 10px;
            background: #2c3e50;
            color: white;
            border: none;
            cursor: pointer;
        }
        .msg {
            text-align: center;
            margin-top: 10px;
            font-weight: bold;
        }
    </style>
</head>

<body>

<div class="container">
    <h2>Inter Narayana Junior College<br>Student Registration</h2>

    <form method="POST">
        <input type="text" name="full_name" placeholder="Full Name" required>

        <input type="email" name="email" placeholder="Email Address" required>

        <input type="text" name="phone" placeholder="Phone Number" required>

        <select name="course" required>
            <option value="">Select Course</option>
            <option value="MPC">MPC</option>
            <option value="BiPC">BiPC</option>
            <option value="CEC">CEC</option>
            <option value="HEC">HEC</option>
        </select>

        <select name="gender" required>
            <option value="">Select Gender</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select>

        <input type="date" name="dob" required>

        <button type="submit" name="register">Register</button>
    </form>

    <div class="msg"><?php echo $message; ?></div>
</div>

</body>
</html>
