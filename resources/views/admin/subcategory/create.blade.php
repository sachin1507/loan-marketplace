@extends('admin.layout')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="card-header">
          <h3 class="page-title">@lang('admin.subcategories.title')</h3>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="box box-success">
              <div class="box-header with-border">
                <h3 class="box-title">@lang('admin.subcategories.add_new_subcategory')</h3>
              </div>
              <form method="POST" action="{{ route('admin.subcategory.store') }}" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                  <label for="name" class="control-label">Category*</label>
                  <select name="cat_id" class="form-control select2" required>
                      @foreach($categories as $category)
                          <option value="{{ $category->id }}">{{ $category->name}}</option>
                      @endforeach
                  </select>
                  <p class="help-block"></p>
                  @if($errors->has('cat_id'))
                      <p class="help-block">
                          {{ $errors->first('cat_id') }}
                      </p>
                  @endif
              </div>              
              <div class="box-body">        
                <div class="form-group">
                    <label for="last_name" class="control-label">@lang('admin.subcategories.fields.name')*</label>
                    <input type="text" name="name" value="{{ old('name') }}" class='form-control' placeholder='Category Name' required />
                    <p class="help-block"></p>
                    @if($errors->has('name'))
                        <p class="help-block">
                            {{ $errors->first('name') }}
                        </p>
                    @endif
                </div>               
                <div class="form-group">
                    <label for="image">Image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="image" name="image">
                        <label class="custom-file-label" for="image">Choose file</label>
                      </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="control-label">@lang('admin.subcategories.fields.active')*</label>
                    <select name="active" class="form-control select2">
                        <option value="1">Active</option>
                        <option value="0">Inactive</option>
                    </select>
                    <p class="help-block"></p>
                    @if($errors->has('active'))
                        <p class="help-block">
                            {{ $errors->first('active') }}
                        </p>
                    @endif
                </div>
              </div>
              <!-- /.box body -->
              <div class="box-footer">
                <input type="submit" class="btn btn-info" value="@lang('global.save')" />
                <a class="btn btn-default" href="{{ route('admin.subcategory.index') }}" />@lang('global.cancel')</a>
              </div>
              </form>
            </div>
          </div>
        </div>
    </div>
</section>
@endsection
