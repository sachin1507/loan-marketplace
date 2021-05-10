@extends('admin.layout')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="card-header">
            <h3 class="float-sm-left">@lang('admin.articles.title')</h3>
            <p class="float-sm-right">
                <a href="{{ route('admin.article.create') }}" class="btn btn-success">@lang('global.add_new')</a>
            </p>
        </div>

        <div class="card">  
            <div class="card-body">
                <table id="categories-table" class="table table-bordered table-striped">
                    <thead>
                        <tr>                            
                            <th>Sr No</th>
                            <th>Title</th>
                            <th>Sub Title</th>                            
                            <th>Image</th>
                            <th>Slug</th>  
                            <th>Active</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @if (count($articles) > 0)
                            @foreach ($articles as $key => $data)
                                <tr data-entry-id="{{ $data->id }}">                              
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $data->title }}</td>
                                    <td>{{ $data->sub_title }}</td>   
                                    <td><img src="{{ url('/storage/articles/'.$data->image) }}" alt="image" width="60" height=""></td>    
                                    <td>{{ $data->slug }}</td>                                    
                                    <td>
                                        @if($data->active == 1)
                                        <i class="fa fa-check danger"></i>
                                        @else
                                        <i class="fa fa-times"></i>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.article.edit',[$data->id]) }}" class="btn btn-xs btn-info">@lang('global.edit')</a>
                                        
                                        <form method="POST" onsubmit="return confirm('@lang('global.are_you_sure')')" action="{{ route('admin.article.destroy', $data->id) }}" style="display: inline-block;">
                                            <input type="hidden" name="name" value="{{ $data->name }}" />
                                            @csrf
                                            @method('DELETE')
                                            <input type="submit" value="@lang('global.delete')" class="btn btn-xs btn-danger" />
                                        </form>                                        
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="11">@lang('admin.no_record_found')</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
@endsection
