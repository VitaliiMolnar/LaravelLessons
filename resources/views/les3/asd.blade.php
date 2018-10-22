<h1>Привет, {{ $name ?? ''}}!</h1>
<h1>Мне, {{ $age ?? ''}} лет!</h1>


@verbatim
    <div class="container">
        Hello, {{ name }}.
    </div>
@endverbatim


@unless (false)
    You are not signed in.
@endunless


@auth
   Я авторизован
@endauth


@guest
    Я гость
@endguest


@forelse ($users as $user)
    @if ($loop->first)
        This is the first iteration.
    @endif
    <li>{{ $user->name }}</li>

@empty
    <p>Нет данных для отображения</p>
@endforelse


<select>
@for ($i = 1920; $i < 2018; $i++)
    <option value="{{ $i }}">{{ $i }}</option>
@endfor
</select>

{{-- This comment will not be present in the rendered HTML --}}

@php
    echo date('d.m.Y');
@endphp


@include('welcome')