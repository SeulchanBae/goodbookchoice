<?php
    $servername = "localhost";
    $username = "root";
    $password = "password"; // 여기에 실제 데이터베이스 비밀번호를 입력하세요.
    $dbname = "bookchoice";

    // 데이터베이스 연결
    $db = new mysqli($servername, $username, $password, $dbname);

    // 연결 오류 확인
    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    }

    // 사용자가 입력한 아이디, 비밀번호, 이름, 이메일
    $inputID = $_POST['userID'];
    $inputPassword = $_POST['password'];
    $inputName = $_POST['name'];
    $inputEmail = $_POST['email'];

    // 데이터베이스에 사용자 정보 추가
    $sql = "INSERT INTO users (userID, password, name, email) VALUES ('$inputID', '$inputPassword', '$inputName', '$inputEmail')";
    if ($db->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $db->error;
    }

    // 데이터베이스 연결 종료
    $db->close();
?>
