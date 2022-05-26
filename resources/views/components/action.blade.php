<div class="row">
    <div class="col">
        <a href="{{ route($route . '.edit', $value) }}">Ред.</a>
    </div>
    <div class="col">
        <form action="{{ route($route . '.destroy', $value) }}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-sm btn-danger">
                X
            </button>
        </form>
    </div>
</div>
