<input
type="radio"
name="detail-<?php echo $id; ?>"
id="none-<?php echo $id; ?>"
checked>

<?php
$items = explode('|', 'Item 1|Item 2|Item 3');
foreach ($items as $index => $item): ?>
<input type="radio" name="detail-<?php echo $id; ?>" id="item-<?php echo $index + 1; ?>-<?php echo $id; ?>" hidden>
<?php endforeach; ?>

<style>
<?php
$items = explode('|', 'Item 1|Item 2|Item 3');
foreach ($items as $index => $item): ?>

#item-<?php echo $index + 1; ?>-<?php echo $id; ?>:checked ~ navigation-detail {
left: 0;
}

#item-<?php echo $index + 1; ?>-<?php echo $id; ?>:checked ~ list {
left: -25%;
}

#item-<?php echo $index + 1; ?>-<?php echo $id; ?>:checked ~ navigation-detail .content-<?php echo $index + 1; ?>-<?php echo $id; ?> {
display: flex;
}
<?php endforeach; ?>
</style>
