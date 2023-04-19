import React from "react";
import { Link } from 'react-router-dom';
import SearchBar from "./Searchbar";

function Users() {
    return (
        <div className="border-2 border-black w-full h-[750px]">
            <div className="w-auto h-auto flex justify-center content-center items-center">
                <div className="items-center py-[10px]">
                    <h2 className="z-0 font-Inter text-[24px] font-[600]">Ususarios</h2>
                    <div className="z-10 w-[115px] h-[11px] bg-verde-nc mt-[-15px]"></div>
                </div>
            </div>


            <div className="border-2 border-red-500 w-full">
                <SearchBar />
            </div>


            <div className="grid grid-cols-1 gap-2 justify-evenly w-full">
                <div className="flex fle-row justify-around items-center rounded-[4px] border-2 border-morado-3-nc">
                    <div className="flex flex-row w-auto justify-center items-center">
                        <img src="../../src/assets/participante.png" alt="pic" className="" />
                        <label for="student_1" className="font-Inter text-[16px] font-[400] tracking-[-0.03em] leading-[19px] hover:text-primary">
                            <Link to={'/perfil'}>Diego Alberto Juarez Ramirez</Link>
                        </label>
                    </div>

                    <img src="../../src/assets/user.png" alt="pic" title="Team Leader" className="" width={"18px"} height={"18px"} />

                    <span className="font-Inter text-[16px] font-[600] tracking-[-0.03em] leading-[19px]">Nombre del Cohorte</span>
                    <button>
                        <img src="../../src/assets/delete_2.png" alt="trash" className="" width={"18px"} height={"18px"} />
                    </button>
                </div>



            </div>
        </div>
    )
}

export default Users;