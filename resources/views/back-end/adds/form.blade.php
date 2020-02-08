@php $input = "link"; @endphp
<div class="form-group">
    <label class="col-lg-2 control-label">رابط الاعلان</label>
    <div class="col-lg-10">
        <input type="text" name="{{ $input }}" value="{{ isset($row) ? $row->{$input} : '' }}"
               class="form-control" required>
        @error($input)
        <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
           </span>
        @enderror
    </div>
</div>

 
     
@php $input = "image"; @endphp          
<div class="form-group">
        <label class="col-md-2 control-label">الصورة</label>
        <div class="col-md-10 ls-group-input">
            <input name="{{ $input }}" id="file-3" type="file" multiple="true" >
        </div>
        @error($input)
        <div class="alert alert-danger" role="alert" style="text-align: center">
          <strong>{{ $message }}</strong>
        </div>
        @enderror
        <span style="margin-right: 15%">يفضل رفع الصورة 400 * 400 </span>
</div>  
