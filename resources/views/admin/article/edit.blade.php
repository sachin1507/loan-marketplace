@extends('admin.layout')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="card-header">
          <h3 class="page-title">@lang('admin.articles.title')</h3>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="box box-success">
              <div class="box-header with-border">
                <h3 class="box-title">@lang('admin.articles.edit_article')</h3>
              </div>
              <form method="POST" action="{{ route('admin.article.update', $article->id) }}" enctype="multipart/form-data">
              @csrf
              @method('PUT')
              <div class="box-body">
                <div class="form-group">
                    <label for="title" class="control-label">@lang('admin.articles.fields.title')*</label>
                    <input type="text" name="title" value="{!! $article->title !!}" class='form-control' placeholder='Title' required />                    
                    <p class="help-block"></p>
                    @if($errors->has('title'))
                        <p class="help-block">
                            {{ $errors->first('title') }}
                        </p>
                    @endif
                </div>
                <div class="form-group">
                    <label for="sub_title" class="control-label">@lang('admin.articles.fields.sub_title')*</label>
                    <input type="text" name="sub_title" value="{!! $article->sub_title !!}" class='form-control' placeholder='Sub Title' required />
                    <p class="help-block"></p>
                    @if($errors->has('sub_title'))
                        <p class="help-block">
                            {{ $errors->first('sub_title') }}
                        </p>
                    @endif
                </div>
                <div class="form-group">
                    <label for="description" class="control-label">@lang('admin.articles.fields.description')*</label>                    
                    <textarea class="form-control textarea" name="description" cols="" rows="10" id="description" placeholder='Description' required>{!! $article->description !!}</textarea>
                    <p class="help-block"></p>
                    @if($errors->has('description'))
                        <p class="help-block">
                            {{ $errors->first('description') }}
                        </p>
                    @endif
                </div>               
                <div class="form-group">
                    <label for="image">Image*</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="image" name="image">
                        <label class="custom-file-label" for="image">Choose file</label>
                      </div>
                    </div>
                </div>                         
                <div class="form-group">
                    <label for="email" class="control-label">@lang('admin.articles.fields.active')*</label>
                    <select name="active" class="form-control select2">
                        @if ($article->active == 1)
                        <option value="1" selected="selected">Active</option>
                        <option value="0">Inactive</option>
                        @else
                        <option value="1">Active</option>
                        <option value="0" selected="selected">Inactive</option>
                        @endif
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
                <a class="btn btn-default" href="{{ route('admin.article.index') }}" />@lang('global.cancel')</a>
              </div>
              </form>
            </div>
          </div>
        </div>
    </div>
</section>
@endsection
