const { createApp } = Vue
createApp({
    data() {
        return {
            tasks: [],
            api_url: 'server.php',
            newTask: "",
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
                .post(server.php, data, {
                    headers: { "Content-Type": "multipart/form-data" }
                })
                .then(response => {
                    console.log(response);
                    this.tasks = response.data;
                })
        }
    },
    mounted() {
        this.readTasksList(this.api_url);
    }
}).mount('#app')