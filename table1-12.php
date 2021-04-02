<!DOCTYPE html>
<html lang="fr">
    <head>
        <link href="table1-12.css" rel="stylesheet" type="text/css"/>
        <title>Table de multiplication de 1 à 12</title>
    </head>
    <body>
        <table>
            <thead>
                <tr>
                    <th colspan="6" style="background-color: lightpink;"> <p>Table de multiplicationde 1 à 12</p> </th>
                </tr>
            </thead>
            <tbody>
                
                <tr>
                    <?php
                    
                    for ($i = 1,$m = 1; $i < 7; $i++) {
                        ?>
                
                        <td>
                            <h3><?php echo 'Table de ', $i, '<br>', "\n";?></h3>
                            <?php
                            for ($j = 0; $j < 13; $j++) {

                                $m = $i * $j;
                                echo $i, ' x ', $j, ' = ', $m, '<br>', "\n";
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
                            <h3><?php echo 'Table de ', $i, '<br>', "\n";?></h3>
                            <?php
                            for ($j = 0; $j < 13; $j++) {

                                $m = $i * $j;
                                echo $i, ' x ', $j, ' = ', $m, '<br>', "\n";
                            }
                            ?>
                            </td>

                        <?php } ?>
                </tr>
            </tbody>
        </table>
    </body>
