import React from "react";
import { Link } from "react-router-dom";
import Donut from "../Reportes/Donut/Donut";

function Equipos() {
    return (
        <div className="flex flex-col w-full h-auto justify-evenly px-[20px] py-[30px] items-center">
            <div className="flex flex-row justify-around items-center w-full h-[100px] bg-morado-3-nc rounded-[10px]">
                <select name="" id="" className="flex flex-row h-[40px] w-[200px] border-[1px] border-primary items-center rounded-[10px] text-center">
                    <option selected className="flex flex-row items-center justify-around border-2 border-primary">Cohorte</option>
                </select>

                <select name="" id="" className="flex flex-row h-[40px] w-[200px] border-[1px] border-primary items-center rounded-[10px] text-center">
                    <option selected className="flex flex-row items-center justify-around border-2 border-primary">Equipo</option>
                </select>

                <select name="" id="" className="flex flex-row h-[40px] w-[200px] border-[1px] border-primary items-center rounded-[10px] text-center">
                    <option selected className="flex flex-row items-center justify-around border-2 border-primary">Team Leader</option>
                </select>
            </div>


            <div className="flex flex-row justify-between items-center w-full h-[500px] py-[30px]">

                <div className="flex flex-col justify-between items-center h-full w-[410px] rounded-[10px] border-2 border-morado-3-nc overflow-hidden">
                    <div className="flex flex-col w-full">
                        <div className="w-full bg-azul-morado-2 h-[150px] z-0"></div>

                        <div className="flex flex-row justify-around items-center">
                        <div className="flex flex-col justify-center items-center z-10 mt-[-80px]">
                            <img src="../../card_picture.png" alt="pic" className="" width={"159px"} height={"159px"} />
                            <span className="font-Inter text-[16px] font-[600]">Name of Student</span>
                            <span className="font-Inter text-[16px] font-[600]">Cohort of student</span>
                        </div>

                        <div className="items-center justify-center">
                            <div className="h-[50px] w-[130px] rounded-[5px] bg-gradient-to-r from-verde-nc via-verde-nc to-primary p-[1px]">
                                <div className="flex h-full w-full items-center justify-center bg-[#F6F6F6] rounded-[5px] back">
                                    <span className="font-Inter text-[16px] font-[600]">Emulacion&nbsp;</span>
                                    <span className="font-Inter text-[20px] font-[600] text-primary">3</span>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>


                    <div className="flex flex-row justify-start items-center w-full px-[30px]">
                        <img src="../../location.png" alt="pic" width={"25px"} height={"25px"}/>
                        <span className="font-Inter text-[16px] font-[400] mx-[10px]">City, Country</span>
                    </div>


                    <div className="flex flex-col w-full px-[30px]">
                        <span className="font-Inter text-[18px] font-[400]">Tecnologias</span>
                        <div className="flex flex-row justify-start items-center">
                        <img src="../../React_icon.png" alt="pic" width={"45px"} height={"45px"}/>
                        <img src="../../React_icon.png" alt="pic" width={"45px"} height={"45px"}/>
                        </div>
                    </div>

                </div>





                <div className="flex flex-col justify-start items-center h-full w-[410px] rounded-[10px] border-2 border-morado-3-nc">
                    <div className="w-11/12 border-b-2 border-gris-desactivado">
                        <h2 className="font-Inter text-[14px] font-[600] tracking-[-0.03em] leading-[45px]">
                            Participantes
                        </h2>
                    </div>

                   <div className="flex flex-col justify-between items-center h-full w-full">
                   <div className="flex flex-row w-full justify-start items-center px-[15px] py-[5px]">
                        <img src="../../participante.png" alt="pic" className="" />
                        <label for="student_1" className="font-Inter text-[16px] font-[400] tracking-[-0.03em] leading-[19px] hover:text-primary px-[5px]">
                            <Link to={'/perfil'}>Diego Alberto Juarez Ramirez&nbsp;(Front-End)</Link>
                        </label>
                    </div>
                   </div>

                </div>





                <div className="flex flex-col justify-start items-center h-full w-[410px] rounded-[10px] border-2 border-morado-3-nc">
                    <div className="w-11/12 border-b-2 border-gris-desactivado">
                        <h2 className="font-Inter text-[14px] font-[600] tracking-[-0.03em] leading-[45px]">
                            Detalle Equipo
                        </h2>
                    </div>

                  <div className="flex flex-col justify-around items-center h-full w-full">
                  <div className="flex flex-col justify-center items-center">
                        <Donut />
                        <span className="font-Inter text-[16px] font-[600]">Evaluacion General de Sprints</span>
                    </div>

                    <div className="flex flex-row justify-center items-center w-full">
                        <div className="relative">
                        <img src="../../ring.png" alt="pic" width={"20px"} height={"20px"} className="relative top-0 left-0"/>
                        <img src="../../checkmark.png" alt="pic" width={"20px"} height={"20px"} className="absolute top-0 left-1"/>
                        </div>
                        <span className="font-Inter text-[16px] font-[400] px-[10px]">Name of Team</span>
                    </div>

                    <div className="flex flex-row justify-center items-center w-full">
                        <img src="../../document.png" alt="pic" width={"20px"} height={"20px"}/>
                        <Link><span className="font-Inter text-[16px] font-[400] px-[10px] hover:text-primary">Gestión de asistencias para TL´s</span></Link>
                    </div>

                    <div>
                        <Link>
                            <button className="bg-white w-[161px] h-[45px] rounded-[10px] font-[400] border-2 border-secondary shadow-dark font-Inter text-[15px] font-[500] text-primary tracking-[-0.03em]">
                                Ver Reporte
                            </button>
                        </Link>
                    </div>
                  </div>
                </div>

            </div>

        </div>
    )
}

export default Equipos;