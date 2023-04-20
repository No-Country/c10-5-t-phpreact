export const getAllCurrentCourses = async ()=>{
    /* const response = await fetch(`https://don-rauls.herokuapp.com/get/bills`)
    const data = await response.json() */
    return [
        {
          titulo: "Curso de Programación en JavaScript",
          codigo: "JS101",
          fechaInicio: new Date(2023, 6, 1).toLocaleDateString(),
          fechaFin: new Date(2023, 6, 31).toLocaleDateString(),
          tecnologias: ["https://www.freepnglogos.com/uploads/javascript-png/javascript-logo-transparent-logo-javascript-images-3.png", "https://upload.wikimedia.org/wikipedia/commons/thumb/6/61/HTML5_logo_and_wordmark.svg/2048px-HTML5_logo_and_wordmark.svg.png", "https://1000marcas.net/wp-content/uploads/2021/02/CSS-Logo.png"],
        },
        {
          titulo: "Curso de Desarrollo Web con React",
          codigo: "RE101",
          fechaInicio: new Date(2023, 7, 1).toLocaleDateString(),
          fechaFin: new Date(2023, 7, 30).toLocaleDateString(),
          tecnologias: ["https://cdn4.iconfinder.com/data/icons/logos-3/600/React.js_logo-512.png", "https://www.freepnglogos.com/uploads/javascript-png/javascript-logo-transparent-logo-javascript-images-3.png", "https://upload.wikimedia.org/wikipedia/commons/thumb/6/61/HTML5_logo_and_wordmark.svg/2048px-HTML5_logo_and_wordmark.svg.png", "https://1000marcas.net/wp-content/uploads/2021/02/CSS-Logo.png"],
        },
        {
          titulo: "Curso de Desarrollo de Aplicaciones Móviles con Flutter",
          codigo: "FL101",
          fechaInicio: new Date(2023, 8, 1).toLocaleDateString(),
          fechaFin: new Date(2023, 8, 30).toLocaleDateString(),
          tecnologias: ["https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRgv9twbEcQIvcrlXzcIes19GQmpH9wZ9Mk32ldRFs&s", "https://upload.wikimedia.org/wikipedia/commons/c/c6/Dart_logo.png"],
        },
        {
          titulo: "Curso de Diseño Gráfico con Adobe Illustrator",
          codigo: "AI101",
          fechaInicio: new Date(2023, 9, 1).toLocaleDateString(),
          fechaFin: new Date(2023, 9, 31).toLocaleDateString(),
          tecnologias: ["https://logodownload.org/wp-content/uploads/2017/04/adobe-Illustrator-logo-0-1.png"],
        },
        {
          titulo: "Curso de Análisis de Datos con Python",
          codigo: "PY101",
          fechaInicio: new Date(2023, 10, 1).toLocaleDateString(),
          fechaFin: new Date(2023, 10, 30).toLocaleDateString(),
          tecnologias: ["https://upload.wikimedia.org/wikipedia/commons/thumb/c/c3/Python-logo-notext.svg/1869px-Python-logo-notext.svg.png", "https://upload.wikimedia.org/wikipedia/commons/thumb/e/ed/Pandas_logo.svg/1280px-Pandas_logo.svg.png", "https://upload.wikimedia.org/wikipedia/commons/thumb/3/31/NumPy_logo_2020.svg/1200px-NumPy_logo_2020.svg.png"],
        },
      ]
}

