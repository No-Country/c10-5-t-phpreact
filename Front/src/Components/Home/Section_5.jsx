import React, { useState } from "react";
import {faq, accordion} from "./Questions";


function Section_5(){

    const [active, setActive] = useState(0)

    function toggle(){
       if(active === 0){
        setActive(1)
       } else{
        setActive(0)
       }
    }

    // console.log(active)
    return(
        <div id="section_5" className="flex w-full h-[500px] justify-evenly px-[20px] pt-[30px] items-center relative border-2 border-black">
            

            <div className="flex flex-col justify-around h-full border-2 border-black mr-[400px]">
                <div className="flex bg-primary w-[766px] h-[56px] rounded-[10px] shadow-dark items-center">
                    <span className="font-Inter text-[20px] font-[500] text-text-color-white tracking-[-0.03em] leading-[45px] indent-4">Preguntas Frecuentes</span>
                </div>

                {faq.map(e => (
                      <div className="w-[609px] h-[56px] bg-secondary rounded-[10px] shadow-dark items-center group is-active cursor-pointer">
                      <div className="flex items-center">
                          <div className="w-full font-Inter text-[16px] font-[500] tracking-[-0.03em] leading-[56px] indent-4">{e.question}</div>
                          <div className="font-Inter text-[20px] font-[500] rotate-90 mr-[15px]">&gt;</div>
                          {/* <img src="../../src/assets/vector.png" alt="vector" className="mr-[15px] group-[.is-active]:rotate-[180deg]" /> */}
                      </div>
          
                      <div className='overflow-hidden max-h-0 group-[is.active]:max-h-auto'>
                          {e.answer}
                      </div>
                  </div>
                ))}
                
            </div>

            <div className="absolute bottom-0 right-20">
                <img src="../../src/assets/selfie_boy.png" alt="boy"/>
            </div>
        </div>
    )
}

export default Section_5;