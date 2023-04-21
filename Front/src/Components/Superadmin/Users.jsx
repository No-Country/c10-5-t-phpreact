import React from "react";
import { Link } from 'react-router-dom';
import SearchBar from "./Searchbar";
import { studentNames2 } from "../Dashboard/form_data";

function Users() {
    return (
        <div id="users-groups-main" className="w-full h-[750px] overflow-x-auto">
            <div className="w-auto h-auto flex justify-center content-center items-center">
                <div className="items-center py-[15px]">
                    <h2 className="z-0 font-Inter text-[24px] font-[600]">Ususarios</h2>
                    <div className="z-10 w-[115px] h-[11px] bg-verde-nc mt-[-15px]"></div>
                </div>
            </div>


            {/* <div className="flex justify-end w-full">
                <SearchBar />
            </div> */}

            <div class="relative overflow-x-auto w-full">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <tbody>
                        {studentNames2.map((e, index) => (
                            <tr class="bg-white border-2 border-morado-3-nc border-spacing-2">
                                <th scope="row" class="flex flex-row items-center px-6 py-4 font-Inter text-[16px] font-[400] tracking-[-0.03em] leading-[19px] text-primary">
                                    <img src={e.image} alt="pic" className="" />
                                    <Link to={'/perfil'} className="px-[5px]"><u>{e.nombre}</u></Link>
                                </th>

                                <td class="px-6 py-4">
                                    <img src="../../public/user.png" alt="pic" title="Team Leader" className="" width={"18px"} height={"18px"} />
                                </td>

                                <td class="px-6 py-4">
                                    <span className="font-Inter text-[16px] font-[600] tracking-[-0.03em] leading-[19px]">Nombre del Cohorte</span>
                                </td>

                                <td class="px-6 py-4">
                                    <button>
                                        <img src="../../public/delete_2.png" alt="trash" className="" width={"18px"} height={"18px"} />
                                    </button>
                                </td>

                            </tr>
                        ))}

                    </tbody>
                </table>
            </div>


            {/* <div className="grid grid-cols-1 gap-2 justify-evenly w-full">
                <div className="flex fle-row justify-around items-center rounded-[4px] border-2 border-morado-3-nc">

                {studentNames2.map((e, index) => (
                    <div className="flex flex-row justify-evenly items-center rounded-[4px] border-2 border-morado-3-nc" key={index}>
                        <div className="flex flex-row justify-center items-center">
                            <img src="../../public/participante.png" alt="pic" className="" />
                            <label for="student_1" className="font-Inter text-[16px] font-[400] tracking-[-0.03em] leading-[19px] hover:text-primary">
                                <Link to={'/perfil'}>{e.nombre}</Link>
                            </label>
                        </div>

                        <img src="../../public/user.png" alt="pic" title="Team Leader" className="" width={"18px"} height={"18px"} />

                        <span className="font-Inter text-[16px] font-[600] tracking-[-0.03em] leading-[19px]">Nombre del Cohorte</span>
                        <button>
                            <img src="../../public/delete_2.png" alt="trash" className="" width={"18px"} height={"18px"} />
                        </button>
                    </div>
                ))}

                </div>

            </div> */}
        </div>
    )
}

export default Users;