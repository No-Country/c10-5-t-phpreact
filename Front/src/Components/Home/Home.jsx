
import { useSelector, useDispatch } from 'react-redux'
import { decrement, increment } from '../../Redux/counter-test'
import React from 'react'
import Footer from '../Footer/Footer'
import Section_1 from './Section_1'

function Home() {
    const count = useSelector((state) => state.dog.testValue)
    const dispatch = useDispatch()
  
    return (
      <div className="App">
        <Section_1 />
        <Footer />
      </div>
    )
  }
  
  export default Home;
  