<div>
    <h1>&#128161; {{ $brightness }} %</h1>
    <div class="progress" style="height: 30px">
        <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: {{ $brightness }}" 
        aria-valuenow="{{$brightness}}" aria-valuemax="100" aria-valuemin="0"></div>
    </div>
    <div class="mt-3">
        <button class="btn btn-danger" wire:click="off" >Off</button>
        <button class="btn btn-secondary" wire:click="increment" @if($brightness==100)disabled @endif>+</button>
        <button class="btn btn-secondary" wire:click="decrement" @if($brightness==0)disabled @endif>-</button>
        <button class="btn btn-primary" wire:click="on" >On</button>
    </div>
</div>
