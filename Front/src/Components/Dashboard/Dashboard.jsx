import React, { useState } from "react";
import { aspectos, studentNames, studentNames2, getIndex } from "./form_data";
import Ratings from 'react-ratings-declarative';
import StarRatings from 'react-star-ratings';
import './Dashboard.css'

function Dashboard() {

    
    // const [rating, setRating] = useState(0)
    const [input, setInput] = useState({
        aspectos: [],
        participantes: [...studentNames2],
        feedback: "",
        observaciones: "",
        rating: 0
    })

    function handleText(e){
        setInput({
            ...input,
            [e.target.name]: e.target.value
        })
    }

    function handleJustification(e){
        let index = getIndex(input.participantes, "nombre", e.target.name)
        
        if(e.target.checked){
            let item = input.participantes[index].justificacion = true
            setInput({
                ...input,
                participantes: [...input.participantes],
            })
           } else{
            let item = input.participantes[index].justificacion = false
            setInput({
                ...input,
                participantes: [...input.participantes],
            })
           }
    }

    function handleAssistance(e){
        let index = getIndex(input.participantes, "nombre", e.target.name)
        
        if(e.target.checked){
            let item = input.participantes[index].asistencia = true
            setInput({
                ...input,
                participantes: [...input.participantes],
            })
           } else{
            let item = input.participantes[index].asistencia = false
            setInput({
                ...input,
                participantes: [...input.participantes],
            })
           }
    }


    function getChecked(e){
       if(e.target.checked){
        setInput({
            ...input,
            aspectos:[...input.aspectos, e.target.name]
        })
       } else{
        setInput({
            ...input,
            aspectos: input.aspectos.filter((v) => v !== e.target.name),
        })
       }
 
    }

    function handleSubmit(e){
        e.preventDefault()
        console.log(input)
    }

    function handleCancel(e){
        e.preventDefault()
        window.location.reload(false);
    }

    const [color, setColor] = useState("")
    const styles = {
        empty:{
            display: 'flex',
            flexDirection: 'row',
            justifyContent: 'center',
            width: '200px',
            border: '1px solid black'
        },

        filled:{
            display: 'flex',
            flexDirection: 'row',
            justifyContent: 'center',
            width: '200px',
            // color: '#3D8DE5',
        // border: '1px solid black'
        }
    }

    function stars(e){
        if(input.rating === 1 && e === 1){
            input.rating = 0
        } else {
            input.rating = e
        }
        console.log(input)
    }

    return (
        <div className="flex flex-col w-full h-auto justify-around px-[20px] py-[30px] items-center">
            <div className="flex flex-row justify-around items-center w-11/12 h-[180px] bg-morado-3-nc rounded-[10px]">
                <div className="flex flex-col w-[400px] h-[130px]">
                    <h2 className="font-Inter text-[14px] font-[600] tracking-[-0.03em] leading-[60px]">
                        Teamboard-Gestión de asistencias
                    </h2>

                    <div className="flex flex-row w-full justify-between">
                    <select name="" id="" className="flex flex-row h-[40px] w-[100px] border-[1px] border-primary items-center rounded-[10px]">
                        <option defaultValue={false} className="flex flex-row items-center justify-around border-2 border-primary">Fecha</option>
                    </select>

                    <select name="" id="" className="flex flex-row h-[40px] w-[100px] items-center border-[1px] border-primary rounded-[10px]">
                        <option defaultValue={false} className="flex flex-row items-center justify-around">Grupo</option>
                    </select>

                    <select name="" id="" className="flex flex-row h-[40px] w-[100px] items-center border-[1px] border-primary rounded-[10px]">
                        <option defaultValue={false} className="flex flex-row items-center justify-around">Semana</option>
                    </select>

                    </div>
                </div>


                <div className="flex flex-col w-[480px] h-[130px]">
                    <h2 className="font-Inter text-[14px] font-[600] tracking-[-0.03em] leading-[45px]">
                        Aspectos a Evaluar
                    </h2>

                   <form id="main-form" className="grid grid-cols-3 gap-4 justify-center items-center">
                       
                   {aspectos.map((e, index) => (
                    <div className="flex flex-row items-center" key={index}>
                        <input type="checkbox" className="w-[20px] h-[20px]" name={e} onChange={getChecked} />
                        <label htmlFor={e} className="font-Inter text-[16px] font-[400] tracking-[-0.03em] ml-[10px]">
                            {e}
                        </label>
                    </div>
                   ))}

                     
                   </form>

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

                    <div className="relative overflow-x-auto w-full">
                        <table className="w-full text-sm text-center dark:text-gray-400">
                            <thead className="font-Inter text-[16px] font-[600] tracking-[-0.03em] leading-[19px]">
                                <tr>
                                    <th scope="col" className="px-6 py-5">
                                        Participantes
                                    </th>
                                    <th scope="col" className="px-6 py-5">
                                        Justificación
                                    </th>
                                    <th scope="col" className="px-6 py-5">
                                        Asistencia
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                {studentNames2.map((e, index) => (
                                    <tr className="" key={index}>
                                    <th scope="row" className="px-6 py-4 font-Inter text-[16px] font-[400] tracking-[-0.03em] leading-[19px]">
                                        {e.nombre}
                                    </th>
                                    <td className="px-6 py-4">
                                        <input type="checkbox" form="main-form" className="w-[20px] h-[20px] cursor-pointer" name={e.nombre} onChange={handleJustification} />
                                    </td>
                                    <td className="px-6 py-4">
                                        <input type="checkbox" form="main-form" className="checkbox-round" name={e.nombre} onChange={handleAssistance} />
                                    </td>
                                </tr>
                                ))}
                            </tbody>
                        </table>
                    </div>
                
                 </div>   





                <div className="flex flex-col justify-between items-center w-[650px] h-[500px] rounded-[10px]">
                    <div className="flex flex-col justify-evenly items-center w-[650px] h-[390px] rounded-[10px] border-2 border-morado-3-nc">
                        <div className="w-[550px]">
                            <h2 className="font-Inter text-[16px] font-[600] tracking-[-0.03em] leading-[19px]">Observaciones</h2>
                        </div>

                        <div className="flex flex-col">
                            <label className="font-Inter text-[14px] font-[500] tracking-[-0.03em]">Feedback Semanal</label>
                            <textarea name="feedback" form="main-form" value={input.feedback} onChange={handleText} cols="30" rows="10" className="h-[108px] w-[550px] rounded-[4px] border-2 border-desactivado"></textarea>
                        </div>

                        <div className="flex flex-col">
                            <label className="font-Inter text-[14px] font-[500] tracking-[-0.03em]">Objetivos para proximo sprint</label>
                            <textarea name="observaciones" form="main-form" value={input.observaciones} onChange={handleText} cols="30" rows="10" className="h-[108px] w-[550px] rounded-[4px] border-2 border-desactivado"></textarea>
                        </div>
                    </div>

                    <div className="flex-flex-row w-full items-center h-[90px] rounded-[10px] border-2 border-morado-3-nc">

                        <div className="flex flex-row w-full h-full justify-evenly items-center">
                            <h2 className="font-Inter text-[16px] font-[600] tracking-[-0.03em] leading-[19px">Valoracion del sprint finalizado</h2>
                            <div className="flex flex-row items-center">
                          
                            <StarRatings 
                                changeRating={stars}
                                numberOfStars={5}
                                starRatedColor={'#3D8DE5'}
                                starEmptyColor={'grey'}
                                starHoverColor={'#3D8DE5'}
                                starDimension={'40px'}
                            />

                
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div className="flex justify-evenly mr-auto w-[380px] py-[5px] ml-[45px]">
                <input 
                    onClick={handleCancel}
                    form="main-form"
                    value="Cancelar"
                    type="reset"
                    className="bg-white w-[161px] h-[45px] rounded-[10px] shadow-dark font-Inter text-[15px] font-[500] text-primary tracking-[-0.03em] cursor-pointer"
                />

                <input
                    onClick={handleSubmit}
                    form="main-form"
                    value="Enviar"
                    type="submit"
                    className="bg-primary w-[161px] h-[45px] rounded-[10px] shadow-dark font-Inter text-[15px] font-[500] text-text-color-white tracking-[-0.03em] cursor-pointer" 
                />
            </div>

        </div>
    )
}

export default Dashboard;