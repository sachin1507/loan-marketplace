@extends('admin.layout')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="card-header">
            <h3 class="float-sm-left">@lang('admin.banners.title')</h3>
            <p class="float-sm-right">
                <a href="{{ route('admin.banner.create') }}" class="btn btn-success">@lang('global.add_new')</a>
            </p>
        </div>

        <div class="card">  
            <div class="card-body">
                <table id="categories-table" class="table table-bordered table-striped">
                    <thead>
                        <tr>                            
                            <th>Sr No.</th>
                            <th>Name</th>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Sub Title</th>
                            <th>Description</th>
                            <th>Button Text</th>
                            <th>Button Link</th>
                            <th>Slug</th>  
                            <th>Active</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @if (count($banners) > 0)
                            @foreach ($banners as $key => $data)
                                <tr data-entry-id="{{ $data->id }}">                                    
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $data->name }}</td>
                                    <td><img src="{{url('/storage/banners/'.$data->image)}}" alt="image" width="60" height=""></td>
                                    <td>{{ $data->title }}</td>
                                    <td>{{ $data->sub_title }}</td>
                                    <td>{{substr($data->description, 0, 50)}} ..</td>
                                    <td>{{ $data->button_text }}</td>
                                    <td>{{ $data->button_link }}</td>                                    
                                    <td>{{ $data->slug }}</td>                                    
                                    <td>
                                        @if($data->active == 1)
                                        <i class="fa fa-check danger"></i>
                                        @else
                                        <i class="fa fa-times"></i>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.banner.edit',[$data->id]) }}" class="btn btn-xs btn-info">@lang('global.edit')</a>
                                        
                                        <form method="POST" onsubmit="return confirm('@lang('global.are_you_sure')')" action="{{ route('admin.banner.destroy', $data->id) }}" style="display: none;">
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
                                <td colspan="9">@lang('admin.no_record_found')</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
@endsection
