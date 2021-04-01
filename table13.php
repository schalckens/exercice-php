
<html lang="fr">
    <head>
        <link href="table13.css" rel="stylesheet" type="text/css"/>
        <title>Table de 13</title>
    </head>
    <body>
        <table>
            <thead>
            <th colspan="13"> Table de 13</th>
        </thead>
        <tbody>
            <?php
            $m = 1;
            for ($i = 1; $i < 14; $i++) {
                ?>
                <tr>
                    <?php
                    for ($j = 1; $j < 14; $j++) {
                        if ($j === 1 or $i===1) {
                            ?>
                            <th>
                                <?php
                                $m = $i * $j;
                                echo $m;
                                ?>
                            </th>
                        <?php
                        } else {
                            ?>
                            <td>
                                <?php
                                $m = $i * $j;
                                echo $m;
                                ?>
                            </td>
                        <?php } ?>
                    <?php } ?> 
                </tr>
            <?php } ?> 
        </tbody>
    </table>
</body>


