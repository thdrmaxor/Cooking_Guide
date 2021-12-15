<?php
session_start();
if (isset($_SESSION["userid"])) $userid = $_SESSION["userid"];
else $userid = "";
if (isset($_SESSION["username"])) $username = $_SESSION["username"];
else $username = "";
if (isset($_SESSION["userage"])) $userage = $_SESSION["userage"];
else $userage = "";
if (isset($_SESSION["usergender"])) $usergender = $_SESSION["usergender"];
else $usergender = "";
?>

<div style="background:orange">
    <a> </a>
</div>

<div id="top" style="background:brown">

    <h3>
        <a href="index.php" style=" color:black ; font-size:40px ; font-family:Times">Cooking Guide</a>
    </h3>

</div>
<div style="background:orange">
    <a> </a>
</div>

<br>
<ul>
    <?php
    if (!$userid) {
    ?>
        <li style="display:inline-block"><a href="member_form.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;회원가입</a></li>
        <li style="display:inline-block">|</li>
        <li style="display:inline-block"><a href="login_form.php">로그인</a></li>

    <?php
    } else {
        $logged = $username . "(" . $userid . ")님" ;
    ?>

        <li style="display:inline-block">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?= $logged ?></li>

        <?php
          $conn = mysqli_connect("localhost", "root", "", "sample");
		  mysqli_query($conn, "set session character_set_connection=utf8;");
		  mysqli_query($conn, "set session character_set_results=utf8;");
		  mysqli_query($conn, "set session character_set_client=utf8;");
          $sql = "SELECT * FROM cal WHERE age LIKE '$userage' AND gender LIKE '$usergender' LIMIT 10;";
          $result = mysqli_query( $conn, $sql );

          while( $row = mysqli_fetch_array( $result ) ) {
            echo 
			'<tr><td>' . " | 나이 : " . $row[ 'age' ] . 
			'</td><td>'. " | 성별 : " .  $row[ 'gender' ] . 
			'</td><td>' . " | 권장칼로리 : " .  $row[ 'cal' ] . 
			'</td></tr>';
          }
        ?>

        <li style="display:inline-block">|</li>
        <li style="display:inline-block"> <a href="logout.php">로그아웃</a> </li>

<!--권장칼로리-->
<!--
	<div>
    <table border=1 align=center cellpadding="12px">

      <thead>
        <tr>
          <th>나이</th>
          <th>성별</th>
          <th>권장열량</th>
        </tr>
      </thead>

      <tbody>
        <?php
		  $userage = $_POST["25"];
          $conn = mysqli_connect("localhost", "root", "", "sample");
		  mysqli_query($conn, "set session character_set_connection=utf8;");
		  mysqli_query($conn, "set session character_set_results=utf8;");
		  mysqli_query($conn, "set session character_set_client=utf8;");
          $sql = "SELECT * FROM cal WHERE age LIKE '$userage' AND gender LIKE '$usergender' LIMIT 10;";
          $result = mysqli_query( $conn, $sql );

          while( $row = mysqli_fetch_array( $result ) ) {
            echo
			'<tr><td>' . $row[ 'age' ] .
			'</td><td>'. $row[ 'gender' ] . 
			'</td><td>' . $row[ 'cal' ] . 
			'</td></tr>';
          }
        ?>
      </tbody>
</div>
-->



    <?php
    }
    ?>
</ul>
<br>
<div id="menu_bar">
    <ul>
        <li><a style=" font-size:20px">▒</a></li>
        <li><a href="index_1_1.php">계량 측정 및 저장</a></li>
        <li><a href="index_2_1.php">식품성분 살펴보기</a></li>
        <li><a href="index_3_1.php">레시피 검색하기</a></li>
    </ul>

</div>