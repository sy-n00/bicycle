<?php
require_once './make_chart_parts.html';

$data = array();
$data[] = array('', '대여', '반납');
$data[] = array('강남구', 85286, 81978);
$data[] = array('강동구', 98402, 100094);
$data[] = array('강북구',  46427, 46067);
$data[] = array('강서구',  189362, 189635);
$data[] = array('관악구',  80649, 79748);
$data[] = array('광진구',  137370, 137616);
$data[] = array('구로구',  91446, 91381);
$data[] = array('금천구',  38569, 38415);
$data[] = array('노원구',  131637, 131644);
$data[] = array('도봉구',  48501, 48914);
$data[] = array('동대문구',  84798, 84779);
$data[] = array('동작구',  63900, 64290);
$data[] = array('마포구',  171563, 170432);
$data[] = array('서대문구',  65045, 63819);
$data[] = array('서초구',  99591, 97732);
$data[] = array('성동구',  118660, 119826);
$data[] = array('성북구',  80223, 79137);
$data[] = array('송파구',  201721, 202388);
$data[] = array('양천구',  94049, 93683);
$data[] = array('용산구',  58936, 58893);
$data[] = array('은평구',  76128, 77165);
$data[] = array('종로구',  78984, 73076);
$data[] = array('중구',  47577, 44644);
$data[] = array('중랑구',  73082, 74562);

$options = array(
  'title' => '구별 대여 반납 비교 현황',
  'titleTextStyle' => array('fontSize' => 26),
  'width' => 1500,
  'height' => 800,
  'colors' => array('#39C948', '#056D10')
);

$type = 'BarChart';
list($chart, $div) = makeChartParts($data, $options, $type);

?>

<!DOCTYPE html>
<html lang = "ko">
<head>
  <meta charset = "utf-8">
  <title> 구별 대여 반납 비교 현황</title>
  <style>
  .btag {
    text-align: center;
  }
  </style>
  <script src = "https://www.google.com/jsapi"></script>
  <script>
  <?php
    echo $chart;
  ?>
  </script>
</head>
<body>
  <div style="text-align : center;">
      <img src = "bike.png">
        <p></p>
  </div>
  <div class ="btag">
  <a href="index.php"> 뒤로가기 </a>
</div>
  <div class ="atag">
    <?php
      echo $div;
    ?>
  </div>
</body>
</html>
