<!DOCTYPE html>

<html>
    <body>
        <?php
            $pattern = '/^A\w{3}[Bb]+\d{2}$/';

            $strings = ['A1b2B34', 'ABCD12', 'AabcBBB99', 'A_3fBb07'];
            
            foreach ($strings as $string) {

                if (preg_match($pattern, $string))
                    echo "The string '$string' matches the pattern.<br>";
                else
                    echo "The string '$string' does not match the pattern.<br>";
            }
        ?>
    </body>
</html>