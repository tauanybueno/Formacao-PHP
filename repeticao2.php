<?php

for ($contador = 1; $contador <= 15; $contador++){
    if ($contador == 13) {
        continue; //pula e vai para a proxima
        //break -> exibiria ate o 12 apenas e quebraria o loop
    }
        echo "$contador" . PHP_EOL;

}
