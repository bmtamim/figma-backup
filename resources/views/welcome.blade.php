<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="https://www.figma.com/oauth?client_id={{env('FIGMA_CLIENT_ID')}}&redirect_uri={{env('FIGMA_CALLBACK_URL')}}&scope=file_read&state=state1&response_type=code">Authorize Figma Account</a>
</body>
</html>
