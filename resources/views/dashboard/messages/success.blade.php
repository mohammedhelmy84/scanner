@if (session()->get('success'))
    <div class="alert alert-success">
        <p>{{ session('success') }}</p>
    </div>
    <script>
        setTimeout(function() {
            document.querySelector('.alert').remove();
        }, 5000);
    </script>
@endif
