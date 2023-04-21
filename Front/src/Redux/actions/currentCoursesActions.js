export const getAllCurrentCourses = async ()=>{
    /* const response = await fetch(`https://don-rauls.herokuapp.com/get/bills`)
    const data = await response.json() */
    return [
        {
          titulo: "Curso de Programación en JavaScript",
          codigo: "JS101",
          fechaInicio: new Date(2023, 6, 1).toLocaleDateString(),
          fechaFin: new Date(2023, 6, 31).toLocaleDateString(),
          tecnologias: ["JavaScript", "HTML", "CSS"],
        },
        {
          titulo: "Curso de Desarrollo Web con React",
          codigo: "RE101",
          fechaInicio: new Date(2023, 7, 1).toLocaleDateString(),
          fechaFin: new Date(2023, 7, 30).toLocaleDateString(),
          tecnologias: ["React", "JavaScript", "HTML", "CSS"],
        },
        {
          titulo: "Curso de Desarrollo de Aplicaciones Móviles con Flutter",
          codigo: "FL101",
          fechaInicio: new Date(2023, 8, 1).toLocaleDateString(),
          fechaFin: new Date(2023, 8, 30).toLocaleDateString(),
          tecnologias: ["Flutter", "Dart"],
        },
        {
          titulo: "Curso de Diseño Gráfico con Adobe Illustrator",
          codigo: "AI101",
          fechaInicio: new Date(2023, 9, 1).toLocaleDateString(),
          fechaFin: new Date(2023, 9, 31).toLocaleDateString(),
          tecnologias: ["Adobe Illustrator"],
        },
        {
          titulo: "Curso de Análisis de Datos con Python",
          codigo: "PY101",
          fechaInicio: new Date(2023, 10, 1).toLocaleDateString(),
          fechaFin: new Date(2023, 10, 30).toLocaleDateString(),
          tecnologias: ["Python", "Pandas", "NumPy"],
        },
      ]
}

