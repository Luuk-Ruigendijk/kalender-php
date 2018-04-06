<!DOCTYPE html>

<html>
    <head>
        <title>Verjaardagskalender</title>
        <link href="main.css" rel="stylesheet" type="text/css">
    </head>
    
    <body>
        <?php 
        $lastMonth = 0;
        $lastDay = 0;
            foreach ($birthdays as $birthday) {
                if($lastMonth != $birthday['month']) {
                    echo "<h1>" . date('F', mktime(0, 0, 0, $birthday['month'], 1)) . "</h1>";
                    $lastMonth = $birthday['month'];
                
                }
                if($lastDay != $birthday['day']){
                echo "<h2>". $birthday["day"] ."</h2>";
                $lastDay = $birthday['day'];
            }
                echo "<p>";
                echo "<a href=edit/". $birthday["id"] .">";
                echo $birthday["person"]."(".$birthday["year"] .")</a>";
                echo "<a href=delete/".$birthday["id"] .">x</a>";
                }
        ?>
<p><a href="<?= URL ?>birthday/create">+ Toevoegen</a></p>

</body>
</html>