@extends('layouts.master')
@section('title', 'الحيوانات')
@section('page-header')
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="mb-0"> الحيوانات </h4>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                    <li class="breadcrumb-item"><a href="{{route('home')}}" class="default-color">الرئيسية</a></li>
                    <li class="breadcrumb-item active"> الحيوانات</li>
                </ol>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="row">


        <div class="col-xl-12 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif


                    <button type="button" class="button x-small" data-toggle="modal" data-target="#exampleModal"> اضافة
                        حيوان
                    </button>
                    <br><br>
                    @if ( Session::has('success'))
                        <div class="alert alert-success alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>   {{ Session::get( 'success' ) }} </strong>
                        </div>
                    @endif

                    <div class="table-responsive">
                        <table id="datatable" class="table table-hover table-sm table-bordered p-0"
                               data-page-length="50" style="text-align: center">
                            <thead>
                            <tr>
                                <th>#</th>

                                <th>الاسم</th>
                                <th>الرقم</th>
                                <th>الوصف</th>
                                <th>القسم</th>
                                <th>السعر</th>
                                <th>الانشطة</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $i = 0; ?>
                            @foreach ($items as $users)
                                <tr>
                                    <?php $i++; ?>
                                    <td>{{ $i }}</td>
                                    <td>{{ $users->name }}</td>
                                    <td>{{ $users->number }}</td>
                                    <td>{{ $users->description }}</td>
                                    <td>{{ $users->category->name }}</td>
                                    <td>{{ $users->price }}</td>
                                    <td>
                                        <button type="button" class="btn btn-info btn-sm" data-toggle="modal"
                                                data-target="#show{{ $users->id }}"
                                                title="show"><i class="fa fa-superpowers" aria-hidden="true"></i>
                                        </button>
                                        <button type="button" class="btn btn-info btn-sm" data-toggle="modal"
                                                data-target="#edit{{ $users->id }}"
                                                title=" Edit"><i class="fa fa-edit"></i></button>
                                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                                data-target="#delete{{ $users->id }}"
                                                title="Delete"><i
                                                class="fa fa-trash"></i></button>
                                    </td>
                                </tr>

                                <!--show_modal_Grade -->
                                <div class="modal fade" id="show{{ $users->id }}" tabindex="-1" role="dialog"
                                     aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title"
                                                    id="exampleModalLabel">
                                                    عرض الحيوان
                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">

                                                <div class="row">
                                                    <div class="col">
                                                        <label for="Name" class="mr-sm-2">
                                                            الاسم
                                                            :</label>
                                                        <label for="Name" class="mr-sm-2">
                                                            <strong>{{$users->name}}</strong>
                                                        </label>

                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <label for="Name" class="mr-sm-2">
                                                            رقم الهاتف
                                                            :</label>
                                                        <label for="Name" class="mr-sm-2">
                                                            <strong>{{$users->number}}</strong>
                                                        </label>

                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <label for="Name" class="mr-sm-2">
                                                            الوصف
                                                            :</label>

                                                        <label for="Name" class="mr-sm-2">
                                                            <strong>{{$users->description}}</strong>
                                                        </label>

                                                    </div>
                                                </div>


                                                <br><br>

                                                <div class="row">
                                                    <div class="col">
                                                        <label for="Name" class="mr-sm-2">
                                                            السعر
                                                            :</label>

                                                        <label for="Name" class="mr-sm-2">
                                                            <strong>{{$users->price}}</strong>
                                                        </label>

                                                    </div>
                                                </div>


                                                <br><br>
                                                <div class="row">
                                                    <div class="col">

                                                        <label for="Name" class="mr-sm-2">
                                                            الفئة
                                                            :</label>
                                                        <label for="Name" class="mr-sm-2">
                                                            <strong>{{$users->category->name}}</strong>
                                                        </label>

                                                    </div>
                                                </div>

                                                <br><br>
                                                <!-- Gallery -->
                                                <div class="row">
                                                    @foreach( $users->images as $image )
                                                        <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                                                            <img
                                                                src="{{  asset('images/'.$image->image)  }}"
                                                                class="w-100 shadow-1-strong rounded mb-4"
                                                                alt=""
                                                            />

                                                        </div>
                                                    @endforeach


                                                </div>
                                                <!-- Gallery -->

                                                <br><br>

                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">اغلاق
                                                    </button>

                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- edit_modal_Grade -->
                                <div class="modal fade" id="edit{{ $users->id }}" tabindex="-1" role="dialog"
                                     aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title"
                                                    id="exampleModalLabel">
                                                    تعديل الحيوان
                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <!-- add_form -->
                                                <form action="{{ route('product.update', $users->id) }}" method="post" enctype="multipart/form-data">
                                                    {{ method_field('patch') }}
                                                    @csrf
                                                    <div class="row">
                                                        <div class="col">
                                                            <label for="Name" class="mr-sm-2">
                                                                الاسم
                                                                :</label>
                                                            <input id="Name" type="text" name="name"
                                                                   class="form-control"
                                                                   value="{{$users->name}}"
                                                                   required>
                                                            <input id="id" type="hidden" name="id" class="form-control"
                                                                   value="{{$users->id}}">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col">
                                                            <label for="Name" class="mr-sm-2">
                                                                رقم الهاتف
                                                                :</label>
                                                            <input id="Name" type="text" name="number"
                                                                   class="form-control"
                                                                   value="{{$users->number}}"
                                                                   required>

                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col">
                                                            <label for="Name" class="mr-sm-2">
                                                                السعر
                                                                :</label>
                                                            <input id="Name" type="text" name="price"
                                                                   class="form-control"
                                                                   value="{{$users->price}}"
                                                                   required>

                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col">
                                                            <label for="Name" class="mr-sm-2">
                                                                الوصف
                                                                :</label>
                                                            <input id="Name" type="text" name="description"
                                                                   class="form-control"
                                                                   value="{{$users->description}}"
                                                                   required>

                                                        </div>
                                                    </div>

                                                    <br><br>

                                                    <div class="row">
                                                        <div class="col">

                                                            <select class="form-control" name="category_id">
                                                                @foreach($categories as $teacher)
                                                                    <option
                                                                        @if($teacher->id == $users->category_id) selected
                                                                        @endif
                                                                        value="{{$teacher->id}}"> {{$teacher->name}} </option>
                                                                @endforeach

                                                            </select>
                                                        </div>
                                                    </div>


                                                    <br><br>
                                                    <div class="row">
                                                        <div class="col">
                                                            <label for="Name" class="mr-sm-2">
                                                                الصور
                                                                :</label>
                                                            <input id="Name" type="file" name="images[]"
                                                                   class="form-control"
                                                                    multiple>

                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        @foreach( $users->images as $image )
                                                            <div class="col-md-4">
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <img
                                                                            style="border-radius: 20px;max-width: 30%;max-height: 100px;"
                                                                            src="{{  asset('images/'.$image->image)  }}"
                                                                            class="shadow-1-strong mb-1 mt-1"
                                                                            alt=""/>
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <a class="btn btn-danger" type="button" href="javascript:void(0)"
                                                                                onclick="this.parentElement.parentElement.remove()">حذف
                                                                        </a>
                                                                    </div>
                                                                    <input type="hidden" name="old_images[]"
                                                                           value="{{ $image->id }}"/>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>

                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">اغلاق
                                                        </button>
                                                        <button type="submit"
                                                                class="btn btn-success">submit
                                                        </button>
                                                    </div>
                                                </form>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- delete_modal_Grade -->
                                <div class="modal fade" id="delete{{ $users->id }}" tabindex="-1" role="dialog"
                                     aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title"
                                                    id="exampleModalLabel">حذف الحيوان
                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{ route('product.destroy', $users->id) }}" method="post">
                                                    {{ method_field('Delete') }}
                                                    @csrf

                                                    <input id="id" type="hidden" name="id" class="form-control"
                                                           value="{{ $users->id }}">
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">Close
                                                        </button>
                                                        <button type="submit"
                                                                class="btn btn-danger">حذف
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </table>
                        {{ $items->links('pagination::bootstrap-4') }}
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true" enctype="multipart/form-data">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title" id="exampleModalLabel">
                            اضافة حيوان
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- add_form -->
                        <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col">
                                    <label for="name" class="mr-sm-2">الاسم
                                        :</label>
                                    <input id="name" type="text" name="name" class="form-control">
                                </div>

                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">رقم الهاتف
                                    :</label>
                                <input id="number" type="text" name="number" class="form-control">
                            </div>



                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">السعر
                                    :</label>
                                <input id="number" type="text" name="price" class="form-control">
                            </div>



                            <div class="row">
                                <div class="col">
                                    <label for="name" class="mr-sm-2">الوصف
                                        :</label>
                                    <textarea id="name" type="text" name="description" class="form-control"> </textarea>
                                </div>
                            </div>
                            <br><br>
                            <div class="row">
                                <div class="col">
                                    <label for="Name" class="mr-sm-2">
                                        الصور
                                        :</label>
                                    <input id="Name" type="file" name="images[]"
                                           class="form-control"
                                           required multiple>

                                </div>
                            </div>
                            <br><br>

                            <div class="row">
                                <div class="col">
                                    <select class="form-control" name="category_id">
                                        @foreach($categories as $catgeory)
                                            <option value="{{$catgeory->id}}"> {{$catgeory->name}} </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <br><br>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary"
                                        data-dismiss="modal">اغلاق
                                </button>
                                <button type="submit" class="btn btn-success">اضافة</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title" id="exampleModalLabel">
                        اضافة حيوان
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

            </div>
        </div>
    </div>
@endsection
