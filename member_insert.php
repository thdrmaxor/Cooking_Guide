<?php
    $id   = $_POST["id"];
    $pass = $_POST["pass"];
    $name = $_POST["name"];
    $email1  = $_POST["email1"];
    $email2  = $_POST["email2"];

    $email = $email1."@".$email2;
    $regist_day = date("Y-m-d (H:i)");

	$aged   = $_POST["aged"];
    $genderd = $_POST["genderd"];

              
    $con = mysqli_connect("localhost", "root", "", "sample");

	$sql = "insert into members(id, pass, name, email, regist_day, aged, genderd) ";
	$sql .= "values('$id', '$pass', '$name', '$email', '$regist_day', '$aged', '$genderd')";

	mysqli_query($con, $sql);
    mysqli_close($con);     

    echo "
	      <script>
	          location.href = 'index.php';
	      </script>
	  ";
?>

   
<!-- 테이블 코드 양식
create table members ( 
num int not null auto_increment, id char(15) not null, pass char(15) not null, name char(15) not null, email char(80), regist_day char(20), level int, point int, primary key(num)); 
-->