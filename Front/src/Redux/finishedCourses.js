import { createSlice } from "@reduxjs/toolkit";

export const finishedCoursesSlice = createSlice({
  //// NOMBRE DEL SLICE PARA IDENTIFICARLO DE OTROS SLICES ////
  name: "finishedCourses",

  //// ESTO ES EL ESTADO GLOBAL DE ESTE SLICE. AQUI TENDREMOS TODAS NUESTRAS VARIABLES A LLAMAR ////
  initialState: [],

  // EL REDUCER GUARDA LAS ACCIONES QUE SE EJECUTAN PARA MODIFICAR UN ESTADO GLOBAL EN PARTICULAR ////
  reducers: {
    //// ESTAS SON LAS ACTIONS. AQUI VA LA LOGICA DE LO QUE QUEREMOS HACER CON NUESTRAS VARIABLES ////
    getFinishedCourses: (state, action) => action.payload,
  },
});

//// SE TIENEN QUE EXPORTAR LAS ACTIONS PARA USARLAS ////
export const { getFinishedCourses } = finishedCoursesSlice.actions;

//// TAMBIEN SE TIENE QUE EXPORTAR EL "SLICE" PARA LLAMARLO ////
export default getFinishedCourses.reducer;
