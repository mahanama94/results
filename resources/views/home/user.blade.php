
            <h3>Results</h3>
            <hr>
            <table class="table">
                <thead>
                    <tr>
                        <th>Module Code</th>
                        <th>Module Name</th>
                        <th>Credits</th>
                        <th>Grade</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($grades as $grade)

                        @if($grade)
                            {{--*/

                            $module = $grade->getModule()

                             /*--}}
                            <tr>
                                <td>{{ $module->getModuleCode() }}</td>
                                <td>{{ $module->getModuleName() }}</td>
                                <td>{{ $module->getModuleCredits() }}</td>
                                <td>{{ $grade->toString() }}</td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>

            <h3>Summary</h3>


            <table class="table">

                <tr>
                    <td>Current Rank : </td>
                    <td>{{ $user->getRank() }}</td>
                </tr>
                <tr>
                    <td>GPA</td>
                    <td> {{ $user->getGPA() }}</td>
                </tr>

            </table>
