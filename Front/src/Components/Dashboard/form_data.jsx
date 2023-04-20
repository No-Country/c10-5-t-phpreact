const aspectos =
    [
        "Compromiso",
        "Comunicación",
        "Iniciativa",
        "Proactividad",
        "Organización",
        "Colaboración",
    ]


const studentNames = 
    [
        "Sofia Martinez Garcia",
        "Alejandro Rodriguez Perez",
        "Isabella Gonzalez Hernandez",
        "Mateo Sanchez Garcia",
        "Camila Torres Ramirez",
        "Lucas Gonzalez Gomez",
        "Valentina Flores Diaz",
        "Juan Pablo Martinez Ramirez",
        "Ana Maria Lopez Perez",
        "Carlos Eduardo Ramirez Ruiz",
        "Natalia Alvarez Flores",
        "Jose Luis Hernandez Rodriguez"
    ];

const studentNames2 =
    [
        {
            nombre: "Sofia Martinez Garcia",
            justificacion: null,
            asistencia: null
        },
        {
            nombre: "Alejandro Rodriguez Perez",
            justificacion: null,
            asistencia: null
        },
        {
            nombre: "Isabella Gonzalez Hernandez",
            justificacion: null,
            asistencia: null
        },
        {
            nombre: "Mateo Sanchez Garcia",
            justificacion: null,
            asistencia: null
        },
        {
            nombre: "Camila Torres Ramirez",
            justificacion: null,
            asistencia: null
        },
        {
            nombre: "Lucas Gonzalez Gomez",
            justificacion: null,
            asistencia: null
        },
        {
            nombre: "Valentina Flores Diaz",
            justificacion: null,
            asistencia: null
        },
        {
            nombre: "Juan Pablo Martinez Ramirez",
            justificacion: null,
            asistencia: null
        },
        {
            nombre: "Ana Maria Lopez Perez",
            justificacion: null,
            asistencia: null
        },
        {
            nombre: "Carlos Eduardo Ramirez Ruiz",
            justificacion: null,
            asistencia: null
        },
        {
            nombre: "Natalia Alvarez Flores",
            justificacion: null,
            asistencia: null
        },
        {
            nombre: "Jose Luis Hernandez Rodriguez",
            justificacion: null,
            asistencia: null
        },
    ]

function getIndex(arr, key, value) {

    for (var i = 0; i < arr.length; i++) {

        if (arr[i][key] == value) {
            return i;
        }
    }
    return null;
}

export { aspectos, studentNames, studentNames2, getIndex };