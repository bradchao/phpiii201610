<?php
    // 洗牌
    $poker = range(0,51);
    shuffle($poker);

    // 發牌
    $players = array([],[],[],[]);
    for ($i=0; $i<count($poker); $i++ ){
        $players[$i%4][(int)($i/4)] = $poker[$i];
    }

    // 攤牌(理牌)

?>
<table width="100%" border="1">
<?php
    $suit = ['<font size="6">&spades;</font>',
            '<font size="6" color="red">&hearts;</font>',
            '<font size="6" color="red">&diams;</font>',
            '<font size="6">&clubs;</font>'];
    $value = ['A',2,3,4,5,6,7,8,9,10,'J','Q','K'];
    foreach ($players as $player){
        sort($player);
        echo '<tr>';
        foreach ($player as $card){
            echo '<td>' . $suit[(int)($card/13)] .  $value[$card%13] . '</td>';
        }
        echo '</tr>';
    }

?>
</table>
