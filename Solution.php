class Solution {

    /**
     * @param Integer[] $temperatures
     * @return Integer[]
     */
    function dailyTemperatures($temperatures) {
        $result = [];
        $stack = [];

        for ($i = count($temperatures) - 1; $i >= 0; $i--) {
            while(count($stack) && end($stack) <= $temperatures[$i]) {
                array_pop($stack);
            }

            if (empty($stack)) {
                $result[] = 0;
            } else {
                $result[] = array_key_last($stack) - $i;
            }

            $stack[$i] = $temperatures[$i];
        }

        return array_reverse($result);
    }
}
