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

        .card-box:hover {
            cursor: pointer;
            filter: brightness(50%);
        }

        #selected-disc {
            background-color: #112030F0;
            top: 15px;
            left: 20px;
            right: 20px;
            bottom: 15px;
        }

        #selected-disc img {
            width: 450px;
        }

        #close-button i {
            border: 1px solid white;
            padding-block: 4px;
            padding-inline: 6px;
        }

        #close-button i:hover {
            cursor: pointer;
            border-color: grey;
            color: grey;
        }
    </style>
</head>

<body>
    <div id="app">
        <div class="position-relative">
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
                            <div class="card-box text-white text-center rounded-3 py-4 px-5 h-100" @click="push(index); overlayOpen = !overlayOpen">
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
            <div id="selected-disc" class="position-absolute text-white rounded-3 position-relative" :class="!overlayOpen ? 'd-none' : '' ">
                <div id="close-button" class="position-absolute top-0 end-0 p-3">
                    <i class="fas fa-xmark rounded-1" @click="overlayOpen = !overlayOpen"></i>
                </div>
                <div class="text-white position-absolute top-50 start-50 translate-middle d-flex flex-column align-items-center w-50">
                    <figure class="mb-0">
                        <img :src="discsArray[pickedDisc].poster" :alt="`poster-disc-${pickedDisc}`">
                    </figure>
                    <div class="d-flex flex-column align-items-center gap-3 py-3">
                        <h4 class="mb-0">{{discsArray[pickedDisc].title}}</h4>
                        <span>{{discsArray[pickedDisc].author}}</span>
                        <h5 class="mb-0">{{discsArray[pickedDisc].year}}</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://unpkg.com/vue@3"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="./js/main.js"></script>
</body>

</html>