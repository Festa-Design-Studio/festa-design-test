@extends('layouts.app')

@section('title', 'Home | Festa Design Studios')
@section('description', 'Welcome to Festa Design Studios - Amplifying impact through design.')

@section('content')
    <!-- Hero Section -->
    <section class="relative bg-the-end text-white-smoke-50 py-20">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto text-center">
                <h1 class="text-display font-Inter mb-6">Amplifying Impact Through Purpose-Driven Design</h1>
                <p class="text-body-lg text-white-smoke-300 mb-8">We help nonprofits and startups create meaningful connections through strategic design solutions that drive real change.</p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="#services" class="inline-flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-the-end bg-white-smoke-50 hover:bg-white-smoke-100 transition-colors">
                        Our Services
                    </a>
                    <a href="#contact" class="inline-flex items-center justify-center px-8 py-3 border border-white-smoke-300 text-base font-medium rounded-md text-white-smoke-50 hover:bg-white-smoke-800 transition-colors">
                        Get in Touch
                    </a>
                </div>
            </div>
        </div>
        <!-- Decorative Elements -->
        <div class="absolute top-0 left-0 w-full h-full overflow-hidden pointer-events-none">
            <div class="absolute -top-24 -right-24 w-96 h-96 bg-chicken-comb opacity-10 rounded-full blur-3xl"></div>
            <div class="absolute -bottom-24 -left-24 w-96 h-96 bg-pepper-green opacity-10 rounded-full blur-3xl"></div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-20 bg-white-smoke-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-h2 font-Inter text-the-end mb-4">Our Services</h2>
                <p class="text-body-lg text-the-end-600 max-w-2xl mx-auto">Comprehensive design solutions tailored to amplify your organization's impact and reach.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Brand Strategy -->
                <div class="bg-white rounded-lg shadow-lg p-8 hover:shadow-xl transition-shadow">
                    <div class="w-12 h-12 bg-chicken-comb-100 rounded-lg flex items-center justify-center mb-6">
                        <svg class="w-6 h-6 text-chicken-comb" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"></path>
                        </svg>
                    </div>
                    <h3 class="text-h4 font-Inter text-the-end mb-4">Brand Strategy</h3>
                    <p class="text-body text-the-end-600 mb-6">Develop a compelling brand identity that resonates with your audience and communicates your mission effectively.</p>
                    <a href="#" class="text-chicken-comb hover:text-chicken-comb-600 transition-colors inline-flex items-center">
                        Learn More
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>

                <!-- Web Design -->
                <div class="bg-white rounded-lg shadow-lg p-8 hover:shadow-xl transition-shadow">
                    <div class="w-12 h-12 bg-pepper-green-100 rounded-lg flex items-center justify-center mb-6">
                        <svg class="w-6 h-6 text-pepper-green" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <h3 class="text-h4 font-Inter text-the-end mb-4">Web Design</h3>
                    <p class="text-body text-the-end-600 mb-6">Create engaging, user-friendly websites that convert visitors into supporters and drive your mission forward.</p>
                    <a href="#" class="text-pepper-green hover:text-pepper-green-600 transition-colors inline-flex items-center">
                        Learn More
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>

                <!-- Content Strategy -->
                <div class="bg-white rounded-lg shadow-lg p-8 hover:shadow-xl transition-shadow">
                    <div class="w-12 h-12 bg-apocalyptic-orange-100 rounded-lg flex items-center justify-center mb-6">
                        <svg class="w-6 h-6 text-apocalyptic-orange" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                        </svg>
                    </div>
                    <h3 class="text-h4 font-Inter text-the-end mb-4">Content Strategy</h3>
                    <p class="text-body text-the-end-600 mb-6">Craft compelling narratives and content that engages your audience and drives meaningful action.</p>
                    <a href="#" class="text-apocalyptic-orange hover:text-apocalyptic-orange-600 transition-colors inline-flex items-center">
                        Learn More
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection