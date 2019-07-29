var app = new Vue({
  el: '#app',
  data: {
    marca:null,
    sector:null,
    medida:null,
    producto:null
  },
  mounted() {
    this.marcaRequest();
    this.sectorRequest();
    this.medidaRequest();
    this.productoRequest("*","*","*");
  },
  methods: {
    marcaRequest(){
      axios.get('http://localhost/aig/public/api/marca')
      .then(response=>{
        this.marca=response.data;
      });

    },
    sectorRequest(){
      axios.get('http://localhost/aig/public/api/sector')
      .then(response=>{
        this.sector=response.data;
      });
    },
    medidaRequest(){
      axios.get('http://localhost/aig/public/api/medida')
      .then(response=>{
        this.medida=response.data;
      });
    },
    productSearch(){

      let marca=[];
      let medida=[];
      let sector=[];

      let marcas;
      let medidas;
      let sectores;

      //iteramos por marca 
      this.marca.forEach(item=>{
        const check = document.getElementById(item.marca);
        if(check.checked){
          marca.push(item.marca);
        }
      });
      //iteramos por medida 
      this.medida.forEach(item=>{
        const check = document.getElementById(item.medida);
        if(check.checked){
          medida.push(item.medida);
        }
      });
      //iteramos por sector 
      this.sector.forEach(item=>{
        const check = document.getElementById(item.sector);
        if(check.checked){
          sector.push(item.sector);
        }
      });

      //agregamos marcas en un solo string para URL y en caso de estar vacion agregamos comodin *
      if(marca.length){marcas=marca.join("-");}
      else{marcas="*"}
      if(medida.length){medidas=medida.join("-");}
      else{medidas="*"}
      if(sector.length){sectores=sector.join("-");}
      else{sectores="*"}

      console.log(`marcas: ${marcas} medidas: ${medidas} sectores:${sectores}`);

      this.productoRequest(marcas,medidas,sectores);
      
    },
    productoRequest(marcas,medidas,sectores){
      axios.get(`http://localhost/aig/public/api/producto/${marcas}/${medidas}/${sectores}`)
      .then(response=>{
        let producto=[];

        response.data.forEach(element => {
          const item ={
            _id:element._id,
            codigo:element.codigo,
            titulo:element.titulo,
            descripcion:element.descripcion,
            img:'http://localhost/aig/public/img/producto/'+element.codigo+'.jpg',
            sector:element.sector
          };
          producto.push(item);

        });
        this.producto=producto;
        console.log(this.producto);

      });
    }

  }
});