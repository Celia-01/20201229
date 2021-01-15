<？php
    error_reporting（0）;
    
    $ conn = mysqli_connect（ “ localhost”， “ root”， “”， “ mydb”）;//建立資料庫連線，如果$conn=false代表連結不成功
    如果（mysqli_connect_error（$ conn））
        die（“資料庫連線錯誤”）;

    mysqli_set_charset（$ conn，“ utf8”）;//設置字符集
    $ result = mysqli_query（ $ conn， “從用戶選擇*”）;
    
    $ login = FALSE ;
    while（$ row = mysqli_fetch_array（$ result））{
        if（$ _POST [ “ id” ] == $ row [ “ id” ] && $ _POST [ “ pwd” ] == $ $ row [ “ pwd” ]）
        $ login = TRUE；
    }
    
    if   （！$ _POST [ “ id” ] ||！！$ _POST [ “ pwd” ]）{
           迴聲 “請輸入帳號/密碼”；
           迴聲 “ <meta http-equiv ='refresh'content ='3; url = login.html''>” ;//上面例子會讓網頁在載入 3 秒後，自動跳轉到login.html              
    }
    elseif（$ login == TRUE）{
      session_start（）;
      $ _SESSION [ “ id” ] = $ _POST [ 'id' ];
      迴聲 “歡迎登錄”；    
      迴聲 “ <meta http-equiv ='refresh'content ='0; url = bulletin.php''>” ;   
    }
    其他{
      echo  “帳號密碼錯誤” ;
      迴聲 “ <meta http-equiv ='refresh'content ='3; url = login.html''>” ;          
    }
？>
