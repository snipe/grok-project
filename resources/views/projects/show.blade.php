@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div id="mute"></div>
                <div id="app"></div>


                <div class="card">
                    <div class="card-header">Project: {{ $project->name }}</div>

                    <div class="card-body">
                        @if ($project->testenvs->count() > 0)
                            <h4>Test Environments</h4>
                            <ol>
                            @foreach($project->testenvs as $testenv)
                                <li>{{ $testenv->env_type }} - {{ $testenv->browser }} {{ $testenv->browser_version }} ({{ $testenv->os }} {{ $testenv->os_version }})</li>

                            @endforeach
                            </ol>
                        @endif


                        @if ($sections->count() > 0)
                            <table class="table">
                                @foreach($sections as $section)
                                    <tr>
                                        <td>
                                           <h4>{{ $section->name }}</h4>

                                            @if ($section->requirements->count() > 0)

                                                @foreach($section->requirements as $requirement)
                                                    <p><strong>Requirements:</strong>
                                                        <br>
                                                        {{ $requirement->description }}</p>

                                                    @if ($section->testcases->count())
                                                        <h5>Test Cases</h5>

                                                        @foreach($section->testcases as $testcase)
                                                            <ol>
                                                            <li>Auth: {{ ($testcase->auth_status=='0') ? 'Not Logged In' : 'Logged In' }}</li>
                                                            <li>On: {{ $testcase->am_on }}</li>
                                                            <li>Action: {{ $testcase->action }} {{ $testcase->element }}</li>
                                                            <li>Should See: {{ $testcase->should_see
                                                            }}</li>
                                                            </ol>
                                                        @endforeach

                                                    @endif



                                                @endforeach

                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                                @if (($section->subsections) && ($section->subsections->count() > 0))

                                            @foreach($section->subsections as $subsection)
                                                <tr>
                                                    <td>
                                                        <h5>{{ $subsection->name }}</h5>

                                                        @if ($subsection->requirements->count() > 0)

                                                            @foreach($subsection->requirements as $requirement)
                                                                <p><strong>Requirements:</strong>
                                                                    <br>
                                                                    {{ $requirement->description }}</p>

                                                                @if ($subsection->testcases->count())
                                                                    <h5>Test Cases</h5>

                                                                    @foreach($subsection->testcases as $testcase)
                                                                        <ol>
                                                                            <li>Auth: {{ ($testcase->auth_status=='0') ? 'Not Logged In' : 'Logged In' }}</li>
                                                                            <li>On: {{ $testcase->am_on }}</li>
                                                                            <li>Action: {{ $testcase->action }} {{ $testcase->element }}</li>
                                                                            <li>Should See: {{ $testcase->should_see
                                                            }}</li>
                                                                        </ol>
                                                                    @endforeach

                                                                @endif



                                                            @endforeach

                                                        @endif
                                                    </td>
                                                </tr>
                                            @endforeach

                                    @endif


                            </table>

                        @else
                            You don't have any requirements set up yet.
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
