<div class="container mx-auto">
    <h1 class="text-3xl font-bold text-center">Enter number of people</h1>
    <form action="{{ route('main.distribute') }}" method="POST">
        @csrf
        @if ($errors->any())
            <div class="alert alert-danger">
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="flex items-center justify-center">
            <input type="number" name="number" class="w-full px-4 py-2 border border-gray-300 rounded-md" required min="1">

            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Distribute
            </button>
        </div>
    </form>
</div>


