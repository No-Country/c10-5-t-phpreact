import { configureStore } from '@reduxjs/toolkit'
import { testCounterSlice } from './counter-test'
<<<<<<< HEAD
import { getAllTeams } from './getTeams'
=======
import { currentCoursesSlice } from './currentCourses'
import { finishedCoursesSlice } from './finishedCourses'
>>>>>>> 6f85999c3b12fed1bce195693e4729b72b1a700e

export const store = configureStore({
  reducer: {
    dog: testCounterSlice.reducer,
<<<<<<< HEAD
    getTeams: getAllTeams.reducer
=======
    current: currentCoursesSlice.reducer,
    finished: finishedCoursesSlice.reducer
>>>>>>> 6f85999c3b12fed1bce195693e4729b72b1a700e
  },
})

//// SE TIENE QUE IMPORTAR TODO "SLICE" AL OBJETO REDUCER(STORE GLOBAL). DARLE NOMBRE CUALQUIERA AL KEY Y NOMBRE DE REDUCER AL VALUE ////