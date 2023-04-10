export const getAllFinishedCourses = async () => {
  /* const response = await fetch(`https://don-rauls.herokuapp.com/get/bills`)
    const data = await response.json() */
  return [
    {
      titulo: "Curso de Desarrollo Web con Node.js",
      codigo: "NW101",
      fechaInicio: new Date(2023, 6, 1).toLocaleDateString(),
      fechaFin: new Date(2023, 6, 31).toLocaleDateString(),
      tecnologias: ["Node.js", "Express", "MongoDB"],
    },
    {
      titulo: "Curso de Desarrollo de Aplicaciones Móviles con Kotlin",
      codigo: "KT101",
      fechaInicio: new Date(2023, 7, 1).toLocaleDateString(),
      fechaFin: new Date(2023, 7, 30).toLocaleDateString(),
      tecnologias: ["Kotlin", "Android Studio"],
    },
    {
      titulo: "Curso de Análisis de Datos con R",
      codigo: "RA101",
      fechaInicio: new Date(2023, 8, 1).toLocaleDateString(),
      fechaFin: new Date(2023, 8, 30).toLocaleDateString(),
      tecnologias: ["R", "ggplot2"],
    },
    {
      titulo: "Curso de Diseño de Interfaces de Usuario con Figma",
      codigo: "FG101",
      fechaInicio: new Date(2023, 9, 1).toLocaleDateString(),
      fechaFin: new Date(2023, 9, 31).toLocaleDateString(),
      tecnologias: ["Figma", "UI Design"],
    },
    {
      titulo: "Curso de Machine Learning con Python",
      codigo: "ML101",
      fechaInicio: new Date(2023, 10, 1).toLocaleDateString(),
      fechaFin: new Date(2023, 10, 30).toLocaleDateString(),
      tecnologias: ["Python", "scikit-learn", "TensorFlow"],
    },
  ];
};
