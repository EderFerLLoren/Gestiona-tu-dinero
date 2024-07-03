const primaryColor = "#4834d4";
const warningColor = "#f0932b";
const successColor = "#6ab04c";
const dangerColor = "#eb4d4b";
const violetColor = "#ff0ebc";

var tbody = document.getElementById("chart-facilitate2");
var z = tbody.getElementsByTagName("tr");
var price = [];
var years = [];

for (index = 0; index < z.length; index++) {
  price.push(
    parseFloat(z[index].children[3].innerText.replace(/[^0-9.,]/g, ""))
  );
  years.push(z[index].children[4].innerText.substring(6));
}

var colors = [];

years.forEach((year) => {
  if (year === "2021") {
    colors.push(dangerColor);
  } else if (year === "2022") {
    colors.push(primaryColor);
  } else if (year === "2023") {
    colors.push(warningColor);
  } else if (year === "2024") {
    colors.push(successColor);
  } else {
    colors.push(violetColor);
  }

  var ctx = document.getElementById("myChart2");
  
  new Chart(ctx, {
    type: "bar",
    data: {
      labels: years,
      datasets: [
        {
          label: "Gasto",
          data: price,
          backgroundColor: colors,
          borderColor: colors,
          borderWidth: 1,
        },
      ],
    },
    
  });
});
