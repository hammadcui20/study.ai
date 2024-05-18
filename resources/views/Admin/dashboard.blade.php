{{-- @extends('layouts.admin')


@section('content')
 @include('chart')
@endsection




 --}}
 @extends('layouts.admin')


 @section('content')
 <body>
     <div style="height:20%;width:40%">
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
           backgroundColor: '#1A73E8',
           borderColor: '#1A73E8',
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
