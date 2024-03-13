<?php
class LightSystem
{

    /**
     * @param Integer[] $candidates
     * @param Integer $target
     * @return Integer[][]
     */
    function caculateLight($light_brightness_list, $expected_brightness)
    {
        $result = [];
        $current = [];
        $start = 0;

        $this->backtrack($light_brightness_list, $expected_brightness, $start, $current, $result);
        return $result;
    }

    function backtrack($light_brightness_list, $expected_brightness, $start, $current, &$result)
    {
        if ($expected_brightness < 0) {
            return;
        }
        if ($expected_brightness === 0) {
            $result[] = $current;
            return;
        }
        for ($i = $start; $i < count($light_brightness_list); $i++) {
            $current[] = $light_brightness_list[$i];
            $this->backtrack($light_brightness_list, $expected_brightness - $light_brightness_list[$i], $i, $current, $result);
            array_pop($current);
        }
    }
}
$class = new LightSystem();
$result = $class->caculateLight([200, 300, 500], 800);
echo '<pre>';
var_dump($result);
echo '</pre>';
