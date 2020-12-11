<!DOCTYPE html>
<?php
  $link = mysqli_connect('localhost', 'admin', 'admin', 'bicycle');
  $rental = mysqli_real_escape_string($link, $_POST['num']); //검색할 대여소 번호
  $s_time = mysqli_real_escape_string($link, $_POST['a']); //검색할 
  $query = "SELECT rentalplace, latitude, longitude from rentalplace_info where rentalplace_num = {$rental}"; //대여소번호를 통해 검
  $result = mysqli_query($link, $query);
  $row = mysqli_fetch_array($result);
  $r_p = $row['rentalplace']; //검색한 대여소
  $lat = $row['latitude']; //검색한 위도
  $lon = $row['longitude']; //검색한 경도

  $query = "SELECT substring(ren_date_time,1,7),
    (count(case when substring(ren_date_time,12,2) = {$s_time} then 1 end)/31) AS '대여수',
    substring(return_datetime,1,7),
    (count(case when substring(return_datetime,12,2) = {$s_time} then 1 end)/31) AS '반납수'
    from rental_05 where rental_num = {$rental}
    AND substring(ren_date_time, 1, 7) not in ('2020-04') AND substring(return_datetime, 1, 7) not in ('2020-04')
    group by substring(ren_date_time,1,7),substring(return_datetime,1,7)";
  $result = mysqli_query($link, $query);
  $emp_info = '';
  $row1 = mysqli_fetch_array($result);
  $emp_info = array( //php배열을 선언하는 방법
    '대여수' => $row1['대여수'],
    '반납수'=> $row1['반납수']
  );
  $emp_info['대여수']-$emp_info['반납수'] <= 0 ? $state = "포화" : $state = "부족";
  $query3 = "SELECT *,
    ( 6371 * acos( cos( radians({$lat}) ) * cos( radians( latitude ) ) *
    cos( radians( longitude ) - radians({$lon}) ) + sin( radians({$lat}) ) * sin( radians( latitude ) ) ) ) AS distance
    from rentalplace_info
    HAVING distance between 0.0001 and 1
    ORDER BY distance
    LIMIT 0,5"; // 검색한 대여소 10km이내에 있는 따릉이 대여소를 보여줌
    $result3 = mysqli_query($link, $query3);
    $article = '';
    while ($row3 = mysqli_fetch_array($result3)) {
        $article .= '<tr>';
        $article .= '<td>'.$row3['rentalplace_num'].'</td>';
        $article .= '<td>'.$row3['rentalplace'].'</td>';
        $article .= '<td>'.$row3['borough'].'</td>';
        $article .= '<td>'.$row3['address'].'</td>';
        $article .= '</tr>';
    }
?>

  <head>
    <meta charset="utf-8">
    <title>따릉이</title>
    <style>
      #jb-container {
        width: 940px;
        margin: 0px auto;
        padding: 20px;
      }
      #jb-header {
        padding: 20px;
        margin-bottom: -20px;
      }
      #jb-content {
        width: 900px;
        padding: 20px;
        margin-bottom: 20px;
        float: center;
        border : 2px solid green;
        border-radius:10px;
      }
      #jb-sidebar {
        width: 260px;
        padding: 20px;
        margin-bottom: 20px;
        float: right;
        border : 2px solid green;
        border-radius:10px;
      }
      #jb-footer {
        clear: both;
        padding: 20px;
        border: 1px solid #BCBCBC;
      }
      hr {
      width: 100%;
      color : #A6A2A2;
      margin-bottom: 20px;
      }
      table {
        width: 100%;
        border-top: 1px solid green;
        border-collapse: collapse;
        text-align: center;
      }
      th, td {
        border-bottom: 1px solid green;
        padding: 10px;
      }
    </style>
  </head>
  <body>
    <div id="jb-container">
      <div id="jb-header">
        <a href="index.php"><img src = "bike.png" ></a>
        <h2><?=$time?>:00:00 - <?=$time+1?>:00:00 시간대의</h2>
        <h2><<?=$r_p?>> 대여소는 평균적으로 <?=$state?> 상태 입니다.&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<a href="index.php">뒤로가기</a></h2>
      </div>
      <div id="jb-content">
        <h3><<?=$r_p?>>의 근처 대여소</h3>
        <hr>
        <table border="1">
             <tr>
             <th>대여소번호</th>
             <th>대여소명</th>
             <th>자치구</th>
             <th>주소</th>
             </tr>
             <?=$article?>
      </div>
    </div>
  </body>
</html>
