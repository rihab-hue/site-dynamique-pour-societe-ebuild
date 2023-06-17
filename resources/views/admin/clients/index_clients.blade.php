@extends('layouts.back')
@section('title', 'clients')
@section('content')
    <div class="page">
        <div class="page-main">
        </div>
        <div class="main-content app-content mt-0">
            <div class="side-app">
                <!-- CONTAINER -->
                <div class="main-container container-fluid">
                    <!-- PAGE-HEADER -->
                    <div class="page-header">
                       
                    </div>
                    @if ($message = Session::get('message'))
                    
                    <div class="col-xl-3 col-sm-6">
                        <div class="card border p-0 pb-3">
                            <div class="card-header border-0 pt-3">
                                <div class="card-options">
                                    <a href="javascript:void(0)" class="card-options-remove"
                                        data-bs-toggle="card-remove"><i class="fe fe-x"></i></a>
                                </div>
                            </div>
                            <div class="card-body text-center">
                                <span class=""><svg xmlns="http://www.w3.org/2000/svg" height="60"
                                        width="60" viewBox="0 0 24 24">
                                        <path fill="#13bfa6"
                                            d="M10.3125,16.09375a.99676.99676,0,0,1-.707-.293L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328l-6.1875,6.1875A.99676.99676,0,0,1,10.3125,16.09375Z"
                                            opacity=".99" />
                                        <path fill="#71d8c9"
                                            d="M12,2A10,10,0,1,0,22,12,10.01146,10.01146,0,0,0,12,2Zm5.207,7.61328-6.1875,6.1875a.99963.99963,0,0,1-1.41406,0L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328Z" />
                                    </svg></span>
                                <h4 class="h4 mb-0 mt-3">Success</h4>
                                <p class="card-text">{{ $message }}</p>
                            </div>
                            <div class="card-footer text-center border-0 pt-0">
                                <div class="row">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                @endif

                @if ($message = Session::get('msg'))
                  
                <div class="col-xl-3 col-sm-6">
                    <div class="card border p-0 pb-3">
                        <div class="card-header border-0 pt-3">
                            <div class="card-options">
                                <a href="javascript:void(0)" class="card-options-remove"
                                    data-bs-toggle="card-remove"><i class="fe fe-x"></i></a>
                            </div>
                        </div>
                        <div class="card-body text-center">
                            <span class=""><svg xmlns="http://www.w3.org/2000/svg" height="60"
                                    width="60" viewBox="0 0 24 24">
                                    <path fill="#13bfa6"
                                        d="M10.3125,16.09375a.99676.99676,0,0,1-.707-.293L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328l-6.1875,6.1875A.99676.99676,0,0,1,10.3125,16.09375Z"
                                        opacity=".99" />
                                    <path fill="#71d8c9"
                                        d="M12,2A10,10,0,1,0,22,12,10.01146,10.01146,0,0,0,12,2Zm5.207,7.61328-6.1875,6.1875a.99963.99963,0,0,1-1.41406,0L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328Z" />
                                </svg></span>
                            <h4 class="h4 mb-0 mt-3">Success</h4>
                            <p class="card-text">{{ $message }}</p>
                        </div>
                        <div class="card-footer text-center border-0 pt-0">
                            <div class="row">
                                
                            </div>
                        </div>
                    </div>
                </div>
                @endif

                @if ($message = Session::get('mesage'))
                <div class="col-xl-3 col-sm-6">
                    <div class="card border p-0 pb-3">
                        <div class="card-header border-0 pt-3">
                            <div class="card-options">
                                <a href="javascript:void(0)" class="card-options-remove"
                                    data-bs-toggle="card-remove"><i class="fe fe-x"></i></a>
                            </div>
                        </div>
                        <div class="card-body text-center">
                            <span class=""><svg xmlns="http://www.w3.org/2000/svg" height="60"
                                    width="60" viewBox="0 0 24 24">
                                    <path fill="#13bfa6"
                                        d="M10.3125,16.09375a.99676.99676,0,0,1-.707-.293L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328l-6.1875,6.1875A.99676.99676,0,0,1,10.3125,16.09375Z"
                                        opacity=".99" />
                                    <path fill="#71d8c9"
                                        d="M12,2A10,10,0,1,0,22,12,10.01146,10.01146,0,0,0,12,2Zm5.207,7.61328-6.1875,6.1875a.99963.99963,0,0,1-1.41406,0L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328Z" />
                                </svg></span>
                            <h4 class="h4 mb-0 mt-3">Success</h4>
                            <p class="card-text">{{ $message }}</p>
                        </div>
                        <div class="card-footer text-center border-0 pt-0">
                            <div class="row">
                                
                            </div>
                        </div>
                    </div>
                </div>
                @endif



                    <!-- PAGE-HEADER END -->
                    <div class="card">
                        <div class="card-header">
                            <!--button ajout-->
                            <a class="btn btn-xs btn-red" href="{{ route('ajout_client') }}">
                                Ajouter client
                            </a>
                        </div>

                        <div class="container">
                            <div class="row">

                                <table id="example" class="table table-striped " style="width:100%">
                                    <thead class="table-danger">
                                        <tr>
                                            <th>logo</th>
                                            <th>Nom_client</th>
                                            <th>email</th>
                                            <th>date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table-bordered">
                                        @foreach ($clients as $index => $c)
                                            <tr>

                                                <td><img src="{{ asset('uploads') }}/{{ $c->logo }}" width="150">
                                                </td>
                                                <td>{{ $c->nom_client }}</td>
                                                <td>{{ $c->email }}</td>
                                                <td>{{ $c->created_at }}</td>

                                                <td>
                                                    <!--button modifier-->
                                                    <a href="/edite_clients/{{ $c->id }}" type="button"
                                                        class="btn btn-icon  btn-info"><i class="fa fa-pencil-square-o"></i>
                                                    </a>

                                                    <!--button supprimer-->
                                                    <a href="/admin/client/{{ $c->id }}/delete"
                                                        onclick="return confirm('voulez-vous vraiment supprimer cette ')"
                                                        type="button" class="btn btn-icon  btn-danger"
                                                        class="card-body text-center"> <i class="fe fe-trash"></i>
                                                    </a>

                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>

                                </table>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- ROW-2 -->
            </div>
        </div>
    </div>
    <a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>
@endsection
@section('js')
    <script>
        $(document).ready(function() {
            $('#example').DataTable();

        });
    </script>
@endsection
