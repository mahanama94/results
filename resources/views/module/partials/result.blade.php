<table clas="table">

    <tr>
        <td>Credits : </td>
        <td>{{ $module->getModuleCredits() }}</td>
    </tr>
</table>
<hr>

<table class="table">
    <thead>
        <tr>
            <th>Grade</th>
            <th>Number</th>
        </tr>
    </thead>
    <tbody>
        @foreach($module->getResultStatistics() as $grade=>$count)
            @if($count)
                <tr>
                    <td>{{ $grade }}</td>
                    <td>{{ $count }}</td>
                </tr>
            @endif
        @endforeach
    </tbody>
</table>