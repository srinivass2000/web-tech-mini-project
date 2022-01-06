<?php
require_once 'conn.php';

if (isset($_POST['submit'])) {
    if (
        empty($_POST['fullname']) ||
        empty($_POST['email']) ||
        empty($_POST['phone']) ||
        empty($_POST['password']) ||
        empty($_POST['confirm_password'])
    ) {
        echo 'All Fields are required';
    }
    if ($_POST['password'] != $_POST['confirm_password']) {
        echo "Passwords Doesn't Match";
    } else {
        $name = $_POST['fullname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $password = $_POST['password'];
        $role = 'user';

        $query = "INSERT INTO user(name,email,password,phone,roles)VALUES('$name', '$email', '$password','$phone','$role')";

        if (mysqli_query($conn, $query)) {
            echo 'New record created successfully';
            header('location:User Dashboard.html');
        } else {
            echo 'Error: ' . $query . '<br>' . mysqli_error($conn);
        }

        mysqli_close($conn);
    }
} else {
    header('location:User Dashboard.html');
}
?>
