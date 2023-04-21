import React, { useState } from 'react'
import { Navigate, useNavigate, Link } from "react-router-dom";


function Login() {

  const navigate = useNavigate()
  const [input, setInput] = useState({
    email: "",
    password: ""
  })

  function handleInput(e){
    e.preventDefault()
    setInput({
      ...input,
      [e.target.name]: e.target.value
    })
  }

  function handleSubmit(e){
    alert("Bienvenido!")
    navigate("/activos")
    location.reload();

  }


  return (
    <div className='bg-login-gradient flex justify-center w-screen h-screen text-white'>
        <div className='flex flex-col items-center justify-center font-Inter w-1/2'>
            <form className='flex flex-col mb-24 w-2/3' onSubmit={handleSubmit}>
                <input 
                  className='text-black p-2.5 pl-4 h-[56px] rounded-[10px] mb-9' 
                  placeholder='Email' 
                  name='email' 
                  value={input.email}
                  onChange={handleInput}
                />

                <input 
                  className='text-black p-2.5 pl-4 h-[56px] rounded-[10px] mb-1' 
                  placeholder='Contraseña' type='password' 
                  name='password' 
                  value={input.password}
                  onChange={handleInput}
                />

                <span className=' font-medium text-sm tracking-normal mb-16 cursor-pointer'>¿Has olvidado la contraseña?</span>
                <button className='bg-primary font-medium text-xl h-[56px] rounded-2xl cursor-pointer'>Ingresar</button>
            </form>
            <p className='text-sm font-semibold mb-14 cursor-pointer'>Necesito ayuda</p>
            <p className='font-semibold text-xs'>Al iniciar sesión, estás aceptando nuestros <span className='text-primary cursor-pointer'>Términos y Condiciones</span></p>
            <p className='font-semibold text-xs'>Y nuestra política de <span className='text-primary cursor-pointer'>Protección de Datos</span></p>
        </div>
    </div>
  )
}

export default Login