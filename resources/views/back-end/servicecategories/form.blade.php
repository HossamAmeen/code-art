@php $input = "name"; @endphp
<div class="form-group">
    <label class="col-lg-2 control-label">اسم  الخدمة</label>
    <div class="col-lg-10">
        <input type="text" name="{{ $input }}" value="{{ isset($row) ? $row->{$input} : '' }}" class="form-control"
               required>
        @error($input)
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>
@php $input = "category_id"; @endphp
<div class="form-group">
    <label class="col-lg-2 control-label">نوع الخدمة</label>
    <div class="col-lg-10">
        <select name="{{$input}}">
            @foreach ($categories as $category)
                <option value="{{$category->id}}"
                        @if(isset($row))
                        @if( $row->category_id == $category->id )
                        selected
                    @endif
                    @endif
                >{{$category->name}} </option>
            @endforeach
        </select>
        @error($input)
        <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

@php $input = "special"; @endphp
<div class="form-group">
    <label class="col-lg-2 control-label">مميزه </label>
    <div class="col-lg-10">
        <input type="checkbox" name="{{ $input }}" value="1" @if(isset($row) && $row->special == 1 ) checked @endif>  
      
       
    </div>
</div>

@php $input = "delivery_price"; @endphp
<div class="form-group">
    <label class="col-lg-2 control-label">سعر التوصيل </label>
    <div class="col-lg-10">
        <input type="number" name="{{ $input }}" class="form-control" value="{{ isset($row) ? $row->{$input} : '' }}">
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
        <input name="{{ $input }}" id="file-3" type="file" >
    </div>
    @error($input)
    <span class="invalid-feedback" role="alert">
    <strong>{{ $message }}</strong>
</span>
    @enderror
    <span style="margin-right: 15%">يفضل رفع الصوره 400 * 400 </span>
</div>
