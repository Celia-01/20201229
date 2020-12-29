<？php 
    error_reporting（0）;
    $ conn = mysqli_connect（ “ localhost”， “ root”， “”， “ mydb”）;
    如果（mysqli_connect_error（$ conn））
      die（“無法連線資料庫”）;
    $ sql = “從公告中選擇*，其中bid = {$ _GET ['bid']}”” ;
    // echo $ sql;
    $ result = mysqli_query（ $ conn， $ sql）;複製代碼
    $ row = mysqli_fetch_array（ $ result）;複製代碼
   
迴聲 “
<html>
<head> <title>修改佈告</ title> </ head>
<身體>
  <h2>修改佈告</ h2>
  <form action ='bulletin_edit.php'method ='post'>
    <輸入類型=隱藏名稱=出價值= $行[出價]>
    佈告標題：<input type ='text'name ='title'size = 200 value ='$ row [title]'> <p>      
    佈告內容：<p>
    <textarea rows = '20'cols ='100'name ='content'> $ row [content] </ textarea> 
    <p>
    佈告類型：<p>
    <input name ='type'value ='1'“ ;
    if（$ row [ 'type' ] == 1）回顯 “ checked”；
    echo  “ type ='radio'>系上公告
    <input name ='type'value ='2'“ ;
    if（$ row [ 'type' ] == 2）回顯 “ checked” ;
    echo  “ type ='radio'>招生訊息
    <input name ='type'value ='3'“ ;
    if（$ row [ 'type' ] == 3）回顯 “ checked” ;
    echo  “ type ='radio'>企業徵才<p>      
    發佈時間：<輸入類型=日期名稱='時間'值= $行[時間]> <p>      
    <輸入類型=提交>
  </ form>
</ body>
</ html>
“ ;
？>
