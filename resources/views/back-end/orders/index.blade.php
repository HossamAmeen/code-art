@extends('back-end.layout.app')
 @php $row_num = 1;   $pageTitle = "عرض الطلبات" @endphp  
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
                            <th>المنتج</th>
                            <th> السعر</th>
                            <th> الحالة</th>
                                <th>الكمية</th>
                               
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($rows as $item)
                                 <tr>  
                                    <td> {{$row_num++}}</td>
                                    @if(isset($item->service))
                                    <td>{{$item->service->title}}</td>
                                    @else 
                                    <td></td>
                                    @endif
                                    <td>{{$item->price}}</td>

                                    @if($item->status == 1)
                                    <td>معلق</td>
                                    @elseif($item->status == 2)
                                    <td>تم القبول </td>
                                    @elseif($item->status == 3)
                                    <td>تحت التنفيذ</td>
                                    @elseif($item->status == 4)
                                    <td>تم الاستلام</td>
                                    @endif
                                    
                                    <td>{{$item->amount}}</td>
                                     <td>
                                        <form action="{{ route($routeName.'.destroy' , ['id' => $item]) }}" method="post">
                                            {{ csrf_field() }}
                                            {{ method_field('delete') }}
                                            {{-- <a href="{{ route($routeName.'.edit' , ['id' => $item]) }}" rel="tooltip" title="" class="btn btn-info" data-original-title="Edit {{ $sModuleName }}">
                                                    <i class="material-icons">تعديل</i>
                                                </a> --}}
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
