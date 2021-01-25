@extends('backend.layouts.partials.master')

@section('title', 'Series List | Admin Panel')

@section('admin-content')

 <!-- page title area start -->
            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left">Series List</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="{{route('admin.series.index')}}">Series</a></li>
                                <li><span>Series List</span></li>
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
                <div class="row">
                    <!-- data table start -->
                    <div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                 @include('backend.layouts.partials.messages') 
                                <h4 class="header-title">Seriess List</h4>
                                <p class="float-right mb-2">
                                    <a class="btn btn-primary text-white" href="{{ route('admin.series.create') }}">Create New Series</a>
                                </p>
                                <div class="clearfix"></div>
                                <div class="data-tables">
{{--                                  @include('backend.layouts.partials.messages') --}}
                                    <table id="dataTable" class="text-center table-responsive">
                                        <thead class="bg-light text-capitalize">
                                             <tr>
                                                <th>Sl</th>
                                                <th>Title</th>
                                                <th>Description</th>
                                                <th>Action</th>
                                            </tr>  
                                                
                                        </thead>
                                        <tbody>
                                            @foreach ($series as $ser)
                                               <tr>
                                                <td>{{ $loop->index+1 }}</td>
                                                <td>{{ $ser->title }}</td>
                                                <td>{{ \Str::words($ser->description,10) }}</td>
                                               
                                                <td>
                                                <a class="btn btn-success text-white" href="{{ route('admin.series.edit', $ser->id) }}">Edit</a>
                                                <button style="display: inline" type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#deleteSeriesModal{{ $ser->id }}"> Delete
                                                </button>
                                                </td>
                                                
                                            </tr>
                                            @endforeach
                                            
                                            
                                        </tbody>
                                    </table>
                                    @foreach ($series as $ser)
                                    <div class="modal fade" id="deleteSeriesModal{{ $ser->id }}" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                          <div class="modal-content">
                                            <div class="modal-header">
                                              <h5 class="modal-title">Are you sure to delete ?</h5>
                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                              </button>
                                            </div>
                                            <div class="modal-body">
                                              <form method="POST" action="{{ route('admin.series.destroy', $ser->id) }}" style="display: inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-outline-danger ml-2">
                                                        Confirm, Delete
                                                    </button>
                                                    <button type="button" class="btn btn-secondary ml-2" data-dismiss="modal">Cancel</button>
                                                </form>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>


            

@endsection