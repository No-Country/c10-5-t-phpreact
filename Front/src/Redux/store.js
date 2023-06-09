import { configureStore } from '@reduxjs/toolkit'
import { testCounterSlice } from './counter-test'
import { getAllTeams } from './getTeams'
import { currentCoursesSlice } from './currentCourses'
import { finishedCoursesSlice } from './finishedCourses'

export const store = configureStore({
  reducer: {
    dog: testCounterSlice.reducer,
    getTeams: getAllTeams.reducer,
    current: currentCoursesSlice.reducer,
    finished: finishedCoursesSlice.reducer
  },
})

//// SE TIENE QUE IMPORTAR TODO "SLICE" AL OBJETO REDUCER(STORE GLOBAL). DARLE NOMBRE CUALQUIERA AL KEY Y NOMBRE DE REDUCER AL VALUE ////