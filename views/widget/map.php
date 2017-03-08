<?php

$headerText = $location['header'];
$width = $location['width'];
$height = $location['height'];

$loc = $location['location'];
$satellite = key_exists('satellite', $location) ? $location['satellite'] : false ? 'k' : '';
$zoom = $location['zoom'];
$color = key_exists('headerColor', $location) ? $location['headerColor'] : '#000';

?>

<div id="mapouter">
    <p style="text-align: center; width: 100%; color: <?= $color ?>; line-height: 60px; font-size: 50px; letter-spacing: 1px;">
        <?= $headerText ?>
    </p>
    <div id="gmap_canvas" style="margin-bottom: -3.5px">
        <iframe style="width: <?= $width ?>; height: <?= $height ?>"
                frameborder="0" scrolling="no" marginheight="0"
                src="https://maps.google.com/maps?q=<?= $loc ?>&t=<?= $satellite ?>&z=<?= $zoom ?>&ie=UTF8&iwloc=&output=embed" marginwidth="0"></iframe>
    </div>
</div>
