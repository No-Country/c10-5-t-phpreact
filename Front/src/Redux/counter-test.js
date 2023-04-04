import { createSlice } from "@reduxjs/toolkit";

export const testCounterSlice = createSlice({
    //// NOMBRE DEL SLICE PARA IDENTIFICARLO DE OTROS SLICES ////
    name: "testCounter",

    //// ESTO ES EL ESTADO GLOBAL DE ESTE SLICE. AQUI TENDREMOS TODAS NUESTRAS VARIABLES A LLAMAR ////
    initialState: {
        testValue: 0
    },

    // EL REDUCER GUARDA LAS ACCIONES QUE SE EJECUTAN PARA MODIFICAR UN ESTADO GLOBAL EN PARTICULAR ////
    reducers: {
        //// ESTAS SON LAS ACTIONS. AQUI VA LA LOGICA DE LO QUE QUEREMOS HACER CON NUESTRAS VARIABLES ////
        increment: (state) => { state.testValue += 1 },
        decrement: (state) => { state.testValue -= 1 },
        incrementByAmount: (state, action) => { state.testValue += action.payload }
    },
 
})


//// SE TIENEN QUE EXPORTAR LAS ACTIONS PARA USARLAS ////
export const { increment, decrement, incrementByAmount } = testCounterSlice.actions


//// TAMBIEN SE TIENE QUE EXPORTAR EL "SLICE" PARA LLAMARLO ////
export default testCounterSlice.reducer