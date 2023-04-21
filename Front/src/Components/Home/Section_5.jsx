import React, { useState } from "react";
import {faq, accordion} from "./Questions";


function Section_5(){

    const [active, setActive] = useState(null)

    function toggle(index) {
        if(active === index){
            return setActive(null)
        } else{
            setActive(index)
        }
    }

    console.log(active)
    return(
        <div id="section_5" className="flex w-full h-[500px] justify-evenly px-[20px] pt-[30px] items-center relative">
            

            <div className="flex flex-col justify-around h-full mr-[400px]">
                <div className="flex bg-primary w-[766px] h-[56px] rounded-[10px] shadow-dark items-center">
                    <span className="font-Inter text-[20px] font-[500] text-text-color-white tracking-[-0.03em] leading-[45px] indent-4">Preguntas Frecuentes</span>
                </div>

                {faq.map((e, index) => (
                      <div className="w-[609px] h-auto bg-secondary rounded-[10px] shadow-dark items-center group is-active cursor-pointer" key={index}>
                      <div className="flex items-center" onClick={() => toggle(index)}>
                          <div className="w-full font-Inter text-[16px] font-[600] tracking-[-0.03em] leading-[56px] indent-4">{e.question}</div>
                          <div className={`${active !== index ? 'font-Inter text-[20px] font-[600] rotate-90 mr-[15px]' : 'font-Inter text-[20px] font-[600] rotate-270 mr-[15px]' }`}>&gt;</div>
                          {/* <img src="../../vector.png" alt="vector" className="mr-[15px] group-[.is-active]:rotate-[180deg]" /> */}
                      </div>
          
                      <div className={`${active !== index ? 'overflow-hidden max-h-0 group-[is.active]:max-h-auto' : 'overflow-visible h-auto px-[15px] py-[15px]'}`}>
                          {e.answer}
                      </div>
                  </div>
                ))}
                
            </div>

            <div className="absolute bottom-0 right-20">
                <img src="../../selfie_boy.png" alt="boy"/>
            </div>
        </div>
    )
}

export default Section_5;