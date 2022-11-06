// handle responsive
var listenShow = document.querySelector('.menu-responsive__show')
var showResponsive = document.querySelector('.menu-responsive')

listenShow.onclick = function() {
showResponsive.style.display = 'block'
}

var listenClose = document.querySelector('.container')
listenClose.onclick = function() {
showResponsive.style.display = 'none'
}

// add value for chart
var xValues = ["TV", "Washer", "Refrigerator", "Selling fan"];
var yValues = [10, 20, 30, 40];
// add color for device in chart
var barColors = [
"#b91d47",
"#00aba9",
"#2b5797",
"#e8c3b9",
];
// create chart
new Chart("myChart", {
type: "doughnut",
data: {
    labels: xValues,
    datasets: [{
    backgroundColor: barColors,
    data: yValues
    }]
},
options: {
    title: {
    display: true,
    text: "Power Consumption (Kw/h)"
    },
    aspectRatio:1
}
});