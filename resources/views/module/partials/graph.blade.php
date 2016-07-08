
<div class="container" id="chart" style="width:40%" ></div>
    @if($chart)
        {{ $chart->render('DonutChart', 'IMDB', 'chart') }}
    @else
        Chart Not available right now
    @endif