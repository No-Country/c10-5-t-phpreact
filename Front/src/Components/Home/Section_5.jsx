import React from "react";

function Section_5(){
    return(
        <div className="flex w-full justify-evenly px-[20px] pt-[30px] items-center ">
            

            <div className="flex flex-col justify-around h-[450px]">
                <div className="flex bg-primary w-[766px] h-[56px] rounded-[10px] shadow-dark items-center">
                    <span className="font-Inter text-[20px] font-[500] text-text-color-white tracking-[-0.03em] leading-[45px] indent-4">Preguntas Frecuentes</span>
                </div>

                <button className="flex justify-between bg-secondary w-[609px] h-[56px] rounded-[10px] shadow-dark items-center">
                    <span htmlFor="pregunta_1" className="ont-Inter text-[16px] font-[500] tracking-[-0.03em] leading-[56px] indent-4">
                        ¿Ademas de desarrolladores, se pueden inscribir otros perfiles?
                    </span>
                    <img src="../../src/assets/vector.png" alt="vector"  className="mr-[15px]"/>
                </button>
                
                <button className="flex justify-between bg-secondary w-[609px] h-[56px] rounded-[10px] shadow-dark items-center">
                    <span htmlFor="pregunta_1" className="ont-Inter text-[16px] font-[500] tracking-[-0.03em] leading-[56px] indent-4">
                        ¿Puedo inscribirme como desarrollador si solo se HTML y CSS?
                    </span>
                    <img src="../../src/assets/vector.png" alt="vector"  className="mr-[15px]"/>
                </button>

                <button className="flex justify-between bg-secondary w-[609px] h-[56px] rounded-[10px] shadow-dark items-center">
                    <span htmlFor="pregunta_1" className="ont-Inter text-[16px] font-[500] tracking-[-0.03em] leading-[56px] indent-4">
                        No tengo experiencia mínima ¿Que puedo hacer?
                    </span>
                    <img src="../../src/assets/vector.png" alt="vector"  className="mr-[15px]"/>
                </button>

                <button className="flex justify-between bg-secondary w-[609px] h-[56px] rounded-[10px] shadow-dark items-center">
                    <span htmlFor="pregunta_1" className="ont-Inter text-[16px] font-[500] tracking-[-0.03em] leading-[56px] indent-4">
                        ¿Cual es el cronograma de emulación?
                    </span>
                    <img src="../../src/assets/vector.png" alt="vector"  className="mr-[15px]"/>
                </button>

                <button className="flex justify-between bg-secondary w-[609px] h-[56px] rounded-[10px] shadow-dark items-center">
                    <span htmlFor="pregunta_1" className="ont-Inter text-[16px] font-[500] tracking-[-0.03em] leading-[56px] indent-4">
                        ¿Puedo participar en mas de una emulación?
                    </span>
                    <img src="../../src/assets/vector.png" alt="vector"  className="mr-[15px]"/>
                </button>
                
            </div>

            <div className="mt-[100px]">
                <img src="../../src/assets/selfie_boy.png" alt="boy"/>
            </div>
        </div>
    )
}

export default Section_5;