<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Todo List Json</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">

</head>

<body>

    <div id="app">
        <h1 class="text-center p-3 mb-3">Todo List</h1>
        <div class="container">
            <div class="tasklist mx-5 p-3">
                <ul class="list-group list-group-flush w-50 p-3 bg-white rounded-2 m-auto">
                    <li @click="changeStatus(task)" class="list-group-item" v-for="task in tasks" :class="{strike_out: task.done}">{{task.text}}</li>
                </ul>
            </div>

            <div class="addTask p-4">
                <form action="index.php" method="post" class="input-group mb-3 w-50 m-auto">
                    <input type="text" class="form-control" placeholder="New Task..." name="newTask" id="newTask" v-model="newTask" @keyup.enter="addTask">
                    <button type="button" class="btn btn-primary" @click="addTask">Add
                        Task</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="./app.js"></script>
</body>

</html>