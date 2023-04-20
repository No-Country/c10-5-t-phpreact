import React from "react";
import Calendar from "../../../../assets/calendar.png";
const CourseItem = ({ course }) => {
  return (
    <div
      className="font-semibold shadow-lg shadow-primary bg-text-color-white my-4 rounded-xl md:w-1/3  sm:w-1/2 p-8 mx-8 "
      key={course.id}
    >
      <h1 className="py-1">{course.titulo}</h1>
      <h1 className="py-1">{course.codigo}</h1>
      <div className="flex my-2">
        <img src={Calendar} className="mr-2 w-6 h-6" />
        <h1 className="py-1">Fecha de inicio | {course.fechaInicio}</h1>
      </div>
      <div className="flex my-2">
        <img src={Calendar} className="mr-2 w-6 h-6" />
        <h1 className="py-1">Fecha de finalización | {course.fechaFin}</h1>
      </div>
      <div className="flex">
        {course.tecnologias.map((c) => (
          <img src={c} className="w-16 h-12 mr-2 my-2" />
        ))}
      </div>

      <button className="font-normal text-base text-white rounded-xl bg-primary p-4 mt-1 w-full hover:invert">
        IR A COHORTE
      </button>
    </div>
  );
};

export default CourseItem;
