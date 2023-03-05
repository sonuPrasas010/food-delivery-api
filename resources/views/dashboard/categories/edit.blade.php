@extends('dashboard.dashboard')
@section('content')
    {{-- <div class="col-xl-4 col-lg-12"> --}}
    <div class="ec-cat-list card card-default mb-24px">
        <div class="card-body">
            <div class="ec-cat-form">
                <h4>Edit {{ $category->name }}</h4>
                @if ($errors->any())
                    {!! implode('', $errors->all('<div>:message</div>')) !!}
                @endif
                <form method="POST" action="{{ route('category.update',$category) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group row">
                        <label for="text" class="col-12 col-form-label">
                            Name
                            {{-- <span class="invalid-feedback">
                                Please choose a username.
                            </span> --}}
                        </label>
                        <div class="col-12">
                            <input id="text" name="name"
                                class="form-control here {{ $errors->has('name') ? 'is-invalid' : '' }}"
                                value="{{ $category->category_name }}">
                            @error('name')
                                <span class="invalid-feedback">
                                    {{ $message }}
                                </span>
                            @enderror

                        </div>
                    </div>
                    {{-- <div class="form-group row"><label for="slug" class="col-12 col-form-label">Slug</label>
                        <div class="col-12">
                            <input id="slug" name="slug" class="form-control here set-slug">
                             <small>The “slug” is the URL-friendly
                                version of the name. It is usually all lowercase and contains only letters,
                                numbers, and hyphens.</small></div>
                    </div> --}}
                    <div class="form-group row">
                        <label class="col-12 col-form-label">Sort Description</label>
                        <div class="col-12">
                            <textarea id="sortdescription" cols="40" rows="2" class="form-control " name="short_desc"> {{ $category->short_desc}} </textarea>

                        </div>
                    </div>
                    <div class="form-group row"><label class="col-12 col-form-label">Full Description</label>
                        <div class="col-12">
                            <textarea id="fulldescription" name="description" cols="40" rows="4" class="form-control">{{ $category->description }}</textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-6">

                        <label for="formFile" class="form-label">Image Wihout Backround</label>
                        <input  name="image" class="form-control {{ $errors->has('image') ? 'is-invalid' : '' }}"
                            type="file" id="formFile">
                        @error('image')
                            <span class="invalid-feedback">
                                {{ $message }}
                            </span>
                        @enderror
                        </div>

                        <div class="col-6">

                    <div class="form-group row">

                        <label for="bg_image" class="form-label">Image With Background</label>
                        <input  name="bg_image" class="form-control {{$errors->has('bg_image')?'is-invalid':''}}" type="file" id="bg_image">
                        @error('bg_image')
                                <span class="invalid-feedback">
                                    {{ $message }}
                                </span>
                            @enderror

                    </div>
                        </div>


                    </div>


                    <div class="row">
                        <div class="col-12"><button name="submit" type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- </div> --}}
@endsection
