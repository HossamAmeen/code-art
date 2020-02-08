@php $input = "service_provider_id"; @endphp
<div class="form-group">
    <label class="col-lg-2 control-label">مزود الخدمة</label>
    <div class="col-lg-10">
        <select name="{{$input}}">
            @foreach ($service_providers as $service_provider)
                <option value="{{$service_provider->id}}"
                        @if(isset($row))
                        @if( $row->service_provider_id == $service_provider->id )
                        selected
                    @endif
                    @endif
                >{{$service_provider->name}} </option>
            @endforeach
        </select>
        @error($input)
        <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>
@php $input = "days"; @endphp
<div class="form-group">
    <label class="col-lg-2 control-label">مدة العمل</label>
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
