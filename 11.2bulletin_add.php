<？php
    session_start（）;
if（！isset（$ _SESSION [ 'id' ]））{   
    迴聲 “請登錄系統”；
    迴聲 “ <meta http-equiv ='refresh'content ='3; url = index.html''>” ;
}其他{
    $ conn = mysqli_connect（ “ localhost”， “ root”， “”， “ mydb”）;
    如果（mysqli_connect_error（$ conn））
      die（“無法連線資料庫”）;
    $ sql = “插入公告（標題，內容，類型，時間）值（'{$ _POST ['title']}''，'{$ _ POST ['content']}'，{$ _ POST ['type'] }，'{$ _ POST ['time']}'）“ ;
    // echo $ sql;
    如果（！mysqli_query（$ conn，$ sql））{
     echo（“錯誤描述：”。mysqli_error（$ conn））;   
    }
    其他  
       迴聲 “添加佈告成功”；   
    mysqli_close（$ conn）;
    echo  “ <元http-equiv ='refresh'content ='3; url = bulletin.php''>” ;
}
？>
