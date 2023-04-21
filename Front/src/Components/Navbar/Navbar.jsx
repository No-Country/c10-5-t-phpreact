import React, { useState, useEffect } from "react";
import { Navigate, useNavigate, Link } from "react-router-dom";

function Navbar() {

    const [url, setUrl] = useState(false)
    // const navigate = useNavigate()

    

    useEffect(() => {

        function getCurrentURL() {
            return window.location.origin
        }
        const urls = getCurrentURL()
        if (urls + "/activos" === window.location.href
             || urls + "/dashboard" === window.location.href 
             || urls + "/reportes" === window.location.href
             || urls + "/superDashboard" === window.location.href
             ) {
            setUrl(true)
        } else {
            setUrl(false)
        }
        console.log(urls, url)
    }, [url])

    return (
        <div>
            <nav className="flex bg-primary h-[112px] items-center">
                <ul className="flex flex-row justify-between items-center w-full px-[15px]">
                    <a href="/">
                        <div className="flex flex-row items-center">
                            <img src="../../Puzzle_NC.png" alt="NC_Logo" className="px-[10px]" />
                            <li className="font-Geogrotesque text-[60px] font-[600] text-white px-[10px] tracking-[-0.03em]">TeamBoard</li>
                        </div>
                    </a>

                    <div className="flex flex-row justify-around items-center w-[600px] font-Roboto text-[20px] font-[500] text-text-color-white">
                        {url ?
                            <div className="flex flex-row justify-around items-center w-[600px]">
                                <li><a href="/dashboard">Asistencia</a></li>
                                <li><a href="/reportes">Reportes</a></li>

                                <a href="/login">
                                    <button className="bg-[#5173EB] w-[161px] h-[56px] rounded-[10px] shadow-dark">Cerrar Sesion</button>
                                </a>

                                {/* <a href="/superDashboard">
                                    <button className="bg-verde-nc text-black w-[161px] h-[56px] rounded-[10px] shadow-dark">Admin</button>
                                </a> */}
                            </div>
                            
                            :

                            <div className="flex flex-row justify-around items-center w-[600px]">
                                <li><a href="#section_4">Roles</a></li>
                                <li><a href="#section_4">Verticales</a></li>
                                <li><a href="#section_5">Preguntas Frecuentes</a></li>

                                <a href="/login">
                                    <button className="bg-[#5173EB] w-[161px] h-[56px] rounded-[10px] shadow-dark">Plataforma</button>
                                </a>
                            </div>


                        }


                        {/* <a href="/login">
                            <button className="bg-[#5173EB] w-[161px] h-[56px] rounded-[10px] shadow-dark">Plataforma</button>
                        </a> */}
                    </div>
                </ul>
            </nav>
        </div>
    )
}

export default Navbar;