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
            //this.list = res.
            console.log(res.data.text[0])
            }) 
        }
    },
    mounted() {
        this.fetchTodoList()
    },
}).mount('#app')