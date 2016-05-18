<div class="collection" data-cid=<?php echo $collection['ID'] ?>>

    <p><?php echo $collection['Name'] ?></p>

    <div class="collectionItems">
        <?php

        $items = getCollectionItems( $db, $collection['ID']  );

        foreach ($items as $item) {
            $src = createImage($item['ImageURL']);
            echo "<img data-cid=\"" . $collection['ID'] . "\" data-src=\"" . $src . "\"></img>";
        }

        ?>
    </div>

</div>
