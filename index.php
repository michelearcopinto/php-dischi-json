<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dischi JSON</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        header {
            background-color: #06131F;
        }

        main {
            background-color: #1D2D3C;
            height: calc(100vh - 96px);
        }

        .card-box {
            background-color: #112030;
        }
    </style>
</head>

<body>
    <div id="app">
        <header>
            <div class="container p-3">
                <figure>
                    <img class="d-block" src="./assets/img/spotify.svg" alt="header_logo">
                </figure>
            </div>
        </header>

        <main>
            <div class="container">
                <div class="row g-3">
                    <div v-for="(disc, index) in discsArray" key="index" class="col-4">
                        <div class="card-box text-white text-center rounded-3 py-4 px-5 h-100">
                            <figure class="mb-0">
                                <img class="d-block w-100" :src="disc.poster" :alt="`poster-disc-${index}`">
                            </figure>
                            <div class="d-flex flex-column gap-3 py-3">
                                <h4 class="mb-0">{{disc.title}}</h4>
                                <span>{{disc.author}}</span>
                                <h5 class="mb-0">{{disc.year}}</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <script src="https://unpkg.com/vue@3"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="./js/main.js"></script>
</body>

</html>