@props([
    'id' => '',
    'name' => '',
    'class' => '',
    'type' => '',
    'placeholder' => '',
    'value' => '',
    'element' => '',
    'multiple' => false,
    'item' => null,
    'items' => null,
    'required' => false,
])

@switch($element)

    @case('textarea')
        <div>
            <div>
                <label
                    for="{{ $id }}"
                    class="text-[#000] text-base font-medium xl:text-xl">
                    {{ $placeholder }}
                    {!! $required ? '<span class="text-[#FF0000]">*</span>' : '' !!}
                </label>
            </div>

            <div class="mt-3">
                <textarea
                    id="{{ $id }}"
                    name="{{ $name }}"
                    type="{{ $type }}"
                    rows="4"
                    placeholder="{{ $placeholder }}"
                    class="{{ $class }}"
                >{{ $value }}</textarea>
            </div>

            @error($name)
                <p class="mt-3 text-[#FF0000] text-xl">
                    {{ $message }}
                </p>
            @enderror
        </div>
    @break

    @case('select')
        <div>
            <div>
                <label
                    for="{{ $id }}"
                    class="text-[#000] text-base font-medium xl:text-xl">
                    {{ $placeholder }}
                    {!! $required ? '<span class="text-[#FF0000]">*</span>' : '' !!}
                </label>
            </div>

            <div class="mt-3">
                <select
                    id="{{ $id }}"
                    name="{{ $name }}"
                    class="{{ $class }}"
                >
                    <option value="{{ $item ? $item->id : '' }}" selected>{{ $item ? $item->name : '----------' }}</option>
                    @if($items)
                        @foreach($items as $element)
                            <option value="{{ $element->id }}">{{ $element->name }}</option>
                        @endforeach
                    @endif
                </select>
            </div>

            @error($name)
                <p class="mt-3 text-[#FF0000] text-xl">
                    {{ $message }}
                </p>
            @enderror
        </div>
    @break

    @default
        <div>
            <div>
                <label
                    for="{{ $id }}"
                    class="text-[#000] text-base font-medium xl:text-xl"
                >
                    {{ $placeholder }}
                    {!! $required ? '<span class="text-[#FF0000]">*</span>' : '' !!}
                </label>
            </div>

            <div class="mt-3">
                <input
                    id="{{ $id }}"
                    name="{{ $name }}"
                    type="{{ $type }}"
                    placeholder="{{ $placeholder }}"
                    class="{{ $class }}"
                    value="{{ $value }}"
                    {{ $type == 'file' ? $multiple ? 'multiple' : '' : '' }}
                />
            </div>

            @error($name)
                <p class="mt-3 text-[#FF0000] text-xl">
                    {{ $message }}
                </p>
            @enderror
        </div>

@endswitch
