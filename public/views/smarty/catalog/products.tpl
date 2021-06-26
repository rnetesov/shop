{capture name="title"}Категория {$title|mb_ucfirst}{/capture}

{capture name="content"}
    <h2 style="margin: 0">Товары</h2>
    {foreach from=$products item=product}
        <a class="item" href="{url route="product" query="id=`$product.id`" }">
            <div class="item">
                <h2 class="title">{$product.title}</h2>
                <img class="img" src="{$product.img}"
                     alt="">
                <p class="price">{$product.price} &#8381;</p>
            </div>
        </a>
    {foreachelse}
        <p>В данной категории товары пока отстутствуют!</p>
    {/foreach}
{/capture}

{include file="layouts/main.tpl"}