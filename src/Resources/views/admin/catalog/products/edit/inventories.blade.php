@if ($product->type == 'booking')
    <div id="root"></div>
@endif

@pushOnce('scripts')
    <script>
        document.getElementById("root")?.parentNode.remove();
    </script>
@endPushOnce