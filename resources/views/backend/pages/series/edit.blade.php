@extends('backend.layouts.partials.master')

@section('title', 'New User | Admin Panel')

@section('admin-content')

 <!-- page title area start -->
            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left">Series List</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="{{route('admin.series.index')}}">Series</a></li>
                                <li><span>Edit Series</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 clearfix">

                         @include('backend.layouts.partials.logout')
                        
                    </div>
                </div>
            </div>
            <!-- page title area end -->

             <div class="main-content-inner">
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Edit Series</h4>

                    {{-- Show validation error messages --}}
                     @include('backend.layouts.partials.messages') 

                    <form action="{{ route('admin.series.update',$series->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                       @method('PUT')
                        
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="name">Series Title</label>
                                    <input type="text" class="form-control" name="title" id="title" placeholder="Series Title" value="{{$series->title}}">
                                </div>
                            </div>
                            

                           
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="description">Series Description</label>
                                    <textarea class="form-control" name="description" id="description">{{$series->description}}
                                </textarea> 
                                </div> 
                            </div>
                            
                       
                        <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


            

@endsection