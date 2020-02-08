@extends('back-end.layout.app')
 @php $row_num = 1;   $pageTitle = "الأسالة الشائعه" @endphp  
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
                            <th>السؤال</th>
                                <th>الاجابة</th>
                                <th> السؤال بالانجليزي</th>
                               
                                <th>المستخدم</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($rows as $item)
                                 <tr>
                                    <td> {{$row_num++}}</td>
                                    <td>{{$item->question}}</td>
                                    <td>{{$item->en_question}}</td>
                                    <td> {{substr($item->answer , 0 , 50 )}}</td>
                                    <td>{{ isset($item->user) ? $item->user->user_name : '' }}</td>
                                    <td>
                                     @include('back-end.shared.buttons.delete')
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
    @endcomponent
@endsection
