<?php

function markDownToHtml($md) {
    $parsed = $md;

    $repl = [
        ['/\n######\s(.*)\n/', '<h6>$1</h6>'],
        ['/\n#####\s(.*)\n/', '<h5>$1</h5>'],
        ['/\n####\s(.*)\n/', '<h4>$1</h4>'],
        ['/\n###\s(.*?)\n/', '<h3>$1</h3>'],
        ['/\n##\s(.*)\n/', '<h2>$1</h2>'],
        ['/\n#\s(.*)\n/', '<h1>$1</h1>'],
        ['/--/', '<hr/>'],
        ['/\*\*(\S*?)\*\*/', '<b>$1</b>'],
        ['/\*(\S*?)\*/', '<i>$1</i>'],
    ];

    foreach ($repl as $key => $value) {
        $parsed = preg_replace(
            $value[0],
            $value[1],
            $parsed
        );
    }

    return $parsed;
}

echo markDownToHtml('

# fjasdlf

## fasd

### falskdf

#### flkasjd

--

fasdf

**fasd**
*fasd*
***fasd***

');