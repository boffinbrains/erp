<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Core ERP Security Services</title>
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
                    <img src="../assets/images/logo.svg" alt="Logo" class="max-h-[60px] w-auto" width="133" height="78"
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
            <img src="../assets/images/background.webp" alt="Background" class="w-full h-full object-cover">
            <div class="absolute inset-0"
                style="background: linear-gradient(180deg, rgba(3,15,71,0.7) 0%, rgba(19,254,254,0.5) 100%);"></div>
        </div>

        <div
            class="relative z-10 container mx-auto px-4 sm:px-6 lg:px-8 flex flex-col justify-center h-full text-center text-white">
            <nav class="flex justify-between items-center py-4">
                <div class="flex flex-1 justify-between items-center text-white font-bold">
                    <a href="./index.php" class="flex items-center gap-3">
                        <img src="../assets/images/logo.svg" alt="" class="h-[60px] lg:h-[78px] w-auto" width="133"
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

            <div class="mt-auto mb-auto py-5 pb-10 md:pb-20">
                <div class="container mx-auto text-center">
                    <div class="text-center space-y-2 md:space-y-3">
                        <h1
                            class="font-bold text-3xl md:text-4xl lg:text-5xl xl:text-6xl 2xl:text-7xl leading-tight sm:leading-tight md:leading-tight lg:leading-tight uppercase text-white">
                            Core Security offer</h1>
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
                    <img src="../assets/images/logo.svg" alt="" width="133" height="78"
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
                    <a href="#" @click="mobileMenuOpen = false"
                        class="block text-white font-medium text-lg hover:text-gray-300 transition-colors duration-300">Home</a>
                    <a href="#" @click="mobileMenuOpen = false"
                        class="block text-white font-medium text-lg hover:text-gray-300 transition-colors duration-300">About
                        Us</a>
                    <a href="#" @click="mobileMenuOpen = false"
                        class="block text-white font-medium text-lg hover:text-gray-300 transition-colors duration-300">Career</a>
                    <a href="#" @click="mobileMenuOpen = false"
                        class="block text-white font-medium text-lg hover:text-gray-300 transition-colors duration-300">Case
                        Studies</a>
                    <a href="#" @click="mobileMenuOpen = false"
                        class="block text-white font-medium text-lg hover:text-gray-300 transition-colors duration-300">Our
                        Team</a>
                    <a href="#" @click="mobileMenuOpen = false"
                        class="block text-white font-medium text-lg hover:text-gray-300 transition-colors duration-300">Service
                        Offerings</a>
                    <a href="#" @click="mobileMenuOpen = false"
                        class="block text-white font-medium text-lg hover:text-gray-300 transition-colors duration-300">Contact
                        Us</a>
                </div>
            </div>

            <div class="p-4 border-t border-white/20 flex-shrink-0">
                <button @click="mobileMenuOpen = false"
                    class="w-full bg-white hover:bg-gray-100 text-black font-medium py-3 px-6 rounded-full transition-all duration-300">
                    Let's Talk
                </button>
            </div>
        </div>
    </header>

    <section>
        <div class="container mx-auto px-4 my-5 sm:my-10">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-6">
                <div class="bg-[#EFEFEF] p-4 rounded-xl">
                    <div class="flex justify-between items-center">
                        <div class="w-14 h-14 bg-[#D9D9D9] rounded-md flex items-center justify-center">
                            <img src="./assets/icons/erp-risk-assesment.svg" alt="">
                        </div>
                    </div>

                    <p class="font-bold text-xl mt-5">ERP Risk Assessment & Audit</p>
                    <p class="text-sm sm:text-base mt-1">Complete access, role, and configuration reviews covering
                        regulatory privileges and compliance frameworks. Our assessments map control gaps to business
                        risk priorities.</p>
                </div>

                <div class="bg-[#EFEFEF] p-4 rounded-xl">
                    <div class="flex justify-between items-center">
                        <div class="w-14 h-14 bg-[#D9D9D9] rounded-md flex items-center justify-center">
                            <img src="./assets/icons/erp-risk-assesment.svg" alt="">
                        </div>
                    </div>

                    <p class="font-bold text-xl mt-5">Threat Mitigation & Vulnerability Management</p>
                    <p class="text-sm sm:text-base mt-1">We design and maintain robust alerting systems, automated
                        monitoring tools, and proactive threat detection to secure ERP environments without impacting
                        performance</p>
                </div>

                <div class="bg-[#EFEFEF] p-4 rounded-xl">
                    <div class="flex justify-between items-center">
                        <div class="w-14 h-14 bg-[#D9D9D9] rounded-md flex items-center justify-center">
                            <img src="./assets/icons/erp-risk-assesment.svg" alt="">
                        </div>
                    </div>

                    <p class="font-bold text-xl mt-5">Oracle Risk Management Cloud Implementation</p>
                    <p class="text-sm sm:text-base mt-1">We design and maintain robust alerting systems, automated
                        monitoring tools, and proactive threat detection to secure ERP environments without impacting
                        performance</p>
                </div>

                <div class="bg-[#EFEFEF] p-4 rounded-xl">
                    <div class="flex justify-between items-center">
                        <div class="w-14 h-14 bg-[#D9D9D9] rounded-md flex items-center justify-center">
                            <img src="./assets/icons/erp-risk-assesment.svg" alt="">
                        </div>
                    </div>

                    <p class="font-bold text-xl mt-5">ERP Risk Assessment & Audit</p>
                    <p class="text-sm sm:text-base mt-1">Complete access, role, and configuration reviews covering
                        regulatory privileges and compliance frameworks. Our assessments map control gaps to business
                        risk priorities.</p>
                </div>

                <div class="bg-[#EFEFEF] p-4 rounded-xl">
                    <div class="flex justify-between items-center">
                        <div class="w-14 h-14 bg-[#D9D9D9] rounded-md flex items-center justify-center">
                            <img src="./assets/icons/erp-risk-assesment.svg" alt="">
                        </div>
                    </div>

                    <p class="font-bold text-xl mt-5">Threat Mitigation & Vulnerability Management</p>
                    <p class="text-sm sm:text-base mt-1">We design and maintain robust alerting systems, automated
                        monitoring tools, and proactive threat detection to secure ERP environments without impacting
                        performance</p>
                </div>

                <div class="bg-[#EFEFEF] p-4 rounded-xl">
                    <div class="flex justify-between items-center">
                        <div class="w-14 h-14 bg-[#D9D9D9] rounded-md flex items-center justify-center">
                            <img src="./assets/icons/erp-risk-assesment.svg" alt="">
                        </div>
                    </div>

                    <p class="font-bold text-xl mt-5">Oracle Risk Management Cloud Implementation</p>
                    <p class="text-sm sm:text-base mt-1">We design and maintain robust alerting systems, automated
                        monitoring tools, and proactive threat detection to secure ERP environments without impacting
                        performance</p>
                </div>
            </div>
        </div>
    </section>

    <?php include 'footer.php'; ?>
</body>

</html>