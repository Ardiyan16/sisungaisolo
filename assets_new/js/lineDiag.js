      google.charts.load('current', {'packages':['line']});
      google.charts.setOnLoadCallback(drawChart);

    function drawChart() {

      var data = new google.visualization.DataTable();
      data.addColumn('number', 'Day');
      data.addColumn('number', 'Guardians of the Galaxy');
      data.addColumn('number', 'The Avengers');
      data.addColumn('number', 'Transformers: Age of Extinction');
      data.addColumn('number', 'yott');

      data.addRows([
        [1,  37.8, 80.8, 41.8, 2],
        [2,  30.9, 69.5, 32.4, 2],
        [3,  25.4,   57, 25.7, 5],
        [4,  11.7, 18.8, 10.5, 7],
        [5,  11.9, 17.6, 10.4, 8],
        [6,   8.8, 13.6,  7.7, 5],
        [7,   7.6, 12.3,  9.6, 0],
        [8,  12.3, 29.2, 10.6, 9],
        [9,  16.9, 42.9, 14.8, 7],
        [10, 12.8, 30.9, 11.6, 6],
        [11,  5.3,  7.9,  4.7, 4],
        [12,  6.6,  8.4,  5.2, 3],
        [13,  4.8,  6.3,  3.6, 2],
        [14,  4.2,  6.2,  3.4, 3]
      ]);

      var options = {
        chart: {
          title: 'Box Office Earnings in First Two Weeks of Opening',
          subtitle: 'in millions of dollars (USD)'
        },
        width: 650,
        height: 500,
        axes: {
          x: {
            0: {side: 'top'}
          }
        }
      };

      var chart = new google.charts.Line(document.getElementById('line_top_x'));

      chart.draw(data, google.charts.Line.convertOptions(options));
    }