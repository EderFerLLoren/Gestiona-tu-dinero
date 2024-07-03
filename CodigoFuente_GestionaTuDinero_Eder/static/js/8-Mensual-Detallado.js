const successColor = '#6ab04c'

var months = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];
var tbody = document.getElementById('chart-facilitate1')
console.log(tbody);
var z = tbody.getElementsByTagName("tr")

var price = []
var dates = []

for (index = 0; index < z.length; index++) { 
    price.push(parseFloat(z[index].children[3].innerText.replace(/[^0-9.,]/g, '')))
    var x = parseInt(z[index].children[4].innerText.substring(3,5))
    dates.push(months[x-1]) 
} 

var ctx = document.getElementById('myChart1')
ctx.height = 500
ctx.width = 500
var data = {
	labels: dates,
	datasets: [{
		fill: false,
		label: 'Gastos',
		borderColor: successColor,
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