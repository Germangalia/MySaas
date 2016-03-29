/**
 * Created by ggalia84 on 29/03/16.
 */
import Chart from 'chart.js';

export default{
    template: '<canvas id="barChartDailySales" style="height: 226px; width: 494px;" width="617" height="282"></canvas>',

    ready(){
        //alert("Hola soc Graph");

        var ctx = document.getElementById("barChartDailySales").getContext("2d");
        var data = {
            labels: ["day1","day2","day3"],
            datasets: [{
                data: [25, 26, 30],
                label: "Daily Sales",
                fillColor: "rgba(220,220,220,0, 5)",
                strokeColor: "rgba(220,220,220,1)",
                pointColor: "rgba(220,220,220,1)",
                pointStrokeColor: "#fff",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "rgba(220,220,220,1)"
            }
            ]
        }
        var myBarChart = new Chart(ctx).Bar(data);
    }
}