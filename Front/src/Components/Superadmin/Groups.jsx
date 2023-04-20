import React from "react";
import { Link } from "react-router-dom";
import SearchBar from "./Searchbar";

function Groups() {
    return (
        <div className="border-2 border-black w-full h-[750px]">
            <div className="w-auto h-auto flex justify-center content-center items-center">
                <div className="items-center py-[10px]">
                    <h2 className="z-0 font-Inter text-[24px] font-[600]">Grupos</h2>
                    <div className="z-10 w-[85px] h-[11px] bg-verde-nc mt-[-15px]"></div>
                </div>
            </div>
            
                <div className="w-full">
                    <SearchBar />
                </div>

                <div>
                    <div className="flex fle-row justify-around items-center rounded-[4px] border-2 border-morado-3-nc h-[80px]">
                        <div className="flex flex-row w-auto justify-center items-center">
                            <label for="cohorte" className="font-Inter text-[16px] font-[400] tracking-[-0.03em] leading-[19px] text-primary">
                                <Link to={'/perfil'}><u>Nombre de Cohorte</u></Link>
                            </label>
                        </div>

                        <div className="flex flex-row">
                            <img src="../../src/assets/participante.png" alt="pic" className="z-0"/>
                            <img src="../../src/assets/participante.png" alt="pic" className="z-10 ml-[-15px]"/>
                            <img src="../../src/assets/participante.png" alt="pic" className="z-20 ml-[-15px]"/>
                            <img src="../../src/assets/participante.png" alt="pic" className="z-30 ml-[-15px]"/>
                            <img src="../../src/assets/participante.png" alt="pic" className="z-40 ml-[-15px]"/>
                       </div>

                        <div className="flex flex-col justify-center items-center">
                         <span className="font-Inter text-[16px] font-[600] tracking-[-0.03em] leading-[19px]">Team Leader</span>
                         <div className="w-[15px] h-[15px] bg-[#2E9F47] rounded-full"></div>
                        </div>
                        <button>
                            <img src="../../src/assets/delete_2.png" alt="trash" className="" width={"18px"} height={"18px"} />
                        </button>
                    </div>
                </div>
            

        </div>
    )
}

export default Groups;