<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="app.css">
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <title>PHP Dischi JSON</title>
</head>

<body>
    <div class="container">
        <div id="app">
            <div v-for="disco in dischi" :key="disco.title">
                <p><strong>{{ disco.title }}</strong> - {{ disco.author }}, {{ disco.genre }}, {{ disco.year }}</p>
            </div>
        </div>
    </div>
    </div>
    <script src="app.js"></script>
</body>

</html>