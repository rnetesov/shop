{foreach from=$categories item=category}
    <a href="{url route="catalog" query="id=`$category.id`" }" class="category-item">
        <div class="category-item">
            {if (empty($category.img)) }
                {assign var="img" value="http://dummyimage.com/150"}
            {else}
                {assign var="img" value=$category.img}
            {/if}
            <img src="{$img}" alt="">
            <h2>{$category.title}</h2>
        </div>
    </a>
{/foreach}