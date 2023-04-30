@props(['imageName', 'active' => false])

<div class="md:h-[414px] md:w-[414px] h-fit w-fit bg-primary rounded-[80px] flex justify-center items-center meta-trader-image @if ($active) active @endif">
    <img src="{{ asset('images/' . $imageName . '.png') }}" alt="circle">
</div>
