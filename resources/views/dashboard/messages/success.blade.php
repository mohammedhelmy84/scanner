
@if (session()->get('success'))
    <div class="alert alert-success my-2 mx-3">
        <p>{{ session('success') }}</p>
    </div>
    <script>
        setTimeout(function() {
            document.querySelector('.alert').remove();
        }, 5000);
    </script>
@endif
