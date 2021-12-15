<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Receiver popup</title>
</head>
<?php
session_start();
if (isset($_SESSION["userid"])) $userid = $_SESSION["userid"];
else $userid = "";
if (isset($_SESSION["username"])) $username = $_SESSION["username"];
else $username = "";
?>


<body>
    <p>
        <!-- 식품검색 팝업창 -->
        <div>
            <table border=1 align=center cellpadding="12px">

                <thead>
                    <tr>
                        <th>이름</th>
                        <th>에너지</th>
                        <th>수분</th>
                        <th>단백질</th>
                        <th>지질</th>
                        <th>탄수화물</th>
                        <th>(총)당류</th>
                        <th>(총)식이섬유</th>
                        <th>나트륨</th>
                        <th>비타민 C</th>
                        <th>(총)아미노산</th>
                        <th>콜레스테롤</th>
                        <th>(총)트랜스지방산</th>

                    </tr>
                </thead>

                <tbody>
                    <?php

					
                    $id = $_POST["id"];
                    $gram = $_POST["gram"];
					if(!$userid){
						echo "<script>alert('로그인을 해주세요');</script>";
					}else if(!$id && !$gram){
						echo "<script>alert('재료와 그램를 다시 입력해주세요');</script>";
					}else if(!$id){
						echo "<script>alert('재료를 다시 입력해주세요');</script>";
					}else if(!$gram){
						echo "<script>alert('그램을 다시 입력해주세요');</script>";
					}else{
                    $conn = mysqli_connect("localhost", "root", "", "sample");
                    mysqli_query($conn, "set session character_set_connection=utf8;");
                    mysqli_query($conn, "set session character_set_results=utf8;");
                    mysqli_query($conn, "set session character_set_client=utf8;");
                    $sql = "SELECT * FROM food_description WHERE id LIKE '$id';";
                    $result = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_array($result);
                    $save[0] = 0;
                    for ($i = 1; $i <= 12; $i++) {
                        $save[$i] = $row[$i] / 100 * $gram;
                    }
                    $sql = "UPDATE members SET Energy = Energy + $save[1] where id like '$userid'";
                    $result = mysqli_query($conn, $sql);
                    $sql = "UPDATE members SET Water = Water + $save[2] where id like '$userid'";
                    $result = mysqli_query($conn, $sql);
                    $sql = "UPDATE members SET Protein = Protein + $save[3] where id like '$userid'";
                    $result = mysqli_query($conn, $sql);
                    $sql = "UPDATE members SET Fat = Fat+ $save[4] where id like '$userid'";
                    $result = mysqli_query($conn, $sql);
                    $sql = "UPDATE members SET Carbohydrate = Carbohydrate + $save[5] where id like '$userid'";
                    $result = mysqli_query($conn, $sql);
                    $sql = "UPDATE members SET Total_sugars = Total_sugars+ $save[6] where id like '$userid'";
                    $result = mysqli_query($conn, $sql);
                    $sql = "UPDATE members SET Total_Dietary_Fiber = Total_Dietary_Fiber + $save[7] where id like '$userid'";
                    $result = mysqli_query($conn, $sql);
                    $sql = "UPDATE members SET Sodium = Sodium + $save[8] where id like '$userid'";
                    $result = mysqli_query($conn, $sql);
                    $sql = "UPDATE members SET Total_Ascorbic_Acid = Total_Ascorbic_Acid + $save[9] where id like '$userid'";
                    $result = mysqli_query($conn, $sql);
                    $sql = "UPDATE members SET Sum_of_19_amino_acids = Sum_of_19_amino_acids + $save[10] where id like '$userid'";
                    $result = mysqli_query($conn, $sql);
                    $sql = "UPDATE members SET Cholesterol = Cholesterol + $save[11] where id like '$userid'";
                    $result = mysqli_query($conn, $sql);
                    $sql = "UPDATE members SET Trans_fatty_acid = Trans_fatty_acid + $save[12] where id like '$userid'";
                    $result = mysqli_query($conn, $sql);

                    $sql = "SELECT * FROM members WHERE id LIKE '$userid';";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_array($result)) {
                        echo

                            '<tr><td>' . $userid .
                                '</td><td>' . $row['Energy']  .
                                '</td><td>' . $row['Water']  .
                                '</td><td>' . $row['Protein']  .
                                '</td><td>' . $row['Fat']   .
                                '</td><td>' . $row['Carbohydrate']   .
                                '</td><td>' . $row['Total_sugars']   .
                                '</td><td>' . $row['Total_Dietary_Fiber']   .
                                '</td><td>' . $row['Sodium']   .
                                '</td><td>' . $row['Total_Ascorbic_Acid']   .
                                '</td><td>' . $row['Sum_of_19_amino_acids']   .
                                '</td><td>' . $row['Cholesterol']   .
                                '</td><td>' . $row['Trans_fatty_acid']   .
                                '</td></tr>';
                    }
					}
                    ?>
                </tbody>

            </table>
            <tbody></tbody>
        </div>

    </p>
</body>

</html>