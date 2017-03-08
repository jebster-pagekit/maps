<?php

$headerText = key_exists('header', $location) ? $location['header'] : '';
$width = key_exists('width', $location) ? $location['width'] : '100%';
$height = key_exists('height', $location) ? $location['height'] : '320px';

$loc = $location['location'];
$satellite = key_exists('satellite', $location) ? $location['satellite'] : false ? 'k' : '';
$zoom = key_exists('zoom', $location) ? $location['zoom'] : 14;
$color = key_exists('headerColor', $location) ? $location['headerColor'] : '#000';
$language = key_exists('language', $location) ? $location['language'] : 'da';
$scroll = key_exists('scroll', $location) ? $location['scroll'] : true;

?>

<div id="mapouter">
    <p style="text-align: center; width: 100%; color: <?= $color ?>; margin: 0; line-height: 60px; font-size: 50px; letter-spacing: 1px;">
        <?= $headerText ?>
    </p>
    <div id="gmap_canvas" style="margin-bottom: -3.5px">
        <iframe style="width: <?= $width ?>; height: <?= $height ?>; <?= $scroll ? '' : 'pointer-events:none;' ?>"
                frameborder="0" scrolling="no" marginheight="0"
                src="https://maps.google.com/maps?q=<?= $loc ?>&t=<?= $satellite ?>&z=<?= $zoom ?>&ie=UTF8&iwloc=&output=embed" marginwidth="0"></iframe>
    </div>
</div>
