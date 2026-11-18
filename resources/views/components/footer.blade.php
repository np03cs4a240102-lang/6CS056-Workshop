<footer class="footer">
    <p>&copy; {{ date('Y') }} Training Institute Management System &middot;</p>
</footer>

@props(['type' => 'success'])
@if(session($type))
    <div class="alert alert-{{ $type }}">
        {{ session($type) }}
    </div>
@endif