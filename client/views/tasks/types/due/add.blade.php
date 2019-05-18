@extends ( 'tasks.add' )

@section ( 'form-fields' )
    @include ( 'partials.input.due', [ 'value' => time ( ) ] )
    @include ( 'partials.input.description', [ 'value' => '' ] )
@endsection