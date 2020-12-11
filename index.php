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
  </div>
    <div id="jb-sidebar">
    <form action="recommend.php" method="post">

      <h2><strong>원하시는 정류소는 어디신가요?</strong></h2>

         <p><input type="INT" size="10" name="num" placeholder="ex)21056"></p>

         <h2><strong>이용하고 싶은 시간은 언제신가요?</strong></h2>

            <select>
              <option label ="이용시간 ex)0:00:00">
                <option vlaue="oo"> 0:00:00 - 1:00:00  </option>
                <option vlaue="o1"> 1:00:00 - 2:00:00  </option>
                <option vlaue="o2"> 2:00:00 - 3:00:00  </option>
                <option vlaue="o3"> 3:00:00 - 4:00:00  </option>
                <option vlaue="o4"> 4:00:00 - 5:00:00  </option>
                <option vlaue="o5"> 5:00:00 - 6:00:00  </option>
                <option vlaue="o6"> 6:00:00 - 7:00:00  </option>
                <option vlaue="o7"> 7:00:00 - 8:00:00  </option>
                <option vlaue="o8"> 8:00:00 - 9:00:00  </option>
                <option vlaue="o9"> 9:00:00 - 10:00:00  </option>
                <option vlaue="10">10:00:00 - 11:00:00  </option>
                <option vlaue="11">11:00:00 - 12:00:00  </option>
                <option vlaue="12">12:00:00 - 13:00:00  </option>
                <option vlaue="13">13:00:00 - 14:00:00  </option>
                <option vlaue="14">14:00:00 - 15:00:00  </option>
                <option vlaue="15">15:00:00 - 16:00:00  </option>
                <option vlaue="16">16:00:00 - 17:00:00  </option>
                <option vlaue="17">17:00:00 - 18:00:00  </option>
                <option vlaue="18">18:00:00 - 19:00:00  </option>
                <option vlaue="19">19:00:00 - 20:00:00  </option>
                <option vlaue="20">20:00:00 - 21:00:00  </option>
                <option vlaue="21">21:00:00 - 22:00:00  </option>
                <option vlaue="22">22:00:00 - 23:00:00  </option>
                <option vlaue="23">23:00:00 - 24:00:00  </option>

              </select>
                <p></p>
              <input type="submit" value="GO">
            </form>


      </div>

      <div id="jb-footer">
          <img src = "a.png" width="900 ">
            <p></p>

      </div>

  </body>
</html>
