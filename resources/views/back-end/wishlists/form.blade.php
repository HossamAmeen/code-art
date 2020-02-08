
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
 @php $input = "date"; @endphp
 <div class="form-group">
     <label class="col-lg-2 control-label">التاريخ</label>
     <div class="col-lg-10">
         <input type="date" name="{{ $input }}" value="{{ isset($row) ? $row->{$input} : '' }}"
           class="form-control" required>
           @error($input)
           <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
           </span>
           @enderror
     </div>
 </div>


 @php $input = "client_id"; @endphp
 <div class="form-group">
     <label class="col-lg-2 control-label">العميل</label>
     <div class="col-lg-10">
         <select name="{{$input}}">
             @foreach ($clients as $client)
                 <option value="{{$client->id}}"
                         @if(isset($row))
                     @if( $row->client_id == $client->id )
                         selected
                     @endif
                 @endif
                 >{{$client->user_name}} </option>
             @endforeach
         </select>
         @error($input)
         <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
           </span>
         @enderror
     </div>
 </div>

 @php $input = "service_id"; @endphp
 <div class="form-group">
     <label class="col-lg-2 control-label">الخدمة</label>
     <div class="col-lg-10">
         <select name="{{$input}}">
             @foreach ($services as $service)
                 <option value="{{$service->id}}"
                         @if(isset($row))
                         @if( $row->service_id == $service->id )
                         selected
                     @endif
                     @endif
                 >{{$service->title}} </option>
             @endforeach
         </select>
         @error($input)
         <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
           </span>
         @enderror
     </div>
 </div>

