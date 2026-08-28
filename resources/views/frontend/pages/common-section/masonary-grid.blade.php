@php
$gallery_images = [
    'https://images.unsplash.com/photo-1492684223066-81342ee5ff30?auto=format&fit=crop&w=1200&q=80',
    'https://images.unsplash.com/photo-1505236858219-8359eb29e329?auto=format&fit=crop&w=1200&q=80',
    'https://images.unsplash.com/photo-1540575467063-178a50c2df87?auto=format&fit=crop&w=1200&q=80',
    'https://images.unsplash.com/photo-1501386761578-eac5c94b800a?auto=format&fit=crop&w=1200&q=80',
    'https://images.unsplash.com/photo-1511578314322-379afb476865?auto=format&fit=crop&w=1200&q=80',
    'https://images.unsplash.com/photo-1475721027785-f74eccf877e2?auto=format&fit=crop&w=1200&q=80',
];

    $count = count($gallery_images);

 
    $columnCount = min($count, 3);

    $columns = [];

    if ($columnCount > 0) {
        $base = intdiv($count, $columnCount);
        $remainder = $count % $columnCount;

        $start = 0;

        for ($i = 0; $i < $columnCount; $i++) {
            $size = $base + ($i < $remainder ? 1 : 0);

            $columns[] = array_slice(
                $gallery_images,
                $start,
                $size
            );

            $start += $size;
        }
    }
@endphp

@if ($count)

    {{-- Mobile: 1 column --}}
    <div class="grid grid-cols-1 gap-4 md:hidden">
        @foreach ($gallery_images as $image)
            <div>
                <img
                    src="{{ $image }}"
                    alt="Gallery image"
                    class="block h-auto w-full rounded-xl object-cover"
                    loading="lazy"
                >
            </div>
        @endforeach
    </div>

    {{-- Tablet/Desktop --}}
    <div
        class="hidden gap-4 md:grid
            {{ $columnCount === 1 ? 'md:grid-cols-1' : '' }}
            {{ $columnCount === 2 ? 'md:grid-cols-2' : '' }}
            {{ $columnCount === 3 ? 'md:grid-cols-2 lg:grid-cols-3' : '' }}"
    >
        @foreach ($columns as $column)
            <div class="grid content-start gap-4">
                @foreach ($column as $image)
                    <div>
                        <img
                            src="{{ $image }}"
                            alt="Gallery image"
                            class="block h-auto w-full rounded-xl object-cover"
                            loading="lazy"
                        >
                    </div>
                @endforeach
            </div>
        @endforeach
    </div>

@else

    <div class="flex min-h-40 items-center justify-center rounded-xl bg-gray-100 text-gray-500">
        No gallery images available.
    </div>

@endif