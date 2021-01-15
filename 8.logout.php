<？php

session_start（）;
//將會話清空
unset（$ _SESSION [ “ id” ]）;
迴聲 “登出中......” ;
迴聲 '<meta http-equiv = REFRESH CONTENT = 2; url = login.html>' ;//上面例子會讓網頁在載入 2 秒後，自動跳轉到login.html

？>
