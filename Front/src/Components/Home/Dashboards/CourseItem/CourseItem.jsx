import React from 'react'

const CourseItem = ({course}) => {
    return (<div className="font-semibold shadow-lg shadow-primary bg-text-color-white my-4 rounded-xl w-1/3 p-8 mx-8 " key={course.id}>
    <h1 className="py-1">{course.titulo}</h1>
    <h1 className="py-1">{course.codigo}</h1>
    <h1 className="py-1">Fecha de inicio | {course.fechaInicio}</h1>
    <h1 className="py-1">Fecha de finalización | {course.fechaFin}</h1>
    <h1 className="py-1">{course.tecnologias.join(" ")}</h1>
    <button className="font-normal text-base text-white rounded-xl bg-primary p-4 mt-1 w-full hover:invert">IR A COHORTE</button>
  </div>)
}

export default CourseItem
