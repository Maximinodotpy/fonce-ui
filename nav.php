
    
    
        <?php


        $dir = scandir('style/components');

        $groups = array(
            ['Components', 'c'],
            ['Layout', 'l'],
            ['Utilities', 'u'],
            ['Settings', 's'],
        );

        foreach ($groups as $_ => $group) {
            echo '<h6 class="mb-0-5 mt-1">'.$group[0].'</h6>';

            echo '<ul class="child-mb-0-2">';
            foreach ($dir as $key => $value) {
    
                if (substr($value, 0, 1) == $group[1]) {
                    $name = ucfirst(explode('.', explode('-', $value)[1])[0]);
        
                    echo '<li><a href="index.php?c=' . $value . '">' . $name . '</a></li>';
                }
            }
            echo '</ul>';
        }


        ?>

  <!--   <h6 class="mb-0-5 mt-1">Document</h6>
    <ul class="child-mb-0-2">
        <li><a href="">Usage</a></li>
        <li><a href="">Classes</a></li>
        <li><a href="#fsc">SASS Code</a></li>
    </ul> -->
    <h6 class="mb-0-5 mt-2">Other</h6>
    <ul class="child-mb-0-2">
        <li><a target="_blank" href="https://github.com/Maximinodotpy/fonce-ui">GitHub</a></li>
    </ul>
