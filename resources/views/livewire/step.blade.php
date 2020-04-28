<div>
    <div class="flex justify-center">
        <h5 class="text-2xl pb-4 px-2">Add steps</h5>
            <span wire:click="increment" class="fas fa-plus-circle cursor-pointer py-3" />
    </div>
    @for($i=0; $i<$steps;$i++)
    <div>
        <input type="text" name="step" class="border shadow appearance-none border rounded py-2 px-3" placeholder="{{'Steps'.($i+1)}}" />
        <span wire:click="decrement" class="fas fa-times-circle text-red-400 cursor-pointer py-3" />
    </div>
    @endfor
</div>
