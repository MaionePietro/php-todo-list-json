const { createApp } = Vue;

createApp({
    data() {
        return {
            list: []
        }
    },
    methods: {
        fetchTodoList(){
            axios.get('./server.php').then((res) =>{
                console.log(res.data)
                this.list = res.data
            }) 
        }
    },
    mounted() {
        this.fetchTodoList()
    },
}).mount('#app')