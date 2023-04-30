@props(['id', 'class' => '', 'item'])

<div id={{ $id }} class="meta-trader-content {{ $class }}">
    {{-- Item title --}}
    <div class="md:text-4xl text-2xl text-secondary mb-6">
        {{ __('messages.widgets.items.item-' . $item . '.title') }}
    </div>
    {{-- List items --}}
    <ul class="list-disc ml-5 mb-6 xl:w-8/12 text-lg">
        @for ($i = 1; $i <= 3; $i++)
            <li>
                {{ __('messages.widgets.items.item-' . $item . '.list.item-' . $i) }}
            </li>
        @endfor
    </ul>
</div>
