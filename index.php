<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dischi json</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div id="app">
        <div class="vh-100 d-flex align-items-center justify-content-between">
            <div class="w-50 mx-auto">
                <a href="" data-bs-toggle="modal" data-bs-target="#staticBackdrop"
                    class="d-flex justify-content-around flex-wrap  gap-3">
                    <div class="card col-3" v-for="(elem,index) in array" :key="index" @click="indiceCard = index">
                        <img :src="elem.poster" class="card-img-top" alt="copertina">
                        <div class="card-body text-center">
                            <h3 class="card-title">{{elem.title}}</h3>
                            <p class="card-text">{{elem.genre}}</p>
                            <h5 class="card-title">{{elem.year}}</h5>
                        </div>
                        <div v-show="index == indiceCard" class="modal fade" id="staticBackdrop"
                            data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                            aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="card col-3">
                                            <img :src="elem.poster" class="card-img-top" alt="copertina">
                                            <div class="card-body text-center">
                                                <h3 class="card-title">{{elem.title}}</h3>
                                                <p class="card-text">{{elem.genre}}</p>
                                                <h5 class="card-title">{{elem.year}}</h5>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>




    </div>




    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <script src="main.js"></script>
</body>

</html>