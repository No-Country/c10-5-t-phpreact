import React from "react";
import Users from "./Users";
import Groups from "./Groups";

function SuperDashboard(){
    return(
        <div className="flex flex-row w-full h-auto justify-evenly px-[20px] py-[30px] items-center border-4 border-verde-nc">
            <Users />
            <Groups />  
        </div>
    )
}

export default SuperDashboard;