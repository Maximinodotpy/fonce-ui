<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device th, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="style/style.css">
</head>
<body class="background-main">
    <div class="container-medium">
        <div class="p-1 background-secondary">
            <h1>Fonce UI</h1>
        </div>
        <div class="flex child-p-1">
            <div class="background-secondary width-1-6 appear-at-medium">
            <h6 class="mb-1">Components</h6>
                <ul>
                    <?php
    
    
                    $dir = scandir('style/components');
    
                    foreach ($dir as $key => $value) {
                        $name = ucfirst(explode('.', $value)[0]);
    
                        echo '<li><a href="test.php?component=' . $value . '">' . $name . '</a></li>';
                    }
    
                    ?>
                </ul>
                <h6 class="mb-1 mt-2">Document</h6>
                <ul>
                    <li><a href="">Usage</a></li>
                    <li><a href="">Classes</a></li>
                    <li><a href="#fsc">Full SASS Code</a></li>
                </ul>
            </div>
            <div class="background-highlight flex-expand">
            <?php
    
    
    if (isset($_GET['component'])) {
        $name = ucfirst(explode('.', $_GET['component'])[0]);

        echo '<h1 class="mb-1">' . $name . '</h1>';

        /* Open File */
        $path = 'style/components/' . $_GET['component'];

        $myfile = fopen($path, "r") or die("Unable to open file!");
        $content = fread($myfile, filesize($path));
        fclose($myfile);

/*         $printable = ['usage'];
        $infos = [];

        foreach ($printable as $key => $value) {
            preg_match('/' . $value . ':(.*)\b/', $content, $re);

            $infos[$value] = $re[1];
        } */

/*         echo '<h2 class="mb-1">Usage</h2>';
        echo '<span>'.$infos['usage'].'</span>'; */

/*         'nodemon -x sass style/style.sass style/style.css'; */

        /* Full SASS Code */
        echo '<h2 class="mb-1 mt-2" id="fsc">Full SASS Code</h2>';
        echo '<div class="card p-1 code">' . $content . '</div>';
    } else {
        echo '<h1>Fonce UI</h1>';
    }?>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corporis, velit architecto. Fugiat sed, facilis harum, modi dolorem sapiente officia quis minima nihil quae quia perferendis? Porro, amet voluptate. Quos, expedita.</p>
            </div>
        </div>
    </div>
    
</body>
</html>