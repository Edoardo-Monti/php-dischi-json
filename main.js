const { createApp } = Vue

  createApp({
    data() {
      return {
        apiDischi: 'server.php',
        array: '',
        discDetails: '',
        indiceCard: 0,
      }
    },
    methods:{
        chiamataAxios(){
            axios.get(this.apiDischi).then((res) => {
                this.array = res.data;
                console.log(this.indiceCard)
            });
        },
        // mostraCard( i ){
        //   const indiceDinamico = {
        //     indiceDisco: i
        //   };

        //   axios.post(this.apiDischi, indiceDinamico, {headers:{'Content-type': 'multipart/form-data'} })
        //   .then((res) => {
        //     this.discDetails = res.data;
        //   });
        // },
    },
    mounted(){
        this.chiamataAxios()
    }
  }).mount('#app')