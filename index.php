<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP ToDo List JSON</title>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/c5d4023dee.js" crossorigin="anonymous"></script> 
    <link rel="stylesheet" href="style.css">
</head>
<body class="d-flex align-items-center vh-100">
    <div id="app" class="container container-custom">
        <h1 class="title text-center">Todo List</h1>
        <ul class="list-group">
            <li v-for="element in list" @click="" :class="text-decoration-line-through" class="list-group-item d-flex justify-content-between align-items-center">
                <span>{{element.text}}</span>
                <i class="fa-solid fa-trash icon"></i>
            </li>
            
        </ul>
        <div class="input-group input-group-lg mt-4 d-flex">
            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
            <button type="button" class="btn btn-outline-warning">Inserisci</button>
        </div>
    </div>
    <script src="./app.js"></script>
</body>
</html>