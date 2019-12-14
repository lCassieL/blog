@extends('admin.layouts.app_admin')

@section('content')

    <div class="container">
        @component('admin.components.breadcrumb')
            @slot('title') List of categories @endslot
            @slot('parent') Main @endslot
            @slot('active') Categories @endslot
         @endcomponent

        <hr>

        <a href="{{route('admin.category.create')}}" class="btn btn-primary pull-right">
            <i class="fafa-plus-square-o"></i>
            Create category
        </a>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Name</th>
                <th>Publication</th>
                <th class="text-right">Action</th>
            </tr>
            </thead>
            <tbody>
            @forelse ($categories as $key =>$value)
                <tr>
                    <td>{{$category->title}}</td>
                    <td>{{$category->published}}</td>
                    <td>
                        <a href="{{route('admin.category.edit', ['id'=>$category->id])}}">
                            <i class="fafa-edit"></i>
                        </a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="3" class="text-center"><h2>Missing data</h2></td>
                </tr>
            @endforelse
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="3">
                        <ul class="pagination pull-right">
                            {{$categories->links()}}
                        </ul>
                    </td>
                </tr>
            </tfoot>
        </table>
    </div>



@endsection
