<?php
  // 데이터베이스 연결
  $db = new mysqli('localhost', 'your_username', 'your_password', 'your_db');

  // 사용자 입력 받기
  $username = $_POST['username'];
  $password = $_POST['password'];

  // SQL 쿼리
  $query = "SELECT * FROM users WHERE userID = '$username' AND password = '$password'";

  // 쿼리 실행
  $result = $db->query($query);

  // 결과 확인
  if ($result->num_rows > 0) {
    // 로그인 성공
    // 세션 시작
    session_start();
    $_SESSION['username'] = $username;
    header('Location: index.php');  // 메인 페이지로 이동
  } else {
    // 로그인 실패
    echo "Invalid username or password.";
  }

  // 데이터베이스 연결 종료
  $db->close();
?>
