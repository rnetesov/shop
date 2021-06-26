{capture name="title"} {$product.title} {/capture}

{capture name="content"}
    <div class="product-item">
        <h2>{$product.title}</h2>
        <img class="img" src="{$product.img}" alt="">
        <p class="price">
            {if !empty($product.old_price)}
                <s>{$product.old_price} р.</s>
                &nbsp;
            {/if}
            {$product.price} р.
        </p>
        {if !$inCart}
            <a href="{url route="cart/add" query="id=`$product.id`" }" class="btn-cart to-cart">В корзину</a>
        {else}
            <a href="#" class="btn-cart in-cart">Добавлен</a>
        {/if}

        <h2 class="title">Описание</h2>
        <p class="desc">{$product.description}</p>
    </div>
{/capture}

{include file="layouts/main.tpl"}

{literal}
    <script>
        let inCartElem = document.querySelector('.product-item .to-cart');
        if (inCartElem) {
            inCartElem.onclick = async function (e) {
                e.preventDefault();

                let response = await fetch(this.href);
                let json = await response.json();

                if (json.success) {
                    this.classList.remove('to-cart');
                    this.classList.add('in-cart');

                    let widgetResponse = await fetch('/cart/ajax-cart-widget-indicator')
                    let widgetHtml = await widgetResponse.text();

                    let cartWidget = document.querySelector('#header .cart-widget');
                    cartWidget.outerHTML = widgetHtml;
                    this.text = 'Добавлен';

                } else {
                    if (json.error) {
                        console.log('Произошла ошибка при добавлении товара в корзину');
                    }
                }
            }
        }
    </script>
{/literal}