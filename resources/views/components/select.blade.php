<div class="mb-4">
    <label for="{{ $name }}" class="text-sm">
        {{ $label }}
    </label>
    <div class="nline-block relative mr-4">
        <select wire:model="{{ $name }}" name="{{ $name }}"
                class="
                            block appearance-none w-full bg-white border-b-2
                            px-4 py-2 pr-8 leading-tight focus:outline-none focus:shadow-outline
                            @error($name) border-red-400
                            @else focus:border-purple-600
                            @endif
                    ">
            @foreach ($options as $option)
                <option value="{{ $option }}">{{ $option }}</option>
            @endforeach
        </select>
        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
        </div>
    </div>
</div>
