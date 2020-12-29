<？php

session_start（）;
//將會話清空
unset（$ _SESSION [ “ id” ]）;
迴聲 “登出中......” ;
迴聲 '<meta http-equiv = REFRESH CONTENT = 2; url = login.html>' ;

？>
