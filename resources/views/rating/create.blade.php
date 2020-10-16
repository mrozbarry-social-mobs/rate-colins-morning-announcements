<form action="{{ route('rate.post') }}" method="post">
    @csrf
    <input type="range" min="0" max="5" name="rating" />
    <button type="submit">Rate Colin</button>
</form>
