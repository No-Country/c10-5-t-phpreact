import React from "react";
import { Chart } from "react-google-charts";

const data = [
  ["Semana", "Porcentaje"],
  ["Semana 1", 10,],
  ["Semana 2", 50,],
  ["Semana 3", 80,],
  ["Semana 4", 100,],
];

const options = {
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

function Chart_1() {
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

export default Chart_1;
