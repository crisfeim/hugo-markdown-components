<?php $id = uniqid(); ?>
<iphone-screen class="margin-x-auto default-margin-bottom">
<?php include 'state.php';?>
<?php include 'list.php';?>
<?php include 'detail.php';?>
</iphone-screen>

<style>
iphone-screen {
display: block;
}
iphone-screen {
position: relative;
width: 300px;
aspect-ratio: 1080 / 2340;
overflow: hidden;
border-radius: 24px;
border: 1px solid lightgray;
}
iphone-screen * {
padding: 0;
margin: 0;
}
iphone-screen > * {
width: 100%;
height: 100%;
cursor: default;
-webkit-touch-callout: none; /* iOS Safari */
    -webkit-user-select: none; /* Safari */
    -khtml-user-select: none; /* Konqueror HTML */
        -moz-user-select: none; /* Old versions of Firefox */
        -ms-user-select: none; /* Internet Explorer/Edge */
            user-select: none; /**/
}
</style>
