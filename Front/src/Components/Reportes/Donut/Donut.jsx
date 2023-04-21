// import React from "react";
// import { Chart } from "react-google-charts";
import './Donut.css'

// const data = [
//     ['Task', 'Porcentaje'],
//     ['Porcentaje', 82],
// ];

// const options = {
//     pieHole: 0.75,
//     pieSliceTextStyle: {
//         color: '#362EBD',
//         fontSize: 22,
//         fontName: "Inter",
        
//     },
//     // slices: {
//     //     0: {color: 'transparent',}
//     // },
//     colors: ["#9E98FB"],
//     backgroundColor: 'transparent',
//     legend: 'none'
// };

// function Donut() {
//     return (
//         <div className="flex justify-center items-center">
//             <Chart
//                 chartType="PieChart"
//                 width="180px"
//                 height="180px"
//                 data={data}
//                 options={options}
//             />
//         </div>
//     );
// }

// export default Donut;



function Donut() {
    return (
        <div>
            <svg className="progress" width="200" height="200">
                <circle className="progress-circle" cx="100" cy="100" stroke="#9E98FB" r="80" fill="transparent" stroke-width="20" />
                <text className="text" fill="blue" x="100" y="100" alignment-baseline="middle" text-anchor="middle">85%</text>
            </svg>
            <span className="loading"></span>
        </div>
    )
}

export default Donut;