import React from "react";
import { Chart } from "react-google-charts";

export const data = [
  ["Semana", "Porcentaje"],
  ["Semana 1", 30,],
  ["Semana 2", 90,],
  ["Semana 3", 70,],
  ["Semana 4", 50,],
];

export const options = {
  colors: ['#71F8AE'],
  hAxis: { titleTextStyle: { color: '#71F8AE' }},
  vAxis: { minValue: 0, maxValue: 100 }, 
  chartArea: { width: "60%", height: "70%" },
  pointSize: 10,
  series: {
    0: { pointShape: 'circle' },
  },
  legend: 'none'
};

function Chart_2() {
  return (
    <div className="flex justify-center items-center">
      <Chart
        chartType="AreaChart"
        width="600px"
        height="400px"
        data={data}
        options={options}
      />
    </div>
  );
}

export default Chart_2;
