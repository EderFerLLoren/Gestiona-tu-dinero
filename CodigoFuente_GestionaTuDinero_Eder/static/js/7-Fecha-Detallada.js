const dangerColor = '#eb4d4b'

var tbody = document.getElementById('chart-facilitate')
console.log(tbody);
var z = tbody.getElementsByTagName("tr")
var price = []
var fechas = []

for (index = 0; index < z.length; index++) { 
    price.push(parseFloat(z[index].children[3].innerText.replace(/[^0-9.,]/g, '')))
    fechas.push(z[index].children[4].innerText) 
} 

var ctx = document.getElementById('myChart')
ctx.height = 500
ctx.width = 500
var data = {
	labels: fechas,
	datasets: [{
		fill: false,
		label: 'Gasto',
		borderColor: dangerColor,
		data: price,
		borderWidth: 2,
		lineTension: 0,
	}]
}

var lineChart = new Chart(ctx, {
	type: 'line',
	data: data,
	options: {
		maintainAspectRatio: false,
		bezierCurve: false,
	}
})