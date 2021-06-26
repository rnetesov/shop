<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test Api</title>
    {literal}
        <style>
            table th {
                text-align: right;
            }
        </style>
    {/literal}
</head>
<body>
<h1>Тест API сервера</h1>
<form action="#" method="get" id="testApi">
    <table>
        <tr>
            <th>Path</th>
            <td><input type="text" name="path"></td>
        </tr>
        <tr>
            <th>Body Params Json</th>
            <td><input type="text" name="params"></td>
        </tr>
        <tr>
            <th>Methods</th>
            <td>
                <select name="method" id="">
                    <option value="GET">GET</option>
                    <option value="POST">POST</option>
                    <option value="PUT">PUT</option>
                    <option value="PATH">PATCH</option>
                    <option value="DELETE">DELETE</option>
                </select>
            </td>
        </tr>
        <tr>
            <th>Response Data</th>
            <td>
                <textarea readonly name="response" id="" cols="60" rows="30"></textarea>
            </td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="send"></td>
        </tr>
    </table>
</form>
{literal}
    <script>
        function isValidJsonString(jsonString) {
            try {
                JSON.parse(jsonString);
                return true;
            } catch (e) {
                return false;
            }
        }

        let formApi = document.getElementById('testApi');

        formApi.addEventListener('submit', async function (e) {
            e.preventDefault();
            let form = e.target;
            let pathElem = form.elements.path.value;
            let paramsElem = form.elements.params.value;
            let methodElem = form.elements.method.value;
            let responseElem = form.elements.response;

            if (pathElem.length) {
                let response = null;

                switch (methodElem) {
                    case 'GET': {
                        response = await fetch(pathElem, {
                            method: methodElem
                        });
                        break;
                    }
                    case 'POST':
                    case 'PUT':
                    case 'PATCH':
                    case 'DELETE': {
                        let body = isValidJsonString(paramsElem) ? paramsElem : '';
                        response = await fetch(pathElem, {
                            method: methodElem,
                            body: body
                        });
                        break;
                    }
                }

                if (response !== null) {
                    responseElem.value = await response.text();
                }
            }
        });

    </script>
{/literal}
</body>
</html>