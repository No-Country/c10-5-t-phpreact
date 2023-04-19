import { useState } from 'react'
import reactLogo from './assets/react.svg'
import viteLogo from '/vite.svg'
import { BrowserRouter, Route, Routes, Navigate } from "react-router-dom";
import './App.css'
import Home from './Components/Home/Home'
import Dashboard from './Components/Dashboard/Dashboard';
import Reportes from './Components/Reportes/Reportes';
import Chart_1 from './Components/Reportes/Chart_1';
import Donut from './Components/Reportes/Donut/Donut';
import SuperDashboard from './Components/Superadmin/SuperDashboard';
import Equipos from './Components/Equipos/Equipos';
// import Users from './Components/Superadmin/Users';

function App() {

  return (
    <div className="App">
      <BrowserRouter>
        <Routes>
          <Route index element={<Home />} />
          <Route  path='/dashboard' element={<Dashboard />} />
          <Route path='/reportes' element={<Reportes />} />
          <Route path='/donut' element={<Donut />}/>

          <Route path='/superDashboard' element={<SuperDashboard />} />

          <Route path='/equipos' element={<Equipos />} />
        </Routes>
      </BrowserRouter>
    </div>
  )
}

export default App
