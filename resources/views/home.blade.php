<x-layout></x-layout>

<div>
    <section class="flex flex-col items-center justify-center min-h-screen px-4">
        <!-- Foto Profil -->
        <div class="w-40 h-40 mb-4 overflow-hidden border-4 border-gray-300 rounded-full sm:w-48 sm:h-48 lg:w-64 lg:h-64">
            <img src="/img/{{ $img }}" alt="Foto Profil" class="object-cover w-full h-full">
        </div>

        <!-- Deskripsi -->
        <div class="text-center">
            <h1 id="typed-text" class="mb-2 text-2xl font-bold sm:text-1xl lg:text-5xl"></h1>
            <p class="justify-center text-base text-gray-700 sm:text-sm lg:text-xl">
                Saya seorang pengembang web dengan pengalaman dalam membangun aplikasi menggunakan Laravel dan Tailwind CSS.
                Saya senang menciptakan solusi kreatif dan efektif untuk berbagai tantangan teknologi.
            </p>
        </div>
    </section>
</div>
