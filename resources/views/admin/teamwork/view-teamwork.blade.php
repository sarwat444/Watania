@extends('layouts.adminLayout.master')
@section('title')
@lang('translation.Invoice_Detail')
@endsection

@section('content')
@component('common-components.breadcrumb')
    @slot('pagetitle') البيانات الشخصيه @endslot
    @slot('title') @lang('translation.project_details') @endslot
@endcomponent

     
<div class="row mb-4">
    <div class="col-xl-4">
        <div class="card h-100">
            <div class="card-body">
                <div class="text-center">
                    <div class="clearfix"></div>
                    <div>
                        <img src="{{ URL::asset('uploads/teams/' . $team->image)}}" alt="" class="avatar-lg rounded-circle img-thumbnail">
                    </div>
                    <h5 class="mt-3 mb-1">{{$team->name}}</h5>
                    <p class="text-muted">{{($team->job != null ) ? $team->job->name : '--'}}</p>
                </div>
                <hr class="my-4">
                <div class="text-muted">
                    <h5 class="font-size-16">نبذه عنه  </h5>
                    {!! $team->about !!}
                    <div class="table-responsive mt-4">
                        <div>
                            <p class="mb-1">أسم  العضو  :</p>
                            <h5 class="font-size-16">{{$team->name}}</h5>
                        </div>
                        <div class="mt-4">
                            <p class="mb-1">الهاتف   :</p>
                            <h5 class="font-size-16">{{$team->phone}}</h5>
                        </div>
                        <div class="mt-4">
                            <p class="mb-1">البريد الالكترونى  :</p>
                            <h5 class="font-size-16">{{$team->email}}</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-8">
        <div class="card mb-0">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#about" role="tab">
                        <i class="uil uil-user-circle font-size-20"></i>
                        <span class="d-none d-sm-block">أخر الاعمال </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#tasks" role="tab">
                        <i class="uil uil-clipboard-notes font-size-20"></i>
                        <span class="d-none d-sm-block">المهام </span>
                    </a>
                </li>

            </ul>
            <!-- Tab content -->
            <div class="tab-content p-4">
                <div class="tab-pane active" id="about" role="tabpanel">
                    <div>
                        <div>
                            <div class="table-responsive">
                                <table class="table table-nowrap table-hover mb-0">
                                    <thead>
                                        <tr>
                                            <th scope="col">الكود </th>
                                            <th scope="col">أسم  المشروع </th>
                                            <th scope="col">التاريخ </th>
                                            <th scope="col">حاله  المشروع  </th>
                                            <th scope="col" style="width: 120px;">التحكم </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($completedProjects as $project)
                                            <tr>
                                                <th scope="row">{{$project->id}}</th>
                                                <td><a href="#" class="text-dark">{{$project->title}}</a></td>
                                                <td>
                                                    {{$project->end_date}}
                                                </td>
                                                <td>
                                                    <span class="badge badge-soft-success font-size-12">انهي العمل</span>
                                                </td>
                                                <td>
                                                    <div class="dropdown">
                                                        <a class="text-muted dropdown-toggle font-size-18 px-2" href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true">
                                                            <i class="uil uil-ellipsis-v"></i>
                                                        </a>

                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="{{url('dashboard/projects/' . $project->id)}}">التفاصيل  </a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="tasks" role="tabpanel">
                    <div>
                        <h5 class="font-size-16 mb-3">المشاريع  المعلقه </h5>

                        <div class="table-responsive">
                            <table class="table table-nowrap table-centered">
                                <tbody>
                                    @foreach($pendingProjects as $project)
                                        <tr>
                                            <td style="width: 60px;">
                                                <div class="custom-control custom-checkbox text-center">
                                                    <input type="checkbox" class="custom-control-input" id="tasks-activeCheck2">
                                                    <label class="custom-control-label" for="tasks-activeCheck2"></label>
                                                </div>
                                            </td>
                                            <td>
                                                <a href="{{url('/dashboard/projects/' . $project->id)}}" class="font-weight-bold text-dark">{{$project->title}}</a>
                                            </td>

                                            <td>{{$project->end_date}}</td>
                                            <td style="width: 160px;"><span class="badge badge-soft-primary font-size-12">معلق</span></td>

                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>



                        <h5 class="font-size-16 my-3">المشاريع النشطه </h5>

                        <div class="table-responsive">
                            <table class="table table-nowrap table-centered">
                                <tbody>
                                    @foreach ($activeProjects as $project)
                                        <tr>
                                            <td style="width: 60px;">
                                                <div class="custom-control custom-checkbox text-center">
                                                    <input type="checkbox" class="custom-control-input" id="tasks-completeCheck3">
                                                    <label class="custom-control-label" for="tasks-completeCheck3"></label>
                                                </div>
                                            </td>
                                            <td>
                                                <a href="{{url('/dashboard/projects/' . $project->id)}}" class="font-weight-bold text-dark">{{$project->title}}</a>
                                            </td>

                                            <td>{{$project->end_date}}</td>
                                            <td style="width: 160px;"><span class="badge badge-soft-success font-size-12">يعمل عليها</span></td>

                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end row -->

    <!-- end row -->
@endsection