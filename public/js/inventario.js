var app = new Vue({
  el: '#app',
  data: {
    marca:null,
    sector:null,
    medida:null,
    catalogo:[
      {id:1},
      {id:2},
      {id:3},
      {id:4},
      {id:5},
      {id:6},
      {id:7},
      {id:8},
      {id:9},
      {id:10},
      {id:11},
      {id:12},
      {id:13},
      {id:14},
      {id:15},
      {id:16},
      {id:17},
      {id:18},
      {id:19},
      {id:20},
    ]
  },
  mounted() {
    this.marcaRequest();
    this.sectorRequest();
    this.medidaRequest();
  },
  methods: {
    marcaRequest(){
      axios.get('http://localhost/aig/public/api/marca')
      .then(response=>{
        console.log(response.data);
        this.marca=response.data;
      });

    },
    sectorRequest(){
      axios.get('http://localhost/aig/public/api/sector')
      .then(response=>{
        console.log(response.data);
        this.sector=response.data;
      });
    },
    medidaRequest(){
      axios.get('http://localhost/aig/public/api/medida')
      .then(response=>{
        console.log(response.data);
        this.medida=response.data;
      });
    },
  }
});