{capture name="title"}Магазин цифровой техники{/capture}

{capture name="content"}
    <h2 style="margin: 0">Главные категории</h2>

    {include file="inc/category-list.tpl" categories=$categories}

    <div class="clear"></div>

    <div class="last-added-items">
        <h2 class="head">Последние поступления</h2>

        {foreach from=$products item=product}
            <a class="item" href="{url route="product" query="id=`$product.id`" }">
                <div class="item">
                    <h2 class="title">{$product.title}</h2>
                    <img class="img" src="{$product.img}"
                         alt="">
                    <p class="price">{$product.price} &#8381;</p>
                </div>
            </a>
        {/foreach}
    </div>
{/capture}

{include file="layouts/main.tpl"}