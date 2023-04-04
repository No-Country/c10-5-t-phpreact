
import { useSelector, useDispatch } from 'react-redux'
import { decrement, increment } from '../../Redux/counter-test'
import React from 'react'

function Home() {
    const count = useSelector((state) => state.dog.testValue)
    const dispatch = useDispatch()
  
    return (
      <div className="App">
         <div className='bg-nuestros-perfiles'>
         <h1 className="text-2xl font-['Geogrotesque'] text-primary">
        Hello world!
      </h1>
  
  {/* Aqui esta un ejemplo de un Counter usando Redux Toolkit */}
      <div>
        <h1 className="text-2xl font-['Geogrotesque'] text-primary">{count} minutes</h1>
        <button onClick={() => dispatch(increment())}>Increment</button>
        <button onClick={() => dispatch(decrement())}>Decrement</button>
      </div>
         </div>
      </div>
    )
  }
  
  export default Home;
  