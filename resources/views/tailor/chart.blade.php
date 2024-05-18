@extends('tailor.tailor')


@section('content')
<body>
    <div style="height:30%;width:100%">
        <canvas id="myChart"></canvas>
    </div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script type="text/javascript">
      var labels =  {{ Js::from($labels) }};
      var users =  {{ Js::from($data) }};
      const data = {
        labels: labels,
        datasets: [{
          label: 'No of Users',
          backgroundColor: 'rgb(9,9,121,1)',
          borderColor: 'rgb(9,9,121,1)',
          data: users,
        }]
      };
      const config = {
        type: 'line',
        data: data,
        options: {}
      };
      const myChart = new Chart(
        document.getElementById('myChart'),
        config
      );
</script>
</html>
@endsection