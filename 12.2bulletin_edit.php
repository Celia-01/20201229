<？php
    session_start（）;
if（！isset（$ _SESSION [ 'id' ]））{   
    迴聲 “請登錄系統”；
    迴聲 “ <meta http-equiv ='refresh'content ='3; url = index.html''>” ;
}其他{
    $ conn = mysqli_connect（ “ localhost”， “ root”， “”， “ mydb”）;
    如果（mysqli_connect_error（$ conn））
      die（“無法連線資料庫”）;
    $ sql = “更新公告集title ='{$ _ POST ['title']}'，content ='{$ _ POST ['content']}'，type = {$$ POST ['type']}，time =' {$ _POST ['time']}'，其中bid = {$ _ POST ['bid']}“”；
    // echo $ sql;
    如果（！mysqli_query（$ conn，$ sql））{
     echo（“錯誤描述：”。mysqli_error（$ conn））;   
    }
    其他  
       迴聲 “修改成功”；   
    mysqli_close（$ conn）;//關閉數據庫連接
    echo  “ <元http-equiv ='refresh'content ='3; url = bulletin.php''>” ;//上面例子會讓網頁在載入 3秒後，自動跳轉到bulletin.php 
}
？>
