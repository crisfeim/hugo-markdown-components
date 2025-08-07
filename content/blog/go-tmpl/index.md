---
title: Go Template Shortcode
---

{{< go-template
    src="widget/main.gotmpl"
    navigationTitle="Some screen"
    items="Item 1|Item 2|Item 3"
>}}

{{< go-template
    src="widget/main.gotmpl"
    navigationTitle="🍔 Recipes"
    items="🍗 KFC Chicken|🍣 Sushi rolls"
>}}

{{< go-template
    src="recipes.gotmpl"
    recipes="recipes.json"
>}}
