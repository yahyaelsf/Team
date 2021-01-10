@extends('Admin.layouts.admin')
@section('content')

    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="">{{__('Our Team')}} </a>
                                </li>
                                <li class="breadcrumb-item"><a href=""> {{__('Applies')}}  </a>
                                </li>
                                <li class="breadcrumb-item active">{{__(' Show all Applies')}}
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- DOM - jQuery events table -->
                <section id="dom">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">All Applies </h4>
                                    <a class="heading-elements-toggle"><i
                                            class="la la-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                                        </ul>
                                    </div>
                                </div>

                                @include('Admin.includes.alerts.success')
                                @include('Admin.includes.alerts.errors')

                                <div class="card-content collapse show">
                                    <div class="card-body card-dashboard">
                                        <table
                                            class="table display nowrap table-striped table-bordered scroll-horizontal">
                                            <thead class="">
                                            <tr>
                                                <th>{{__('Name')}} </th>
                                                <th> {{__('Company Name')}}</th>
                                                <th>{{__('Mobile')}}</th>
                                                <th>{{__('Email')}}</th>
                                                <th>{{__('Services')}}</th>
                                                <th>{{__('About project')}}</th>
                                                <th>{{__('file')}}</th>

                                                <th></th>


                                            </tr>
                                            </thead>
                                            <tbody>

                                            @isset($applies)
                                                @foreach($applies as $apply)
                                                    <tr>
                                                        <td>{{$apply -> name}}</td>
                                                        <td>{{$apply -> company_name}}</td>
                                                        <td>{{$apply -> mobile}}</td>
                                                        <td>{{$apply -> email}}</td>
                                                        <td>{{$apply -> description}}

                                                            @foreach($apply->services as $value)
                                                                {{$value}},
                                                            @endforeach
                                                        </td>
                                                        <td>{{$apply -> about_project}}</td>
                                                        <td>
                                                            <a href="{{route('apply.download',$apply -> id)}}" > Download  </a>
                                                        </td>



                                                        <td>
                                                            <div class="btn-group" role="group"
                                                                 aria-label="Basic example">



                                                                <a href="{{route('apply.delete',$apply -> id)}}"
                                                                   class="btn btn-outline-danger btn-min-width box-shadow-3 mr-1 mb-1">{{__('Delete')}}</a>




                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @endisset


                                            </tbody>
                                        </table>
                                        <div class="justify-content-center d-flex">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

@endsection
