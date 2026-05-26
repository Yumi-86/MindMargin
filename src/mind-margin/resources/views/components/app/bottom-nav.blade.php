@php
$route = request()->route()->getName();
@endphp

<div class="flex justify-around border-t bg-white py-2">

    <!-- ホーム -->
    <a href="{{ route('home') }}"
        class="flex flex-col items-center justify-center w-full
       {{ $route === 'home' ? 'text-[#2F5D50] font-semibold scale-110' : 'text-gray-400' }}
       transition transform duration-200">
        <x-heroicon-o-home class="w-8 h-8 md:w-10 md:h-10 text-gray-500" />
        <span class="text-xs">ホーム</span>
    </a>

    <!-- 検索 -->
    <a href="#"
        class="flex flex-col items-center  justify-center w-full
       {{ $route === 'search' ? 'text-blue-500 scale-110 font-semibold' : 'text-gray-400' }}
       transition transform duration-200">
        <x-heroicon-o-magnifying-glass class="w-8 h-8 md:w-10 md:h-10 text-gray-500" />
        <span class="text-xs">検索</span>
    </a>

    <!-- マイページ -->
    <a href="#"
        class="flex flex-col items-center justify-center w-full
       {{ $route === 'mypage' ? 'text-blue-500 scale-110 font-semibold' : 'text-gray-400' }}
       transition transform duration-200">
        <x-heroicon-o-user class="w-8 h-8 md:w-10 md:h-10 text-gray-500" />
        <span class="text-xs">マイページ</span>
    </a>

</div>