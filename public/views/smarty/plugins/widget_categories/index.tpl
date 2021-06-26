<ul>
    {foreach from=$categories item=category}
        <li>
            <a href="{url route='catalog' query="id=`$category.id`"}">{$category.title}</a>
            {if isset($category.children)}
                {include file="plugins/widget_categories/index.tpl" categories=$category.children}
            {/if}
        </li>
    {/foreach}
</ul>