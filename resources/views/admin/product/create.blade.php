@extends('admin.layout')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="card-header">
          <h3 class="page-title">@lang('admin.products.title')</h3>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="box box-success">
              <div class="box-header with-border">
                <h3 class="box-title">@lang('admin.products.add_new_product')</h3>
              </div>
              <form method="POST" action="{{ route('admin.product.store') }}" enctype="multipart/form-data">
              @csrf
              <div class="box-body">
                <div class="form-group">
                    <label for="title" class="control-label">@lang('admin.products.fields.title')*</label>
                    <input type="text" name="title" value="{{ old('title') }}" class='form-control' placeholder='Title' required />
                    <p class="help-block"></p>
                    @if($errors->has('title'))
                        <p class="help-block">
                            {{ $errors->first('title') }}
                        </p>
                    @endif
                </div>
                <div class="form-group">
                    <label for="sub_title" class="control-label">@lang('admin.products.fields.sub_title')*</label>
                    <input type="text" name="sub_title" value="{{ old('sub_title') }}" class='form-control' placeholder='Sub Title' />
                    <p class="help-block"></p>
                    @if($errors->has('sub_title'))
                        <p class="help-block">
                            {{ $errors->first('sub_title') }}
                        </p>
                    @endif
                </div>
                <div class="form-group">
                    <label for="cat_id" class="control-label">@lang('admin.categories.title')*</label>
                    <select name="cat_id" class="form-control" required>
                          <option value="">Please select</option>
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
                <div class="form-group">
                    <label for="subcat_id" class="control-label">@lang('admin.subcategories.title')*</label>
                    <select name="subcat_id" class="form-control" required>
                      
                    </select>
                    <p class="help-block"></p>
                    @if($errors->has('subcat_id'))
                        <p class="help-block">
                            {{ $errors->first('subcat_id') }}
                        </p>
                    @endif
                </div>
                <div class="form-group">
                    <label for="description" class="control-label">@lang('admin.products.fields.description')*</label>                    
                    <textarea class="form-control textarea" name="description" cols="" rows="10" id="description" placeholder='Description' required></textarea>
                    <p class="help-block"></p>
                    @if($errors->has('description'))
                        <p class="help-block">
                            {{ $errors->first('description') }}
                        </p>
                    @endif
                </div> 
                <div class="form-group">
                    <label for="title1" class="control-label">Title 1</label>
                    <input type="text" name="title1" value="{{ old('title1') }}" class='form-control' placeholder='Title 1' />
                    <p class="help-block"></p>
                    @if($errors->has('title1'))
                        <p class="help-block">
                            {{ $errors->first('title1') }}
                        </p>
                    @endif
                </div>
                <div class="form-group">
                    <label for="content1" class="control-label">Content 1</label>
                    <textarea class="form-control" name="content1" cols="" rows="3" id="content1" placeholder='Content 1'></textarea>
                    <p class="help-block"></p>
                    @if($errors->has('content1'))
                        <p class="help-block">
                            {{ $errors->first('content1') }}
                        </p>
                    @endif
                </div>
                <div class="form-group">
                    <label for="title2" class="control-label">Title 2</label>
                    <input type="text" name="title2" value="{{ old('title2') }}" class='form-control' placeholder='Title 2' />
                    <p class="help-block"></p>
                    @if($errors->has('title2'))
                        <p class="help-block">
                            {{ $errors->first('title2') }}
                        </p>
                    @endif
                </div>
                <div class="form-group">
                    <label for="content2" class="control-label">Content 2</label>
                    <textarea class="form-control" name="content2" cols="" rows="3" id="content2" placeholder='Content 2'></textarea>
                    <p class="help-block"></p>
                    @if($errors->has('content2'))
                        <p class="help-block">
                            {{ $errors->first('content2') }}
                        </p>
                    @endif
                </div>
                <div class="form-group">
                    <label for="title3" class="control-label">Title 3</label>
                    <input type="text" name="title3" value="{{ old('title3') }}" class='form-control' placeholder='Title 3' />
                    <p class="help-block"></p>
                    @if($errors->has('title3'))
                        <p class="help-block">
                            {{ $errors->first('title3') }}
                        </p>
                    @endif
                </div>
                <div class="form-group">
                    <label for="content3" class="control-label">Content 3</label>
                    <textarea class="form-control" name="content3" cols="" rows="3" id="content3" placeholder='Content 3'></textarea>
                    <p class="help-block"></p>
                    @if($errors->has('content3'))
                        <p class="help-block">
                            {{ $errors->first('content3') }}
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
                    <label for="button_link" class="control-label">@lang('admin.products.fields.button_link')*</label>
                    <input type="text" name="button_link" value="{{ old('button_link') }}" class='form-control' placeholder='Button Link' required />
                    <p class="help-block"></p>
                    @if($errors->has('button_link'))
                        <p class="help-block">
                            {{ $errors->first('button_link') }}
                        </p>
                    @endif
                </div>       
                <div class="form-group">
                    <label for="email" class="control-label">@lang('admin.products.fields.active')*</label>
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
                <a class="btn btn-default" href="{{ route('admin.product.index') }}" />@lang('global.cancel')</a>
              </div>
              </form>
            </div>
          </div>
        </div>
    </div>
</section>
@endsection
