---
title: Go Template Shortcode
---

{{< gotmpl
    src="widget/main.gotmpl"
    navigationTitle="Some screen"
    items="Item 1|Item 2|Item 3"
>}}

{{< gotmpl
    src="widget/main.gotmpl"
    navigationTitle="🍔 Recipes"
    items="🍗 KFC Chicken|🍣 Sushi rolls"
>}}

{{< gotmpl
    src="recipes.gotmpl"
    recipes="recipes.json"
>}}
