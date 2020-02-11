@php $input = "question"; @endphp
<div class="form-group">
    <label class="col-lg-2 control-label">السؤال</label>
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

@php $input = "type"; @endphp
 <div class="form-group">
    <label class="col-lg-2 control-label">نوع الاجابة</label>
     <div class="col-lg-10">
         <select name="{{$input}}">
             <option value="text">Text</option>
             <option value="multi_choice">Multiple Choice</option>
             <option value="boolean">True or False</option>
             <option value="file">File</option>
         </select>
           @error($input)
           <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
            </span>
           @enderror
    </div>
 </div>

@php $input = "choices[]"; @endphp
<div class="form-group">
    <label class="col-lg-2 control-label"> الاجابات</label>
    <div class="col-lg-10">
        <input type="text" name="{{ $input }}" value="{{ isset($row) ? $row->{$input} : '' }}"
               class="form-control"><br>
        <input type="text" name="{{ $input }}" value="{{ isset($row) ? $row->{$input} : '' }}"
               class="form-control"><br>
        <input type="text" name="{{ $input }}" value="{{ isset($row) ? $row->{$input} : '' }}"
               class="form-control"><br>
        @error($input)
        <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

@php $input = "image"; @endphp
<div class="form-group">
    <label class="col-md-2 control-label">الملف</label>
    <div class="col-md-10 ls-group-input">
        <input name="{{ $input }}" id="file-3" type="file" >
    </div>
    @error($input)
    <span class="invalid-feedback" role="alert">
    <strong>{{ $message }}</strong>
</span>
    @enderror
</div>
