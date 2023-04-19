import React from "react";
import {useDispatch, useSelector} from "react-redux"
import { useState } from "react";

export function SearchBar(){
const [searchWord, setSearchWord] = useState("")
const dispatch = useDispatch()

const search = useSelector(state => state)

function handleInputChange(e){
    e.preventDefault()
    setSearchWord(e.target.value)
}

function handleSubmit(e){
    e.preventDefault()
    // dispatch(getUsersFromDB(searchWord))
}
    
    return(        
        <div className="flex flex-row justify-evenly items-center py-[15px] w-[280px] border-2 border-blue-500">
            <input 
            className="w-[180px] h-[45px] rounded-[10px] shadow-dark indent-4"
            type="text" 
            placeholder="Nombre..." 
            onChange={e => handleInputChange(e)}>
            </input>
            <button 
            className="bg-primary w-[80px] h-[45px] rounded-[10px] shadow-dark font-Inter text-[15px] font-[500] text-text-color-white tracking-[-0.03em]"
            type="submit" 
            onClick={e => handleSubmit(e)}>Buscar</button>
        </div>
    )
}

export default SearchBar;