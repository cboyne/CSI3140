<!DOCTYPE html>

<html>
    <body>
        <?php
            $states = "Mississippi Alabama Texas Massachusetts Kansas";

            // Part a
            $statesArray = [];
            $pattern = '/xas$/';
            $statesList = explode(" ", $states);
            foreach ($statesList as $state) {
                if (preg_match($pattern, $state)) {
                    $statesArray[0] = $state;
                    break;
                }
            }

            // Part b
            $pattern = '/\bk[a-z]*s\b/i';
            foreach ($statesList as $state) {
                if (preg_match($pattern, $state)) {
                    $statesArray[1] = $state;
                    break;
                }
            }
            
            // Part c
            $pattern = '/\bM[a-z]*s\b/';
            foreach ($statesList as $state) {
                if (preg_match($pattern, $state)) {
                    $statesArray[2] = $state;
                    break;
                }
            }

            // Part d
            $pattern = '/a$/';
            foreach ($statesList as $state) {
                if (preg_match($pattern, $state)) {
                    $statesArray[3] = $state;
                    break;
                }
            }

            // Part e
            $pattern = '/^M/';
            foreach ($statesList as $state) {
                if (preg_match($pattern, $state)) {
                    $statesArray[4] = $state;
                    break;
                }
            }

            // Part f
            for($i = 0; $i < count($statesArray); $i++) {
                print("Element $i: $statesArray[$i] <br>");
            }
        ?>
    </body>
</html>