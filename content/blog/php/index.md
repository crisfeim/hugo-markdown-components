---
title: PHP
---

<iphone-screen class="margin-x-auto default-margin-bottom">
<input
type="radio"
name="detail-688facaaeaa3e"
id="none-688facaaeaa3e"
checked>

<input type="radio" name="detail-688facaaeaa3e" id="item-1-688facaaeaa3e" hidden>
<input type="radio" name="detail-688facaaeaa3e" id="item-2-688facaaeaa3e" hidden>
<input type="radio" name="detail-688facaaeaa3e" id="item-3-688facaaeaa3e" hidden>

<style>

#item-1-688facaaeaa3e:checked ~ navigation-detail {
left: 0;
}

#item-1-688facaaeaa3e:checked ~ list {
left: -25%;
}

#item-1-688facaaeaa3e:checked ~ navigation-detail .content-1-688facaaeaa3e {
display: flex;
}

#item-2-688facaaeaa3e:checked ~ navigation-detail {
left: 0;
}

#item-2-688facaaeaa3e:checked ~ list {
left: -25%;
}

#item-2-688facaaeaa3e:checked ~ navigation-detail .content-2-688facaaeaa3e {
display: flex;
}

#item-3-688facaaeaa3e:checked ~ navigation-detail {
left: 0;
}

#item-3-688facaaeaa3e:checked ~ list {
left: -25%;
}

#item-3-688facaaeaa3e:checked ~ navigation-detail .content-3-688facaaeaa3e {
display: flex;
}
</style>
<list>
<navigation-title>title</navigation-title>

<ul>
<label for="item-1-688facaaeaa3e"><li>item 1</li></label>
<label for="item-2-688facaaeaa3e"><li>item 2</li></label>
<label for="item-3-688facaaeaa3e"><li>item 3</li></label>
</ul>
</list>

<style>
*, *::after, *::before {
box-sizing: border-box;

iphone-screen {
list {
padding: 16px;
background: #efeef5;
position: absolute;
top: 0;
right: 0;
bottom: 0;
left: 0;
transition: left 0.5s ease;
color: black;

navigation-title {
font-weight: bold;
font-size: 24px;
margin-bottom: 12px; /*@todo*/
}

ul {
list-style: none;
background: white;
border-radius: 8px;

label {
position: relative;
display: block;

li {
position: relative;
padding: 8px 16px;
transition: background 0.2s ease;
cursor: pointer;
z-index: 1;
}

li::before {
transition: background 0.2s ease;
}

li:hover::before {
content: '';
position: absolute;
left: 0;
right: 0;
top: 0;
bottom: -1px;
background: #D2D1D7;
border-radius: inherit;
z-index: -1;
}
}

label:not(:first-child)::after {
content: '';
position: absolute;
left: 16px;
right: 0;
height: 0.5px;
top: 0;
background-color: #D2D1D7;
}

label:first-child > li {
border-top-left-radius: 8px;
border-top-right-radius: 8px;
}

label:last-child > li {
border-bottom-left-radius: 8px;
border-bottom-right-radius: 8px;
}
}
}
}

iphone-screen list,
iphone-screen list navigation-title {
display: block;
}

iphone-screen list.shown {
left: -25%;
}
</style>
<navigation-detail>
<navigation-bar>

<label class="navigation-button" for="none-688facaaeaa3e">
<chevron></chevron>Back
</label>
<heading>
<div class="content-1-688facaaeaa3e">Item 1</div>
<div class="content-2-688facaaeaa3e">Item 2</div>
<div class="content-3-688facaaeaa3e">Item 3</div>

</heading>
</navigation-bar>
<detail-content>
<div class="content-0-688facaaeaa3e">Item 1</div>
<div class="content-1-688facaaeaa3e">Item 2</div>
<div class="content-2-688facaaeaa3e">Item 3</div>
</detail-content>
</navigation-detail>

<style>
iphone-screen navigation-detail detail-content,
iphone-screen navigation-detail {
    display: block;
}

iphone-screen navigation-detail {
    position: absolute;
    top: 0;
    bottom: 0;
    right: 0;
    left: 100%;
    background: white;
    transition: left 0.5s ease;
    z-index: 2;

    display: flex;
    flex-direction: column;

    heading > div,
    detail-content > div {
      display: none;
    }

    .content {
      flex: 1;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    navigation-bar label.navigation-button chevron:after {
      content: ' ';
      display: inline-block;
      border-bottom: 2px solid #007AFF;
      border-right: 2px solid #007AFF;
      height: 10px;
      width: 10px;
      transform: rotate(-225deg);
    }

    navigation-bar label.navigation-button {
        color: #007AFF;
        cursor: pointer;
    }

    navigation-bar heading {
      position: absolute;
      left: 50%;
      transform: translateX(-50%);
      font-weight: 600;
      display: block;
    }

    navigation-bar {
      position: relative;
      padding: 8px 16px;
      display: flex;
      align-items: center;
    }
}

iphone-screen navigation-detail.shown {
    left: 0;
}
</style>
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
