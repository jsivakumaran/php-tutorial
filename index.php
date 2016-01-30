<!DOCTYPE html>
   <html>
    <head>
        <title>PHP</title>
    </head>
    <body>
        <?php

        echo "Testing";

        for ($x = 1; $x <= 10; $x++) {
            echo "{$x}";

            if($x != 10) {
                echo ", ";
            }

        }

        ?>
     </body>

</html>