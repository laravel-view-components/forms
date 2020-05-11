<form {{ $attributes }} method="{{ $method }}" action="{{ $action }}">
  @csrf
  {{ $slot }}
</form>
