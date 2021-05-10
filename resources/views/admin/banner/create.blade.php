@extends('admin.layout')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="card-header">
          <h3 class="page-title">@lang('admin.banners.title')</h3>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="box box-success">
              <div class="box-header with-border">
                <h3 class="box-title">@lang('admin.banners.add_new_banner')</h3>
              </div>
              <form method="POST" action="{{ route('admin.banner.store') }}" enctype="multipart/form-data">
              @csrf
              <div class="box-body">        
                <div class="form-group">
                    <label for="name" class="control-label">@lang('admin.banners.fields.name')*</label>
                    <input type="text" name="name" value="{{ old('name') }}" class='form-control' placeholder='Name' required />                    
                    <p class="help-block"></p>
                    @if($errors->has('name'))
                        <p class="help-block">
                            {{ $errors->first('name') }}
                        </p>
                    @endif
                </div>
                <div class="form-group">
                    <label for="image">Image*</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="image" name="image" required>
                        <label class="custom-file-label" for="image">Choose file</label>
                      </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="title" class="control-label">@lang('admin.banners.fields.title')*</label>
                    <input type="text" name="title" value="{{ old('title') }}" class='form-control' placeholder='Title' required />
                    <p class="help-block"></p>
                    @if($errors->has('title'))
                        <p class="help-block">
                            {{ $errors->first('title') }}
                        </p>
                    @endif
                </div>
                <div class="form-group">
                    <label for="sub_title" class="control-label">@lang('admin.banners.fields.sub_title')*</label>
                    <input type="text" name="sub_title" value="{{ old('sub_title') }}" class='form-control' placeholder='Sub Title' required />
                    <p class="help-block"></p>
                    @if($errors->has('sub_title'))
                        <p class="help-block">
                            {{ $errors->first('sub_title') }}
                        </p>
                    @endif
                </div> 
                <div class="form-group">
                    <label for="description" class="control-label">@lang('admin.banners.fields.description')*</label>                    
                    <textarea class="form-control" name="description" cols="" rows="10" id="description" placeholder='Description' required></textarea>
                    <p class="help-block"></p>
                    @if($errors->has('description'))
                        <p class="help-block">
                            {{ $errors->first('description') }}
                        </p>
                    @endif
                </div>               
                <div class="form-group">
                    <label for="button_text" class="control-label">@lang('admin.banners.fields.button_text')*</label>
                    <input type="text" name="button_text" value="{{ old('button_text') }}" class='form-control' placeholder='Button Text' required />
                    <p class="help-block"></p>
                    @if($errors->has('button_text'))
                        <p class="help-block">
                            {{ $errors->first('button_text') }}
                        </p>
                    @endif
                </div>
                <div class="form-group">
                    <label for="button_link" class="control-label">@lang('admin.banners.fields.button_link')*</label>
                    <input type="text" name="button_link" value="{{ old('button_link') }}" class='form-control' placeholder='Button Link' required />
                    <p class="help-block"></p>
                    @if($errors->has('button_link'))
                        <p class="help-block">
                            {{ $errors->first('button_link') }}
                        </p>
                    @endif
                </div>           
                <div class="form-group">
                    <label for="email" class="control-label">@lang('admin.banners.fields.active')*</label>
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
                <a class="btn btn-default" href="{{ route('admin.banner.index') }}" />@lang('global.cancel')</a>
              </div>
              </form>
            </div>
          </div>
        </div>
    </div>
</section>
@endsection
