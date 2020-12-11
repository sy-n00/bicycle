<!doctype html>
<html lang="ko">
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
        margin-bottom: 20px;

      }
      #jb-content {
        width: 580px;
        padding: 20px;
        margin-bottom: 20px;
        float: left;
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
        border: 1px solid #bcbcbc;
      }
    </style>
  </head>
  <body>
    <div id="jb-container">
      <div id="jb-header">
        <img src = "bike.png">
      </div>
      <div id="jb-content">
          <img src = "map.png">
            <p></p>

      </div>
      <div id="jb-sidebar">


          <h2><strong>자전거 포화 확인</strong></h2>
          <form action="exceed.php.php" method="post">
            <p></p>
            <input type="submit" value="GO">
          </form>


          <h2><strong>자전거 부족 확인</strong></h2>
          <form action="shortage.php" method="post">
            <p></p>
            <input type="submit" value="GO">
          </form>
          <!-- <h2><strong>이용하고 싶은 시간은 언제신가요?</strong></h2>
            <select>
              <option label ="이용시간 ex)0:00:00">
                <option> 1:00:00 - 2:00:00  </option>
                <option> 2:00:00 - 3:00:00  </option>
                <option> 3:00:00 - 4:00:00  </option>
                <option> 4:00:00 - 5:00:00  </option>
                <option> 6:00:00 - 7:00:00  </option>
                <option> 8:00:00 - 9:00:00  </option>
                <option> 9:00:00 - 10:00:00  </option>
                <option>10:00:00 - 11:00:00  </option>
                <option>11:00:00 - 12:00:00  </option>
                <option>12:00:00 - 13:00:00  </option>
                <option>13:00:00 - 14:00:00  </option>
                <option>14:00:00 - 15:00:00  </option>
                <option>15:00:00 - 16:00:00  </option>
                <option>17:00:00 - 18:00:00  </option>
                <option>19:00:00 - 20:00:00  </option>
                <option>20:00:00 - 21:00:00  </option>
                <option>21:00:00 - 22:00:00  </option>
                <option>22:00:00 - 23:00:00  </option>
                <option>23:00:00 - 24:00:00  </option>

              </select> -->

      </div>

      <div id="jb-footer">
          <img src = "a.png" width="900 ">
            <p></p>

      </div>

  </body>
</html>
