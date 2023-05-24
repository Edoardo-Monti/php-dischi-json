const { createApp } = Vue

  createApp({
    data() {
      return {
        apiDischi: 'server.php',
        array: '',
        indiceCard: 0,
      }
    },
    methods:{
        chiamataAxios(){
            axios.get(this.apiDischi).then((res) => {
                this.array = res.data;
            });
        }
    },
    mounted(){
        this.chiamataAxios()
    }
  }).mount('#app')