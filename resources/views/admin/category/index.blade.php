@extends('admin.layout')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="card-header">
            <h3 class="float-sm-left">@lang('admin.categories.title')</h3>
            <p class="float-sm-right">
                <a href="{{ route('admin.category.create') }}" class="btn btn-success">@lang('global.add_new')</a>
            </p>
        </div>

        <div class="card">  
            <div class="card-body">
                <table id="categories-table" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>

                            <th>Sr No</th>
                            <th>Name</th>                        
                            <th>Image</th>
                            <th>Active</th>
                            <th>Action</th>

                        </tr>
                    </thead>

                    <tbody>
                        @if (count($categories) > 0)
                            @foreach ($categories as $category)
                                <tr data-entry-id="{{ $category->id }}">
                                    <td></td>

                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $category->name }}</td>                                
                                    <td><img src="{{url('/storage/images/'.$category->image)}}" alt="image" width="30" height="30"></td>
                                    <td>
                                        @if($category->active == 1)
                                        <i class="fa fa-check danger"></i>
                                        @else
                                        <i class="fa fa-times"></i>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.category.edit',[$category->id]) }}" class="btn btn-xs btn-info">@lang('global.edit')</a>
                                        
                                        <form method="POST" onsubmit="return confirm('@lang('global.are_you_sure')')" action="{{ route('admin.category.destroy', $category->id) }}" style="display: inline-block;">
                                            <input type="hidden" name="name" value="{{ $category->name }}" />
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
