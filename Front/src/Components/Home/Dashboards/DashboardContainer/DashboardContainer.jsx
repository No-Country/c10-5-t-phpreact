import React from "react";
import { useState, useEffect } from "react";
import { useSelector, useDispatch } from "react-redux";
import { getCurrentCourses } from "../../../../Redux/currentCourses";
import { getAllCurrentCourses } from "../../../../Redux/actions/currentCoursesActions";
import { getAllFinishedCourses } from "../../../../Redux/actions/finishedCoursesActions";
import { getFinishedCourses } from "../../../../Redux/finishedCourses";
import CourseItem from "../CourseItem/CourseItem";
import Logo from "../../../../assets/Group 160.png"
const DashboardContainer = () => {
  const currentCourses = useSelector((state) => state.current);
  const finishedCourses = useSelector((state) => state.finished);
  const [stateCourses, setStateCourses] = useState(true);
  const dispatch = useDispatch();
  useEffect(() => {
    getAllCurrentCourses().then((res) => {
      dispatch(getCurrentCourses(res));
    });
    getAllFinishedCourses().then((res) => {
      dispatch(getFinishedCourses(res));
    });
  }, []);

  return (
    <>
      <div className="flex flex-col h-screen font-Inter mb-10">
        <div className="bg-primary h-1/12 p-2 text-white text-6xl font-Geogrotesque font-semibold flex justify-between">
          <img src={Logo}></img>
          <div className="flex text-xl justify-center items-center">
            <h1 className="p-2">Asistencia</h1>
            <h1 className="p-2">Reportes</h1>
            <h1 className="p-2">Notificacion</h1>
            <h1 className="p-2">Perfil</h1>
          </div>
        </div>
        <div className="h-1/12">
          <div className="flex p-4 font-normal">
            <button
              onClick={(e) => setStateCourses(true)}
              className="p-4 hover:font-semibold focus:bg-gradient-to-t focus:from-indigo-400 focus:to-white"
            >
              Activos
            </button>
            <button
              onClick={(e) => setStateCourses(false)}
              className="p-4 hover:font-semibold focus:bg-gradient-to-t focus:from-indigo-400 focus:to-white"
            >
              Finalizados
            </button>
          </div>
        </div>
        <div className=" h-5/6 py-8 flex flex-wrap justify-center">
          {(stateCourses ? currentCourses : finishedCourses).map((course) => (
            <CourseItem course={course} />
          ))}
        </div>
      </div>
    </>
  );
};

export default DashboardContainer;
