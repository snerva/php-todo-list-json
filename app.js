const { createApp } = Vue
createApp({
    data() {
        return {
            tasks: [],
            api_url: 'Controls/server.php',
            newTask: ''
        }
    },
    methods: {
        readTasksList(url) {
            axios
                .get(url)
                .then(response => {
                    console.log(response);
                    this.tasks = response.data
                })
        },
        addTask() {
            const data = {
                newTask: this.newTask,
            };
            axios
                .post('Controls/addTask.php', data, {
                    headers: { "Content-Type": "multipart/form-data" }
                })
                .then(response => {
                    //console.log(response);
                    this.tasks = response.data;
                    this.newTask = '';
                })
        },
        changeStatus(index) {
            const data = {
                'taskIndex': index,
                'done': true
            };
            axios
                .post('Controls/changeStatus.php', data, {
                    headers: { "Content-Type": "multipart/form-data" }
                })
                .then(response => {
                    //console.log(response);
                    this.tasks = response.data;
                })
        },
        deleteTaskDone(index) {
            const data = {
                'taskIndex': index
            };
            axios
                .post('Controls/deleteTaskDone.php', data, {
                    headers: { "Content-Type": "multipart/form-data" }
                })
                .then(response => {
                    //console.log(response);
                    this.tasks = response.data;
                })
        }
    },
    mounted() {
        this.readTasksList(this.api_url);
    }
}).mount('#app')