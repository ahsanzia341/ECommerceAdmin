
        
        <div class="form-group floating-label">
            {{ Form::text('comment', $productReview->comment, ['class' => 'form-control' . ($errors->has('comment') ? ' is-invalid' : '')]) }}
            <label for="comment">Comment</label>
            {!! $errors->first('comment', '<div class="invalid-feedback">:message</p>') !!}
        </div>

        <div class="form-group floating-label">
            {{ Form::text('rating', $productReview->rating, ['class' => 'form-control' . ($errors->has('rating') ? ' is-invalid' : '')]) }}
            <label for="rating">Rating</label>
            {!! $errors->first('rating', '<div class="invalid-feedback">:message</p>') !!}
        </div>

        <div class="form-group floating-label">
            {{ Form::text('user_id', $productReview->user_id, ['class' => 'form-control' . ($errors->has('user_id') ? ' is-invalid' : '')]) }}
            <label for="user_id">User Id</label>
            {!! $errors->first('user_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>

        <div class="form-group floating-label">
            {{ Form::text('product_id', $productReview->product_id, ['class' => 'form-control' . ($errors->has('product_id') ? ' is-invalid' : '')]) }}
            <label for="product_id">Product Id</label>
            {!! $errors->first('product_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>


    <div class="box-footer mt20">
        <button type="submit" class="btn ink-reaction btn-raised btn-primary">Submit</button>
    </div>
</div>