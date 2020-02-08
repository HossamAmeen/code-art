@php $input = "suggestion"; @endphp
<div class="form-group">
    <label class="col-lg-2 control-label">الاقتراح</label>
    <div class="col-lg-10">
        <input type="email" name="{{ $input }}" value="{{ isset($row) ? $row->{$input} : '' }}"
               class="form-control" required>
        @error($input)
        <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
           </span>
        @enderror
    </div>
</div>

@php $input = "price"; @endphp
 <div class="form-group">
    <label class="col-lg-2 control-label">السعر</label>
     <div class="col-lg-10">
         <input type="number" name="{{ $input }}" value="{{ isset($row) ? $row->{$input} : '' }}"
           class="form-control" required>
           @error($input)
           <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
            </span>
           @enderror
    </div>
 </div>

@php $input = "service_category_id"; @endphp
<div class="form-group">
    <label class="col-lg-2 control-label">السعر</label>
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
