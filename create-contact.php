<!-- Author: Janalisa Waugh -->
<?php
    include "./db_connect.php";

    $inputJSON = file_get_contents('php://input');
    $input = json_decode($inputJSON, TRUE);    
    $title = trim($input['title']);
    $firstname = trim($input['firstname']);
    $lastname = trim($input['lastname']);
    $email = trim($input['email']);
    $telephone = trim($input['telephone']);
    $company = trim($input['company']);
    $type = trim($input['type']);
    $assignment = trim($input['assignment']);

    $insertQuery = $conn->prepare("INSERT INTO contacttable (title, firstname, lastname, email, telephone, company, assigned_to) VALUES (?,?,?,?,?,?,?,?);");
    $insertQuery->bind_param("sss", $title, $firstname, $lastname, $email, $telephone, $company, $assigned_to)
    $result = $insertQuery->execute();
    if ($result) {
        http_response_code(200);
        exit;
        //$error .= '<p class="success">Your registration was successful!</p>';
    } else {
        http_response_code(400);
        exit;
        $error .= '<p class="error">Something went wrong!</p>';
    }

    $query->close();
    mysqli_close($conn);


?>