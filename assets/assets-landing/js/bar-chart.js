var ctx=document.getElementById("bar-chart");
Chart.defaults.global.defaultFontFamily="Cabin",
Chart.defaults.global.defaultFontSize=14,
Chart.defaults.global.defaultFontStyle="500",
Chart.defaults.global.defaultFontColor="#808996";
var chart=new Chart(ctx,
{
	type: "bar", data: {
		labels: ["Mar", "Apr", "May", "Jun", "July", "Aug", "Sep", "Oct", "Nov", "Dec"], datasets: [ {
			label: "One", data: [40, 35, 54, 40, 45, 60, 70, 65, 70, 90], backgroundColor: "#287dfa", hoverBackgroundColor: "#2273e5", pointBackgroundColor: "#fff", borderWidth: 0, pointRadius: 4
		}
		]
	}
	,
	options: {
		tooltips: {
			backgroundColor: "#1c2540"
		}
		,
		legend: {
			display: !1
		}
		,
		scales: {
			xAxes: [ {
				barPercentage: .4, barThickness: 15, display: !0, gridLines: {
					offsetGridLines: !1, display: !1
				}
			}
			],
			yAxes:[ {
				display: !0, gridLines: {
					color: "#eee"
				}
				,
				ticks: {
					fontSize: 14
				}
			}
			]
		}
	}
}
);