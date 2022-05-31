<div class="row">
    <div class="col-sm">
        <a class="" href="{{ route($route . '.edit', $value) }}">Ред.</a>
    </div>
    <div class="col-sm">
        <form action="{{ route($route . '.destroy', $value) }}" method="post">
            @csrf
            @method('DELETE')
            <button class="" type="submit">
                X
            </button>
        </form>
    </div>
</div>
