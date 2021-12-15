<!DOCTYPE html>
<html lang="en-US">
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
						<th>식품명</th>
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
					
				
					$calculate = $_POST["calculate"];
					$count = $_POST["count"];
					if(!$calculate && !$count){
						echo "<script>alert('재료와 그램을 다시 입력해주세요');</script>";
					}else if(!$calculate){
						echo "<script>alert('재료를 다시 입력해주세요');</script>";
					}else if(!$count){
						echo "<script>alert('그램을 다시 입력해주세요');</script>";
					}else{
					$conn = mysqli_connect("localhost", "root", "", "sample");
					mysqli_query($conn, "set session character_set_connection=utf8;");
					mysqli_query($conn, "set session character_set_results=utf8;");
					mysqli_query($conn, "set session character_set_client=utf8;");
					$sql = "SELECT * FROM food_description WHERE id LIKE '%$calculate%' LIMIT 10;";
					$result = mysqli_query($conn, $sql);

					while ($row = mysqli_fetch_array($result)) {
						echo
							
						
							'<tr><td>' . $row['id'] .
								'</td><td>' . $row['Energy']/100*$count .
								'</td><td>' . $row['Water'] / 100 * $count .
								'</td><td>' . $row['Protein'] / 100 * $count/100*$count .
								'</td><td>' . $row['Fat']/100*$count .
								'</td><td>' . $row['Carbohydrate'] / 100 * $count .
								'</td><td>' . $row['Total_sugars'] / 100 * $count .
								'</td><td>' . $row['Total_Dietary_Fiber'] / 100 * $count .
								'</td><td>' . $row['Sodium'] / 100 * $count .
								'</td><td>' . $row['Total_Ascorbic_Acid'] / 100 * $count .
								'</td><td>' . $row['Sum_of_19_amino_acids'] / 100 * $count .
								'</td><td>' . $row['Cholesterol'] / 100 * $count .
								'</td><td>' . $row['Trans_fatty_acid'] / 100 * $count .
								'</td></tr>';
					}
					}
					?>
				</tbody>

			</table>
		</div>

	</p>
</body>

</html>