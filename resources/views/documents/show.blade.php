<iframe src="{{ asset($document->fichier) }}" frameborder="0" class="w-full h-full"></iframe>

<script>
  setTimeout(function() {
    window.location.href = '{{ route("documents.index") }}';
  }, -2);
</script>