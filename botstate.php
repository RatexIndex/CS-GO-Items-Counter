<center>
<?php

            $API_link = sprintf("http://steamcommunity.com/profiles/%s/inventory/json/730/2?trading=1", '76561198211151623');
            $json = file_get_contents($API_link);
            $json_output = json_decode($json);
            $i = 0;
            foreach($json_output->rgInventory as $item) {
            $i++;
            }

            $botinv1 = $i;

            ?>
            <br>
            <b>Bot Inventory 1<br>
            Item Slots: <?php echo $botinv1 ?>/1000</b>


<br><br>
<?php

            $API_link = sprintf("http://steamcommunity.com/profiles/%s/inventory/json/730/2?trading=1", 'STEAM64ID');
            $json = file_get_contents($API_link);
            $json_output = json_decode($json);
            $i = 0;
            foreach($json_output->rgInventory as $item) {
            $i++;
            }

            $botinv2 = $i;

            ?>
            <br>
            <b>Bot Inventory 2<br>
            Item Slots: <?php echo $botinv2 ?>/1000</b>
</center>