const { createApp } = Vue;

createApp({
    data() {
        return {
            lists: []
        };
    },
    methods: {
        getListsApi() {
            axios.get('server.php').
            then((response) => {
                this.lists = response.data;
            }); 
        }
    },
    mounted() {
        this.getListsApi();
    }
}).mount('#app');