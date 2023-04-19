import { Fragment } from "react";
import React from "react";

function Section_2() {

    return (
        <div id="section_2" className="flex flex-col w-full px-[20px] py-[30px] items-center bg-nuestros-perfiles">
            <div className="flex flex-col justify-center items-center">
                <div>
                    <p className="font-Roboto text-[56px] font-[600] tracking-[0.01em] leading-[84x] whitespace-normal">Nuestros Perfiles</p>
                </div>
                <div className="w-4/5">
                    <p className="font-Inter text-[24px] font-[500] tracking-[0.01em] leading-[26px] text-center">
                        Todos nuestros postulados van a trabajar en un entorno multidisciplinario. Capturamos habilidades técnicas y blandas de cada participantes con el fin de identificar y validar los mejores perfiles.
                    </p>
                </div>
            </div>

        <div className="flex flex-row w-full items-center justify-evenly py-[30px]">
          
            <div className="flex flex-col justify-evenly items-center bg-[#F4F4F4] w-[270px] h-[520px] rounded-[10px] shadow-dark">
                <div>
                    <img src="../../src/assets/diseñador.png" alt="profile" width={"150px"} height={"150px"}/>
                </div>
                <span className="font-Inter text-[14px] font-[600] tracking-[0.01em] leading-[17px]">Diseñador UX/UI</span>
                <p className="font-Inter text-[14px] font-[500] tracking-[0.01em] leading-[17px] text-justify mx-[15px]">Un diseñador de UX/UI es un profesional que se especializa en crear la experiencia de usuario (UX) y la interfaz de usuario (UI) de productos digitales, como sitios web, aplicaciones móviles y software.</p>
                <p className="font-Inter text-[14px] font-[500] tracking-[0.01em] leading-[17px] text-justify mx-[15px]">El objetivo principal de un diseñador de UX/UI es garantizar que el producto sea fácil de usar, intuitivo y visualmente atractivo.</p>
            </div>


            <div className="flex flex-col justify-evenly items-center bg-[#F4F4F4] w-[270px] h-[520px] rounded-[10px] shadow-dark">
                <div>
                    <img src="../../src/assets/product_manager.png" alt="profile" width={"150px"} height={"150px"}/>
                </div>
                <span className="font-Inter text-[14px] font-[600] tracking-[0.01em] leading-[17px]">Product Manager</span>
                <p className="font-Inter text-[14px] font-[500] tracking-[0.01em] leading-[17px] text-justify mx-[15px]">Un Product Manager es un profesional responsable de liderar un equipo y administrar los recursos y actividades necesarios para completar un proyecto específico dentro de un marco de tiempo y presupuesto establecidos.</p>
                <p className="font-Inter text-[14px] font-[500] tracking-[0.01em] leading-[17px] text-justify mx-[15px]">El PM garantiza que el proyecto se complete con éxito, cumpliendo con los objetivos y requisitos establecidos por las partes interesadas.</p>
            </div>


            <div className="flex flex-col justify-evenly items-center bg-[#F4F4F4] w-[270px] h-[520px] rounded-[10px] shadow-dark">
                <div>
                    <img src="../../src/assets/frontend.png" alt="profile" width={"150px"} height={"150px"}/>
                </div>
                <span className="font-Inter text-[14px] font-[600] tracking-[0.01em] leading-[17px]">Desarrollo Front End</span>
                <p className="font-Inter text-[14px] font-[500] tracking-[0.01em] leading-[17px] text-justify mx-[15px]">Es un profesional de tecnología de la información que se enfoca en el diseño, desarrollo y mantenimiento de la parte visual y funcional de un sitio web o aplicación.</p>
                <p className="font-Inter text-[14px] font-[500] tracking-[0.01em] leading-[17px] text-justify mx-[15px]">El objetivo principal de un desarrollador front-end es garantizar que la interfaz de usuario sea atractiva, fácil de usar y esté optimizada para diferentes dispositivos y navegadores.</p>
            </div>


            <div className="flex flex-col justify-evenly items-center bg-[#F4F4F4] w-[270px] h-[520px] rounded-[10px] shadow-dark">
                <div>
                    <img src="../../src/assets/backend.png" alt="profile" width={"150px"} height={"150px"}/>
                </div>
                <span className="font-Inter text-[14px] font-[600] tracking-[0.01em] leading-[17px]">Desarrollo Back End</span>
                <p className="font-Inter text-[14px] font-[500] tracking-[0.01em] leading-[17px] text-justify mx-[15px]">Un desarrollador backend es un profesional de tecnología de la información que se enfoca en la creación y mantenimiento de la lógica del servidor de una aplicación o sitio web.</p>
                <p className="font-Inter text-[14px] font-[500] tracking-[0.01em] leading-[17px] text-justify mx-[15px]">El objetivo principal de un desarrollador backend es crear y mantener la lógica del servidor de una aplicación o sitio web.</p>
            </div>


            <div className="flex flex-col justify-evenly items-center bg-[#F4F4F4] w-[270px] h-[520px] rounded-[10px] shadow-dark">
                <div>
                    <img src="../../src/assets/qa_tester.png" alt="profile" width={"150px"} height={"150px"}/>
                </div>
                <span className="font-Inter text-[14px] font-[600] tracking-[0.01em] leading-[17px]">QA Tester</span>
                <p className="font-Inter text-[14px] font-[500] tracking-[0.01em] leading-[17px] text-justify mx-[15px]">Un QA tester, se encarga de probar y evaluar la calidad de un software o aplicación antes de su lanzamiento, trabajan en estrecha colaboración con los desarrolladores de software y otros miembros del equipo de desarrollo.</p>
                <p className="font-Inter text-[14px] font-[500] tracking-[0.01em] leading-[17px] text-justify mx-[15px]">El objetivo principal de un QA tester es asegurarse de que la aplicación o software cumpla con los requisitos del usuario, funcione sin errores y tenga una alta calidad.</p>
            </div>


        </div>

        </div>
    )
}

export default Section_2;