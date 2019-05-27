@extends ( 'page' )

@section ( 'navigation' )
    @include ( 'partials.up-arrow', [ 'link' => "/apps/fitness/{$scheme_id}" ] )
@endsection

@section ( 'title' )
    Add a routine
@endsection

@section ( 'content' )
    <section class="content" style="padding: 16px 8px 80px;">
        <form action="/apps/fitness/{{ $scheme_id }}/routines" method="POST">

            <input type="hidden" name="scheme" value="{{ $scheme_id }}">
            
            <div class="mdc-select form-field">
                <i class="mdc-select__dropdown-icon"></i>
                <select class="mdc-select__native-control" name="exercise" required>
                    <option value="" disabled {{ isset ( $selected ) ? '' : 'selected' }}></option>

                    @foreach ( app::make ( exercise\manager::class )->all ( ) as $exercise )
                        <option value="{{ $exercise->id }}">
                            {{ $exercise->name }}
                        </option>
                    @endforeach
                </select>
                <label class="mdc-floating-label">Pick an exercise</label>
                <div class="mdc-line-ripple"></div>
            </div>
            
            <div class="mdc-text-field form-field" id="sets-field">
                <input 
                    type="number" 
                    id="sets" name="sets"
                    class="mdc-text-field__input"
                    required
                    step="any"
                    value="{{ $value ?? '' }}"
                    min="0">
                <label class="mdc-floating-label {{ ( isset ( $value ) and $value ) ? 'mdc-floating-label--float-above' : '' }}" for="sets">Sets</label>
                <div class="mdc-line-ripple"></div>
            </div>

            <div class="mdc-text-field form-field" id="reps-field">
                <input 
                    type="number" 
                    id="reps" name="reps"
                    class="mdc-text-field__input"
                    required
                    step="any"
                    value="{{ $value ?? '' }}"
                    min="0">
                <label class="mdc-floating-label {{ ( isset ( $value ) and $value ) ? 'mdc-floating-label--float-above' : '' }}" for="reps">Reps</label>
                <div class="mdc-line-ripple"></div>
            </div>

            @include ( 'partials.input.fab', [ 'action' => 'save' ] )
        </form>   
    </section>
@endsection



@section ( 'js' )
    @parent
    
    <script>
        const select = mdc.select.MDCSelect.attachTo ( document.querySelector ( '.mdc-select' ) );

        mdc.textField.MDCTextField.attachTo ( document.getElementById ( 'sets-field' ) );
        mdc.textField.MDCTextField.attachTo ( document.getElementById ( 'reps-field' ) );
    </script>
@endsection