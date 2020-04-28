<div>
    @if (session()->has('message'))
    <div class="py-2 px-2 bg-green-300">{{session()->get('message')}}</div>
    @elseif(session()->has('error'))
    <div class="py-2 px-3 bg-red-300">{{session()->get('error')}}</div>
    @endif


    @if ($errors->any())
    <div class="bg-red-300 text-white font-bold rounded-t px-4 py-2">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
</div>
