@props(['imageName', 'active' => false])

<div class="h-[414px] w-[414px] bg-primary rounded-[80px] flex justify-center items-center meta-trader-image @if ($active) active @endif">
    <img src="{{ asset('images/' . $imageName . '.png') }}" alt="circle">
</div>
