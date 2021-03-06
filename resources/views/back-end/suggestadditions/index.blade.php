@extends('back-end.layout.app')
 @php $row_num = 1;   $pageTitle = "عرض الاضافات المقترحة" @endphp
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
                                <th>الاقتراح</th>
                                <th>السعر</th>
                                <th>نوع الخدمة</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($rows as $item)
                                 <tr>
                                    <td> {{$row_num++}}</td>
                                    <td>{{$item->suggestion}}</td>
                                     <td>{{$item->price}}</td>
                                     @if(isset($item->service_category))
                                         <td>{{$item->service_category->name}}</td>
                                     @else
                                         <td>لا يوجد</td>
                                     @endif
                                    <td>
                                        <form action="{{ route($routeName.'.destroy' , ['id' => $item]) }}" method="post">
                                            {{ csrf_field() }}
                                            {{ method_field('delete') }}
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
