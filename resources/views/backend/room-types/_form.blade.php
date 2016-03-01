<div class="form-group {{ ($errors->has('title') ? ' has-error' : '') }}">
    <label>Title</label>
    {!! Form::text('title', null, ['placeholder' => "Title", 'class' => 'form-control']) !!}
    @if ($errors->has('title'))
        <p class="help-block">{{$errors->first('title')}}</p>
    @endif
</div>
<button type="submit" class="btn btn-info">Submit</button>