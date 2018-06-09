@extends('layouts.app')

@section('content')
<div class="row row-cards row-deck">

    @if ($companies->count() > 0)
        @foreach($companies as $company)
            <div class="col-sm-6 col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <h2 class="card-title">{{ $company->name }}</h2>
                    </div>
                    <table class="table card-table">
                        @foreach($company->projects as $project)
                            <tr>
                                <td>
                                    <a href="{{ route('project.show', ['id' => $project->id]) }}">
                                        {{ $project->name }}
                                    </a>
                                </td>
                                <td class="text-right">
                                    <span class="badge badge-default">65%</span>
                                </td>
                            </tr>
                        @endforeach

                            <tr>
                                <td colspan="2">
                                    <a href="#" class="btn btn-secondary btn-block">{{ __('New Project') }}</a>
                                    </a>
                                </td>

                            </tr>
                    </table>
                </div>

            </div>

        @endforeach
    @endif

    <div class="col-sm-6 col-lg-4">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Browser Stats</h4>
            </div>
            <table class="table card-table">
                <tr>
                    <td width="1"><i class="fa fa-chrome text-muted"></i></td>
                    <td>Google Chrome</td>
                    <td class="text-right"><span class="text-muted">23%</span></td>
                </tr>
                <tr>
                    <td><i class="fa fa-firefox text-muted"></i></td>
                    <td>Mozila Firefox</td>
                    <td class="text-right"><span class="text-muted">15%</span></td>
                </tr>
                <tr>
                    <td><i class="fa fa-safari text-muted"></i></td>
                    <td>Apple Safari</td>
                    <td class="text-right"><span class="text-muted">7%</span></td>
                </tr>
                <tr>
                    <td><i class="fa fa-internet-explorer text-muted"></i></td>
                    <td>Internet Explorer</td>
                    <td class="text-right"><span class="text-muted">9%</span></td>
                </tr>
                <tr>
                    <td><i class="fa fa-opera text-muted"></i></td>
                    <td>Opera mini</td>
                    <td class="text-right"><span class="text-muted">23%</span></td>
                </tr>
                <tr>
                    <td><i class="fa fa-edge text-muted"></i></td>
                    <td>Microsoft edge</td>
                    <td class="text-right"><span class="text-muted">9%</span></td>
                </tr>
            </table>
        </div>
    </div>
    <div class="col-sm-6 col-lg-4">
        <div class="card">
            <div class="card-header">
                <h2 class="card-title">Projects</h2>
            </div>
            <table class="table card-table">
                <tr>
                    <td>Admin Template</td>
                    <td class="text-right">
                        <span class="badge badge-default">65%</span>
                    </td>
                </tr>
                <tr>
                    <td>Landing Page</td>
                    <td class="text-right">
                        <span class="badge badge-success">Finished</span>
                    </td>
                </tr>
                <tr>
                    <td>Backend UI</td>
                    <td class="text-right">
                        <span class="badge badge-danger">Rejected</span>
                    </td>
                </tr>
                <tr>
                    <td>Personal Blog</td>
                    <td class="text-right">
                        <span class="badge badge-default">40%</span>
                    </td>
                </tr>
                <tr>
                    <td>E-mail Templates</td>
                    <td class="text-right">
                        <span class="badge badge-default">13%</span>
                    </td>
                </tr>
                <tr>
                    <td>Corporate Website</td>
                    <td class="text-right">
                        <span class="badge badge-warning">Pending</span>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <div class="col-md-6 col-lg-4">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Members</h3>
            </div>
            <div class="card-body o-auto" style="height: 15rem">
                <ul class="list-unstyled list-separated">
                    <li class="list-separated-item">
                        <div class="row align-items-center">
                            <div class="col-auto">
                                <span class="avatar avatar-md d-block" style="background-image: url(https://picsum.photos/100/100/?random)"></span>
                            </div>
                            <div class="col">
                                <div>
                                    <a href="javascript:void(0)" class="text-inherit">Amanda Hunt</a>
                                </div>
                                <small class="d-block item-except text-sm text-muted h-1x">amanda_hunt@example.com</small>
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
                    <li class="list-separated-item">
                        <div class="row align-items-center">
                            <div class="col-auto">
                                <span class="avatar avatar-md d-block" style="background-image: url(https://picsum.photos/50/50/?random)"></span>
                            </div>
                            <div class="col">
                                <div>
                                    <a href="javascript:void(0)" class="text-inherit">Laura Weaver</a>
                                </div>
                                <small class="d-block item-except text-sm text-muted h-1x">lauraweaver@example.com</small>
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
                    <li class="list-separated-item">
                        <div class="row align-items-center">
                            <div class="col-auto">
                                <span class="avatar avatar-md d-block" style="background-image: url(https://picsum.photos/30/30/?random)"></span>
                            </div>
                            <div class="col">
                                <div>
                                    <a href="javascript:void(0)" class="text-inherit">Margaret Berry</a>
                                </div>
                                <small class="d-block item-except text-sm text-muted h-1x">margaret88@example.com</small>
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
                    <li class="list-separated-item">
                        <div class="row align-items-center">
                            <div class="col-auto">
                                <span class="avatar avatar-md d-block" style="background-image: url(https://picsum.photos/200/300/?random)"></span>
                            </div>
                            <div class="col">
                                <div>
                                    <a href="javascript:void(0)" class="text-inherit">Nancy Herrera</a>
                                </div>
                                <small class="d-block item-except text-sm text-muted h-1x">nancy_83@example.com</small>
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

                </ul>
            </div>
        </div>
    </div>

</div> <!-- end row row-cards row-deck -->



@endsection
