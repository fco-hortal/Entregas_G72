# README DE ENTREGA 4 BASES DE DATOS

## Consideraciones generales

Se trabajo con Mongo y Python. Se utilizo un pipenv para poder trabajar con las mismas librerias. La version de python ocupada fue la 3.7. Para revisar el funcionamiento de nuestro código se utilizo PostMan.


### Funciones:

* /messages
	* /messages: Esta función devuelve todos los mensajes disponibles en la base de datos.
	* /messages/[id]: Esta función recibe como parámetro un id el cual debe ser int, si no lo es levanta un ValueError y devuelve un mensaje en formato json que dice que el formato del id es invalido, si es int busca el id correspondiente a este mensaje, de no existir devuelve un mensaje como json el que dice que no existe un mensaje con este id.
	* /messages/: Esta funcion recibe dos parametros que son ID entregados en el URL de la siguiente manera '/messages/?id=XX&id2=XX' (los nombres de las variables no necesitan ser id especificamente), si los id son válidos devuelve todos los mensajes intercambiados entre estos usuarios.
* /users
	* 
* /text-search
	*
* POST
	* La función agrega correctamente el elemento al servidor. Si falta información no se añadira nada al server y enviara un diccionario con la información correspondiente al elemento q falto, ademas revisa cual es el id mas grande y se le sumara 1 para asi asegurarnos que el id usado sea único
* DELETE
	* La función elimina el elemento con el Id elegido correctamente. Si el Id no existe se obtendra un diccionario especificando que el id no existe


## Ejecución



## Supuestos y consideraciones adicionales

No se realizaron supuestos adicionales en lo que se realizó de entrega.
