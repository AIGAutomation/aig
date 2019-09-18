db.marca.insert([
    {"_id":1, "marca":"wika"},
    {"_id":2, "marca":"banner"},
    {"_id":3, "marca":"peperl and fuchs"},
    {"_id":4, "marca":"omron"},
    {"_id":5, "marca":"delta"},
    {"_id":6, "marca":"schmersal"},
    {"_id":7, "marca":"finder"},
    {"_id":8, "marca":"eathon and moeller"},
    {"_id":9, "marca":"red lion"},
    {"_id":10,"marca":"finder"},
    {"_id":11,"marca":"wago"},
    {"_id":12,"marca":"honeywell"}
]);
db.medida.insert([
    {"_id":1,"medida":"temperatura"},
    {"_id":2,"medida":"caudal"},
    {"_id":3,"medida":"fuerza"},
    {"_id":4,"medida":"distancia"},
    {"_id":5,"medida":"color"}
]);
db.sector.insert([
    {"_id":1,"sector":"salud"},
    {"_id":2,"sector":"alimenticio"},
    {"_id":3,"sector":"automotriz"}
]);
db.producto.insert([
    {
        "_id":1,
        "codigo":"TM-53",
        "titulo":"Termómetro bimetálico",
        "descripcion":"El termómetro bimetálico tipo TG53 está diseñado y fabricado según la norma ASME B40.200. El termómetro ofrece alta calidad y rendimiento y es una opción ideal para aplicaciones en la industria de procesos.",
        "marca":"wika",
        "medida":["temperatura"],
        "sector":["automotriz"]
    },
    {
        "_id":2,
        "codigo":"CTR-5000",
        "titulo":"Termómetro de precisión",
        "descripcion":"Térmómetro de precisión para la medición muy exacta en el rango entre -200 … +962 °C",
        "marca":"wika",
        "medida":["temperatura"],
        "sector":["salud","alimenticio"]
    },
    {
        "_id":3,
        "codigo":"Q4X",
        "titulo":"Sensor de distancia laser",
        "descripcion":"Este versátil y robusto sensor láser de distancia tiene un desempeño superior, detectando cambios submilimétricos en la distancia con un rango de detección fiable de hasta 300 mm.",
        "marca":"banner",
        "medida":["distancia"],
        "sector":["automotriz","mecanico"]
    },
    {
        "_id":4,
        "codigo":"SA-11",
        "titulo":"Sensor de presion para procesos estériles",
        "descripcion":"El transmisor SA-11 es un diseño especial para las aplicaciones en la industria alimentaria, farmacéutica y biotecnológica. Este modelo es especialmente resistente contra las condiciones adversas típicas durante los procesos de limpieza CIP/SIP donde se somete el instrumento a detergentes, elevadas temperaturas y sustancias químicas.",
        "marca":"wika",
        "medida":["presion"],
        "sector":["salud","alimenticio"]
    },
    {
        "_id":5,
        "codigo":"LS-10",
        "titulo":"Sensor para la medición de nivel, ejecución estándar",
        "descripcion":"Para las simples tareas de medición,. La sonda de nivel del modelo LS-10 es óptima para tareas sencillas de medición de nivel. El instrumento ofrece una calidad excelente y es económico y fiable.",
        "marca":"wika",
        "medida":["nivel"],
        "sector":["hidraulico"]
    }

]);
