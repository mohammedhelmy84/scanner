@if (session()->get('error'))
    <div class="alert alert-danger my-2 mx-3">
        <p>{{ session('error') }}</p>
    </div>
    <script>
        setTimeout(function() {
            document.querySelector('.alert').remove();
        }, 5000);
    </script>
@endif
