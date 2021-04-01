<html lang="fr">
    <head>
        <link href="table13.css" rel="stylesheet" type="text/css"/>
        <title>Table de 13</title>
    </head>
    <body>
        <table>
            <thead>
                <tr>
                    <th colspan="6" style="background-color: lightpink;"> <h1>Table de multiplication</h1> </th>
                </tr>
            </thead>
            <tbody>
                
                <tr>
                    <?php
                    
                    for ($i = 1,$m = 1; $i < 7; $i++) {
                        ?>
                
                        <td>
                            <h3><?php echo 'Table de ', $i, '</br>', "\n";?></h3>
                            <?php
                            for ($j = 0; $j < 13; $j++) {

                                $m = $i * $j;
                                echo $i, ' x ', $j, ' = ', $m, '</br>', "\n";
                            }
                            ?>
                            </td>

                        <?php } ?>
                </tr>
                <tr>
                    <?php
                    
                    for ($i = 7,$m = 1; $i < 13; $i++) {
                        ?>
                
                        <td>
                            <h3><?php echo 'Table de ', $i, '</br>', "\n";?></h3>
                            <?php
                            for ($j = 0; $j < 13; $j++) {

                                $m = $i * $j;
                                echo $i, ' x ', $j, ' = ', $m, '</br>', "\n";
                            }
                            ?>
                            </td>

                        <?php } ?>
                </tr>
            </tbody>
        </table>
    </body>
