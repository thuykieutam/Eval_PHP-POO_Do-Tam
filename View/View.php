<?php

class View{

public function displayHeader()
    { 
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <header>
            <h1>Supergame</h1>
        </header>
    <?php

return $this;
    }
    
public function displayFooter()
    {
    ?>
    <footer>
    </footer>
        </body>
        </html>
    <?php

        return $this;
    }
}



?>