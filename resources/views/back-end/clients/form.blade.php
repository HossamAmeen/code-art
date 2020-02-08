
@php $input = "email"; @endphp
 <div class="form-group">
    <label class="col-lg-2 control-label">البريد</label>
     <div class="col-lg-10">
         <input type="email" name="{{ $input }}"   @if(isset($row)) value="{{$row->$input}}" @else
         value="{{Request::old($input)}}" @endif
           class="form-control" required>
           @error($input)
           <div class="alert alert-danger" role="alert" style="text-align: center">
            <strong>{{ $message }}</strong>
          </div>
           @enderror
    </div>
 </div>  
 @php $input = "user_name"; @endphp
 <div class="form-group">
    <label class="col-lg-2 control-label"> اسم المستخدم</label>
     <div class="col-lg-10">
         <input type="text" name="{{ $input }}"   @if(isset($row)) value="{{$row->$input}}" @else
         value="{{Request::old($input)}}" @endif
           class="form-control">
           @error($input)
           <div class="alert alert-danger" role="alert" style="text-align: center">
            <strong>{{ $message }}</strong>
          </div>
           @enderror
    </div>
 </div>   
 @php $input = "phone"; @endphp
 <div class="form-group">
    <label class="col-lg-2 control-label"> الهاتف</label>
     <div class="col-lg-10">
         <input type="text" name="{{ $input }}"   @if(isset($row)) value="{{$row->$input}}" @else
         value="{{Request::old($input)}}" @endif
           class="form-control">
           @error($input)
           <div class="alert alert-danger" role="alert" style="text-align: center">
            <strong>{{ $message }}</strong>
          </div>
           @enderror
    </div>
 </div>   
 @php $input = "password"; @endphp
 <div class="form-group">
     <label class="col-lg-2 control-label">كلمة السر </label>
      <div class="col-lg-10">
        <input type="password" name="{{ $input }}"
           class="form-control"
               @if($pageDes != "Here you can edit Client")
                   required
               @endif
           >
           @error($input)
           <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
           </span>
           @enderror
     </div>
 </div>    
@php $input = "password_confirmation"; @endphp
<div class="form-group">
    <label class="col-lg-2 control-label"> تاكيد كلمة السر</label>
   <div class="col-lg-10">
        <input type="password" name="{{ $input }}" 
          class="form-control" @if($pageDes != "Here you can edit Client")
          required
      @endif>
          @error($input)
          <span class="invalid-feedback" role="alert">
                   <strong>{{ $message }}</strong>
          </span>
          @enderror
    </div>
</div>       
 
     

