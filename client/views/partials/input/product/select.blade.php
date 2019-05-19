<div class="mdc-select form-field">
    <i class="mdc-select__dropdown-icon"></i>
    <select class="mdc-select__native-control" name="productid" required>
        <option value="" disabled {{ isset ( $selected ) ? '' : 'selected' }}></option>

        @foreach ( $products as $product )
            <option value="{{ $product->id }}" {{ ( isset ( $selected ) and ! is_null ( $selected ) and $selected->id === $product->id ) ? 'selected' : '' }}>
                {{ $product->name }}
            </option>
        @endforeach
    </select>
    <label class="mdc-floating-label">Pick a product</label>
    <div class="mdc-line-ripple"></div>
</div>

@section ( 'js' )
    @parent
    
    <script>
        const select = mdc.select.MDCSelect.attachTo ( document.querySelector ( '.mdc-select' ) );
    </script>
@endsection