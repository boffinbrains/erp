<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About ERP Security Experts - Built on Passion, Driven by Integrity</title>
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
                    <img src="https://erpsecurityexperts.com/assets/images/logo.svg" alt="Logo" class="max-h-[60px] w-auto" width="133" height="78"
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
            <img src="https://erpsecurityexperts.com/assets/images/background.webp" alt="Background" class="w-full h-full object-cover">
            <div class="absolute inset-0"
                style="background: linear-gradient(180deg, rgba(3,15,71,0.7) 0%, rgba(19,254,254,0.5) 100%);"></div>
        </div>

        <div
            class="relative z-10 container mx-auto px-4 sm:px-6 lg:px-8 flex flex-col justify-center h-full text-center text-white">
            <nav class="flex justify-between items-center py-4">
                <div class="flex flex-1 justify-between items-center text-white font-bold">
                    <a href="./index.php" class="flex items-center gap-3">
                        <img src="https://erpsecurityexperts.com/assets/images/logo.svg" alt="" class="h-[60px] lg:h-[78px] w-auto" width="133"
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
                    <img src="https://erpsecurityexperts.com/assets/images/logo.svg" alt="" width="133" height="78"
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
                        <img src="https://erpsecurityexperts.com/assets/images/erp-security.webp" alt="ERP Security Expert"
                            class="w-full h-full object-cover">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container mx-auto p-4 mt-5 sm:mt-10">
            <div class="max-w-3xl mx-auto text-left sm:text-center uppercase">
                <h2 class="font-bold text-xl sm:text-2xl md:text-4xl">
                    Meet the co-founders
                </h2>
            </div>
            <div class="max-w-5xl mx-auto sm:text-center mt-3 sm:mt-4">
                <p class="text-lg md:text-xl">
                    Leadership with proven expertise in ERP Security and Oracle programs, delivering measurable results
                    and long-term client trust.
                </p>
            </div>

            <div class="mt-4 sm:mt-6 container grid grid-cols-1 lg:grid-cols-2 gap-6">
                <div class="w-full bg-[#F0F0F0] rounded-xl overflow-hidden mx-auto flex">
                    <div class="grid grid-cols-1 gap-4 flex-1">

                        <div class="pt-10 flex justify-center items-center">
                            <img src="https://erpsecurityexperts.com/assets/images/taraj-khan.webp"
                                alt="Taraj Khan"
                                class="max-h-[450px] w-auto object-contain" />
                        </div>

                        <div class="p-4 flex flex-col justify-center space-y-2">
                            <h3 class="text-xl md:text-2xl font-bold">Taraj Khan</h3>

                            <p class="text-base md:text-xl font-semibold">
                                Co-Founder and Director – Oracle Security & Risk Management Expert
                            </p>

                            <ul class="list-disc text-sm sm:text-base">
                                <p>
                                    Over 25 years of Oracle ERP experience, managing end-to-end implementations, support, leadership,
                                    and project management across both US and global markets.
                                </p>
                            </ul>

                            <p class="text-sm sm:text-base font-semibold">Core expertise:</p>

                            <ul class="list-disc ml-6 text-sm sm:text-base">
                                <li>
                                    Oracle Cloud Security and Risk Management / RMC Implementations & Assessments with Remediation Roadmaps.
                                </li>
                                <li>
                                    Specialize in Oracle Cloud Governance, Risk & Compliance.
                                </li>
                                <li>
                                    Assess company/client SOX, SOD, ITAC, and ITGC frameworks and automate them into RMC controls.
                                </li>
                                <li>Oracle License Management & Optimization to reduce Cost.</li>
                                <li>
                                    ERP Managed Services, Advisory, Consulting & Staffing
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>


                <div class="w-full bg-[#F0F0F0] rounded-xl overflow-hidden mx-auto flex">
                    <div class="grid grid-cols-1 gap-4 flex-1">

                        <div class="pt-10 flex justify-center items-center">
                            <img src="https://erpsecurityexperts.com/assets/images/asim-siddiqui-image.webp"
                                alt="Asim Siddiqui"
                                class="max-h-[450px] w-auto object-contain" />
                        </div>

                        <div class="p-4 flex flex-col justify-start h-full space-y-2">
                            <h3 class="text-xl md:text-2xl font-bold">Asim Siddiqui</h3>

                            <p class="text-base md:text-xl font-semibold">
                                Co Founder and Director - Oracle Cloud & Cybersecurity Specialist
                            </p>

                            <ul class="list-disc text-sm sm:text-base">
                                <p>
                                    Cybersecurity specialist and certified Oracle Cloud expert (HCM, SCM, ERP, FDI, OCI)
                                    with 15+ years of Big-5 consulting experience and 5+ years as founder/CEO
                                    in Oracle consulting and managed services.
                                </p>
                            </ul>

                            <p class="text-sm sm:text-base font-semibold">Core expertise:</p>

                            <ul class="list-disc ml-6 text-sm sm:text-base">
                                <li>Managed services and staffing for Oracle programs</li>
                                <li>Oracle Cloud Security consulting across applications and infrastructure</li>
                                <li>Oracle Cloud HCM consulting at scale</li>
                                <li>Operating models that keep controls strong post-go-live</li>
                            </ul>
                        </div>

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
                        <img src="https://erpsecurityexperts.com/assets/images/who-we-are.webp" alt="Who we are" loading="lazy"
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
    <?php include 'footer.php'; ?>
</body>

</html>