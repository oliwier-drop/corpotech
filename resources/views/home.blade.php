@extends('layouts.app')

@section('meta_description')
    Strona główna
@endsection

@section('meta_keywords')
    Strona główna
@endsection

@section('content')
<section id="hero">
    <div class="container mx-auto px-4">
        <div class="text-gray-300 p-8 overflow-hidden md:rounded-lg md:p-10 lg:p-12">

            <div class="h-32 md:h-40"></div>

            <p class="font-sans text-4xl font-bold text-gray-200 max-w-5xl lg:text-7xl lg:pr-24 md:text-6xl">
                Nowoczesne rozwiązania dla Twojego <span class="px-2 py-1 relative inline-block"><svg class="stroke-current bottom-0 absolute text-brand -translate-x-2" viewBox="0 0 410 18" xmlns="http://www.w3.org/2000/svg"><path d="M6 6.4c16.8 16.8 380.8-11.2 397.6 5.602" stroke-width="12" fill="none" fill-rule="evenodd" stroke-linecap="round"></path></svg><span class="relative">biznesu i domu</span></span>
            </p>
            <div class="h-10"></div>
            <p class="max-w-2xl font-serif text-xl text-gray-400 md:text-2xl">
                Imagine being able to spent less time... This is a demonstration landing
                page made with tailwindcss
            </p>
        </div>
    </div>
</section>
<section id="about">
    <div class="container mx-auto px-4">
        <div class="h-32 md:h-40"></div>

        <div class="grid gap-8 md:grid-cols-2">
            <div class="flex flex-col justify-center">
                <p
                    class="self-start inline font-sans text-xl font-medium text-transparent bg-clip-text bg-gradient-to-br from-green-400 to-green-600">
                    Simple and easy
                </p>
                <h2 class="text-4xl font-bold">Made for devs and designers</h2>
                <div class="h-6"></div>
                <p class="font-serif text-xl text-gray-400 md:pr-10">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magnam
                    autem, a recusandae vero praesentium qui impedit doloremque
                    molestias necessitatibus.
                </p>
                <div class="h-8"></div>
                <div class="grid grid-cols-2 gap-4 pt-8 border-t border-gray-800">
                    <div>
                        <p class="font-semibold text-gray-400">Made with love</p>
                        <div class="h-4"></div>
                        <p class="font-serif text-gray-400">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                            Delectus labor.
                        </p>
                    </div>
                    <div>
                        <p class="font-semibold text-gray-400">It's easy to build</p>
                        <div class="h-4"></div>
                        <p class="font-serif text-gray-400">
                            Ipsum dolor sit, amet consectetur adipisicing elit. Delectus
                            amet consectetur.
                        </p>
                    </div>
                </div>
            </div>
            <div>
                    <div class="-mr-24 rounded-lg md:rounded-l-full bg-gradient-to-br from-gray-900 to-black h-96"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="features">
    <div class="container mx-auto px-4">    
        <div class="h-32 md:h-40"></div>

        <p class="font-serif text-4xl">
            <span class="text-gray-400">If we work all together</span>

            <span class="text-gray-600"
          >consectetur adipisicing elit. Consectetur atque molestiae omnis
          excepturi enim!</span>
        </p>

        <div class="h-32 md:h-40"></div>

        <div class="grid gap-4 md:grid-cols-3">
            <div class="flex-col p-8 py-16 rounded-lg shadow-2xl md:p-12 bg-gradient-to-br from-gray-900 to-black">
                <p
                    class="flex items-center justify-center text-4xl font-semibold text-green-400 bg-green-800 rounded-full shadow-lg w-14 h-14">
                    1
                </p>
                <div class="h-6"></div>
                <p class="font-serif text-3xl">We build products with UX in mind</p>
            </div>
            <div class="flex-col p-8 py-16 rounded-lg shadow-2xl md:p-12 bg-gradient-to-b from-gray-900 to-black">
                <p
                    class="flex items-center justify-center text-4xl font-semibold text-indigo-400 bg-indigo-800 rounded-full shadow-lg w-14 h-14">
                    2
                </p>
                <div class="h-6"></div>
                <p class="font-serif text-3xl">
                    You can trust us to deliver super fast
                </p>
            </div>
            <div class="flex-col p-8 py-16 rounded-lg shadow-2xl md:p-12 bg-gradient-to-bl from-gray-900 to-black">
                <p
                    class="flex items-center justify-center text-4xl font-semibold text-teal-400 bg-teal-800 rounded-full shadow-lg w-14 h-14">
                    3
                </p>
                <div class="h-6"></div>
                <p class="font-serif text-3xl">We made it simple and easy to do</p>
            </div>
        </div>

        <div class="h-40"></div>

        <div class="grid gap-8 md:grid-cols-3">
            <div class="flex flex-col justify-center md:col-span-2">
                <p
                    class="self-start inline font-sans text-xl font-medium text-transparent bg-clip-text bg-gradient-to-br from-teal-400 to-teal-600">
                    We are humans
                </p>
                <h2 class="text-4xl font-bold">We could work together</h2>
                <div class="h-6"></div>
                <p class="font-serif text-xl text-gray-400 md:pr-10">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magnam
                    autem, a recusandae vero praesentium qui impedit doloremque
                    molestias.
                </p>
                <div class="h-8"></div>
                <div class="grid gap-6 pt-8 border-t border-gray-800 lg:grid-cols-3">
                    <div>
                        <p class="font-semibold text-gray-400">Made with love</p>
                        <div class="h-4"></div>
                        <p class="font-serif text-gray-400">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                            Delectus labor.
                        </p>
                    </div>
                    <div>
                        <p class="font-semibold text-gray-400">It's easy to build</p>
                        <div class="h-4"></div>
                        <p class="font-serif text-gray-400">
                            Ipsum dolor sit, amet consectetur adipisicing elit. Delectus
                            amet consectetur.
                        </p>
                    </div>
                    <div>
                        <p class="font-semibold text-gray-400">It's easy to build</p>
                        <div class="h-4"></div>
                        <p class="font-serif text-gray-400">
                            Ipsum dolor sit, amet consectetur adipisicing elit. Delectus
                            amet consectetur.
                        </p>
                    </div>
                </div>
            </div>
            <div>
                <div class="-mr-24 rounded-lg md:rounded-l-full bg-gradient-to-br from-gray-900 to-black h-96"></div>
            </div>
        </div>

        <div class="h-10 md:h-40"></div>

    </div>
</section>
@endsection