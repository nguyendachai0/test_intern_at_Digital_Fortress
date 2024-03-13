<?php

class RetrieveLight
{
    protected $rainBowColors = ['red', 'orange', 'yellow', 'green', 'blue', 'indigo', 'violet'];
    function retrieveLight($roomId, $api_list)
    {
        return $this->sortInOrderOfRainBow($api_list[$roomId], $this->rainBowColors);
    }
    function sortInOrderOfRainBow(array $colors, array $rainBowColors)
    {
        usort($colors, function ($a, $b) use ($rainBowColors) {
            $pos_a = array_search($a, $rainBowColors);
            $pos_b = array_search($b, $rainBowColors);
            return $pos_a - $pos_b;
        });
        return $colors;
    }
}

$api_list = [1 =>  ['red', 'orange', 'blue', 'yellow', 'violet'], 2 => ['green', 'yellow']];

$retrieveLight = new RetrieveLight();


$result = $retrieveLight->retrieveLight(1, $api_list);

echo '<pre>';
var_dump($result);
echo '</pre>';
