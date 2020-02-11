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
        @if (! isset($row))
            <input type="text" name="{{ $input }}" value="{{ isset($row) ? $row->choices[0]['choice'] : '' }}"
                   class="form-control"><br>
            <input type="text" name="{{ $input }}" value="{{ isset($row) ? $row->choices[1]['choice'] : '' }}"
                   class="form-control"><br>
            <input type="text" name="{{ $input }}" value="{{ isset($row) ? $row->choices[2]['choice'] : '' }}"
                   class="form-control"><br>
        @endif
        @if (isset($row))
            @if ($row->type == 'multi_choice')
            <input type="text" name="{{ $input }}" value="{{ isset($row) ? $row->choices[0]['choice'] : '' }}"
                   class="form-control"><br>
            <input type="text" name="{{ $input }}" value="{{ isset($row) ? $row->choices[1]['choice'] : '' }}"
                   class="form-control"><br>
            <input type="text" name="{{ $input }}" value="{{ isset($row) ? $row->choices[2]['choice'] : '' }}"
                   class="form-control"><br>
            @endif
        @endif
        @if (isset($row))
            @if ($row->type == 'text')
                <input type="text" name="{{ $input }}" value="{{ isset($row) ? $row->choices[0]['choice'] : '' }}"
                       class="form-control"><br>
            @endif
        @endif
        @if (isset($row))
            @if ($row->type == 'boolean')
                <input type="text" name="{{ $input }}" value="{{ isset($row) ? $row->choices[0]['choice'] : '' }}"
                       class="form-control"><br>
                <input type="text" name="{{ $input }}" value="{{ isset($row) ? $row->choices[1]['choice'] : '' }}"
                       class="form-control"><br>
            @endif
        @endif
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
        <input name="{{ $input }}" id="file-3" type="file" multiple="true" >
        <br>
    @if (isset($row))
        @if ($row->type == 'file')
            <a style="margin: 0px 750px 0px 30px;" class="btn btn-info" href="{{$row->choices[0]['choice']}}" download>Download File</a>
            @endif
    @endif
    </div>
    @error($input)
    <div class="alert alert-danger" role="alert" style="text-align: center">
        <strong>{{ $message }}</strong>
    </div>
    @enderror

</div>

