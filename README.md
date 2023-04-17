# EncuestaColores

CREDENCIALES LOGIN (SOLO FUNCIONA LOCALMENTE ES DE EJEMPLO): 
User: admin
passwd: admin
si isLoggedIn es false, solo mostrará la encuesta con un input:Number para la edad y un Select para seleccionar una respuesta 

ENDPOINTS FUNCIONALES 17-04-2023

//RETORNA TODAS LAS RESPUESTAS (GET)
/api/respuestas

//RETORNA EL TOTAL DE RESPUESTAS POR DÍA (GET)
/api/respuestas/dia

//RETORNA EL TOTAL DE RESPUESTAS (GET)
/api/respuestas/total

//RETORNA LA FRECUENCIA DE EDADES (GET)
/api/frecuencia/edades

//RETORNA LA FRECUENCIA DE COLORES (GET)
/api/frecuencia/colores

//RETORNA LA FRECUENCIA DE COLOR POR EDAD (GET)
/api/frecuencia/color-por-edad

//AGREGA UNA RESPUESTA A LA ENCUESTA (POST)
/api/resultados
