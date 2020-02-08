@extends('back-end.layout.app')
 @php $row_num = 1;   $pageTitle = "عرض العملاء" @endphp  
@section('title')
   {{$pageTitle}}
@endsection

@section('content')

    @component('back-end.layout.header')
        @slot('nav_title')
        {{$pageTitle}} 
         {{-- <a href="{{ route($routeName.'.create') }}">  
            <button class="alert-success"> <i class="fa fa-plus"></i> </button>
         </a> --}}
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
                            <th>البريد</th>
                            <th> اسم المستخدم</th>
                                <th>التلفون</th>
                                
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($rows as $item)
                                 <tr>
                                    <td> {{$row_num++}}</td>
                                    <td>{{$item->email}}</td>
                                    <td>{{$item->user_name}}</td>
                                    <td>{{$item->phone}}</td>
                                    <td>
                                        
                                        <form action="{{ route($routeName.'.destroy' , ['id' => $item]) }}" method="post">
                                            {{ csrf_field() }}
                                            {{ method_field('delete') }}
                                            <a href='{{ url("admin/orders/$item->id") }}' rel="tooltip" title="" class="btn btn-info" data-original-title="Edit {{ $sModuleName }}">
                                                <i class="material-icons">الطبات</i>
                                            </a>
                                            <a href="{{ route($routeName.'.edit' , ['id' => $item]) }}" rel="tooltip" title="" class="btn btn-info" data-original-title="Edit {{ $sModuleName }}">
                                                    <i class="material-icons">تعديل</i>
                                                </a>
                                            <button type="submit" rel="tooltip" title="" class="btn btn-danger"  onclick="check()" data-original-title="Remove {{ $sModuleName }}">
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
