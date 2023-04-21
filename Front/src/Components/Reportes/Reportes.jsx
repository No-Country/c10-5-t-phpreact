import React from "react";
import Chart_1 from "./Chart_1";
import Chart_2 from "./Chart_2";
import Donut from "./Donut/Donut";
import { studentNames, studentNames2 } from "../Dashboard/form_data";

function Reportes() {
    return (
        <div className="flex flex-col w-full h-auto justify-around px-[20px] py-[30px] items-center">
            <div className="flex flex-col justify-evenly items-center w-11/12 bg-morado-3-nc rounded-[10px] px-[20px] py-[10px]">
                <div className="flex justify-start items-center w-full border-b-2 border-gris-desactivado">
                    <h2 className="font-Inter text-[16px] font-[400]">Teamboard-Gestión de asistencias para TL's</h2>
                </div>

                <div className="flex flex-row justify-between items-start w-full py-[5px]">
                    <div className="flex flex-col h-auto justify-around items-center">
                        <div className="items-center w-full py-[10px]">
                            <h2 className="z-0 font-Inter text-[18px] font-[600]">Name of the Group</h2>
                            <div className="z-10 w-[180px] h-[11px] bg-morado-1-nc mt-[-10px]"></div>
                        </div>
                        <div className="flex flex-col h-auto justify-around items-center py-[15px] rounded-[10px] bg-[#F7F7F7]">
                            <div className="grid grid-cols-2 gap-4 w-full place-items-center h-full">

                                {studentNames2.map((e, index) => (
                                    <div className="flex flex-row items-center w-[350px] px-2" key={index}>
                                        <img src={e.image} alt="selfie" />
                                        <h3 className="font-Inter text-[14px] font-[400] pl-[10px]">{e.nombre}&nbsp;({e.role})</h3>
                                    </div>
                                ))}

                            </div>
                        </div>
                    </div>



                    <div className="flex flex-col h-auto justify-around items-center py-[10px]">
                        <div className="items-center w-full py-[10px]">
                            <h2 className="z-0 font-Inter text-[18px] font-[600]">Tecnologías</h2>
                            <div className="z-10 w-[180px] h-[11px] bg-verde-nc mt-[-10px]"></div>
                        </div>

                        <div className="grid grid-cols-3 gap-4 justify-between items-center w-[250px] h-auto py-[15px] rounded-[10px] bg-[#F7F7F7]">
                            <div>
                                <img src="../../public/React_icon.png" alt="react" />
                            </div>

                            <div>
                                <img src="../../public/php_icon.png" alt="react" />
                            </div>

                            <div>
                                <img src="../../public/figma_icon.png" alt="react" />
                            </div>

                        </div>
                    </div>

                    <div className="flex flex-col h-auto justify-around items-center py-[10px]">
                        <div className="items-center w-full py-[10px]">
                            <h2 className="z-0 font-Inter text-[18px] font-[600]">Evaluación Global</h2>
                            <div className="z-10 w-[180px] h-[11px] bg-morado-1-nc mt-[-10px]"></div>
                        </div>

                        <div className="flex justify-center items-center w-[250px] h-[200px] py-[15px] rounded-[10px] bg-[#F7F7F7]">
                            <Donut />
                        </div>
                    </div>
                </div>


            </div>





            <div className="flex flex-row w-11/12 h-[600px] justify-between py-[30px] items-center">
                <div className="flex flex-col items-center w-[650px] h-[500px] rounded-[10px] border-2 border-morado-3-nc py-[10px]">
                    <h2 className="font-Inter text-[18px] font-[500]">Asistencias de los participantes</h2>
                    <Chart_1 />
                </div>

                <div className="flex flex-col items-center w-[650px] h-[500px] rounded-[10px] border-2 border-morado-3-nc py-[10px]">
                    <h2 className="font-Inter text-[18px] font-[500]">Valores de trabajo en equipo</h2>
                    <Chart_2 />
                </div>

            </div>
        </div>
    )
}

export default Reportes;