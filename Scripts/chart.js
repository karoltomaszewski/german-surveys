window.onload = () =>{

if(window.innerWidth < 1000){
  document.getElementById("line-chart").setAttribute("height", "800");
}

colors = [
  [["CDU/CSU", "CDU", "CSU"], "black"],
  [["SPD", "NPD"], "red"],
  ["AfD", "blue"],
["Grüne", "green"],
["Linke", "#ff00ff"],
["FDP", "yellow"],
["BP", "#98f5ff"],
[["Freie Wähler", "BVB/FW"], "#ff8000"],
["Piraten", "orange"],
["SSW", "#003c8f"],
["Die PARTEI", "#b5152b"],
["Inne", "gray"]];

document.getElementById("line-chart").style.backgroundColor = " rgb(195, 194, 194)";
 
    my_chart = new Chart(document.getElementById("line-chart"), {
      type: 'line',
      data: {
      labels: chart_labels,
      datasets:[]
      },
      options: {
      title: {
        display: true,
        text: 'Średnie poparcie partii w czasie'
      },
      legend:{
        display: true
      },
      scales:{
        yAxes:[{
          ticks:{
            beginAtZero: true
          }
        }]
      }
      }
    });

    function find_color(party){
      to_return = "rgb(0, 123, 255)";
      colors.forEach(e=>{
       
        if(e[0] == party || e[0].includes(party)){
          to_return = e[1];
          return;
        }
      });
      return to_return;
    }


    for(i=0; i<chart_parties.length; i++){
      color = find_color(chart_parties[i]);

      console.log(chart_values[i]);
      console.log(chart_parties[i]);
      console.log(color);
      
      my_chart.data.datasets.push({
        data : chart_values[i],
				backgroundColor : color,
				borderColor : color,
				label : chart_parties[i],
				fill: false
      });
      my_chart.update();
    }
}

