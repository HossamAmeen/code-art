@extends('back-end.layout.app')
 @php $row_num = 1;   $pageTitle = "الفديوهات" @endphp  
@section('title')
   {{$pageTitle}}
@endsection

@section('content')

    @component('back-end.layout.header')
        @slot('nav_title')
        {{$pageTitle}} 
         <a href="{{ route($routeName.'.create') }}">  
            <button class="alert-success"> <i class="fa fa-plus"></i> </button>
         </a>
        @endslot
    @endcomponent
    @component('back-end.shared.table' )
                    @if (session()->get('action') )
                        <div class="alert alert-success">
                            <strong>{{session()->get('action')}}</strong>
                        </div>
                    @endif
                    <table class="table table-bordered table-striped table-bottomless" id="ls-editable-table">
                        <thead>
                            <tr>
                            <th>#</th>
                            <th>الاسم</th>
                                <th>الفديو</th>
                                <th>المستخدم</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($rows as $item)
                                 <tr>
                                    <td> {{$row_num++}}</td>
                                    <td>{{$item->name}}</td>
                                   
                                    <td>
                                        <video  controls  height="60px" width="60px">
                                            <source src="{{asset("uploads/".$routeName.'/'.$item->path)}}" type="video/mp4">
                                            <source src="mov_bbb.ogg" type="video/ogg">
                                            Your browser does not support HTML5 video.
                                          </video>

                                         
                                   
                                    <td>{{ isset($item->user) ? $item->user->user_name : '' }}</td>
                                    <td>
                                            <form action="{{ route($routeName.'.destroy' , ['id' => $item]) }}" method="post">
                                                    {{ csrf_field() }}
                                                    {{ method_field('delete') }}
                                                    
                                                    <button type="submit" rel="tooltip" title="" class="btn btn-danger" onclick="check()" data-original-title="Remove {{ $sModuleName }}">
                                                        <i class="material-icons">حذف</i>
                                                    </button>
                                                </form>
                                   
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
    @endcomponent
@endsection
