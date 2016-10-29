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
    foreach ($players as $player){
        echo '<tr>';
        foreach ($player as $card){
            echo "<td>{$card}</td>";
        }
        echo '</tr>';
    }

?>
</table>
