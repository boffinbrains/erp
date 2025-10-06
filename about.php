<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marquee Like Image</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Instrument+Sans:ital,wght@0,400..700;1,400..700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css" />

    <script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#FF5500'
                    },
                    container: {
                        center: true,
                        screens: {
                            DEFAULT: "100%",
                            xl: "1500px"
                        }
                    },
                    fontFamily: {
                        sans: ['"Instrument Sans"', 'ui-sans-serif', 'system-ui', 'sans-serif']
                    }
                }
            }
        }
    </script>
    <script src="//unpkg.com/alpinejs" defer></script>
    <style>
        @keyframes scroll {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(-50%);
            }
        }

        .marquee-content {
            animation: scroll 20s linear infinite;
        }

        .text-gradient {
            background: linear-gradient(to top, #020F4A 0%, #13FEFE 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
    </style>
</head>

<body class="font-sans">

    <header class="relative" x-data="{ 
    mobileMenuOpen: false, 
    scrolled: false,
    init() {
      window.addEventListener('scroll', () => {
        this.scrolled = window.scrollY > 100;
      });
    }
  }" x-init="init">
        <div x-show="scrolled" x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 -translate-y-full" x-transition:enter-end="opacity-100 translate-y-0"
            x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 translate-y-0"
            x-transition:leave-end="opacity-0 -translate-y-full"
            class="fixed top-0 left-0 w-full z-50 bg-[#030F47] bg-opacity-95 backdrop-blur-sm border-b border-white/10">
            <div class="container mx-auto p-4 flex items-center justify-between">
                <a href="./index.php" class="flex items-center gap-3">
                    <img src="https://boffinbrains.in/erp/assets/images/logo.svg" alt="Logo" class="max-h-[60px] w-auto" width="133" height="78"
                        loading="lazy">
                </a>

                <div class="hidden lg:flex items-center space-x-5">
                    <a href="./index.php"
                        class="text-white hover:text-gray-300 transition-colors text-sm font-medium">Home</a>
                    <a href="./about.php"
                        class="text-white hover:text-gray-300 transition-colors text-sm font-medium">About Us</a>
                    <a href="./service.php"
                        class="text-white hover:text-gray-300 transition-colors text-sm font-medium">Our Services</a>
                    <a href="./contact.php"
                        class="text-white hover:text-gray-300 transition-colors text-sm font-medium">Contact Us</a>
                </div>

                <button @click="mobileMenuOpen = true"
                    class="lg:hidden p-2 rounded-md text-white hover:text-gray-300 transition-colors">
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>

        <div x-show="scrolled" class="h-18"></div>

        <div class="absolute inset-0">
            <img src="https://boffinbrains.in/erp/assets/images/background.webp" alt="Background" class="w-full h-full object-cover">
            <div class="absolute inset-0"
                style="background: linear-gradient(180deg, rgba(3,15,71,0.7) 0%, rgba(19,254,254,0.5) 100%);"></div>
        </div>

        <div
            class="relative z-10 container mx-auto px-4 sm:px-6 lg:px-8 flex flex-col justify-center h-full text-center text-white">
            <nav class="flex justify-between items-center py-4">
                <div class="flex flex-1 justify-between items-center text-white font-bold">
                    <a href="./index.php" class="flex items-center gap-3">
                        <img src="https://boffinbrains.in/erp/assets/images/logo.svg" alt="" class="h-[60px] lg:h-[78px] w-auto" width="133"
                            height="78">
                    </a>

                    <div class="hidden lg:flex items-center space-x-6">
                        <a href="./index.php" class="hover:text-gray-300 transition-colors">Home</a>
                        <a href="./about.php" class="hover:text-gray-300 transition-colors">About Us</a>
                        <a href="./service.php" class="hover:text-gray-300 transition-colors">Our Services</a>
                        <a href="./contact.php" class="hover:text-gray-300 transition-colors">Contact Us</a>
                    </div>

                    <button @click="mobileMenuOpen = true"
                        class="lg:hidden p-2 rounded-md text-white hover:text-gray-300 transition-colors">
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </nav>

            <div class="mt-auto mb-auto py-5">
                <div class="container mx-auto text-center">
                    <div class="text-center space-y-2 md:space-y-3">
                        <h1
                            class="font-bold text-3xl md:text-4xl lg:text-5xl xl:text-6xl 2xl:text-7xl leading-tight sm:leading-tight md:leading-tight lg:leading-tight uppercase text-white">
                            About Us</h1>
                        <p class="text-base md:text-xl">Built on Passion, Driven by Integrity</p>
                    </div>
                </div>
            </div>
        </div>

        <div x-show="mobileMenuOpen" @click="mobileMenuOpen = false"
            x-transition:enter="transition-opacity ease-linear duration-300" x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100" x-transition:leave="transition-opacity ease-linear duration-300"
            x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
            class="fixed inset-0 z-[50] bg-black bg-opacity-50 lg:hidden"></div>

        <div x-show="mobileMenuOpen" x-transition:enter="transform transition ease-in-out duration-500"
            x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0"
            x-transition:leave="transform transition ease-in-out duration-500" x-transition:leave-start="translate-x-0"
            x-transition:leave-end="translate-x-full"
            class="fixed inset-y-0 right-0 z-[50] w-[85%] max-w-sm shadow-xl lg:hidden flex flex-col"
            style="background: linear-gradient(80.2deg, #3945A2 18.15%, #151A3C 80.9%);">

            <div class="flex items-center justify-between p-4 border-b border-white/20 flex-shrink-0">
                <div class="">
                    <img src="https://boffinbrains.in/erp/assets/images/logo.svg" alt="" width="133" height="78"
                        class="h-[60px] lg:h-[78px] w-auto" loading="lazy">
                </div>
                <button @click="mobileMenuOpen = false"
                    class="p-2 rounded-md text-white hover:text-gray-300 hover:bg-white/10 transition-colors duration-300">
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <div class="flex-1 overflow-y-auto p-4">
                <div class="space-y-6">
                    <a href="./index.php" @click="mobileMenuOpen = false"
                        class="block text-white font-medium text-lg hover:text-gray-300 transition-colors duration-300">Home</a>
                    <a href="./about.php" @click="mobileMenuOpen = false"
                        class="block text-white font-medium text-lg hover:text-gray-300 transition-colors duration-300">About
                        Us</a>
                    <a href="./service.php" @click="mobileMenuOpen = false"
                        class="block text-white font-medium text-lg hover:text-gray-300 transition-colors duration-300">Service
                        Offerings</a>
                    <a href="./contact.php" @click="mobileMenuOpen = false"
                        class="block text-white font-medium text-lg hover:text-gray-300 transition-colors duration-300">Contact
                        Us</a>
                </div>
            </div>
        </div>
    </header>

    <section>
        <div class="container mx-auto p-4 mt-5 sm:mt-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
                <div class="space-y-4 flex flex-col justify-center">
                    <h2 class="font-bold text-xl sm:text-2xl md:text-4xl">ERP Security Experts was founded on a
                        simple
                        belief:</h2>
                    <p class="text-base md:text-lg">When enterprise systems are secure, businesses can grow without
                        hesitation. Our team combines decades of experience in ERP, cybersecurity, and regulations to
                        deliver solutions that secure, enable, and elevate every client we serve.</p>
                </div>

                <div class="flex justify-end">
                    <div class="bg-[#D6D4FF] lg:w-96 lg:h-96 rounded-xl overflow-hidden">
                        <img src="https://boffinbrains.in/erp/assets/images/erp-security.webp" alt="ERP Security Expert"
                            class="w-full h-full object-cover">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container mx-auto p-4 mt-5 sm:mt-10">
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-8">
                <div class="bg-[#EFEFEF] p-4 rounded-xl">
                    <div class="flex justify-center items-center">
                        <div
                            class="bg-[linear-gradient(90deg,#030F47_0%,#13FEFE_100%)] text-white font-bold text-center text-base py-2 rounded-full w-[200px]">
                            Mission
                        </div>
                    </div>

                    <p class="text-base md:text-lg mt-4">We transform enterprise ERP environments by designing clear
                        guidance, modern controls, and measurable outcomes so organizations can pursue growth and
                        innovation without fear of compromise.</p>
                </div>

                <div class="bg-[#EFEFEF] p-4 rounded-xl">
                    <div class="flex justify-center items-center">
                        <div
                            class="bg-[linear-gradient(90deg,#030F47_0%,#13FEFE_100%)] text-white font-bold text-center text-base py-2 rounded-full w-[200px]">
                            Vision
                        </div>
                    </div>

                    <p class="text-base md:text-lg mt-4">To set the worldwide benchmark for ERP Security consulting
                        through trusted partnerships, thought leadership, and measurable impact.</p>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container mx-auto p-4 mt-5 sm:mt-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 md:gap-10 items-stretch">
                <div class="flex justify-center order-2 lg:order-1">
                    <div class="w-full rounded-xl h-full">
                        <img src="https://boffinbrains.in/erp/assets/images/who-we-are.webp" alt="Who we are" loading="lazy"
                            class="w-full h-96 object-cover rounded-xl">
                    </div>
                </div>

                <div class="flex flex-col justify-center order-1 lg:order-2">
                    <div class="space-y-4">
                        <h2 class="font-bold text-xl sm:text-2xl md:text-4xl">Who we are</h2>
                        <p class="text-base md:text-lg">
                            ERP Security Experts goes beyond standard consulting. We deliver measurable outcomes. With proven expertise in Oracle ERP Cloud, SAP, and leading GRC platforms, we focus on leadership, innovation, and client success.
                        </p>
                    </div>

                    <div class="mt-10 space-y-4">
                        <h2 class="font-bold text-xl sm:text-2xl md:text-4xl">What We Can Do</h2>
                        <ul class="list-disc ml-6 space-y-4">
                            <li>Rapid Risk Management Cloud (RMC) implementations automating
                                client ITAC & ITGC controls to surface fraud or error in real
                                time.</li>
                            <li>User-management programs that flag unauthorized, privileged,
                                or stale access before it becomes a headline.</li>
                            <li>Cross-platform advisory that unites security, audit, and
                                business teams around a single source of truth.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-[#EFEFEF]">
        <div class="container mx-auto px-4 mt-5 sm:mt-10 py-10">
            <div class="max-w-3xl mx-auto text-left sm:text-center uppercase">
                <h2 class="font-bold text-xl sm:text-2xl md:text-4xl">
                    Leadership Snapshot
                </h2>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 max-w-6xl mx-auto mt-4 md:mt-10">
                <div class="leader-card bg-white rounded-2xl shadow-lg overflow-hidden">
                    <div class="p-8">
                        <div class="flex flex-col items-center text-center mb-4">
                            <div class="w-40 h-40 rounded-full overflow-hidden mb-6 shadow-lg">
                                <img src="https://boffinbrains.in/erp/assets/images/taraj-khan-image.webp" alt="Taraj Khan" class="w-full h-auto"
                                    width="948" height="1284">
                            </div>
                            <h3 class="text-2xl font-bold text-gray-800 mb-2">Taraj Khan</h3>
                            <p class="text-lg font-semibold  mb-1">Co-Founder and Director – Oracle Security & Risk Management Expert</p>
                        </div>

                        <div class="space-y-6">
                            <div class="space-y-3">
                                    <div class="flex items-start">
                                        <div class="w-2 h-2 bg-black rounded-full mt-2 mr-3 flex-shrink-0"></div>
                                        <p class="text-gray-600 text-sm">Over (25+) years of Oracle ERP experience in managing end-to-end Implementations.</p>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-2 h-2 bg-black rounded-full mt-2 mr-3 flex-shrink-0"></div>
                                        <p class="text-gray-600 text-sm">managing Support, Leadership, and Project Management.</p>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-2 h-2 bg-black rounded-full mt-2 mr-3 flex-shrink-0"></div>
                                        <p class="text-gray-600 text-sm">both in US and Global markets. </p>
                                    </div>
                                </div>

                            <div>
                                <h4 class="text-lg font-bold text-gray-800 mb-4">Core expertise:</h4>
                                <div class="space-y-3">
                                    <div class="flex items-start">
                                        <div class="w-2 h-2 bg-black rounded-full mt-2 mr-3 flex-shrink-0"></div>
                                        <p class="text-gray-600 text-sm">Oracle Cloud Security and Risk Management / RMC Implementations & Assessments with Remediation Roadmaps.</p>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-2 h-2 bg-black rounded-full mt-2 mr-3 flex-shrink-0"></div>
                                        <p class="text-gray-600 text-sm">Specialize in Oracle Cloud Governance, Risk & Compliance.</p>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-2 h-2 bg-black rounded-full mt-2 mr-3 flex-shrink-0"></div>
                                        <p class="text-gray-600 text-sm">•	Reviewing & Automating SOD, SOX, ITAC & ITGC into Oracle RMC Controls</p>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-2 h-2 bg-black rounded-full mt-2 mr-3 flex-shrink-0"></div>
                                        <p class="text-gray-600 text-sm">Oracle License Management & Optimization to reduce Cost.</p>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-2 h-2 bg-black rounded-full mt-2 mr-3 flex-shrink-0"></div>
                                        <p class="text-gray-600 text-sm">ERP Managed Services, Advisory, Consulting & Staffing</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="leader-card bg-white rounded-2xl shadow-lg overflow-hidden">
                    <div class="p-8">
                        <div class="flex flex-col items-center text-center mb-4">
                            <div class="w-40 h-40 rounded-full overflow-hidden mb-6 shadow-lg">
                                <img src="https://boffinbrains.in/erp/assets/images/asim-siddiqui.webp" alt="Taraj Khan" class="w-full h-auto"
                                    width="948" height="1284">
                            </div>
                            <h3 class="text-2xl font-bold text-gray-800 mb-2">Asim Siddiqui</h3>
                            <p class="text-lg font-semibold mb-1">Co Founder and Director - Oracle Cloud & Cybersecurity Specialist</p>
                        </div>

                        <div class="space-y-6">
                            
                            <div class="space-y-3">
                                    <div class="flex items-start">
                                        <div class="w-2 h-2 bg-black rounded-full mt-2 mr-3 flex-shrink-0"></div>
                                        <p class="text-gray-600 text-sm">Certified Oracle Cloud subject-matter expert (HCM, SCM,
                                            ERP, FDI, OCI)</p>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-2 h-2 bg-black rounded-full mt-2 mr-3 flex-shrink-0"></div>
                                        <p class="text-gray-600 text-sm">15+ years Big-5 consulting background</p>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-2 h-2 bg-black rounded-full mt-2 mr-3 flex-shrink-0"></div>
                                        <p class="text-gray-600 text-sm">      5+ years of founder/CEO experience in Oracle consulting
                                            and managed services
</p>
                                    </div>
                                </div>

                            <div>
                                <h4 class="text-lg font-bold text-gray-800 mb-4">Core expertise:</h4>
                                <div class="space-y-3">
                                    <div class="flex items-start">
                                        <div class="w-2 h-2 bg-black rounded-full mt-2 mr-3 flex-shrink-0"></div>
                                        <p class="text-gray-600 text-sm">Managed services and staffing for Oracle programs</p>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-2 h-2 bg-black rounded-full mt-2 mr-3 flex-shrink-0"></div>
                                        <p class="text-gray-600 text-sm">    Oracle Cloud Security consulting across applications and infrastructure</p>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-2 h-2 bg-black rounded-full mt-2 mr-3 flex-shrink-0"></div>
                                        <p class="text-gray-600 text-sm">Oracle Cloud HCM consulting at scale</p>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-2 h-2 bg-black rounded-full mt-2 mr-3 flex-shrink-0"></div>
                                        <p class="text-gray-600 text-sm">    Operating models that keep controls strong post-go-live</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script defer>
        const swiper = new Swiper('.about_swiper', {
            spaceBetween: 20,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            autoHeight: true,
            breakpoints: {
                640: {
                    slidesPerView: 1,
                },
                768: {
                    slidesPerView: 1,
                },
                1024: {
                    slidesPerView: 1,
                },
            },
        });
    </script>

    <style>
        .swiper-pagination-bullet {
            background: #000;
            opacity: 0.4;
        }

        .swiper-pagination-bullet-active {
            background: #fff;
            opacity: 1;
            border: 2px solid #000;
        }
    </style>

<section class="py-5 md:py-10">
        <div class="container mx-auto px-4">
            <div class="max-w-3xl mx-auto text-left sm:text-center mb-4">
                <h2 class="font-bold text-xl sm:text-2xl md:text-4xl uppercase text-[#7B74E6]">
                    Client Testimonials
                </h2>
            </div>

            <div class="swiper testimonialSwiper">
                <div class="swiper-wrapper" id="testimonials-wrapper">

                    <!-- Dept of Energy -->
                    <div class="swiper-slide bg-gray-50 border border-gray-200 rounded-xl p-6 shadow-sm h-[280px] sm:h-[220px] max-w-[450px] !w-full">
                        <figure class="flex flex-col h-full justify-between">
                            <div class="flex justify-center mb-3">
                                <img src="https://boffinbrains.in/erp//assets/testimonials/dept-of-energy-logo.png"
                                    alt="Dept of Energy" class="h-8 object-contain">
                            </div>
                            <blockquote>
                                <p class="font-medium text-gray-900 text-center">
                                    "ERP Security Experts supported our government systems with stringent compliance, security audits, and robust access control."
                                </p>
                            </blockquote>
                            <figcaption class="mt-3 text-center">
                                <div class="font-medium text-gray-900 text-xs">
                                    Director, IT Security, Dept of Energy
                                </div>
                            </figcaption>
                        </figure>
                    </div>

                    <!-- BCBS -->
                    <div class="swiper-slide bg-gray-50 border border-gray-200 rounded-xl p-6 shadow-sm h-[280px] sm:h-[220px] max-w-[450px] !w-full">
                        <figure class="flex flex-col h-full justify-between">
                            <div class="flex justify-center mb-3">
                                <img src="https://boffinbrains.in/erp//assets/testimonials/blue-cross-blue-shield-vector-logo.png"
                                    alt="BCBS" class="h-8 object-contain">
                            </div>
                            <blockquote>
                                <p class="font-medium text-gray-900 text-center">
                                    "Their solutions helped us secure sensitive patient data, align with healthcare compliance, and streamline our ERP workflows."
                                </p>
                            </blockquote>
                            <figcaption class="mt-3 text-center">
                                <div class="font-medium text-gray-900 text-xs">
                                    CIO, Blue Cross Blue Shield
                                </div>
                            </figcaption>
                        </figure>
                    </div>

                    <!-- Kaiser Permanente -->
                    <div class="swiper-slide bg-gray-50 border border-gray-200 rounded-xl p-6 shadow-sm h-[280px] sm:h-[220px] max-w-[450px] !w-full">
                        <figure class="flex flex-col h-full justify-between">
                            <div class="flex justify-center mb-3">
                                <img src="https://boffinbrains.in/erp//assets/testimonials/kaiser-permanente-logo.png"
                                    alt="Kaiser Permanente" class="h-8 object-contain">
                            </div>
                            <blockquote>
                                <p class="font-medium text-gray-900 text-center">
                                    "We improved ERP security, role design, and compliance posture with their team’s expertise."
                                </p>
                            </blockquote>
                            <figcaption class="mt-3 text-center">
                                <div class="font-medium text-gray-900 text-xs">
                                    IT Director, Kaiser Permanente
                                </div>
                            </figcaption>
                        </figure>
                    </div>

                    <!-- ACCO Engineered Systems -->
                    <div class="swiper-slide bg-gray-50 border border-gray-200 rounded-xl p-6 shadow-sm h-[280px] sm:h-[220px] max-w-[450px] !w-full">
                        <figure class="flex flex-col h-full justify-between">
                            <div class="flex justify-center mb-3">
                                <img src="https://boffinbrains.in/erp/assets/testimonials/acco-logo.png"
                                    alt="ACCO Engineered Systems" class="h-8 object-contain">
                            </div>
                            <blockquote>
                                <p class="font-medium text-gray-900 text-center">
                                    "Their ERP integration significantly streamlined our project workflows and improved system-wide security compliance."
                                </p>
                            </blockquote>
                            <figcaption class="mt-3 text-center">
                                <div class="font-medium text-gray-900 text-xs">
                                    CIO, ACCO Engineered Systems
                                </div>
                            </figcaption>
                        </figure>
                    </div>

                    <!-- GKN Wheels -->
                    <div class="swiper-slide bg-gray-50 border border-gray-200 rounded-xl p-6 shadow-sm h-[280px] sm:h-[220px] max-w-[450px] !w-full">
                        <figure class="flex flex-col h-full justify-between">
                            <div class="flex justify-center mb-3">
                                <img src="https://boffinbrains.in/erp/assets/testimonials/gkn-wheels-logo.png"
                                    alt="GKN Wheels" class="h-8 object-contain">
                            </div>
                            <blockquote>
                                <p class="font-medium text-gray-900 text-center">
                                    "Their robust ERP audit and optimization helped align our global operations with compliance standards efficiently."
                                </p>
                            </blockquote>
                            <figcaption class="mt-3 text-center">
                                <div class="font-medium text-gray-900 text-xs">
                                    Head of IT, GKN Wheels
                                </div>
                            </figcaption>
                        </figure>
                    </div>

                    <!-- KEEP: Indiana University Health -->
                    <div class="swiper-slide bg-gray-50 border border-gray-200 rounded-xl p-6 shadow-sm h-[280px] sm:h-[220px] max-w-[450px] !w-full">
                        <figure class="flex flex-col h-full justify-between">
                            <div class="flex justify-center mb-3">
                                <img src="https://boffinbrains.in/erp/assets/testimonials/indiana-university-health.svg"
                                    alt="Indiana University Health" class="h-12 object-contain">
                            </div>
                            <blockquote>
                                <p class="font-medium text-gray-900 text-center">
                                    "Their automated risk controls and continuous monitoring gave us confidence in meeting compliance requirements. ERP Security Experts have been a trusted partner in our security journey."
                                </p>
                            </blockquote>
                            <figcaption class="mt-3 text-center">
                                <div class="font-medium text-gray-900 text-xs">
                                    CISO, Indiana University Health
                                </div>
                            </figcaption>
                        </figure>
                    </div>

                    <!-- KEEP: Twilio -->
                    <div class="swiper-slide bg-gray-50 border border-gray-200 rounded-xl p-6 shadow-sm h-[280px] sm:h-[220px] max-w-[450px] !w-full">
                        <figure class="flex flex-col h-full justify-between">
                            <div class="flex justify-center mb-3">
                                <img src="https://boffinbrains.in/erp/assets/testimonials/twilio.svg"
                                    alt="Twilio" class="h-10 object-contain">
                            </div>
                            <blockquote>
                                <p class="font-medium text-gray-900 text-center">
                                    "The team optimized our Oracle ERP license usage and eliminated SoD conflicts. Their solutions gave us both cost savings and a stronger security posture."
                                </p>
                            </blockquote>
                            <figcaption class="mt-3 text-center">
                                <div class="font-medium text-gray-900 text-xs">
                                    ERP Applications Manager, Twilio
                                </div>
                            </figcaption>
                        </figure>
                    </div>

                    <!-- KEEP: Exelon -->
                    <div class="swiper-slide bg-gray-50 border border-gray-200 rounded-xl p-6 shadow-sm h-[280px] sm:h-[220px] max-w-[450px] !w-full">
                        <figure class="flex flex-col h-full justify-between">
                            <div class="flex justify-center mb-3">
                                <img src="https://boffinbrains.in/erp/assets/testimonials/exelon.png"
                                    alt="Exelon" class="h-10 object-contain">
                            </div>
                            <blockquote>
                                <p class="font-medium text-gray-900 text-center">
                                    "With license optimization and automated security checks, we improved ERP efficiency while cutting unnecessary costs. ERP Security Experts ensured our systems remain secure and compliant."
                                </p>
                            </blockquote>
                            <figcaption class="mt-3 text-center">
                                <div class="font-medium text-gray-900 text-xs">
                                    Senior Manager, Exelon
                                </div>
                            </figcaption>
                        </figure>
                    </div>

                    <!-- KEEP: JPMorgan Chase -->
                    <div class="swiper-slide bg-gray-50 border border-gray-200 rounded-xl p-6 shadow-sm h-[280px] sm:h-[220px] max-w-[450px] !w-full">
                        <figure class="flex flex-col h-full justify-between">
                            <div class="flex justify-center mb-3">
                                <img src="https://boffinbrains.in/erp/assets/testimonials/jpmc-logo.svg"
                                    alt="J.P. Morgan Chase" class="h-6 object-contain">
                            </div>
                            <blockquote>
                                <p class="font-medium text-gray-900 text-center">
                                    "ERP Security Experts helped us enforce tighter SoD policies and streamline role design across our global ERP landscape. Their expertise in risk management has been invaluable."
                                </p>
                            </blockquote>
                            <figcaption class="mt-3 text-center">
                                <div class="font-medium text-gray-900 text-xs">
                                    Director of Internal Audit, J.P. Morgan Chase
                                </div>
                            </figcaption>
                        </figure>
                    </div>

                </div>

                <div class="swiper-pagination static"></div>
            </div>

            <script defer>
                document.addEventListener('DOMContentLoaded', function() {
                    new Swiper('.testimonialSwiper', {
                        loop: false,
                        slidesPerView: 'auto',
                        spaceBetween: 20,
                        autoplay: {
                            delay: 5000,
                            disableOnInteraction: false,
                        },
                        pagination: {
                            el: '.swiper-pagination',
                            clickable: true,
                        },
                    });
                });
            </script>
        </div>
    </section>

    <?php include 'footer.php'; ?>
</body>

</html>