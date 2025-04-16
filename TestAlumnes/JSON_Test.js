//
var test = [{
    "pregunta" : "¿Que hace setTimeout?" ,
    "respostes" : ["a) Ejecuta una función transcurridos un tiempo determinado",
                   "b) Hace que se ejecute el script transcurrido un tiempo determinado",
                   "c) Ejecuta una función de forma repetidad cada x milisegundos" 
                ],
    "acert": 0            
    },
        {
        "pregunta" : "¿Que se usa para borrar una cookie?" ,
        "respostes" : ["a) Se usa la función removeCookie().",
                       "b) Se utliza la funcion deleteCookie().",
                       "c) Se puede otilizar el parametro max-age=0." 
                    ],
        "acert": 2            
    },
        {
        "pregunta" : "¿Hasta que capacidad se puede almacenar en el navegador?" ,
        "respostes" : ["a) 50 MB.",
                       "b) 5 MB.",
                       "c) Ilimitada." 
                    ],
        "acert": 1            
    },
        {
        "pregunta" : "El objeto LocalStorage para almacenar información utliza el metodo:" ,
        "respostes" : ["a) setItem(clave,valor).",
                       "b) storeData(clave,valor).",
                       "c) saveData(clave,valor)." 
                    ],
        "acert": 0            
    },
        {
        "pregunta" : "¿Que función se utliza para rellenar un array con valores determinados?" ,
        "respostes" : ["a) fill().",
                       "b) push().",
                       "c) slice()." 
                    ],
        "acert": 0            
    },

    ]
    $(document).ready(function(){
        let preguntas = test;
        let totalPreguntas = preguntas.length;
        let aciertos = 0;
        let actual = 0;
    
        $("#iniciar").click(function() {
            aciertos = 0;
            actual = 0;
            $("#acerts").text(aciertos);
            $("#total").text(totalPreguntas);
            mostrarPregunta();
        });
    
        function mostrarPregunta() {
            if (actual >= totalPreguntas) {
                let nota = (aciertos / totalPreguntas) * 10;
                $("#pregunta").html(` Has finalizado el test.<br><br> Nota: <strong>${nota.toFixed(2)} / 10</strong>`);
                $("#respostes").empty();
                $("#panel").show();
                return;
            }
    
            $("#panel").show();
            let pregunta = preguntas[actual];
            $("#pregunta").text(pregunta.pregunta);
            $("#respostes").empty();
    
            pregunta.respostes.forEach((resp, index) => {
                let boton = $("<button>").text(resp).addClass("respuesta");
                boton.click(function() {
                    if (index === pregunta.acert) {
                        aciertos++;
                        $("#acerts").text(aciertos);
                    }
                    $("#panel").hide();
                    setTimeout(() => {
                        actual++;
                        $("#total").text(totalPreguntas);
                        mostrarPregunta();
                    }, 1500);
                });
                $("#respostes").append(boton);
            });
        }
    });