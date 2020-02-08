 @php $input = "name"; @endphp
 <div class="form-group">
    <label class="col-lg-2 control-label">اسم الفئه</label>
     <div class="col-lg-10">
         <input type="text" name="{{ $input }}"   @if(isset($row)) value="{{$row->$input}}" @else
         value="{{Request::old($input)}}" @endif
           class="form-control" required placeholder="رسوم متحركه" >
           @error($input)
           <div class="alert alert-danger" role="alert" style="text-align: center">
            <strong>{{ $message }}</strong>
          </div>
           @enderror
    </div>
 </div>  
 @php $input = "icon"; @endphp
 <div class="form-group">
    <label class="col-lg-2 control-label"> الايكونه</label>
     <div class="col-lg-10">
         <input type="text" name="{{ $input }}"   @if(isset($row)) value="{{$row->$input}}" @else
         value="{{Request::old($input)}}" @endif
           class="form-control" required placeholder="fa-photo-video">
           <a href="https://fontawesome.com/icons?d=gallery" target="_blank" > للمزيد من الايكونات</a>
           @error($input)
           <div class="alert alert-danger" role="alert" style="text-align: center">
            <strong>{{ $message }}</strong>
          </div>
           @enderror
    </div>
 </div>  
 