<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $note_date_time = filter_input(INPUT_POST, 'date_time', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    if(isset($_POST['note_date_time'])){

        $host = 'localhost';
        $username = 'root';
        $password = '';
        $dbname = 'dolphin_crm';

        $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);

        $insert = "INSERT INTO userstable(update_at) VALUES('$note_date_time')";
        if ($conn->query($insert) === TRUE) {
            echo "  Record added successfully";
          } else {
            echo "Error: " . $insert . "<br>" . $conn->error;
          }

    }
}
?>

