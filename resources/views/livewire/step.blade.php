<div>
    <div class="flex justify-center">
        <h5 class="text-2xl pb-4 px-2">Add steps</h5>
            <span wire:click="increment" class="fas fa-plus-circle cursor-pointer py-3" />
    </div>
    @foreach($steps as $step)
    <div>
        <input type="text" name="step[]" class="border shadow appearance-none border rounded py-2 px-3" placeholder="{{'Steps'.$step}}" />
        <span wire:click="decrement({{$loop->index}})" class="fas fa-times-circle text-red-400 cursor-pointer py-3" />
    </div>
    @endforeach
</div>
