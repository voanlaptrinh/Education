@extends('admin.index')
@section('contentadmin')
    <div class="page-content-wrapper border">
        <div class="row mb-3">
            <div class="col-12 d-sm-flex justify-content-between align-items-center">
                <h1 class="h3 mb-2 mb-sm-0">Sửa file PDF</h1>
            </div>
        </div>
        <form method="POST" class="p-4" action="{{ route('document.update', $document->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group row">
                <label for="classes_id">Lớp học</label>
                <select name="classes_id" class="form-control" required>
                    @foreach ($classes as $class)
                        <option value="{{ $class->id }}" {{ $class->id == $document->classes_id ? 'selected' : '' }}>
                            {{ $class->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group row pt-3">
                <label for="name">Document Name</label>
                <input type="text" name="name" class="form-control" value="{{ $document->name }}" required>
            </div>
            <div class="row pt-3">
                <div class="form-group col-6">
                    <label for="description">Description</label>
                    <textarea name="description" class="form-control" cols="7" rows="9" required>{{ $document->description }}</textarea>
                </div>
                <div class="col-6 pt-3">
                    <div
                        class="text-center justify-content-center align-items-center p-4 p-sm-5 border border-2 border-dashed position-relative rounded-3">
                        <!-- Image -->
                        <a src="{{ asset('storage/' . $document->file_path) }}" class="h-50px" target="_blank"> View
                            PDF</a>
                        <div>
                            <h6 class="my-2">Tải PDF vào đây, hoặc<a href="#!" class="text-primary"> Browse</a>
                            </h6>
                            <label style="cursor:pointer;">
                                <span>
                                    <input class="form-control stretched-link custom-cursor-on-hover"
                                        value="{{ asset('storage/' . $document->file_path) }}" type="file" name="file"
                                        id="file">
                                </span>
                            </label>
                            <p class="small mb-0 mt-2"><b style="color:red">Note:</b> Chỉ có PDF.</p>
                        </div>
                    </div>
                </div>
            </div>





            <div class="form-group pt-3">
                <button type="submit" class="btn btn-primary">Update Document</button>
            </div>
        </form>
    </div>
@endsection
