Siguiendo la arquitectura propuesta en clase crear un recurso que se llame equipos/consultarTodos.php y devuelva el siguiente json. 
{
  "ListEquipos": [
    {
      "Id": 1,
      "Nombre": "Equipo 1",
      "ListJugadores": [
      
        {
          "Nombre": "Pedro Gonzalez",
          "Posicion": "Delantero",
          "Debut": "17 de agosto de 2005",
          "Goles" : 10
        },
        {
          "Nombre": "Daniel Sanchez",
          "Posicion": "Delantero",
          "Debut": "16 de diciembre de 2010",
          "Goles" : 0
        },
        {
          "Nombre": "Juan Perez",
          "Posicion": "Defensor",
          "Debut": "17 de setiembre de 2019",
          "Goles" : 10
        }
      ],
      "Fundacion": "3 de noviembre de 1903 (118 años)",
      "Presidente": "Javier Perez"
    },
     {
      "Id": 2,
      "Nombre": "Equipo 2",
      "ListJugadores": [
        {
          "Nombre": "Ignacio gonzalez",
          "Posicion": "Arquero",
          "Debut": "17 de enero de 2020",
          "Goles" : 1
        },
        {
          "Nombre": "Ariel Cosentino",
          "Posicion": "Mediocampista",
          "Debut": "16 de diciembre de 2001",
          "Goles" : 2
        },
        {
          "Nombre": "Diego Dominguez",
          "Posicion": "Defensor",
          "Debut": "15 de febrero de 2018",
          "Goles" : 5
        },
        {
          "Nombre": "Gustavo Santos",
          "Posicion": "Delantero",
          "Debut": "16 de diciembre de 2009",
          "Goles" : 3
        }
      ],
      "Fundacion": "5 de abril de 1923",
      "Presidente": "Ignacio Quinteros"
    }
  ]
}
