<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{$smarty.capture.title}</title>
    <link rel="stylesheet" href="/css/site.css">
</head>
<body>

<div class="main-container">
    {include file="layouts/inc/header.tpl"}

    {include file="layouts/inc/sidebar.tpl"}

    <div id="content">
        {$smarty.capture.content}
    </div>

    {include file="layouts/inc/footer.tpl"}

</div>

</body>
</html>