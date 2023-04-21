import React from "react";

function Section_1() {
    return (
        <div className="flex flex-row w-full px-[20px] py-[30px] items-center">
            <div className="">
                <div className="">
                    <p className="font-Roboto text-[56px] font-[600] tracking-[0.01em] leading-[75px] whitespace-normal">Trabajamos en equipos&nbsp; 
                    <span className="text-transparent bg-azul-morado bg-clip-text">multidisciplinarios</span>
                    </p>
                </div>

                <div className="py-[5px]">
                    <p className="font-Inter text-[20px] font-[500] tracking-[0.01em] leading-[45px]">
                        Capturamos habilidades técnicas y blandas de cada participante con el fin de identificar y validar los mejores perfiles.
                    </p>
                </div>

                <a href="/formulario">
                    <button className="bg-primary w-[161px] h-[45px] rounded-[10px] shadow-dark font-Inter text-[15px] font-[500] text-text-color-white tracking-[-0.03em]">
                        Aplicar
                    </button>
                </a>
            </div>


            <div>
                <img src="../../public/section_1.png" alt="s1" />
            </div>
        </div>
    )
}

export default Section_1;