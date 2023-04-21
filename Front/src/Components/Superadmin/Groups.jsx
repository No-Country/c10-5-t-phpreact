import React, { useEffect } from "react";
import { Link } from "react-router-dom";
import { useSelector, useDispatch } from 'react-redux'
import SearchBar from "./Searchbar";
import { getTeamData } from "../../Redux/getTeams";



function Groups() {

    const teamsData = useSelector((state) => state.getTeams.teams.data)
    const dispatch = useDispatch()

    useEffect(() => {
        dispatch(getTeamData())
        console.log(teamsData)
    }, [])

    return (
        <div className="w-full h-[750px] overflow-x-auto">
            <div className="w-auto h-auto flex justify-center content-center items-center">
                <div className="items-center py-[15px]">
                    <h2 className="z-0 font-Inter text-[24px] font-[600]">Grupos</h2>
                    <div className="z-10 w-[85px] h-[11px] bg-verde-nc mt-[-15px]"></div>
                </div>
            </div>

            {/* <div className="flex justify-end w-full">
                    <SearchBar />
                </div> */}


            <div class="relative overflow-x-auto w-full">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <tbody>
                        {teamsData?.map((e, index) => (
                            <tr class="bg-white border-2 border-morado-3-nc border-spacing-2">
                                <th scope="row" class="px-6 py-4 font-Inter text-[16px] font-[400] tracking-[-0.03em] leading-[19px] text-primary">
                                    <Link to={'/perfil'}><u>{e.attributes.name}</u></Link>
                                </th>
                                <td class="px-6 py-4">
                                    <div className="flex flex-row">
                                        <img src="../../participante.png" alt="pic" className="z-0" />
                                        <img src="../../participante.png" alt="pic" className="z-10 ml-[-15px]" />
                                        <img src="../../participante.png" alt="pic" className="z-20 ml-[-15px]" />
                                        <img src="../../participante.png" alt="pic" className="z-30 ml-[-15px]" />
                                        <img src="../../participante.png" alt="pic" className="z-40 ml-[-15px]" />
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <div className="flex flex-col justify-center items-center">
                                        <span className="font-Inter text-[16px] font-[600] tracking-[-0.03em] leading-[19px]">Team Leader</span>
                                        <div className="w-[15px] h-[15px] bg-[#2E9F47] rounded-full"></div>
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <button>
                                        <img src="../../delete_2.png" alt="trash" className="" width={"18px"} height={"18px"} />
                                    </button>
                                </td>
                            </tr>
                        ))}

                    </tbody>
                </table>
            </div>

        </div>
    )
}

export default Groups;