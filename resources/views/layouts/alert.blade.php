@if($message = Session::get('succes'))
        <!-- alert -->
        <p>
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        </p>
    @endif