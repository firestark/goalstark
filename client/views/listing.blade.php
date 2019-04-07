@extends('master')

@section('content')
    @if(count($goals))
        <section id="goal-listing">
            <ul class="mdc-list">
                @foreach($goals as $goal)
                    <li class="mdc-list-item mdc-card">
                        <a  href="/complete/{{ $goal->id }}" 
                            class="mdc-list-item__graphic material-icons {{ ($goal->completed) ? 'completed' : '' }}" 
                            aria-hidden="true">check
                        </a>
                        <a href="/{{ $goal->id }}">
                            <span class="mdc-list-item__text">{{ $goal->description }}</span>
                        </a>
                        <a href="/remove/{{ $goal->id }}" class="mdc-list-item__meta material-icons" aria-hidden="true">delete</a>
                    </li>
                @endforeach
            </ul>
        </section>
    @endif

    <a href="/add" class="mdc-fab">
        <span class="mdc-fab__icon material-icons">add</span>
    </a>
@endsection


@section('mdc-js')
    <script>
        mdc.ripple.MDCRipple.attachTo(document.querySelector('.mdc-fab'));
        
        @if(count($goals))
            mdc.list.MDCList.attachTo(document.querySelector('.mdc-list'));
        @endif
    </script>
@endsection