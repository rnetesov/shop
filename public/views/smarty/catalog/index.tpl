{capture name="title"}Категория {$title|mb_ucfirst}{/capture}

{capture name="content"}
    <h2 style="margin: 0">Категории</h2>
    {include file="inc/category-list.tpl" categories=$categories}
{/capture}

{include file="layouts/main.tpl"}