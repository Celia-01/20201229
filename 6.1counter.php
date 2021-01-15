  
<？php
    error_reporting（0）;//報告執行時錯誤
    session_start（）;
    if（！isset（$ _SESSION [ “ counter1” ]））{//檢查Session值是否存在
        $ _SESSION [ “ counter1” ] = 1 ;//設定Session值
    }其他{
        $ _SESSION [ “ counter1” ] ++;
    }
    echo  “登錄{$ _SESSION [” counter1 “]}人次” ;
？>
