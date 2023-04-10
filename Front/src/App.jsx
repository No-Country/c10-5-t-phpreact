import { useState } from 'react'
import reactLogo from './assets/react.svg'
import viteLogo from '/vite.svg'
import { BrowserRouter, Route, Routes, Navigate } from "react-router-dom";
import './App.css'
import Home from './Components/Home/Home'
import DashboardContainer from './Components/Home/Dashboards/DashboardContainer/DashboardContainer';

function App() {

  return (
    <div className="App">
      <BrowserRouter>
        <Routes>
          <Route index element={<DashboardContainer />} />
        </Routes>
      </BrowserRouter>
    </div>
  )
}

export default App
