<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Receiver popup</title>
</head>
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
		      $comment = $_POST["comment"];
          if(!$comment){
                        echo "<script>alert('음식을 다시 입력해주세요');</script>";
                    }else{
          $conn = mysqli_connect("localhost", "root", "", "sample");
		  mysqli_query($conn, "set session character_set_connection=utf8;");
		  mysqli_query($conn, "set session character_set_results=utf8;");
		  mysqli_query($conn, "set session character_set_client=utf8;");
          $sql = "SELECT * FROM food_description WHERE id LIKE '%$comment%' LIMIT 10;";
          $result = mysqli_query( $conn, $sql );

          while( $row = mysqli_fetch_array( $result ) ) {
            echo
			'<tr><td>' . $row[ 'id' ] .
			'</td><td>'. $row[ 'Energy' ] . 
			'</td><td>' . $row[ 'Water' ] . 
			'</td><td>' . $row[ 'Protein' ] . 
			'</td><td>'. $row[ 'Fat' ] . 
			'</td><td>'. $row[ 'Carbohydrate' ] . 
			'</td><td>'. $row[ 'Total_sugars' ] . 
			'</td><td>'. $row[ 'Total_Dietary_Fiber' ] . 
			'</td><td>'. $row[ 'Sodium' ] . 
			'</td><td>'. $row[ 'Total_Ascorbic_Acid' ] . 
			'</td><td>'. $row[ 'Sum_of_19_amino_acids' ] . 
			'</td><td>'. $row[ 'Cholesterol' ] . 
			'</td><td>'. $row[ 'Trans_fatty_acid' ] . 
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