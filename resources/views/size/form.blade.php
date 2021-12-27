
        
        <div class="form-group floating-label">
            {{ Form::text('name', $size->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : '')]) }}
            <label for="name">Name</label>
            {!! $errors->first('name', '<div class="invalid-feedback">:message</p>') !!}
        </div>


    <div class="box-footer mt20">
        <button type="submit" class="btn ink-reaction btn-raised btn-primary">Submit</button>
    </div>
</div>