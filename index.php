<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="app.css">
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <title>PHP Dischi JSON</title>
</head>

<body>

    <div id="app">

        <header class="page-header container-fluid">
            <img class="logo" src="./img/spotify.png" alt="Logo">
        </header>


        <main class="d-flex flex-wrap justify-content-between container">
            <div v-for="disco in dischi" :key="disco.title">
                <div class="card formatted-card" style="width: 18rem;">
                    <img :src="disco.poster" class="card-img-top">
                    <div class="card-body">
                        <strong>
                            <p class="card-title text-center">{{ disco.title }}</p>
                        </strong>
                        <p class="card-text text-center">{{ disco.author }}</p>
                        <strong>
                            <p class="card-text text-center">{{ disco.year }}</p>
                        </strong>
                    </div>
                </div>
            </div>
        </main>
    </div>
    </div>

    <script src="app.js"></script>
</body>

</html>