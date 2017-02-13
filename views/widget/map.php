<div id="mapouter">
    <p style="text-align: center; width: 100%; color: #C90808; line-height: 60px; font-size: 50px; letter-spacing: 1px;">
        <?= $location['header'] ?>
    </p>
    <div id="gmap_canvas" style="margin-bottom: -3.5px">
        <iframe style="width: <?= $location['width'] ?>; height: <?= $location['height'] ?>"
                frameborder="0" scrolling="no" marginheight="0"
                src="https://maps.google.com/maps?q=<?= $location['location'] ?>&t=<?= key_exists('satellite', $location) ? $location['satellite'] : false ? 'k' : '' ?>&z=<?= $location['zoom'] ?>&ie=UTF8&iwloc=&output=embed" marginwidth="0"></iframe>
    </div>
</div>
