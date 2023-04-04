import { useState } from 'react'
import reactLogo from './assets/react.svg'
import viteLogo from '/vite.svg'
import './App.css'

function App() {
  const [count, setCount] = useState(0)

  return (
    <div className="App">
       <div className='bg-nuestros-perfiles'>
       <h1 className="text-2xl font-['Geogrotesque'] text-primary">
      Hello world!
    </h1>
       </div>
    </div>
  )
}

export default App
