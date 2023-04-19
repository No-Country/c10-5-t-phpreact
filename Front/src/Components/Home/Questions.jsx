const faq = [
    {
        question: "¿Ademas de desarrolladores, se pueden inscribir otros perfiles?",
        answer: "Claro! Existen perfiles de UX/UI, QA Testers, y ademas, proyectos de no-code"
    },
    {
        question: "¿Puedo inscribirme como desarrollador si solo se HTML y CSS?",
        answer: "Asi es, aqui tendras la oportunidad de aprender nuevas tecnologias tanto de frontend como backend"
    },
    {
        question: "No tengo experiencia mínima ¿Que puedo hacer?",
        answer: "No te preocupes, NoCountry fue diseñado para juniors en mente. Aqui simulamos un entorno laboral para que adquieras la experiencia necesaria"
    },
    {
        question: "¿Cual es el cronograma de emulación?",
        answer: "Tendras un mes para terminar un proyecto con tus compañeros. Se divide en 4 semanas o sprints donde poco a poco entregaras nuevas funcionalidades de tu proyecto"
    },
    {
        question: "¿Puedo participar en mas de una emulación?",
        answer: "Claro que si, NoCountry te permite hasta 3 emulaciones. Cada emulacion consta de 2 fases lo cual significa que puedes participar en hasta 6 proyectos"
    }
]

function accordion() {
    faq.map((e, index) => {
        (
            <div className="w-[609px] h-[56px] bg-secondary rounded-[10px] shadow-dark items-center group is-active cursor-pointer">
            <div className="flex items-center">
                <div className="w-full group-[.is-active]:text-white">{e.question}</div>
                {/* <img src="../../src/assets/vector.png" alt="vector" className="mr-[15px] group-[.is-active]:rotate-[180deg]" /> */}
            </div>

            <div className='overflow-hidden max-h-0 group-[is.active]:max-h-auto'>
                {e.answer}
            </div>
        </div>
        )
    })
}

export {faq,accordion};