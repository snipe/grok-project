@extends('layouts.app')

@section('content')

    <div class="my-3 my-md-5">
        <div class="container">
            <div class="page-header">
                <h1 class="page-title">
                    {{ __('Project') }}: {{ $project->name }}
                </h1>
            </div>

            <div class="row">
                <div class="col-sm-6 col-lg-4">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">{{ __('Browsers') }} <span class="tag">{{ $project->testenvs->count()  }}</span></h4>
                        </div>
                        @if ($project->testenvs->count() > 0)
                        <table class="table card-table">
                            @foreach($project->testenvs as $testenv)
                            <tr>
                                <td><i class="{{ $testenv->present()->osTypeIcon }} text-muted"></i></td>
                                <td><i class="{{ $testenv->present()->browserIcon }} text-muted"></i></td>
                                <td>{{ $testenv->browser }}</td>
                                <td class="text-right">
                                    <span class="text-muted">
                                        <i class="{{ $testenv->present()->osIcon }} text-muted"></i>
                                    </span>
                                </td>
                                <td class="text-right">
                                    <span class="text-muted">
                                        {{ $testenv->os_version }}
                                    </span>
                                </td>
                            </tr>
                         @endforeach
                        </table>
                        @endif
                    </div>
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">{{ __('Project Members') }}
                            <span class="tag">{{ $project->members->count()  }}</span></h3>
                    </div>
                    <div class="card-body o-auto" style="height: 15rem">
                        @if ($project->members->count() > 0)
                        <ul class="list-unstyled list-separated">
                            @foreach($project->members as $member)
                            <li class="list-separated-item">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <span class="avatar avatar-md d-block" style="background-image: url({{ $member->avatar() }})"></span>
                                    </div>
                                    <div class="col">
                                        <div>
                                            <a href="javascript:void(0)" class="text-inherit">{{ $member->name }}</a>
                                        </div>
                                        <small class="d-block item-except text-sm text-muted h-1x">{{ $member->email }}</small>
                                    </div>
                                    <div class="col-auto">
                                        <div class="item-action dropdown">
                                            <a href="javascript:void(0)" data-toggle="dropdown" class="icon"><i class="fe fe-more-vertical"></i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-tag"></i> Action </a>
                                                <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-edit-2"></i> Another action </a>
                                                <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-message-square"></i> Something else here</a>
                                                <div class="dropdown-divider"></div>
                                                <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-link"></i> Separated link</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                                @endforeach
                        </ul>
                        @endif
                    </div>
                </div>
            </div>

                <!-- Requirements -->
                <div class="col-lg-8">

                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">{{ __('Requirements') }} <span class="tag">{{ $sections->count() }}</span></h4>
                        </div>



                        <table class="table card-table">

                            @if ($sections->count() > 0)
                                @foreach($sections as $section)
                                    <tr>
                                        <td>
                                            <h4>{{ $section->name }}</h4>
                                            <p>{{ $section->description }}</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="text-wrap p-lg-6">

                                                @foreach($section->subsections as $subsection)
                                                    <h5>
                                                        {{ $subsection->name }}
                                                    </h5>
                                                    <p>{{ $subsection->description }}</p>

                                                    @if ($subsection->testcases->count() > 0)
                                                    <p>
                                                        <a class="tag" data-toggle="collapse" href="#testCase{{ $subsection->id }}" role="button" aria-expanded="false" aria-controls="testCase{{ $subsection->id }}">
                                                           {{ $subsection->testcases->count() }} Test Cases
                                                        </a>
                                                    </p>

                                                        <div class="collapse" id="testCase{{ $subsection->id }}">
                                                            <div class="card card-body highlight">
                                                                @foreach($subsection->testcases as $testcase)
                                                                    <ol>
                                                                        <li>Auth: {{ ($testcase->auth_status=='0') ? 'Not Logged In' : 'Logged In' }}</li>
                                                                        <li>On: {{ $testcase->am_on }}</li>
                                                                        <li>Action: {{ $testcase->action }} {{ $testcase->element }}</li>
                                                                        <li>Should See: {{ $testcase->should_see
                                                            }}</li>
                                                                    </ol>
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    @endif
                                                @endforeach

                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif

                        </table>
                    </div>

            </div>
        </div>
    </div>






@endsection
