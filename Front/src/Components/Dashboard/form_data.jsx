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
            asistencia: null,
            role: "UX/UI",
            image: "../../profile_pics/girl_1.png",
            roleUser: "TeamLead"
        },
        {
            nombre: "Alejandro Rodriguez Perez",
            justificacion: null,
            asistencia: null,
            role: "Front-End",
            image: "../../profile_pics/no_pic.png",
            roleUser: "student"
        },
        {
            nombre: "Isabella Gonzalez Hernandez",
            justificacion: null,
            asistencia: null,
            role: "Back-End",
            image: "../../profile_pics/girl_2.png"
        },
        {
            nombre: "Mateo Sanchez Garcia",
            justificacion: null,
            asistencia: null,
            role: "QA-Tester",
            image: "../../profile_pics/boy_2.png"
        },
        {
            nombre: "Camila Torres Ramirez",
            justificacion: null,
            asistencia: null,
            role: "Back-End",
            image: "../../profile_pics/girl_3.png"
        },
        {
            nombre: "Lucas Gonzalez Gomez",
            justificacion: null,
            asistencia: null,
            role: "UX/UI",
            image: "../../profile_pics/boy_3.png"
        },
        {
            nombre: "Valentina Flores Diaz",
            justificacion: null,
            asistencia: null,
            role: "Front-End",
            image: "../../profile_pics/girl_4.png"
        },
        {
            nombre: "Juan Pablo Martinez Ramirez",
            justificacion: null,
            asistencia: null,
            role: "Front-End",
            image: "../../profile_pics/boy_4.png"
        },
        {
            nombre: "Ana Maria Lopez Perez",
            justificacion: null,
            asistencia: null,
            role: "QA-Tester",
            image: "../../profile_pics/no_pic.png"
        },
        {
            nombre: "Carlos Eduardo Ramirez Ruiz",
            justificacion: null,
            asistencia: null,
            role: "Back-End",
            image: "../../profile_pics/boy_5.png"
        },
        {
            nombre: "Natalia Alvarez Flores",
            justificacion: null,
            asistencia: null,
            role: "Back-End",
            image: "../../profile_pics/girl_5.png"
        },
        {
            nombre: "Jose Luis Hernandez Rodriguez",
            justificacion: null,
            asistencia: null,
            role: "Back-End",
            image: "../../profile_pics/boy_6.png"
        },
    ]



    const students3 = [
        {
          name: "Juan Pablo Garcia Perez",
          justificacion: null,
          asistencia: null,
          role: "Developer",
          image: "../../profile_pics/no_pic.png",
          roleUser: "TeamLead"
        },
        {
          name: "Ana Sofia Rodriguez Gomez",
          justificacion: null,
          asistencia: null,
          role: "Designer",
          image: "../../profile_pics/no_pic.png",
          roleUser: "Developer"
        },
        {
          name: "Luis Eduardo Martinez Ruiz",
          justificacion: null,
          asistencia: null,
          role: "QA Engineer",
          image: "../../profile_pics/no_pic.png",
          roleUser: "Developer"
        },
        {
          name: "Valentina Torres Hernandez",
          justificacion: null,
          asistencia: null,
          role: "Developer",
          image: "../../profile_pics/no_pic.png",
          roleUser: "Designer"
        },
        {
          name: "Diego Andres Gonzalez Ramirez",
          justificacion: null,
          asistencia: null,
          role: "Designer",
          image: "../../profile_pics/no_pic.png",
          roleUser: "QA Engineer"
        },
        {
          name: "Camila Alejandra Flores Perez",
          justificacion: null,
          asistencia: null,
          role: "QA Engineer",
          image: "../../profile_pics/no_pic.png",
          roleUser: "Designer"
        },
        {
          name: "Santiago Jose Ramirez Diaz",
          justificacion: null,
          asistencia: null,
          role: "Developer",
          image: "../../profile_pics/no_pic.png",
          roleUser: "QA Engineer"
        },
        {
          name: "Isabella Maria Hernandez Torres",
          justificacion: null,
          asistencia: null,
          role: "Designer",
          image: "../../profile_pics/no_pic.png",
          roleUser: "TeamLead"
        },
        {
          name: "Lucas Antonio Gomez Ramirez",
          justificacion: null,
          asistencia: null,
          role: "QA Engineer",
          image: "../../profile_pics/no_pic.png",
          roleUser: "Developer"
        },
        {
          name: "Sofia Fernanda Perez Flores",
          justificacion: null,
          asistencia: null,
          role: "Developer",
          image: "../../profile_pics/no_pic.png",
          roleUser: "Designer"
        },
        {
          name: "Mateo Alejandro Sanchez Gonzalez",
          justificacion: null,
          asistencia: null,
          role: "Designer",
          image: "../../profile_pics/no_pic.png",
          roleUser: "QA Engineer"
        },
        {
          name: "Natalia Andrea Diaz Hernandez",
          justificacion: null,
          asistencia: null,
          role: "QA Engineer",
          image: "../../profile_pics/no_pic.png",
          roleUser: "TeamLead"
        },
        {
          name: "Gabriel Andres Castro Lopez",
          justificacion: null,
          asistencia: null,
          role: "Developer",
          image: "../../profile_pics/no_pic.png",
          roleUser: "QA Engineer"
        },
        {
          name: "Ana Paula Martinez Gonzalez",
          justificacion: null,
          asistencia: null,
          role: "Designer",
          image: "../../profile_pics/no_pic.png",
          roleUser: "Developer"
        },
        {
          name: "Andres Felipe Torres Ruiz",
          justificacion: null,
          asistencia: null,
          role: "Developer"
        }
    ]
      

function getIndex(arr, key, value) {

    for (var i = 0; i < arr.length; i++) {

        if (arr[i][key] == value) {
            return i;
        }
    }
    return null;
}

export { aspectos, studentNames, studentNames2, students3, getIndex };