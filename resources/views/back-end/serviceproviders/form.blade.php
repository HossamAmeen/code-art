@php $input = "name"; @endphp
<div class="form-group">
    <label class="col-lg-2 control-label">اسم مزود الخدمة</label>
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
@php $input = "email"; @endphp
<div class="form-group">
    <label class="col-lg-2 control-label">البريد</label>
    <div class="col-lg-10">
        <input type="email" name="{{ $input }}" value="{{ isset($row) ? $row->{$input} : '' }}" class="form-control"
               required>
        @error($input)
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>
@php $input = "password"; @endphp
<div class="form-group">
    <label class="col-lg-2 control-label">كلمة السر </label>
    <div class="col-lg-10">
        <input type="password" name="{{ $input }}" class="form-control" @if($pageDes !="Here you can edit ServiceProvider" )
        required @endif>
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
        <input type="password" name="{{ $input }}" class="form-control" @if($pageDes !="Here you can edit ServiceProvider" )
        required @endif>
        @error($input)
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>

@php $input = "country"; @endphp
<div class="form-group">
    <label class="col-lg-2 control-label">الدولة</label>
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

@php $input = "city"; @endphp
<div class="form-group">
    <label class="col-lg-2 control-label">المدينة</label>
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

@php $input = "phone"; @endphp
<div class="form-group">
    <label class="col-lg-2 control-label">الهاتف</label>
    <div class="col-lg-10">
        <input type="number" name="{{ $input }}" value="{{ isset($row) ? $row->{$input} : '' }}" class="form-control"
               required>
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
