import React from "react";

function Section_4() {
    return (
        <div id="section_4" className="flex flex-col w-full h-[1200px] justify-around px-[20px] py-[30px] items-center bg-verticales">

            <div className="flex flex-col justify-center items-center">
                <div>
                    <p className="font-Roboto text-[56px] font-[600] tracking-[0.01em] leading-[84x] whitespace-normal">Verticales</p>
                </div>
                <div className="w-4/5">
                    <p className="font-Inter text-[24px] font-[500] tracking-[0.01em] leading-[26px] text-center">
                        Contamos con las verticales Web App y No-Code, cada una representa una modalidad de trabajo distinta con los miembros del equipo, conoce las diferencias.
                    </p>
                </div>
            </div>


            <div className="flex flex-col justify-evenly w-full h-[440px] border-2 border-primary rounded-[10px]">

                <div className="px-[50px]">
                    <h2 className="z-0 font-Roboto text-[36px] font-[600] tracking-[0.01em]">Web App</h2>
                    <div className="z-10 w-[180px] h-[17px] bg-morado-1-nc mt-[-25px]"></div>
                </div>

                <div className="flex justify-center px-[50px] items-center text-justify">
                    <p className="font-Inter text-[14px] font-[400] tracking-[0.01em] leading-[17px]">
                        La modalidad de la vertical Web/app <span className="font-[600]">trabajas en un equipo multidisciplinario&nbsp;</span> 
                        (Project Manager, Team Leader, Desarrolladores, Diseñador UX/UI, QA Tester).
                        El Project Manager es responsable de coordinar entre las distintas áreas del proyecto ( Back-End, Front-End, UXUI, Testing, DevOps ) y asegurar que se cumplan los objetivos del proyecto y los plazos establecidos.
                    </p>
                </div>

                <div className="flex px-[70px] items-center text-justify">
                    <ul className="list-disc">
                        <li>
                            En web/app desarrollan un proyecto desde 0.
                        </li>

                        <li>
                        En web/app el ux-ui estará solo con los demás roles trabajando en conjunto.
                        </li>
        
                    </ul>
                </div>

                <div className="flex justify-center">
                    <img src="../../public/test_tree_s4-removed.png" alt="webapp" />
                </div>
            </div>






            <div className="flex flex-col justify-evenly w-full h-[440px] border-2 border-primary rounded-[10px]">

                <div className="px-[50px] py-[10px]">
                    <h2 className="z-0 font-Roboto text-[36px] font-[600] tracking-[0.01em]">No Code</h2>
                    <div className="z-10 w-[180px] h-[17px] bg-morado-1-nc mt-[-25px]"></div>
                </div>

                <div className="flex justify-center px-[50px] items-center text-justify">
                    <p className="font-Inter text-[14px] font-[400] tracking-[0.01em] leading-[17px]">
                        La modalidad No Code se trabaja en <span className="font-[600]">grupos de 12 perfiles que tendrán el mismo requerimiento&nbsp;</span> 
                        de proyecto propuesto por No Country. El grupo estará formado por 7-9 No Code developers y 3 UX/UI designer.
                        <br /> <br />
                       
                        <span className="font-[600]">Cada UX/UI designer conformará 3 duplas junto a No Code developers, donde se encargará de realizar 3 diseños diferentes sobre el mismo requerimiento.</span> 
                    </p>
                </div>
                <br />

                <div className="flex px-[70px] items-center text-justify">
                    <ul className="list-disc">
                        <li>
                            Se trabaja con la plataforma Bubble o Adalo las cuales les permiten hacer el trabajo de 10 personas en una sola ya que no se trabaja con código.
                        </li>

                        <li>
                            Recomendado para quienes quieran tomar el desafío de mostrar su creatividad y rapidez para trabajar.
                        </li>
        
                    </ul>
                </div>

                <div className="flex justify-center">
                    <img src="../../public/test_nocode-removed.png" alt="nocode" />
                </div>
            </div>

        </div>
    )
}


export default Section_4;