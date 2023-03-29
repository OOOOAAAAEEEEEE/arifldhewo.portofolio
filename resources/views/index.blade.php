@extends('layouts.app')

@section('content')

    {{-- * Home Button  --}}
    <div class="home">
        <a href="#home">
            <i class="bi bi-house-fill z-20 fixed bottom-3 right-3 w-8 h-8 text-center text-2xl rounded-full text-tertiary bg-primary animate-bounce"></i>
        </a>
    </div>
    {{-- * End Home Button  --}}
        <div class="hidden" id="main_content">
            <div class="h-screen flex flex-wrap">
                {{-- ! Greeting Part --}}
                <section class="w-full h-full bg-primary" id="home">
                    {{-- * Language Switcher --}}
                    <div class="w-20 h-10 flex justify-evenly relative xs:top-4 xs:left-44 xs:translate-x-2" id="toggle" onclick="language()">
                        <span class="absolute w-10 h-10 text-center -translate-x-5 rounded-l-2xl transition" id="id">
                            <p class="relative top-2 text-background font-bold not-italic">ID</p>
                        </span>
                        <span class="absolute w-1 h-10 bg-primary"></span>
                        <span class="absolute w-10 h-10 text-center translate-x-5 rounded-r-2xl transition bg-tertiary" id="en">
                            <p class="relative top-2 text-background font-bold not-italic">EN</p>
                        </span>
                    </div>
                    {{-- * End Language Switcher --}}

                    <div class="xs:p-5 xs:relative xs:top-16">
                        <div class="" id="block-time">
                            <p class="text-background xs:text-3xl text-5xl" id="time">
                                {{-- * JS REALTIME --}}
                            </p>
                        </div>
                        {{-- * Content --}}
                            <p class="font-display text-6xl text-tertiary">
                                {{ __("Howdy Hey!!!") }}
                            </p>
                            <p class="text-background xs:text-xl mt-6 text-2xl">
                                {{ __("I'm Arif Laksonodhewo. Welcome to my") }} <span class="text-tertiary font-extrabold">portofolio</span> page
                            </p>
                            <div class="w-20 h-10 bg-tertiary animate-pulse rounded-full mt-10 hover:transition hover:scale-110">
                                <a href="#primary-expertise" class="text-background relative top-2 left-3.5"> 
                                    Next <i class="bi bi-play-circle-fill"></i>
                                </a>
                            </div>
                        {{-- * End Content --}}
                    </div>
                </section>
                {{-- ! End Greeting Part --}}

                {{-- ! About Me Part --}}
                <section class="w-full h-1/2 bg-tertiary p-5 relative order-4" id="about">
                    {{-- * Content --}}
                    <div class="xs:relative xs:top-6">
                        <p class="xs:text-4xl text-center text-background xs:mb-3">
                            <i class="bi bi-person"></i>
                        </p>
                        <p class="font-display xs:text-sm text-center text-background">
                            {{ __("ABOUT ME") }}
                        </p>
                        <p class="xs:text-sm text-background xs:mt-3 xs:text-center">
                            {{__("Right now i'm currently studying web development as fullstack
                            developer, and a hardware & software computer enthusiast")}}
                        </p>
                    </div>
                    {{-- * End Content --}}

                    {{-- * Arrow Down --}}
                    <div class="w-9 h-9 rounded-full scale-150 relative xs:top-1/2 xs:-translate-y-28 xs:left-1/2 xs:-translate-x-1/2 flex justify-center animate-pulse">
                        <a href="#projects" class="text-background">
                            <i class="bi bi-arrow-down relative top-0 translate-y-0.5"></i>
                        </a>
                    </div>
                    {{-- * End Arrow Down --}}
                </section>
                {{-- ! End About Me Part --}}

                {{-- ! Expertise Part --}}
                <section class="w-full h-1/2 relative bg-tertiary order-1" id="primary-expertise">
                    <div class="xs:absolute xs:bottom-0 xs:right-1 xs:p-5">
                        {{-- * Arrow Up --}}
                        <div class="xs:w-9 xs:h-9 xs:scale-150 xs:relative xs:top-1/2 xs:-translate-y-16 xs:left-1/2 xs:-translate-x-1/2 xs:flex animate-pulse xs:justify-center">
                            <a href="#home" class="text-background">
                                <i class="bi bi-arrow-up relative top-1.5 translate-y-0.5"></i>
                            </a>
                        </div>
                        {{-- * End Arrow Up --}}

                        {{-- * Content --}}
                        <div class=" relative bottom-12">
                            <p class="xs:text-4xl text-center text-background">
                                <i class="bi bi-tools"></i>
                            </p>
                            <p class="font-display xs:text-sm text-center text-background xs:mt-3">
                                {{ __("EXPERTISE") }}
                            </p>
                            <p class="text-background xs:text-sm text-center xs:mt-3">
                                {{__("Basic PHP, Basic Javascript, Laravel, MySQL, TailwindCSS, Git,
                                Googling Skills.")}}
                            </p>
                        </div>
                        {{-- * End Content --}}
                    </div>
                </section>
                {{-- ! End Expertise Part --}}

                {{-- ! Interest Part --}}
                <section class="w-full h-1/2 bg-primary p-5 order-3 relative" id="interest">
                    <div class="xs:absolute xs:bottom-0 xs:right-1 p-5">
                        {{-- *Arrow Up --}}
                        <div class="w-9 h-9 rounded-full scale-150 relative xs:top-1/2 xs:-translate-y-16 xs:left-1/2 xs:-translate-x-1/2 flex animate-pulse justify-center">
                            <a href="#primary-expertise" class="text-tertiary"> 
                                <i class="bi bi-arrow-up relative top-1.5 translate-y-0.5"></i>
                            </a>
                        </div>
                        {{-- * End Arrow Up --}}

                        {{-- * Content --}}
                        <div class="xs:relative bottom-12" >
                            <p class="xs:text-4xl text-center text-background">
                            <i class="bi bi-book-half"></i>
                            </p>
                            <p class="font-display xs:text-sm text-center text-background mt-3 text-xl">
                                {{ __("INTEREST") }}
                            </p>
                            <p class="text-background xs:text-sm text-center mt-3">
                                {{__("Vue.js, Inertia.js, Single Page Impelementation(SPA), API
                                Implementation.")}}
                            </p>
                        </div>
                        {{-- * End Content --}}
                    </div>
                </section>
                {{-- ! End Interest Part --}}

                {{-- ! Secondary Expertise --}}
                <section class="w-full h-1/2 bg-primary order-2 p-5" id="secondary-expertise">
                    {{-- * Content --}}
                    <div class="relative top-14">
                        <p class="xs:text-5xl text-center text-background">
                            <i class="bi bi-patch-plus"></i>
                        </p>
                        <p class="font-display xs:text-sm text-center text-background mt-3.5 text-xl">
                            {{ __("SECONDARY EXPERTISE") }}
                        </p>
                        <p class="text-background xs:text-sm mt-3 text-center">
                            {{ __("JMeter, Katalon Studio(Web Testing).") }}
                        </p>
                    </div>
                    {{-- * End Content --}}

                    {{-- * Arrow Down --}}
                    <div class="w-9 h-9 rounded-full scale-150 relative xs:top-1/2 xs:-translate-y-16 xs:left-1/2 xs:-translate-x-1/2 flex animate-pulse justify-center">
                        <a href="#interest" class="text-tertiary">
                            <i class="bi bi-arrow-down relative top-1.5 translate-y-0.5"></i>
                        </a>
                    </div>
                    {{-- * End Arrow Down --}}
                </section>
                {{-- ! Secondary Expertise --}}

                {{-- ! Recent Project --}}
                <section id="projects" class="w-full max-h-full xs:h-full bg-primary order-5 p-5">
                        {{-- * Icons --}}
                        <p class="xs:text-4xl text-center text-background">
                            <i class="bi bi-folder-fill"></i>
                        </p>
                        <p class="font-display xs:text-sm text-center text-background text-xl">
                            {{ __("RECENT PROJECTS") }}
                        </p>
                        {{-- * End Icons --}}

                        {{-- * Card --}}

                            {{-- * Arrow Up --}}
                            <div class="xs:w-9 xs:bg-secondary xs:h-9 xs:rounded-full  relative xs:top-4 xs:left-1/2 xs:-translate-x-1/2 flex animate-pulse justify-center">
                                <a href="#interest" class="text-background">
                                    <i class="bi bi-arrow-up xs:relative xs:text-2xl xs:top-0.5"></i>
                                </a>
                            </div>
                            {{-- * End Arrow Up --}}

                        <div class="xs:max-w-xs xs:mx-auto xs:rounded-t-xl xs:overflow-hidden xs:mt-0 xs:mb-0">
                            <img src="https://placehold.co/400" alt="recent-project"/>
                            <div class="xs:p-5 bg-background xs:rounded-b-xl">
                                {{-- * Content --}}
                                <h5 class="xs:mb-2 xs:text-2xl font-display">
                                    {{ __("Judul disini") }}
                                </h5>
                                <p>
                                    {{__("Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                    Similique eius repellendus laboriosam optio voluptatum quae
                                    eos animi eveniet obcaecati pariatur!")}}
                                </p>
                                {{-- * End Content --}}
                            </div>
                            {{-- * Arrow Down --}}
                            <div class="xs:w-9 xs:h-9 xs:rounded-full xs:relative xs:bottom-4 -translate-y-0.5 xs:left-1/2 xs:-translate-x-1/2 bg-secondary xs:flex xs:justify-center xs:animate-pulse">
                                <a href="#contacts" class="xs:relative xs:top-1.5 text-background"> 
                                    <i class="bi bi-arrow-down xs:relative xs:text-xl xs:bottom-0.5"></i>
                                </a>
                            </div>
                            {{-- * End Arrow Down --}}
                        </div>
                        {{-- * End Card --}}
                </section>
                {{-- ! End Recent Project --}}

                {{-- ! Social Media --}}
                <section class="w-full h-1/4 p-5 bg-secondary order-6" id="contacts">
                    {{-- * Icons --}}
                    <p class="text-5xl xs:text-xl text-center text-background">
                        <i class="bi bi-person-lines-fill"></i>
                    </p>
                    <p class="font-display xs:text-sm text-center text-background text-xl">
                        {{ __("CONTACT ME") }}
                    </p>
                    {{-- * End Icons --}}

                    {{-- * Content --}}
                    <div class="flex justify-between mt-5">
                        {{-- * GITHUB --}}
                        <a class="text-background text-4xl" href="https://github.com/OOOOAAAAEEEEEE">
                            <i class="bi bi-github"></i>
                        </a>

                        {{-- * EMAIL --}}
                        <a class="text-background text-4xl" href="mailto:arifldhewo234@gmail.com">
                            <i class="bi bi-envelope-at-fill"></i>
                        </a>

                        {{-- * LINKEDIN --}}
                        <a class="text-background text-4xl" href="https://www.linkedin.com/in/arif-laksonodhewo-6a7b21245/" >
                            <i class="bi bi-linkedin"></i>
                        </a>

                        {{-- * FACEBOOK --}}
                        <a class="text-background text-4xl" href="https://www.facebook.com/arif.laksonodhewo.1/" >
                            <i class="bi bi-facebook"></i>
                        </a>

                        {{-- * DISCORD --}}
                        <input class="invisible" type="hidden" name="discord" id="discord" value="Jepri#3649"/>
                        <button onclick="copyClipboard()" class="text-background text-4xl" type="button">
                            <i class="bi bi-discord"></i>
                        </button>
                    </div>
                    {{-- * End Content --}}
                </section>
                {{-- ! End Social Media --}}

                {{-- ! Credit --}}
                <footer class="w-full h-16 bg-primary order-7">
                    <p class="text-background xs:text-xs text-center relative top-2">
                        {{ __("Made with Laravel & TailwindCSS") }}
                    </p>
                    <div class="flex flex-wrap relative top-4 justify-center">
                        <img class="w-5 inline mr-5" src="{{ URL::asset('image/laravel.svg') }}" alt="laravel-logo">
                        <img class="w-8 inline" src="{{ URL::asset('image/tailwindcss.svg') }}" alt="tailwind-logo">
                    </div>
                </footer>
                {{-- ! End Credit --}}
            </div>
        </div>
@endsection