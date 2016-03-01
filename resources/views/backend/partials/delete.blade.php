{!! Form::model($model, ['method' => 'DELETE', 'url' => route($route, [$model->id]), 'data-action' => "delete-item"]) !!}

<button type="submit" class="btn btn-shadow btn-danger btn-xs"><i class="fa fa-trash-o "></i> Delete</button>

{!! Form::close() !!}