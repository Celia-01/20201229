<？php
    error_reporting（0）;
    session_start（）;
    if（！isset（$ _SESSION [ “ id” ]））{
        迴聲 “請登錄系統”；
        迴聲 “ <meta http-equiv ='refresh'content ='3; url = login.html'>” ;
    }其他{
        echo  “歡迎{$ _SESSION ['id']}}登錄[<a href=logout.php>登出</a>] <p> [<a href=bulletin_add_form.php>添加佈告</a>] < p>”；
        $ conn = mysqli_connect（ “ localhost”， “ root”， “”， “ mydb”）;
        $ result = mysqli_query（ $ conn， “從公告中選擇*”）；
        echo  “ <表邊框= 2> <tr> <td>佈告操作</ td> <td>佈告編號</ td> <td>佈告類別</ td> <td>標題</ td> <td>佈告內容</ td> <td>發佈時間</ td> </ tr>”；
        while（$ row = mysqli_fetch_array（$ result））{
            迴聲 “ <tr> <td>” ;
            echo  “ <a href=bulletin_edit_form.php?bid='$row[bid]'>修改</a> <a href=delete.php?bid={$row[bid]}>刪除</a>”；
            迴聲 “ </ td> <td>” ;
            echo  $ row [bid];
            迴聲 “ </ td> <td>” ;
            echo  $ row [type];
            迴聲 “ </ td> <td>” ;
            echo  $ row [title];
            迴聲 “ </ td> <td>” ;
            echo  $ row [內容];
            迴聲 “ </ td> <td>” ;
            echo  $ row [time];
            迴聲 “ </ td> </ tr>” ;
        }
        迴聲 “ </ table>” ;
    }
？>
