import React from "react";
import axios from "axios";
import { useState } from "react";
import { useEffect } from "react";
import { useNavigate } from "react-router-dom";
import Swal from "sweetalert2";

function Login() {
  const [email, setEmail] = useState("");
  const [password, setPassword] = useState("");
  const [token, setToken] = useState(localStorage.getItem("token"));
  const navigate = useNavigate();
  useEffect(() => {
    if (token.length) {
      navigate("/");
    }
  }, [token]);

  const loginUser = (e) => {
    e.preventDefault();

    if (!email || !password) {
      Swal.fire({
        title: "Campos incompletos",
        html: "Por favor, complete lo faltante",
        timer: 2000,
        timerProgressBar: true,
        showConfirmButton: false,
      });
      return;
    }

    const data = {
      email: email,
      password: password,
    };
    axios
      .post("https://teamboard.fly.dev/api/login", data)
      .then((response) => {
        setToken(response.data.data);
        localStorage.setItem("token", response.data.data);
      })
      .catch((error) => {
        console.error(error);
        Swal.fire({
          title: "Credenciales incorrectas",
          html: "Por favor, vuelve a intentarlo",
          timer: 2000,
          timerProgressBar: true,
          showConfirmButton: false,
        });
      });
  };
  return (
    <div className="bg-login-gradient flex justify-start w-screen h-screen text-white">
      <div className="flex flex-col items-center justify-center font-Inter w-1/2">
        <h1 className="font-[Geogrotesque] font-semibold text-[64px] tracking-[-0.03em] mb-20">
          No Country
        </h1>
        <form className="flex flex-col mb-24 w-2/3">
          <input
            className="text-black p-2.5 pl-4 h-[56px] rounded-[10px] mb-9"
            placeholder="Email"
            onChange={(e) => setEmail(e.target.value)}
          />
          <input
            className="text-black p-2.5 pl-4 h-[56px] rounded-[10px] mb-1"
            placeholder="Contraseña"
            type="password"
            onChange={(e) => setPassword(e.target.value)}
          />
          <span className=" font-medium text-sm tracking-normal mb-16 cursor-pointer">
            ¿Has olvidado la contraseña?
          </span>
          <button
            onClick={(e) => loginUser(e)}
            className="bg-primary font-medium text-xl h-[56px] rounded-2xl cursor-pointer"
          >
            Ingresar
          </button>
        </form>
        <p className="text-sm font-semibold mb-14 cursor-pointer">
          Necesito ayuda
        </p>
        <p className="font-semibold text-xs">
          Al iniciar sesión, estás aceptando nuestros{" "}
          <span className="text-primary cursor-pointer">
            Términos y Condiciones
          </span>
        </p>
        <p className="font-semibold text-xs">
          Y nuestra política de{" "}
          <span className="text-primary cursor-pointer">
            Protección de Datos
          </span>
        </p>
      </div>
    </div>
  );
}

export default Login;
