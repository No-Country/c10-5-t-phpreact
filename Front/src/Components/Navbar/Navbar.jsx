import React from "react";
import { Link } from "react-router-dom";

function Navbar() {
    return (
        <div>
            <nav className="flex bg-primary h-[112px] items-center">
                <ul className="flex flex-row justify-between items-center w-full px-[15px]">
                    <div className="flex flex-row items-center">
                        <img src="../../src/assets/Puzzle_NC.png" alt="NC_Logo" className="px-[10px]"/>
                        <li className="font-Geogrotesque text-[60px] font-[600] text-white px-[10px] tracking-[-0.03em]">No Country</li>
                    </div>

                    <div className="flex flex-row justify-around items-center border-black w-[600px] font-Roboto text-[20px] font-[500] text-text-color-white">
                        <li>Roles</li>

                        <li>Verticales</li>

                        <li>Preguntas Frecuentes</li>

                        <button className="bg-[#5173EB] w-[161px] h-[56px] rounded-[12px] shadow-dark">Plataforma</button>
                    </div>
                </ul>
            </nav>
        </div>
    )
}

export default Navbar;