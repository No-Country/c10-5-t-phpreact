import { createSlice } from "@reduxjs/toolkit";

export const currentCoursesSlice = createSlice({
  //// NOMBRE DEL SLICE PARA IDENTIFICARLO DE OTROS SLICES ////
  name: "currentCourses",

  //// ESTO ES EL ESTADO GLOBAL DE ESTE SLICE. AQUI TENDREMOS TODAS NUESTRAS VARIABLES A LLAMAR ////
  initialState: [],

  // EL REDUCER GUARDA LAS ACCIONES QUE SE EJECUTAN PARA MODIFICAR UN ESTADO GLOBAL EN PARTICULAR ////
  reducers: {
    //// ESTAS SON LAS ACTIONS. AQUI VA LA LOGICA DE LO QUE QUEREMOS HACER CON NUESTRAS VARIABLES ////
    getCurrentCourses: (state, action) => action.payload,
  },
});

//// SE TIENEN QUE EXPORTAR LAS ACTIONS PARA USARLAS ////
export const { getCurrentCourses } = currentCoursesSlice.actions;

//// TAMBIEN SE TIENE QUE EXPORTAR EL "SLICE" PARA LLAMARLO ////
export default getCurrentCourses.reducer;
