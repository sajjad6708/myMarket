<label>
    <input id="{{ $model->id }}" onchange="changeStatus({{ $model->id }})"
           data-url="{{ route('admin.category.status',$model->id) }}" type="checkbox"
           @if($model->status === 1) checked @endif>
</label>

