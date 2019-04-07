@extends('master')

@section('content')

    @if(count($goals))
        <section id="goal-listing">
            <ul class="mdc-list demo-list mdc-list--two-line mdc-list--avatar-list">
                @foreach($goals as $goal)
                    <li class="mdc-list-item mdc-ripple-upgraded" tabindex="0">

                        @if($goal->completed)
                            <a  href="/uncomplete/{{ $goal->id }}" 
                                class="mdc-list-item__graphic material-icons completed" 
                                aria-hidden="true">check_circle
                            </a>
                        @else
                            <a  href="/complete/{{ $goal->id }}" 
                                class="mdc-list-item__graphic material-icons" 
                                aria-hidden="true">check_circle_outline
                            </a>
                        @endif

                        <a href="/{{ $goal->id }}">
                            <span class="mdc-list-item__text">
                                <span class="mdc-list-item__primary-text">{{ $goal->description }}</span>
                                <span class="mdc-list-item__secondary-text">{{  date("M d, Y ", $goal->completeBy) }}</span>
                            </span>
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