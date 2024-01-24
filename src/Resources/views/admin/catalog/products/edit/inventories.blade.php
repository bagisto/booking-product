<div id="root"></div>

@pushOnce('scripts')
    <script>
        document.getElementById("root")?.parentNode.remove();
    </script>
@endPushOnce