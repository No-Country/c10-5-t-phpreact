import React from "react";

function Dashboard() {
    return (
        <div className="flex flex-col w-full h-auto justify-around px-[20px] py-[30px] items-center">
            <div className="flex flex-row justify-around items-center w-11/12 h-[180px] bg-morado-3-nc rounded-[10px]">
                <div className="flex flex-col w-[400px] h-[130px]">
                    <h2 className="font-Inter text-[14px] font-[600] tracking-[-0.03em] leading-[60px]">
                        Teamboard-Gestión de asistencias
                    </h2>

                    <div className="flex flex-row w-full justify-between">
                    <select name="" id="" className="flex flex-row h-[40px] w-[100px] border-[1px] border-primary items-center rounded-[10px]">
                        <option selected className="flex flex-row items-center justify-around border-2 border-primary">Fecha</option>
                    </select>

                    <select name="" id="" className="flex flex-row h-[40px] w-[100px] items-center border-[1px] border-primary rounded-[10px]">
                        <option selected className="flex flex-row items-center justify-around">Grupo</option>
                    </select>

                    <select name="" id="" className="flex flex-row h-[40px] w-[100px] items-center border-[1px] border-primary rounded-[10px]">
                        <option selected className="flex flex-row items-center justify-around">Semana</option>
                    </select>

                    </div>
                </div>


                <div className="flex flex-col w-[480px] h-[130px]">
                    <h2 className="font-Inter text-[14px] font-[600] tracking-[-0.03em] leading-[45px] px-[15px]">
                        Aspectos a Evaluar
                    </h2>

                   <div className="grid grid-cols-3 gap-4 justify-center items-center">
                        <div className="flex flex-row justify-evenly items-center">
                            <input type="radio" className="w-[20px] h-[20px]" />
                            <label for="student_1" className="font-Inter text-[16px] font-[400] tracking-[-0.03em]">
                                Colaboración
                            </label>
                        </div>

                        <div className="flex flex-row justify-evenly items-center">
                            <input type="radio" className="w-[20px] h-[20px]" />
                            <label for="student_1" className="font-Inter text-[16px] font-[400] tracking-[-0.03em]">
                                Colaboración
                            </label>
                        </div>

                        <div className="flex flex-row justify-evenly items-center">
                            <input type="radio" className="w-[20px] h-[20px]" />
                            <label for="student_1" className="font-Inter text-[16px] font-[400] tracking-[-0.03em]">
                                Colaboración
                            </label>
                        </div>

                        <div className="flex flex-row justify-evenly items-center">
                            <input type="radio" className="w-[20px] h-[20px]" />
                            <label for="student_1" className="font-Inter text-[16px] font-[400] tracking-[-0.03em]">
                                Colaboración
                            </label>
                        </div>

                        <div className="flex flex-row justify-evenly items-center">
                            <input type="radio" className="w-[20px] h-[20px]" />
                            <label for="student_1" className="font-Inter text-[16px] font-[400] tracking-[-0.03em]">
                                Colaboración
                            </label>
                        </div>

                        <div className="flex flex-row justify-evenly items-center">
                            <input type="radio" className="w-[20px] h-[20px]" />
                            <label for="student_1" className="font-Inter text-[16px] font-[400] tracking-[-0.03em]">
                                Colaboración
                            </label>
                        </div>
                       
                   </div>

                </div>


                <div className="flex flex-row justify-evenly w-[220px] h-[130px]">
                    <div className="flex flex-col items-center">
                        <h2 className="font-Inter text-[14px] font-[600] tracking-[-0.03em] leading-[60px]">
                            Participantes
                        </h2>
                       <div className="flex flex-row">
                            <img src="../../src/assets/participante.png" alt="pic" className="z-0"/>
                            <img src="../../src/assets/participante.png" alt="pic" className="z-10 ml-[-15px]"/>
                            <img src="../../src/assets/participante.png" alt="pic" className="z-20 ml-[-15px]"/>
                            <img src="../../src/assets/participante.png" alt="pic" className="z-30 ml-[-15px]"/>
                            <img src="../../src/assets/participante.png" alt="pic" className="z-40 ml-[-15px]"/>
                       </div>
                    </div>

                    <div className="flex flex-col items-center">
                        <h2 className="font-Inter text-[14px] font-[600] tracking-[-0.03em] leading-[60px]">
                            Estados
                        </h2>

                        <div className="w-[18px] h-[18px] bg-[#2E9F47] rounded-full"></div>
                    </div>
                </div>
            </div>




            <div className="flex flex-row w-11/12 h-[600px] justify-between py-[30px] items-center">
                <div className="flex flex-col items-center w-[650px] h-[500px] rounded-[10px] border-2 border-morado-3-nc py-[10px]">
                    <div className="flex flex-row justify-around items-center w-full h-[40px]">
                        <h2 className="font-Inter text-[16px] font-[600] tracking-[-0.03em] leading-[19px] w-[200px]">Participantes</h2>
                        <h2 className="font-Inter text-[16px] font-[600] tracking-[-0.03em] leading-[19px]">Justificación</h2>
                        <h2 className="font-Inter text-[16px] font-[600] tracking-[-0.03em] leading-[19px]">Asistencia</h2>
                    </div>

                    <div className="flex flex-col justify-around items-center w-full h-[400px] mr-[30px]">
                        <div className="flex flex-row justify-around items-center w-full">
                            <label for="student_1" className="font-Inter text-[16px] font-[400] tracking-[-0.03em] leading-[19px] w-[200px]">
                                Student_1
                            </label>
                            <input type="radio" className="w-[20px] h-[20px]"/>
                            <div className="w-[18px] h-[18px] bg-gris-desactivado rounded-full"></div>
                            
                        </div>

                        <div className="flex flex-row justify-around items-center w-full">
                            <label for="student_1" className="font-Inter text-[16px] font-[400] tracking-[-0.03em] leading-[19px] w-[200px]">
                                Student_1
                            </label>
                            <input type="radio" className="w-[20px] h-[20px]"/>
                            <div className="w-[18px] h-[18px] bg-gris-desactivado rounded-full"></div>
                            
                        </div>

                        <div className="flex flex-row justify-around items-center w-full">
                            <label for="student_1" className="font-Inter text-[16px] font-[400] tracking-[-0.03em] leading-[19px] w-[200px]">
                                Student_1
                            </label>
                            <input type="radio" className="w-[20px] h-[20px]"/>
                            <div className="w-[18px] h-[18px] bg-gris-desactivado rounded-full"></div>
                            
                        </div>

                        <div className="flex flex-row justify-around items-center w-full">
                            <label for="student_1" className="font-Inter text-[16px] font-[400] tracking-[-0.03em] leading-[19px] w-[200px]">
                                Student_1
                            </label>
                            <input type="radio" className="w-[20px] h-[20px]"/>
                            <div className="w-[18px] h-[18px] bg-gris-desactivado rounded-full"></div>
                            
                        </div>

                        <div className="flex flex-row justify-around items-center w-full">
                            <label for="student_1" className="font-Inter text-[16px] font-[400] tracking-[-0.03em] leading-[19px] w-[200px]">
                                Student_1
                            </label>
                            <input type="radio" className="w-[20px] h-[20px]"/>
                            <div className="w-[18px] h-[18px] bg-gris-desactivado rounded-full"></div>
                            
                        </div>
                    </div>
                </div>

                <div className="flex flex-col justify-between items-center w-[650px] h-[500px] rounded-[10px]">
                    <div className="flex flex-col justify-evenly items-center w-[650px] h-[390px] rounded-[10px] border-2 border-morado-3-nc">
                        <div className="w-[550px]">
                            <h2 className="font-Inter text-[16px] font-[600] tracking-[-0.03em] leading-[19px]">Observaciones</h2>
                        </div>

                        <div className="flex flex-col">
                            <label className="font-Inter text-[14px] font-[500] tracking-[-0.03em]">Feedback Semanal</label>
                            <textarea name="" id="" cols="30" rows="10" className="h-[108px] w-[550px] rounded-[4px] border-2 border-desactivado"></textarea>
                        </div>

                        <div className="flex flex-col">
                            <label className="font-Inter text-[14px] font-[500] tracking-[-0.03em]">Objetivos para proximo sprint</label>
                            <textarea name="" id="" cols="30" rows="10" className="h-[108px] w-[550px] rounded-[4px] border-2 border-desactivado"></textarea>
                        </div>
                    </div>

                    <div className="flex-flex-row w-full items-center h-[90px] rounded-[10px] border-2 border-morado-3-nc">

                        <div className="flex flex-row w-full h-full justify-evenly items-center">
                            <h2 className="font-Inter text-[16px] font-[600] tracking-[-0.03em] leading-[19px">Valoracion del sprint finalizado</h2>
                            <div className="flex flex-row items-center">
                            <img src="../../src/assets/star_white.png" alt="star" />
                            <img src="../../src/assets/star_white.png" alt="star" />
                            <img src="../../src/assets/star_white.png" alt="star" />
                            <img src="../../src/assets/star_white.png" alt="star" />
                            <img src="../../src/assets/star_white.png" alt="star" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div className="flex justify-evenly mr-auto w-[380px] py-[5px] ml-[45px]">
                <button className="bg-white w-[161px] h-[45px] rounded-[10px] shadow-dark font-Inter text-[15px] font-[500] text-primary tracking-[-0.03em] ">
                    Cancelar
                </button>

                <button className="bg-primary w-[161px] h-[45px] rounded-[10px] shadow-dark font-Inter text-[15px] font-[500] text-text-color-white tracking-[-0.03em]">
                    Enviar
                </button>
            </div>

        </div>
    )
}

export default Dashboard;