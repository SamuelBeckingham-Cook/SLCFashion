<div class="collection" data-cid=<?php echo $collection['ID'] ?>>

    <h2 class="collection-header"><?php echo $collection['Name'] ?></h2>
    <hr>
    <div class="collectionItems">
        <div class="draggable">
        <?php

        $items = getCollectionItems( $db, $collection['ID']  );

        foreach ($items as $item) {
            $src = createImage($item['ImageURL']);
            echo "<img data-cid=\"" . $collection['ID'] . "\" data-src=\"" . $src . "\"></img>";
        }

        ?>
        </div>
    </div>

</div>



