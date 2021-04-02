<!DOCTYPE html>
<html lang="fr">
    <head>
        <link href="table13.css" rel="stylesheet" type="text/css"/>
        <title>Table de 13</title>
    </head>
    <body>
        <table>
            <thead>
                <tr>
                    <th colspan="13"><p>Table de 13</p></th>
                </tr>
            </thead>
            <tbody>
                <?php
                $m = 1;
                for ($i = 1; $i < 14; $i++) {
                    ?>
                    <tr>
                        <?php
                        for ($j = 1; $j < 14; $j++) {
                            ?>
                            <td>
                                <?php
                                $m = $i * $j;
                                echo $m;
                                ?>
                            </td>
                        <?php } ?> 
                    </tr>
                <?php } ?> 
            </tbody>
        </table>
    </body>


