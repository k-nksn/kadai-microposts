@if (Auth::id() != $microposts->id)
    @if (Auth::user()->is_favorites($microposts->id))
        {!! Form::open(['route' => ['user.unfavorite', $microposts->id], 'method' => 'delete']) !!}
            {!! Form::submit('Unfavorites', ['class' => "btn btn-danger btn-block"]) !!}
        {!! Form::close() !!}
    @else
        {!! Form::open(['route' => ['user.favorite', $microposts->id]]) !!}
            {!! Form::submit('Favorites', ['class' => "btn btn-primary btn-block"]) !!}
        {!! Form::close() !!}
    @endif
@endif