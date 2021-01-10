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
                           <li class="breadcrumb-item active">{{__(' Add New Member')}}
                           </li>
                       </ol>
                   </div>
               </div>
           </div>
       </div>
       <div class="content-body">
           <!-- Basic form layout section start -->
           <section id="basic-form-layouts">
               <div class="row match-height">
                   <div class="col-md-12">
                       <div class="card">
                           <div class="card-header">
                               <h4 class="card-title" id="basic-layout-form"> {{__(' Add New Member')}} </h4>
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
                               <div class="card-body">
                                   <form action="{{route('member.store')}}" method="POST" class="form" enctype="multipart/form-data">
                                       @csrf
                                       <div class="form-body">

                                           <h4 class="form-section"><i class="ft-home"></i>{{__(' Data of Member')}} </h4>
                                           <div class="row">
                                               <div class="col-md-6">
                                                   <div class="form-group">
                                                       <label for="projectinput1"> {{__('Name of Member')}} </label>
                                                       <input type="text" id="name" class="form-control" placeholder="Add name of Member" name="name">
                                                       @error('name')
                                                       <span class="text-danger">{{$message}}</span>
                                                       @enderror
                                                   </div>
                                               </div>
                                               <div class="col-md-6">
                                                   <div class="form-group">
                                                       <label>{{__('Photo for Member')}} </label><br>
                                                       <label id="projectinput2" class="photo center-block">
                                                           <input type="file" id="file" name="photo">
                                                           <span class="photo-custom"></span>
                                                       </label>
                                                       @error('photo')
                                                       <span class="text-danger">{{$message}}</span>
                                                       @enderror
                                                   </div>
                                               </div>
                                           </div>
                                           <div class="row">
                                               <div class="col-md-6">
                                                   <div class="form-group">
                                                       <label for="projectinput1"> {{__('phone number of Member')}} </label>
                                                       <input type="number" id="name" class="form-control" placeholder="Add phone number" name="phone">
                                                       @error('phone')
                                                       <span class="text-danger">{{$message}}</span>
                                                       @enderror
                                                   </div>
                                               </div>
                                               <div class="col-md-6">
                                                   <div class="form-group">
                                                       <label for="projectinput1"> {{__('Job Title')}} </label>
                                                       <input type="text" id="name" class="form-control" placeholder="Add name of Job " name="job_title">
                                                       @error('job_title')
                                                       <span class="text-danger">{{$message}}</span>
                                                       @enderror
                                                   </div>
                                               </div>

                                           </div>

                                       </div>


                                       <div class="form-actions">
                                           <button type="submit" class="btn btn-primary">
                                               <i class="la la-check-square-o"></i> {{__('save')}}
                                           </button>
                                           <button type="button" class="btn btn-warning mr-1"
                                                   onclick="history.back();">
                                               <i class="ft-x"></i>{{__('back')}}
                                           </button>
                                       </div>
                                   </form>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </section>
           <!-- // Basic form layout section end -->
       </div>
   </div>
</div>






@endsection
