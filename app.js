const { createApp } = Vue
createApp({
    data() {
        return {
            tasks: [],
            api_url: 'server.php',
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
                .post(this.api_url, data, {
                    headers: { "Content-Type": "multipart/form-data" }
                })
                .then(response => {
                    //console.log(response);
                    this.tasks = response.data;
                })
        },
        changeStatus(task) {
            if (task.done === true) {
                task.done = false
            } else {
                task.done = true
            }
        }
    },
    mounted() {
        this.readTasksList(this.api_url);
    }
}).mount('#app')