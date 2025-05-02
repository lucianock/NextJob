@props(['employer', 'width' => 90])

@php
    $logoPath = $employer->logo
        ? asset($employer->logo)
        : 'https://picsum.photos/seed/' . rand(0, 100000) . '/' . $width;
@endphp

<img src="{{ $logoPath }}" alt="Employer Logo" class="rounded-xl" width="{{ $width }}">
