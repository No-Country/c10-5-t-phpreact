import React from "react";

function Section_3(){
    return(
        <div className="flex flex-row w-full justify-evenly px-[20px] py-[30px] items-center">
            <div className="">
                <div>
                    <img src="../../src/assets/test_circle_resized.png" alt="circle" />
                </div>
            </div>


            <div className="flex flex-col justify-evenly w-[520px] h-[480px]">
                <div className="px-[10px]">
                    <p className="font-Roboto text-[56px] font-[600] tracking-[0.01em] leading-[75px] whitespace-normal">Postúlate a&nbsp;
                        <br />
                        <span className="text-transparent bg-azul-morado bg-clip-text">Team Leader</span>
                    </p>
                </div>


                <div className="flex flex-col">
                    <div className="flex flex-row w-full">
                        <img src="../../src/assets/purple_bell.png" alt="bell" />
                        <h2 className="font-Inter text-[20px] font-[600] tracking-[0.01em]">Desarrola tu liderazgo</h2>
                    </div>


                    <div className="flex flex-row w-full">
                        <img src="../../src/assets/purple_bell.png" alt="bell" />
                        <h2 className="font-Inter text-[20px] font-[600] tracking-[0.01em]">Acelera tu seniority</h2>
                    </div>
                </div>

                <div className="px-[16px]">
                    <p className="font-Inter text-[20px] text-justify font-[400] tracking-[0.01em] leading-[24px]">
                        El Team Leader representa los intereses del cliente con el equipo, es el encargado de tomar asistencia de cada uno de los integrantes, registrar el progreso, facilitar la comunicación entre los miembros y  así poder ayudarlos a optimizar tareas para que lleguen a cumplir el objetivo.
                    </p>
                </div>
            </div>
        </div>
    )
}

export default Section_3;