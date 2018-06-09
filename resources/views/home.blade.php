@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div id="mute"></div>
            <div id="app"></div>


            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if ($companies->count() > 0)
                        <table class="table">
                            @foreach($companies as $company)
                                <tr>
                                    <td>
                                        {{ $company->name }}
                                    </td>
                                    <td>
                                        @foreach($company->projects as $project)
                                            <a href="{{ route('project.show', ['id' => $project->id]) }}">{{ $project->name }} </a>
                                        @endforeach
                                    </td>

                                </tr>
                            @endforeach

                        </table>

                    @else
                        You don't have any companies set up yet.
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
