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
                                <li class="breadcrumb-item"><a href=""> {{__('Contacts')}}  </a>
                                </li>
                                <li class="breadcrumb-item active">{{__(' Show all Contacts')}}
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
                                    <h4 class="card-title">All Contacts </h4>
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
                                                <th>{{__('Mobile')}}</th>
                                                <th>{{__('Email')}}</th>
                                                <th>{{__('message')}}</th>

                                                <th></th>


                                            </tr>
                                            </thead>
                                            <tbody>

                                            @isset($contacts)
                                                @foreach($contacts as $contact)
                                                    <tr>
                                                        <td>{{$contact -> name}}</td>
                                                        <td>{{$contact -> mobile}}</td>
                                                        <td>{{$contact -> email}}</td>
                                                        <td>{{$contact -> message}}</td>





                                                        <td>
                                                            <div class="btn-group" role="group"
                                                                 aria-label="Basic example">



                                                                <a href="{{route('contact.delete',$contact -> id)}}"
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
