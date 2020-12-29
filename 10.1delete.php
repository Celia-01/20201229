<？php
    error_reporting（）;
    $ conn = mysqli_connect（ “ localhost”， “ root”， “”， “ mydb”）;
    //從公告中刪除，其中bid = ???
    $ sql = “從公告中刪除，其中bid = {$ _ GET [bid]}”；
    // echo $ sql;
    如果（！mysqli_query（$ conn，$ sql））
        echo  “刪除錯誤” ;
    其他{
        echo  “刪除成功；回前頁中...” ;
        迴聲 “ <meta http-equiv ='refresh'content ='3; url = bulletin.php'>” ;
    }
？>
