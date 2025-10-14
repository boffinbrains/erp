<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Marquee Like Image</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Instrument+Sans:ital,wght@0,400..700;1,400..700&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css" />

    <script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: "#FF5500",
                    },
                    container: {
                        center: true,
                        screens: {
                            DEFAULT: "100%",
                            xl: "1500px",
                        },
                    },
                    fontFamily: {
                        sans: [
                            '"Instrument Sans"',
                            "ui-sans-serif",
                            "system-ui",
                            "sans-serif",
                        ],
                    },
                },
            },
        };
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
            background: linear-gradient(to top, #020f4a 0%, #13fefe 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .service-tag {
            background: linear-gradient(135deg, #ffffff 0%, #f0f0f0 100%);
            transition: all 0.3s ease;
        }

        .service-tag:hover {
            transform: translateY(-2px) scale(1.05);
            box-shadow: 0 10px 25px rgba(19, 254, 254, 0.3);
        }

        .video-glow {
            box-shadow:
                0 0 12px rgba(19, 254, 254, 0.25),
                0 0 20px rgba(19, 254, 254, 0.15),
                inset 0 0 6px rgba(19, 254, 254, 0.1);
            animation: pulse-glow 4s ease-in-out infinite;
        }

        @keyframes pulse-glow {

            0%,
            100% {
                box-shadow:
                    0 0 12px rgba(19, 254, 254, 0.25),
                    0 0 20px rgba(19, 254, 254, 0.15),
                    inset 0 0 6px rgba(19, 254, 254, 0.1);
            }

            50% {
                box-shadow:
                    0 0 16px rgba(19, 254, 254, 0.3),
                    0 0 24px rgba(19, 254, 254, 0.18),
                    inset 0 0 8px rgba(19, 254, 254, 0.12);
            }
        }


        .video-container {
            position: relative;
            background: linear-gradient(135deg, rgba(19, 254, 254, 0.05) 0%, rgba(19, 254, 254, 0.02) 100%);
            backdrop-filter: blur(10px);
            border: 2px solid rgba(19, 254, 254, 0.3);
        }

        .play-button {
            background: linear-gradient(135deg, rgba(19, 254, 254, 0.9) 0%, rgba(0, 212, 212, 0.9) 100%);
            box-shadow: 0 0 40px rgba(19, 254, 254, 0.6),
                0 0 80px rgba(19, 254, 254, 0.3),
                inset 0 2px 20px rgba(255, 255, 255, 0.3);
            animation: bounce-glow 2s ease-in-out infinite;
        }

        @keyframes bounce-glow {

            0%,
            100% {
                transform: translateY(0) scale(1);
                box-shadow: 0 0 40px rgba(19, 254, 254, 0.6),
                    0 0 80px rgba(19, 254, 254, 0.3),
                    inset 0 2px 20px rgba(255, 255, 255, 0.3);
            }

            50% {
                transform: translateY(-10px) scale(1.05);
                box-shadow: 0 0 60px rgba(19, 254, 254, 0.8),
                    0 0 100px rgba(19, 254, 254, 0.5),
                    inset 0 2px 30px rgba(255, 255, 255, 0.4);
            }
        }

        .play-icon {
            filter: drop-shadow(0 2px 4px rgba(0, 0, 0, 0.3));
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
                    <img src="https://boffinbrains.in/erp/assets/images/logo.svg" alt="Logo" class="max-h-[60px] w-auto"
                        width="133" height="78" loading="lazy" />
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
            <img src="https://boffinbrains.in/erp/assets/images/background.webp" alt="Background"
                class="w-full h-full object-cover" />
            <div class="absolute inset-0 bg-[#030F47]/70"></div>
        </div>

        <div
            class="relative z-10 container mx-auto px-4 sm:px-6 lg:px-8 flex flex-col justify-center h-full text-center text-white">
            <nav class="flex justify-between items-center py-4">
                <div class="flex flex-1 justify-between items-center text-white font-bold">
                    <a href="./index.php" class="flex items-center gap-3">
                        <img src="https://boffinbrains.in/erp/assets/images/logo.svg" alt=""
                            class="h-[60px] lg:h-[78px] w-auto" width="133" height="78" />
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
                <div class="container mx-auto text-left">
                    <div class="grid grid-cols-1 xl:grid-cols-2 gap-8">
                        <div class="flex flex-col justify-center order-2 xl:order-1">
                            <div class="relative rounded-2xl overflow-hidden video-container video-glow"
                                id="videoContainer">
                                <video preload="none" poster="https://boffinbrains.in/erp/assets/videos/video-thumbnail.jpg"
                                    class="w-full h-auto lazy-video" id="heroVideo">
                                    Your browser does not support the video tag.
                                </video>

                                <button
                                    class="absolute inset-0 flex items-center justify-center z-10 transition-opacity duration-300"
                                    id="customPlayBtn">
                                    <span
                                        class="w-14 h-14 lg:w-20 lg:h-20 play-button rounded-full flex items-center justify-center shadow-2xl transition-all duration-300">
                                        <svg class="w-10 h-10 lg:w-12 lg:h-12 text-white ml-1 play-icon"
                                            fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M8 5v14l11-7z" />
                                        </svg>
                                    </span>
                                </button>
                            </div>
                        </div>

                        <div class="flex flex-col justify-center order-1 xl:order-2">
                            <div>
                                <h1
                                    class="font-bold text-3xl md:text-4xl lg:text-5xl xl:text-6xl leading-tight uppercase text-white mb-4">
                                    EMPOWERING SECURE ORACLE ERP EXCELLENCE
                                </h1>

                                <p class="text-lg md:text-xl lg:text-2xl leading-relaxed text-white mb-6">
                                    We help companies to secure their <span
                                        class="gradient-text font-bold text-xl md:text-2xl lg:text-3xl">Oracle
                                        ERP</span> to ensure Compliance, Governance and Audits
                                </p>

                                <div class="flex flex-col sm:flex-row gap-4">
                                    <a href="./service.php"
                                        class="bg-white text-black rounded-full py-2.5 px-8 text-base lg:text-lg font-semibold flex-1 text-center transition-all duration-300 hover:bg-gray-100 hover:shadow-2xl transform hover:-translate-y-1 hover:scale-105">
                                        Explore Services
                                    </a>
                                    <a href="./contact.php"
                                        class="bg-[#13FEFE] text-black rounded-full py-2.5 px-8 text-base lg:text-lg font-semibold flex-1 text-center transition-all duration-300 hover:bg-[#0ee8e8] hover:shadow-2xl transform hover:-translate-y-1 hover:scale-105">
                                        Let's Talk
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col justify-center items-center mt-10">
                        <div class="flex flex-wrap gap-3 mb-6">
                            <div
                                class="service-tag flex items-center px-4 py-2 gap-2 rounded-lg text-black text-sm shadow-lg">
                                <img src="https://boffinbrains.in/erp/assets/icons/security.svg" alt="Security"
                                    width="18" height="18" />
                                <p class="font-medium text-xs md:text-base">Security Assessment</p>
                            </div>

                            <div
                                class="service-tag flex items-center px-4 py-2 gap-2 rounded-lg text-black text-sm shadow-lg">
                                <img src="https://boffinbrains.in/erp/assets/icons/risk-assesment.svg" alt="Risk"
                                    width="18" height="18" />
                                <p class="font-medium text-xs md:text-base">Risk Assessment</p>
                            </div>

                            <div
                                class="service-tag flex items-center px-4 py-2 gap-2 rounded-lg text-black text-sm shadow-lg">
                                <img src="https://boffinbrains.in/erp/assets/icons/segregation-of-duties.svg" alt="SoD"
                                    width="18" height="18" />
                                <p class="font-medium text-xs md:text-base">SoD</p>
                            </div>

                            <div
                                class="service-tag flex items-center px-4 py-2 gap-2 rounded-lg text-black text-sm shadow-lg">
                                <img src="https://boffinbrains.in/erp/assets/icons/role-design.svg" alt="Role Design"
                                    width="18" height="18" />
                                <p class="font-medium text-xs md:text-base">Role Design</p>
                            </div>

                            <div
                                class="service-tag flex items-center px-4 py-2 gap-2 rounded-lg text-black text-sm shadow-lg">
                                <img src="https://boffinbrains.in/erp/assets/icons/liscence-management.svg"
                                    alt="License" width="18" height="18" />
                                <p class="font-medium text-xs md:text-base">Licence Management</p>
                            </div>
                        </div>

                        <p class="text-sm md:text-base leading-relaxed text-gray-300">
                            Trusted guidance, practical fixes, and measurable results for modern Security, Risk
                            and IT teams.
                        </p>
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
            class="fixed inset-y-0 right-0 z-[50] w-[85%] max-w-sm shadow-xl lg:hidden flex flex-col" style="
          background: linear-gradient(80.2deg, #3945a2 18.15%, #151a3c 80.9%);
        ">
            <div class="flex items-center justify-between p-4 border-b border-white/20 flex-shrink-0">
                <a href="./index.php">
                    <img src="https://boffinbrains.in/erp/assets/images/logo.svg" alt="" width="133" height="78"
                        class="h-[60px] lg:h-[78px] w-auto" loading="lazy" />
                </a>
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
                        class="block text-white font-medium text-lg hover:text-gray-300 transition-colors duration-300">Our
                        Services</a>
                    <a href="./contact.php" @click="mobileMenuOpen = false"
                        class="block text-white font-medium text-lg hover:text-gray-300 transition-colors duration-300">Contact
                        Us</a>
                </div>
            </div>
        </div>
    </header>

    <section>
        <div class="container mx-auto p-4 mt-5 sm:mt-10">
            <div class="max-w-3xl mx-auto">
                <h2 class="font-bold text-xl sm:text-2xl md:text-4xl text-left sm:text-center uppercase">
                    To Automate ERP Security and Risk Management
                    <!-- HELPING GLOBAL CLIENTS AUTOMATE AUDIT & ERP RISK MANAGEMENT -->
                </h2>
            </div>
        </div>

        <div class="bg-[#E2E2E2] mt-20 md:mt-24 pb-10">
            <div class="container mx-auto p-4 relative z-10" x-data="{ activeTab: 'secure-erp' }">
                <div class="bg-white overflow-hidden max-w-6xl mx-auto -mt-[90px]">
                    <div class="grid grid-cols-2 md:grid-cols-5 gap-4 bg-white">
                        <button @click="activeTab = 'secure-erp'"
                            :class="activeTab === 'secure-erp' ? 'text-gray-900' : 'text-gray-600'"
                            class="py-2 text-sm lg:text-base font-semibold transition-all duration-300 relative bg-white border-b-4 border-transparent"
                            :style="activeTab === 'secure-erp' ? 'border-image: linear-gradient(90deg, #13FEFE 0%, #021451 100%) 1;' : ''">
                            <span class="block">Security Assessment</span>
                        </button>

                        <button @click="activeTab = 'risk-intelligence'"
                            :class="activeTab === 'risk-intelligence' ? 'text-gray-900' : 'text-gray-600'"
                            class="py-2 text-sm lg:text-base font-semibold transition-all duration-300 relative bg-white border-b-4 border-transparent"
                            :style="activeTab === 'risk-intelligence' ? 'border-image: linear-gradient(90deg, #13FEFE 0%, #021451 100%) 1;' : ''">
                            <span class="block">Risk Assessment</span>
                        </button>

                        <button @click="activeTab = 'compliance'"
                            :class="activeTab === 'compliance' ? 'text-gray-900' : 'text-gray-600'"
                            class="py-2 text-sm lg:text-base font-semibold transition-all duration-300 relative bg-white border-b-4 border-transparent"
                            :style="activeTab === 'compliance' ? 'border-image: linear-gradient(90deg, #13FEFE 0%, #021451 100%) 1;' : ''">
                            <span class="block">Segregation of Duties (SoD)</span>
                        </button>

                        <button @click="activeTab = 'innovation'"
                            :class="activeTab === 'innovation' ? 'text-gray-900' : 'text-gray-600'"
                            class="py-2 text-sm lg:text-base font-semibold transition-all duration-300 relative bg-white border-b-4 border-transparent"
                            :style="activeTab === 'innovation' ? 'border-image: linear-gradient(90deg, #13FEFE 0%, #021451 100%) 1;' : ''">
                            <span class="block">Role Design</span>
                        </button>

                        <button @click="activeTab = 'license-management'"
                            :class="activeTab === 'license-management' ? 'text-gray-900' : 'text-gray-600'"
                            class="py-2 text-sm lg:text-base font-semibold transition-all duration-300 relative bg-white border-b-4 border-transparent"
                            :style="activeTab === 'license-management' ? 'border-image: linear-gradient(90deg, #13FEFE 0%, #021451 100%) 1;' : ''">
                            <span class="block">Oracle ERP Cloud License Management</span>
                        </button>
                    </div>

                    <div class="p-4">
                        <div class="order-1 md:order-2 md:mt-6">
                            <div x-show="activeTab === 'secure-erp'"
                                x-transition:enter="transition ease-out duration-300"
                                x-transition:enter-start="opacity-0 transform translate-y-4"
                                x-transition:enter-end="opacity-100 transform translate-y-0">
                                <div class="grid md:grid-cols-4 gap-4 items-center">
                                    <div class="rounded-md overflow-hidden md:col-span-1">
                                        <img src="https://boffinbrains.in/erp/assets/images/security.webp"
                                            alt="Security Assessment" class="w-full h-full object-cover rounded-md" />
                                    </div>
                                    <div class="md:col-span-3 space-y-6">
                                        <p class="text-gray-700 leading-relaxed text-sm sm:text-base">
                                            Evaluate your Oracle ERP Security and can provide POC with in-depth reviews.
                                            Identify
                                            vulnerabilities, enforce stronger controls, and ensure compliance with
                                            industry standards.
                                        </p>

                                        <div class="flex justify-between items-center gap-4">
                                            <a href="./service.php" class="text-gradient text-xl font-semibold">See How
                                                We Secure
                                                ERP</a>
                                            <img src="https://boffinbrains.in/erp/assets/icons/arrow.svg" alt="" />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div x-show="activeTab === 'risk-intelligence'"
                                x-transition:enter="transition ease-out duration-300"
                                x-transition:enter-start="opacity-0 transform translate-y-4"
                                x-transition:enter-end="opacity-100 transform translate-y-0">
                                <div class="grid md:grid-cols-4 gap-4 items-center">
                                    <div class="rounded-md overflow-hidden md:col-span-1">
                                        <img src="https://boffinbrains.in/erp/assets/images/risk-assessment.webp"
                                            alt="Security Assessment" class="w-full h-full object-cover rounded-md" />
                                    </div>
                                    <div class="md:col-span-3 space-y-6">
                                        <p class="text-gray-700 leading-relaxed text-sm sm:text-base">
                                            Detect & Report Unauthorized User Access, Detect who have Config/Setup Access & Detect who have Super User / Elevated Access within the Company.
                                        </p>
                                        <p class="text-gray-700 leading-relaxed text-sm sm:text-base">
                                            Detect & Report Potential Error & Fraud/Suspicious Transactions on Financials, Procurement, Payroll and other Business Areas.
                                        </p>

                                        <div class="flex justify-between items-center gap-4">
                                            <a href="./service.php" class="text-gradient text-xl font-semibold">See How
                                                We Secure
                                                ERP</a>
                                            <img src="https://boffinbrains.in/erp/assets/icons/arrow.svg" alt="" />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div x-show="activeTab === 'compliance'"
                                x-transition:enter="transition ease-out duration-300"
                                x-transition:enter-start="opacity-0 transform translate-y-4"
                                x-transition:enter-end="opacity-100 transform translate-y-0">
                                <div class="grid md:grid-cols-4 gap-4 items-center">
                                    <div class="rounded-md overflow-hidden md:col-span-1">
                                        <img src="https://boffinbrains.in/erp/assets/images/segregation-of-duties.webp"
                                            alt="Security Assessment" class="w-full h-full object-cover rounded-md" />
                                    </div>
                                    <div class="md:col-span-3 space-y-6">
                                        <p class="text-gray-700 leading-relaxed text-sm sm:text-base">
                                            Prevent conflicts of interest and strengthen compliance with automated SoD
                                            controls. Detect role conflicts, enforce access policies, and monitor risks
                                            continuously to safeguard operations and meet audit requirements.
                                        </p>

                                        <div class="flex justify-between items-center gap-4">
                                            <a href="./service.php" class="text-gradient text-xl font-semibold">See How
                                                We Secure
                                                ERP</a>
                                            <img src="https://boffinbrains.in/erp/assets/icons/arrow.svg" alt="" />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div x-show="activeTab === 'innovation'"
                                x-transition:enter="transition ease-out duration-300"
                                x-transition:enter-start="opacity-0 transform translate-y-4"
                                x-transition:enter-end="opacity-100 transform translate-y-0">
                                <div class="grid md:grid-cols-4 gap-4 items-center">
                                    <div class="rounded-md overflow-hidden md:col-span-1">
                                        <img src="https://boffinbrains.in/erp/assets/images/role-design.webp"
                                            alt="Security Assessment" class="w-full h-full object-cover rounded-md" />
                                    </div>
                                    <div class="md:col-span-3 space-y-6">
                                        <p class="text-gray-700 leading-relaxed text-sm sm:text-base">
                                            Build efficient, compliant ERP roles with clear access boundaries. Simplify
                                            user provisioning, minimize SoD conflicts, and align security with business
                                            needs.
                                        </p>

                                        <div class="flex justify-between items-center gap-4">
                                            <a href="./service.php" class="text-gradient text-xl font-semibold">See How
                                                We Secure
                                                ERP</a>
                                            <img src="https://boffinbrains.in/erp/assets/icons/arrow.svg" alt="" />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div x-show="activeTab === 'license-management'"
                                x-transition:enter="transition ease-out duration-300"
                                x-transition:enter-start="opacity-0 transform translate-y-4"
                                x-transition:enter-end="opacity-100 transform translate-y-0">
                                <div class="grid md:grid-cols-4 gap-4 items-center">
                                    <div class="rounded-md overflow-hidden md:col-span-1">
                                        <img src="https://boffinbrains.in/erp/assets/images/oracle-erp-cloud-license-management.webp"
                                            alt="Security Assessment" class="w-full h-full object-cover rounded-md" />
                                    </div>
                                    <div class="md:col-span-3 space-y-6">
                                        <p class="text-gray-700 leading-relaxed text-sm sm:text-base">
                                            Review and Evaluate Oracle Licenses Management & perform Optimization to reduce License Cost.
                                        </p>

                                        <div class="flex justify-between items-center gap-4">
                                            <a href="./service.php" class="text-gradient text-xl font-semibold">See How
                                                We Secure
                                                ERP</a>
                                            <img src="https://boffinbrains.in/erp/assets/icons/arrow.svg" alt="" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container mx-auto p-4 mt-5 sm:mt-10">
            <div class="max-w-3xl mx-auto text-left sm:text-center uppercase">
                <p class="text-[#3945A2] font-semibold">OUr INdustries</p>
                <h2 class="font-bold text-xl sm:text-2xl md:text-4xl">
                    Who We Serve
                </h2>
            </div>

            <div class="mt-5 sm:mt-10">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-6">
                    <div class="bg-[#E2E2E2] p-4 rounded-xl">
                        <div class="flex justify-between items-center">
                            <div>
                                <img src="./assets/icons/it-teams.svg" alt="IT teams">
                            </div>
                            <a href="./service.php" class="font-semibold flex items-center gap-2">
                                <span>View Service</span>
                                <div class="">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="47" height="47" viewBox="0 0 47 47"
                                        fill="none">
                                        <g clip-path="url(#clip0_16_68)">
                                            <path
                                                d="M25.4564 28.7199L28.5597 21.0033M28.5597 21.0033L20.8431 17.8999M28.5597 21.0033L17.7398 25.6165M36.6747 17.5433C39.8595 25.0129 36.386 33.65 28.9164 36.8348C21.4468 40.0196 12.8097 36.5461 9.6249 29.0765C6.44008 21.6069 9.91357 12.9698 17.3832 9.78502C24.8527 6.6002 33.4898 10.0737 36.6747 17.5433Z"
                                                stroke="black" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_16_68">
                                                <rect width="35.2871" height="35.2871" fill="black"
                                                    transform="translate(0 14) rotate(-23.092)" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                            </a>
                        </div>

                        <p class="font-bold text-xl mt-4">IT Teams</p>
                        <p class="text-sm sm:text-base mt-1">Gain centralized control over ERP access and security with
                            automated provisioning, monitoring, and policy enforcement. Simplify IT processes, reduce
                            manual work, and ensure systems run securely across business units</p>
                    </div>

                    <div class="bg-[#E2E2E2] p-4 rounded-xl">
                        <div class="flex justify-between items-center">
                            <div>
                                <img src="./assets/icons/information-security.svg" alt="information Security">
                            </div>
                            <a href="./service.php" class="font-semibold flex items-center gap-2">
                                <span>View Service</span>
                                <div class="">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="47" height="47" viewBox="0 0 47 47"
                                        fill="none">
                                        <g clip-path="url(#clip0_16_68)">
                                            <path
                                                d="M25.4564 28.7199L28.5597 21.0033M28.5597 21.0033L20.8431 17.8999M28.5597 21.0033L17.7398 25.6165M36.6747 17.5433C39.8595 25.0129 36.386 33.65 28.9164 36.8348C21.4468 40.0196 12.8097 36.5461 9.6249 29.0765C6.44008 21.6069 9.91357 12.9698 17.3832 9.78502C24.8527 6.6002 33.4898 10.0737 36.6747 17.5433Z"
                                                stroke="black" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_16_68">
                                                <rect width="35.2871" height="35.2871" fill="black"
                                                    transform="translate(0 14) rotate(-23.092)" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                            </a>
                        </div>

                        <p class="font-bold text-xl mt-4">Information Security</p>
                        <p class="text-sm sm:text-base mt-1">Strengthen your ERP Security posture with continuous
                            monitoring, SoD conflict detection, and identity governance. Maintain consistent controls,
                            protect sensitive data, and meet compliance standards with ease.</p>
                    </div>

                    <div class="bg-[#E2E2E2] p-4 rounded-xl">
                        <div class="flex justify-between items-center">
                            <div>
                                <img src="./assets/icons/compliance-risk.svg" alt="Compliance & Risk">
                            </div>
                            <a href="./service.php" class="font-semibold flex items-center gap-2">
                                <span>View Service</span>
                                <div class="">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="47" height="47" viewBox="0 0 47 47"
                                        fill="none">
                                        <g clip-path="url(#clip0_16_68)">
                                            <path
                                                d="M25.4564 28.7199L28.5597 21.0033M28.5597 21.0033L20.8431 17.8999M28.5597 21.0033L17.7398 25.6165M36.6747 17.5433C39.8595 25.0129 36.386 33.65 28.9164 36.8348C21.4468 40.0196 12.8097 36.5461 9.6249 29.0765C6.44008 21.6069 9.91357 12.9698 17.3832 9.78502C24.8527 6.6002 33.4898 10.0737 36.6747 17.5433Z"
                                                stroke="black" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_16_68">
                                                <rect width="35.2871" height="35.2871" fill="black"
                                                    transform="translate(0 14) rotate(-23.092)" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                            </a>
                        </div>

                        <p class="font-bold text-xl mt-4">Compliance & Risk</p>
                        <p class="text-sm sm:text-base mt-1">Simplify compliance with automated audit evidence, access
                            certifications, and risk reporting. Reduce the time, cost, and complexity of staying
                            audit-ready while aligning with regulatory requirements.</p>
                    </div>

                    <div class="bg-[#E2E2E2] p-4 rounded-xl">
                        <div class="flex justify-between items-center">
                            <div>
                                <img src="./assets/icons/finance-&-audit.svg" alt="Finance & Audit">
                            </div>
                            <a href="./service.php" class="font-semibold flex items-center gap-2">
                                <span>View Service</span>
                                <div class="">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="47" height="47" viewBox="0 0 47 47"
                                        fill="none">
                                        <g clip-path="url(#clip0_16_68)">
                                            <path
                                                d="M25.4564 28.7199L28.5597 21.0033M28.5597 21.0033L20.8431 17.8999M28.5597 21.0033L17.7398 25.6165M36.6747 17.5433C39.8595 25.0129 36.386 33.65 28.9164 36.8348C21.4468 40.0196 12.8097 36.5461 9.6249 29.0765C6.44008 21.6069 9.91357 12.9698 17.3832 9.78502C24.8527 6.6002 33.4898 10.0737 36.6747 17.5433Z"
                                                stroke="black" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_16_68">
                                                <rect width="35.2871" height="35.2871" fill="black"
                                                    transform="translate(0 14) rotate(-23.092)" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                            </a>
                        </div>

                        <p class="font-bold text-xl mt-4">Finance & Audit</p>
                        <p class="text-sm sm:text-base mt-1">Ensure accurate financial reporting with tighter controls
                            and reduced SoD risks. Streamline audit preparation, improve efficiency, and cut costs while
                            safeguarding ERP-driven business processes.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container mx-auto p-4 mt-5 sm:mt-10">
            <div class="max-w-3xl mx-auto text-left sm:text-center uppercase">
                <p class="text-[#3945A2] font-semibold">About Us</p>
                <h2 class="font-bold text-xl sm:text-2xl md:text-4xl">
                    Built on Passion, Driven by Integrity
                </h2>
            </div>

            <div class="mt-5 sm:mt-10 space-y-6">
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-4 mt-5">
                    <div class="rounded-xl p-[2px] bg-gradient-to-b from-[#6E9FFF] to-[#1EF3FE] flex">
                        <div class="bg-white rounded-xl p-4 space-y-2 flex-1 flex flex-col">
                            <img src="https://boffinbrains.in/erp/assets/images/initial-consultation.webp"
                                alt="Initial Consultation icon" loading="lazy" width="140" height="152"
                                class="max-w-14 h-auto object-contain" />
                            <h3 class="text-xl md:text-2xl font-semibold text-[#3945A2]">
                                Initial Consultation
                            </h3>
                            <p class="text-sm sm:text-base mt-auto">
                                We meet key stakeholders to confirm objectives and constraints. The output is a tailored
                                roadmap with milestones.
                            </p>
                        </div>
                    </div>

                    <div class="rounded-xl p-[2px] bg-gradient-to-b from-[#6E9FFF] to-[#1EF3FE] flex">
                        <div class="bg-white rounded-xl p-4 space-y-2 flex-1 flex flex-col">
                            <img src="https://boffinbrains.in/erp/assets/images/review-of-risk-&-controls.webp"
                                alt="Review of Risk & Controls icon" loading="lazy" width="172" height="172"
                                class="max-w-14 h-auto object-contain" />
                            <h3 class="text-xl md:text-2xl font-semibold text-[#3945A2]">
                                Review of Risk & Controls
                            </h3>
                            <p class="text-sm sm:text-base mt-auto">
                                We assess roles, access, and process controls across SAP and Oracle. Evidence is
                                gathered, gaps are prioritized, and a remediation path is defined with owners and due
                                dates.
                            </p>
                        </div>
                    </div>

                    <div class="rounded-xl p-[2px] bg-gradient-to-b from-[#6E9FFF] to-[#1EF3FE] flex">
                        <div class="bg-white rounded-xl p-4 space-y-2 flex-1 flex flex-col">
                            <img src="https://boffinbrains.in/erp/assets/images/reporting-results.webp"
                                alt="Reporting Results icon" loading="lazy" width="140" height="152"
                                class="max-w-14 h-auto object-contain" />
                            <h3 class="text-xl md:text-2xl font-semibold text-[#3945A2]">
                                Reporting Results
                            </h3>
                            <p class="text-sm sm:text-base mt-auto">
                                We deliver dashboards and concise reports that track KPIs, residual risk, and audit
                                readiness. Actions are logged, verified, and transitioned to your teams for ongoing
                                operation.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container mx-auto p-4 mt-5 sm:mt-10">
            <div class="max-w-3xl mx-auto text-center">
                <h2 class="font-bold text-xl sm:text-2xl md:text-4xl">
                    Trusted by Industry Leaders Worldwide
                </h2>
            </div>

            <div class="mt-5 sm:mt-10">
                <div class="swiper logosSwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide flex items-center justify-center p-4">
                            <img src="https://boffinbrains.in/erp/assets/testimonials/indiana-university-health.webp"
                                alt="Indiana University Health" loading="lazy"
                                class="max-w-[140px] sm:max-w-[160px] max-h-20 object-contain" />
                        </div>
                        <div class="swiper-slide flex items-center justify-center p-4">
                            <img src="https://boffinbrains.in/erp//assets/testimonials/kaiser-permanente-logo.webp"
                                alt="Kaiser Permanente" loading="lazy"
                                class="max-w-[140px] sm:max-w-[160px] max-h-20 object-contain" />
                        </div>
                        <div class="swiper-slide flex items-center justify-center p-4">
                            <img src="https://boffinbrains.in/erp/assets/testimonials/exelon.webp"
                                alt="Exelon" loading="lazy"
                                class="max-w-[140px] sm:max-w-[160px] max-h-20 object-contain grayscale hover:grayscale-0 transition-all duration-300" />
                        </div>
                        <div class="swiper-slide flex items-center justify-center p-4">
                            <img src="https://boffinbrains.in/erp/assets/testimonials/twilio.webp"
                                alt="Twilio" loading="lazy"
                                class="max-w-[140px] sm:max-w-[160px] max-h-20 object-contain grayscale hover:grayscale-0 transition-all duration-300" />
                        </div>
                        <div class="swiper-slide flex items-center justify-center p-4">
                            <img src="https://boffinbrains.in/erp//assets/testimonials/dept-of-energy-logo.webp"
                                alt="Dept of Energy" loading="lazy"
                                class="max-w-[140px] sm:max-w-[160px] max-h-20 object-contain grayscale hover:grayscale-0 transition-all duration-300" />
                        </div>
                        <div class="swiper-slide flex items-center justify-center p-4">
                            <img src="https://boffinbrains.in/erp//assets/testimonials/blue-cross-blue-shield-vector-logo.webp"
                                alt="Blue Cross Blue Shield" loading="lazy"
                                class="max-w-[140px] sm:max-w-[160px] max-h-20 object-contain grayscale hover:grayscale-0 transition-all duration-300" />
                        </div>
                        <div class="swiper-slide flex items-center justify-center p-4">
                            <img src="https://boffinbrains.in/erp/assets/testimonials/acco-logo.webp"
                                alt="ACCO Engineered Systems" loading="lazy"
                                class="max-w-[140px] sm:max-w-[160px] max-h-20 object-contain grayscale hover:grayscale-0 transition-all duration-300" />
                        </div>
                        <div class="swiper-slide flex items-center justify-center p-4">
                            <img src="https://boffinbrains.in/erp/assets/testimonials/gkn-wheels-logo.webp"
                                alt="GKN Wheels" loading="lazy"
                                class="max-w-[140px] sm:max-w-[160px] max-h-20 object-contain grayscale hover:grayscale-0 transition-all duration-300" />
                        </div>
                        <div class="swiper-slide flex items-center justify-center p-4">
                            <img src="https://boffinbrains.in/erp/assets/testimonials/jpmc-logo.webp"
                                alt="J.P. Morgan Chase" loading="lazy"
                                class="max-w-[140px] sm:max-w-[160px] max-h-20 object-contain grayscale hover:grayscale-0 transition-all duration-300" />
                        </div>
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

            <div class="mt-4 sm:mt-6">
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide max-w-[1000px] !w-full rounded-xl overflow-hidden bg-[#F0F0F0]">
                            <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
                                <div class="pt-10 flex justify-center items-end">
                                    <img src="https://boffinbrains.in/erp/assets/images/taraj-khan.webp"
                                        alt="Taraj Khan" class="max-h-[450px] w-auto object-contain" />
                                </div>
                                <div class="p-4 flex flex-col justify-center space-y-2">
                                    <h3 class="text-xl md:text-2xl font-bold">Taraj Khan</h3>
                                    <p class="text-base md:text-xl font-semibold">
                                        Co-Founder and Director – Oracle Security & Risk Management Expert
                                    </p>
                                    <ul class="list-disc ml-6 text-sm sm:text-base">
                                      <p>Over 25 years of Oracle ERP experience, managing end-to-end implementations, support, leadership, and project management across both US and global markets.</p>
                                    </ul>
                                    <p class="text-sm sm:text-base font-semibold">
                                        Core expertise:
                                    </p>
                                    <ul class="list-disc ml-6 text-sm sm:text-base">
                                        <li>
                                            Oracle Cloud Security and Risk Management / RMC Implementations & Assessments with Remediation Roadmaps.
                                        </li>
                                        <li>
                                            Specialize in Oracle Cloud Governance, Risk & Compliance.
                                        </li>
                                        <li>Assess company/client SOX, SOD, ITAC, and ITGC frameworks and automate them into RMC controls.</li>
                                        <li>Oracle License Management & Optimization to reduce Cost.</li>
                                        <li>
                                            ERP Managed Services, Advisory, Consulting & Staffing
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide max-w-[1000px] !w-full rounded-xl overflow-hidden bg-[#F0F0F0]">
                            <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
                                <div class="pt-10 flex justify-center">
                                    <img src="https://boffinbrains.in/erp/assets/images/asim-siddiqui-image.webp"
                                        alt="Asim Siddiqui" class="max-h-[450px] w-auto object-contain" />
                                </div>
                                <div class="p-4 flex flex-col justify-center space-y-2">
                                    <h3 class="text-xl md:text-2xl font-bold">Asim Siddiqui</h3>
                                    <p class="text-base md:text-xl font-semibold">
                                        Co Founder and Director - Oracle Cloud & Cybersecurity Specialist
                                    </p>
                                    <ul class="list-disc ml-6 text-sm sm:text-base">
                                    <p>Cybersecurity specialist and certified Oracle Cloud expert (HCM, SCM, ERP, FDI, OCI) with 15+ years of Big-5 consulting experience and 5+ years as founder/CEO in Oracle consulting and managed services.</p>
                                    </ul>
                                    <p class="text-sm sm:text-base font-semibold">
                                        Core expertise:
                                    </p>
                                    <ul class="list-disc ml-6 text-sm sm:text-base">
                                        <li>Managed services and staffing for Oracle programs</li>
                                        <li>
                                            Oracle Cloud Security consulting across applications and
                                            infrastructure

                                        </li>
                                        <li>Oracle Cloud HCM consulting at scale</li>
                                        <li>
                                            Operating models that keep controls strong post-go-live
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination static"></div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container mx-auto p-4 mt-5 sm:mt-10">
            <div class="max-w-3xl mx-auto text-left sm:text-center uppercase">
                <h2 class="font-bold text-xl sm:text-2xl md:text-4xl">
                    Why <span class="text-[#3945A2]">partner</span> with us?
                </h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-5">
                <div
                    class="relative rounded-xl p-[2px] bg-gradient-to-b from-[#6E9FFF] to-[#1EF3FE] transition-transform duration-300 hover:-translate-y-2 hover:shadow-lg">
                    <div class="bg-white rounded-xl p-4 flex flex-col h-full">
                        <img src="https://boffinbrains.in/erp/assets/images/long-term-goals.webp"
                            alt="Long-Term Goals icon" loading="lazy" width="140" height="152"
                            class="max-w-14 h-auto object-contain" />
                        <h3 class="text-xl md:text-2xl font-semibold text-[#3945A2] mt-2">
                            Long-Term Goals
                        </h3>
                        <p class="text-sm sm:text-base mt-2 flex-grow">
                            We align security and compliance with business strategy,
                            building a practical roadmap that supports growth without adding
                            operational drag.
                        </p>
                    </div>
                </div>

                <div
                    class="relative rounded-xl p-[2px] bg-gradient-to-b from-[#6E9FFF] to-[#1EF3FE] transition-transform duration-300 hover:-translate-y-2 hover:shadow-lg">
                    <div class="bg-white rounded-xl p-4 flex flex-col h-full">
                        <img src="https://boffinbrains.in/erp/assets/images/financial-analysis.webp"
                            alt="Financial Analysis icon" loading="lazy" width="172" height="172"
                            class="max-w-14 h-auto object-contain" />
                        <h3 class="text-xl md:text-2xl font-semibold text-[#3945A2] mt-2">
                            Financial Analysis
                        </h3>
                        <p class="text-sm sm:text-base mt-2 flex-grow">
                            We quantify risk in dollars and time, prioritizing initiatives
                            by ROI so investments are defensible with Finance and the Board.
                        </p>
                    </div>
                </div>

                <div
                    class="relative rounded-xl p-[2px] bg-gradient-to-b from-[#6E9FFF] to-[#1EF3FE] transition-transform duration-300 hover:-translate-y-2 hover:shadow-lg">
                    <div class="bg-white rounded-xl p-4 flex flex-col h-full">
                        <img src="https://boffinbrains.in/erp/assets/images/process-efficiency.webp"
                            alt="Process Efficiency icon" loading="lazy" width="140" height="152"
                            class="max-w-14 h-auto object-contain" />
                        <h3 class="text-xl md:text-2xl font-semibold text-[#3945A2] mt-2">
                            Process Efficiency
                        </h3>
                        <p class="text-sm sm:text-base mt-2 flex-grow">
                            We remove bottlenecks in access, approvals, and evidence
                            collection, shortening cycle times while improving control
                            quality.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
                                <img src="https://boffinbrains.in/erp//assets/testimonials/dept-of-energy-logo.webp"
                                    alt="Dept of Energy" class="h-8 object-contain">
                            </div>
                            <blockquote>
                                <p class="font-medium text-gray-900 text-center">
                                    "ERP Security Experts supported our government systems with stringent compliance, security audits, and robust access control."
                                </p>
                            </blockquote>
                        </figure>
                    </div>

                    <!-- BCBS -->
                    <div class="swiper-slide bg-gray-50 border border-gray-200 rounded-xl p-6 shadow-sm h-[280px] sm:h-[220px] max-w-[450px] !w-full">
                        <figure class="flex flex-col h-full justify-between">
                            <div class="flex justify-center mb-3">
                                <img src="https://boffinbrains.in/erp//assets/testimonials/blue-cross-blue-shield-vector-logo.webp"
                                    alt="BCBS" class="h-8 object-contain">
                            </div>
                            <blockquote>
                                <p class="font-medium text-gray-900 text-center">
                                    "Their solutions helped us secure sensitive patient data, align with healthcare compliance, and streamline our ERP workflows."
                                </p>
                            </blockquote>
                        </figure>
                    </div>

                    <!-- Kaiser Permanente -->
                    <div class="swiper-slide bg-gray-50 border border-gray-200 rounded-xl p-6 shadow-sm h-[280px] sm:h-[220px] max-w-[450px] !w-full">
                        <figure class="flex flex-col h-full justify-between">
                            <div class="flex justify-center mb-3">
                                <img src="https://boffinbrains.in/erp//assets/testimonials/kaiser-permanente-logo.webp"
                                    alt="Kaiser Permanente" class="h-8 object-contain">
                            </div>
                            <blockquote>
                                <p class="font-medium text-gray-900 text-center">
                                    "We improved ERP security, role design, and compliance posture with their team’s expertise."
                                </p>
                            </blockquote>
                        </figure>
                    </div>

                    <!-- ACCO Engineered Systems -->
                    <div class="swiper-slide bg-gray-50 border border-gray-200 rounded-xl p-6 shadow-sm h-[280px] sm:h-[220px] max-w-[450px] !w-full">
                        <figure class="flex flex-col h-full justify-between">
                            <div class="flex justify-center mb-3">
                                <img src="https://boffinbrains.in/erp/assets/testimonials/acco-logo.webp"
                                    alt="ACCO Engineered Systems" class="h-8 object-contain">
                            </div>
                            <blockquote>
                                <p class="font-medium text-gray-900 text-center">
                                    "Their ERP integration significantly streamlined our project workflows and improved system-wide security compliance."
                                </p>
                            </blockquote>
                        </figure>
                    </div>

                    <!-- GKN Wheels -->
                    <div class="swiper-slide bg-gray-50 border border-gray-200 rounded-xl p-6 shadow-sm h-[280px] sm:h-[220px] max-w-[450px] !w-full">
                        <figure class="flex flex-col h-full justify-between">
                            <div class="flex justify-center mb-3">
                                <img src="https://boffinbrains.in/erp/assets/testimonials/gkn-wheels-logo.webp"
                                    alt="GKN Wheels" class="h-8 object-contain">
                            </div>
                            <blockquote>
                                <p class="font-medium text-gray-900 text-center">
                                    "Their robust ERP audit and optimization helped align our global operations with compliance standards efficiently."
                                </p>
                            </blockquote>
                        </figure>
                    </div>

                    <!-- KEEP: Indiana University Health -->
                    <div class="swiper-slide bg-gray-50 border border-gray-200 rounded-xl p-6 shadow-sm h-[280px] sm:h-[220px] max-w-[450px] !w-full">
                        <figure class="flex flex-col h-full justify-between">
                            <div class="flex justify-center mb-3">
                                <img src="https://boffinbrains.in/erp/assets/testimonials/indiana-university-health.webp"
                                    alt="Indiana University Health" class="h-12 object-contain">
                            </div>
                            <blockquote>
                                <p class="font-medium text-gray-900 text-center">
                                    "Their automated risk controls and continuous monitoring gave us confidence in meeting compliance requirements. ERP Security Experts have been a trusted partner in our security journey."
                                </p>
                            </blockquote>
                        </figure>
                    </div>

                    <!-- KEEP: Twilio -->
                    <div class="swiper-slide bg-gray-50 border border-gray-200 rounded-xl p-6 shadow-sm h-[280px] sm:h-[220px] max-w-[450px] !w-full">
                        <figure class="flex flex-col h-full justify-between">
                            <div class="flex justify-center mb-3">
                                <img src="https://boffinbrains.in/erp/assets/testimonials/twilio.webp"
                                    alt="Twilio" class="h-10 object-contain">
                            </div>
                            <blockquote>
                                <p class="font-medium text-gray-900 text-center">
                                    "The team optimized our Oracle ERP license usage and eliminated SoD conflicts. Their solutions gave us both cost savings and a stronger security posture."
                                </p>
                            </blockquote>
                        </figure>
                    </div>

                    <!-- KEEP: Exelon -->
                    <div class="swiper-slide bg-gray-50 border border-gray-200 rounded-xl p-6 shadow-sm h-[280px] sm:h-[220px] max-w-[450px] !w-full">
                        <figure class="flex flex-col h-full justify-between">
                            <div class="flex justify-center mb-3">
                                <img src="https://boffinbrains.in/erp/assets/testimonials/exelon.webp"
                                    alt="Exelon" class="h-10 object-contain">
                            </div>
                            <blockquote>
                                <p class="font-medium text-gray-900 text-center">
                                    "With license optimization and automated security checks, we improved ERP efficiency while cutting unnecessary costs. ERP Security Experts ensured our systems remain secure and compliant."
                                </p>
                            </blockquote>
                        </figure>
                    </div>

                    <!-- KEEP: JPMorgan Chase -->
                    <div class="swiper-slide bg-gray-50 border border-gray-200 rounded-xl p-6 shadow-sm h-[280px] sm:h-[220px] max-w-[450px] !w-full">
                        <figure class="flex flex-col h-full justify-between">
                            <div class="flex justify-center mb-3">
                                <img src="https://boffinbrains.in/erp/assets/testimonials/jpmc-logo.webp"
                                    alt="J.P. Morgan Chase" class="h-6 object-contain">
                            </div>
                            <blockquote>
                                <p class="font-medium text-gray-900 text-center">
                                    "ERP Security Experts helped us enforce tighter SoD policies and streamline role design across our global ERP landscape. Their expertise in risk management has been invaluable."
                                </p>
                            </blockquote>
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

    <section class="p-4 mb-10">
        <div class="max-w-7xl mx-auto mt-5 sm:mt-10 border-2 border-slate-300 rounded-xl">
            <div class="grid lg:grid-cols-2">
                <div class="flex flex-col justify-center p-4 lg:p-10">
                    <div class="uppercase">
                        <h2 class="font-bold text-xl sm:text-2xl md:text-4xl text-[#3945A2]">
                            Get In touch
                        </h2>
                    </div>
                    <div class="mt-3">
                        <p class="text-lg md:text-xl uppercase">
                            gET sTARTED WITH YOUR fAVOURITE
                        </p>
                    </div>
                    <?php
                    if (isset($_GET['status']) && $_GET['status'] === 'success') {
                        echo "<div style='color: green;'>Message sent successfully!</div>";
                    }
                    ?>

                    <form action="send-mail.php" method="POST" id="contactForm" class="mt-6 space-y-4">
                        <input type="hidden" name="redirect_url" value="<?php echo $_SERVER['REQUEST_URI']; ?>">
                        <input type="hidden" name="source" value="Home page">
                        <div class="grid sm:grid-cols-2 gap-4">
                            <input type="text" placeholder="Name" name="name"
                                class="border-2 border-[#030F47] rounded-md bg-transparent px-4 py-2 focus:outline-none focus:ring-0 w-full" />
                            <input type="email" placeholder="Email" name="email"
                                class="border-2 border-[#030F47] rounded-md bg-transparent px-4 py-2 focus:outline-none focus:ring-0 w-full" />
                            <input type="text" placeholder="Company Name" name="company"
                                class="border-2 border-[#030F47] rounded-md bg-transparent px-4 py-2 focus:outline-none focus:ring-0 w-full" />
                            <input type="phone" placeholder="Contact Number" name="phone"
                                class=" border-2 border-[#030F47] rounded-md bg-transparent px-4 py-2 focus:outline-none focus:ring-0 w-full" />
                        </div>
                        <textarea name="message" placeholder="Message" rows="6" name="message"
                            class="w-full border-2 border-[#030F47] rounded-md bg-transparent px-4 py-2 focus:outline-none focus:ring-0"></textarea>

                        <button class="bg-[#FF5500] text-white px-10 py-1 text-xl rounded-full" type="submit">
                            SUBMIT
                        </button>
                    </form>
                </div>

                <div class="hidden lg:flex flex-col justify-end">
                    <img src="https://boffinbrains.in/erp/assets/images/get-in-touch.webp" alt="Get in touch"
                        loading="lazy" class="w-auto max-h-[500px] object-contain" />
                </div>
            </div>
        </div>
    </section>


    <?php include 'footer.php'; ?>

    <script defer>
        const swiper = new Swiper(".mySwiper", {
            loop: false,
            spaceBetween: 10,
            slidesPerView: "auto",
            centeredSlides: false,
            autoplay: {
                delay: 5000,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>
    <script defer>
        document.addEventListener("DOMContentLoaded", function() {
            const video = document.getElementById('heroVideo');
            const playBtn = document.getElementById('customPlayBtn');
            const videoContainer = document.getElementById('videoContainer');
            let isVideoLoaded = false;

            if (!video || !playBtn || !videoContainer) {
                console.error('Required elements not found');
                return;
            }

            playBtn.addEventListener("click", function() {
                if (!isVideoLoaded) {
                    video.src = "https://boffinbrains.in/erp/assets/videos/erp.mp4";
                    video.load();

                    video.addEventListener("loadeddata", () => {
                        video.play();
                        video.setAttribute("controls", "true");
                        isVideoLoaded = true;
                    }, {
                        once: true
                    });
                } else {
                    video.play();
                    video.setAttribute("controls", "true");
                }

                playBtn.style.opacity = '0';
                playBtn.style.pointerEvents = 'none';
            });

            const observerOptions = {
                root: null,
                rootMargin: '0px',
                threshold: 0.5
            };

            const videoObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (!entry.isIntersecting && isVideoLoaded) {
                        if (!video.paused) {
                            video.pause();
                            playBtn.style.opacity = '1';
                            playBtn.style.pointerEvents = 'auto';
                        }
                    }
                });
            }, observerOptions);

            try {
                videoObserver.observe(videoContainer);
            } catch (error) {
                console.error('Error observing video container:', error);
            }

            video.addEventListener('pause', function() {
                if (video.currentTime < video.duration && isVideoLoaded) {
                    playBtn.style.opacity = '1';
                    playBtn.style.pointerEvents = 'auto';
                }
            });

            video.addEventListener('ended', function() {
                playBtn.style.opacity = '1';
                playBtn.style.pointerEvents = 'auto';
            });

            video.addEventListener('play', function() {
                playBtn.style.opacity = '0';
                playBtn.style.pointerEvents = 'none';
            });
        });
    </script>

    <script>
        const urlParams = new URLSearchParams(window.location.search);
        const status = urlParams.get('status');
        const messageContainer = document.getElementById('message-container');

        if (status) {
            let message = '';
            let bgColor = '';

            if (status === 'error') {
                message = 'Please fill all required fields!';
                bgColor = 'bg-red-100 border border-red-400 text-red-700';
            } else if (status === 'invalid') {
                message = 'Please enter a valid email address!';
                bgColor = 'bg-red-100 border border-red-400 text-red-700';
            } else if (status === 'failed') {
                message = 'Failed to send message. Please try again!';
                bgColor = 'bg-red-100 border border-red-400 text-red-700';
            }

            if (message) {
                messageContainer.innerHTML = `
                    <div class="${bgColor} px-4 py-3 rounded-lg mb-4 text-center font-medium">
                        ${message}
                    </div>
                `;

                setTimeout(() => {
                    messageContainer.innerHTML = '';
                    window.history.replaceState({}, document.title, window.location.pathname);
                }, 5000);
            }
        }

        document.getElementById('contactForm').addEventListener('submit', function(e) {
            const submitBtn = this.querySelector('button[type="submit"]');
            submitBtn.disabled = true;
            submitBtn.innerHTML = 'Sending... ⏳';
        });
    </script>

    <script defer>
        document.addEventListener('DOMContentLoaded', function() {
            new Swiper('.logosSwiper', {
                loop: true, // Enable continuous loop
                slidesPerView: 2, // Show 2 slides on smaller screens
                spaceBetween: 20,
                autoplay: {
                    delay: 2500, // Faster autoplay for logos
                    disableOnInteraction: false,
                },
                pagination: {
                    el: '.logos-pagination',
                    clickable: true,
                },
                breakpoints: {
                    640: {
                        slidesPerView: 3, // Show 3 slides on sm screens
                        spaceBetween: 30,
                    },
                    1024: {
                        slidesPerView: 4, // Show 4 slides on lg screens
                        spaceBetween: 40,
                    },
                },
            });
        });
    </script>
</body>

</html>