<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device th, initial-scale=1.0">
    <title>Fonce UI</title>

    <link rel="stylesheet" href="style/style.css">
</head>

<body class="background-main">
    <div class="container-large">
        <div class="p-1 background-tertiary sticky-top flex flex-justify-between flex-align-center">
            <h2>Fonce UI</h2>
            <div class="menu-right">
                <button class="hide-at-medium">Menu</button>
                <div class="background-main panel p-1">
                    <?php include('nav.php') ?>
                </div>
            </div>
        </div>
        <div class="flex align-items-stretch">
            <div class="width-1-6 appear-at-medium background-secondary p-1">
                <?php include('nav.php') ?>
            </div>

            <div class="background-highlight flex-expand p-1">
                <?php


                if (isset($_GET['c'])) {
                    $name = ucfirst(explode('.', $_GET['c'])[0]);

                    echo '<h1 class="mb-1">' . $name . '</h1>';

                    /* Open File */
                    $path = 'style/components/' . $_GET['c'];

                    $myfile = fopen($path, "r") or die("Unable to open file!");
                    $content = fread($myfile, filesize($path));
                    fclose($myfile);

                    /* $printable = ['usage'];
                    $infos = array();

                    foreach ($printable as $key => $value) {
                        preg_match('/' . $value . ':(.*)\b/', $content, $re);

                        try {
                            if (isset($re[1])) {
                                $infos[$value] = $re[1];
                            }
                        } catch (Exception $e) {
                        }
                    }


                    echo '<h2 class="mb-1">About</h2>';

                    if (isset($infos['usage'])) {
                        echo '<span>' . $infos['usage'] . '</span>';
                    } else {
                        echo '<span>There Are no Informations available about this component.</span>';
                    } */


                    if (file_exists('docs/'.$_GET['c'].'.php') == true) {
                        include('docs/'.$_GET['c'].'.php');
                    }
                    


                    /* Full SASS Code */
                    echo '<h2 class="mb-1 mt-2" id="fsc">SASS Code</h2>';
                    echo '<div class="card p-1 code">' . $content . '</div>';
                } else {
                    include('pages/start.php');
                } ?>
                
            </div>
        </div>
        <div class="p-1 background-tertiary child-mb-1">
            <h3>How to Get Fonce UI</h3>
            <div class="card p-0-5">
                <h4 class="mb-0-5">CDN</h4>
                <code>
                    &lt;link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/Maximinodotpy/fonce-ui@latest/style/style.css"&gt;
                </code>
            </div>
            <div class="card p-0-5">
                <h4 class="mb-0-5">Download</h4>
                <a href="style/style.css" class="text-green" download>style.css</a>
            </div>

        </div>
        <div class="text-center mt-2 pb-2">
            Made By <a href="https://maximmaeder.com/" target="_blank" class="text-green">Maxim Maeder</a>
        </div>
    </div>
            
    <script src="app.js"></script>
</body>

</html>