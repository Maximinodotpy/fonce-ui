<h1>Fonce UI</h1>

<p>Darkmode UI classes</p>

<h2 class="mt-1 mb-0-5">Parts</h2>
<div class="grid-2-normal">
    <?php

    foreach ($groups as $_ => $group) {
        echo '
                        <div class="card p-1">
                            <h3>' . $group[0] . '</h3>
                            <p>' . $group[2] . '</p>
                        </div>';
    }

    ?>
</div>

<div>
    <h2 class="mb-0-5 mt-1">Working On it ...</h2>
    <pre class="p-1 card">nodemon -x sass style/style.sass style/style.css</pre>
</div>