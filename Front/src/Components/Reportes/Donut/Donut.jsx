import React from "react";
import { Chart } from "react-google-charts";

const data = [
    ['Task', 'Porcentaje'],
    ['Porcentaje', 82],
];

const options = {
    pieHole: 0.75,
    pieSliceTextStyle: {
        color: '#362EBD',
        fontSize: 22,
        fontName: "Inter",
        
    },
    // slices: {
    //     0: {color: 'transparent',}
    // },
    colors: ["#9E98FB"],
    backgroundColor: 'transparent',
    legend: 'none'
};

function Donut() {
    return (
        <div className="flex justify-center items-center">
            <Chart
                chartType="PieChart"
                width="180px"
                height="180px"
                data={data}
                options={options}
            />
        </div>
    );
}

export default Donut;