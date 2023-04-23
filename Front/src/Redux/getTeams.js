import { createSlice } from "@reduxjs/toolkit";
import axios from 'axios';


export const getAllTeams = createSlice({
    //// NOMBRE DEL SLICE PARA IDENTIFICARLO DE OTROS SLICES ////
    name: "getAllTeams",

    //// ESTO ES EL ESTADO GLOBAL DE ESTE SLICE. AQUI TENDREMOS TODAS NUESTRAS VARIABLES A LLAMAR ////
    initialState: {
        teams: []
    },

    // EL REDUCER GUARDA LAS ACCIONES QUE SE EJECUTAN PARA MODIFICAR UN ESTADO GLOBAL EN PARTICULAR ////
    reducers: {
        //// ESTAS SON LAS ACTIONS. AQUI VA LA LOGICA DE LO QUE QUEREMOS HACER CON NUESTRAS VARIABLES ////
        fetchTeams: (state, action) => { state.teams = action.payload }
    },
 
})


export const getTeamData = (data) => async (dispatch) => {
    try {
        const response = await axios.get('https://teamboard.fly.dev/api/teams');
        dispatch(fetchTeams(response.data));
    } catch (err) {
        throw new Error(err);
    }
}


//// SE TIENEN QUE EXPORTAR LAS ACTIONS PARA USARLAS ////
export const { fetchTeams } = getAllTeams.actions


//// TAMBIEN SE TIENE QUE EXPORTAR EL "SLICE" PARA LLAMARLO ////
export default getAllTeams.reducer