
 @php $input = "name"; @endphp
 <div class="form-group">
    <label class="col-lg-2 control-label">اسم المستخدم</label>
     <div class="col-lg-10">
         <input type="text" name="{{ $input }}"  value="{{ isset($row) ? $row->{$input} : Request::old($input) }} "
           class="form-control" required>
           @error($input)
           <span class="invalid-feedback" role="alert">
               <strong style="margin-right: 25%;color:red">{{ $message }}</strong>
           </span>
           @enderror
    </div>
 </div>    

@php $input = "image"; @endphp          
<div class="form-group">
        <label class="col-md-2 control-label">الصورة</label>
        <div class="col-md-10 ls-group-input">
            <input name="{{ $input }}" id="file-3" type="file"  >
        </div>
        @error($input)
        <span class="invalid-feedback" role="alert">
            <strong style="margin-right: 25%;color:red">{{ $message }}</strong>
        </span>
        @enderror
</div>  

