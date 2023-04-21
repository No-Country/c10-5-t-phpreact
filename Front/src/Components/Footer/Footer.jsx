import React from "react";
import { useState } from "react";
import { useDispatch } from "react-redux";

function Footer() {

    const [email, setEmail] = useState("")
    const dispatch = useDispatch()

    function handleInput(e){
        e.preventDefault()
        setEmail(e.target.value)
    }

    function handleSubmit(e){
        e.preventDefault()
    }
    
    return (
        <div>
            <footer className="flex bg-primary w-full h-[200px] px-[25px]">
                <div className="flex flex-row w-full justify-between items-center">
                    <div className="flex flex-col h-full justify-between py-[20px]">
                        <div className="flex flex-row w-[300px] items-center" >
                            <img src="../../src/assets/Puzzle_NC.png" alt="NC_Logo" width={"24.54px"} height={"26.5px"} />
                            <span className="font-Geogrotesque text-[34px] font-[600] text-white px-[10px] tracking-[-0.03em]">TeamBoard</span>
                        </div>

                        <div>
                            <span className="font-Inter text-[15px] font-[500] text-text-color-white tracking-[-0.03em]">TeamBoard ©2023.</span>
                        </div>
                    </div>


                    <div className="flex flex-col justify-around items-center w-[615px] h-full">


                        <div className="fle flex-row w-full">
                            <div>
                                <span className="flex w-full items-center font-Inter text-[20x] font-[500] text-text-color-white tracking-[-0.03em] py-[10px]">¡Suscríbete a nuestro Newsletter!</span>
                            </div>
                            <form action="" className="flex justify-between" onSubmit={handleSubmit}>
                                <input type="text" placeholder="Email" className="w-[427px] h-[45px] rounded-[10px] shadow-dark indent-4" onChange={handleInput}/>
                                <button className="bg-[#899DE4] w-[161px] h-[45px] rounded-[10px] shadow-dark font-Inter text-[15px] font-[500] text-text-color-white tracking-[-0.03em]">Enviar</button>
                            </form>
                        </div>

                        <div className="w-full">
                            <div className="w-1/2 flex flex-row items-center ml-auto">
                                <span className="font-Inter text-[16px] font-[500] text-text-color-white tracking-[-0.03em]  px-[20px]">info@TeamBoard.tech</span>
                                <div className="flex flex-row justify-between w-[120px]">
                                    <img src="../../src/assets/github_white.png" alt="github" width={"48px"} height={"45px"}/>
                                    <img src="../../src/assets/linkedin_white.png" alt="linkedin" width={"50px"} height={"50px"}/>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </footer>
        </div>
    )
}

export default Footer;