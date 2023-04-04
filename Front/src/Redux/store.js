import { configureStore } from '@reduxjs/toolkit'
import { testCounterSlice } from './counter-test'

export const store = configureStore({
  reducer: {
    dog: testCounterSlice.reducer
  },
})

//// SE TIENE QUE IMPORTAR TODO "SLICE" AL OBJETO REDUCER(STORE GLOBAL). DARLE NOMBRE CUALQUIERA AL KEY Y NOMBRE DE REDUCER AL VALUE ////