<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Empowering Secure Oracle ERP Excellence | ERP Security & Risk Management Experts</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Instrument+Sans:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: { primary: "#FF5500" },
                    container: { center: true, screens: { DEFAULT: "100%", xl: "1500px" } },
                    fontFamily: { sans: ['"Instrument Sans"', "ui-sans-serif", "system-ui", "sans-serif"] },
                },
            },
        };
    </script>
    <script src="//unpkg.com/alpinejs" defer></script>
    <style>
        @keyframes scroll { 0% { transform: translateX(0); } 100% { transform: translateX(-50%); } }
        .marquee-content { animation: scroll 20s linear infinite; }
        .text-gradient {
            background: linear-gradient(to top, #020f4a 0%, #13fefe 100%);
            -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;
        }
        .service-tag { background: linear-gradient(135deg, #ffffff 0%, #f0f0f0 100%); transition: all 0.3s ease; }
        .service-tag:hover { transform: translateY(-2px) scale(1.05); box-shadow: 0 10px 25px rgba(19,254,254,0.3); }
        .video-glow {
            box-shadow: 0 0 12px rgba(19,254,254,0.25), 0 0 20px rgba(19,254,254,0.15), inset 0 0 6px rgba(19,254,254,0.1);
            animation: pulse-glow 4s ease-in-out infinite;
        }
        @keyframes pulse-glow {
            0%,100% { box-shadow: 0 0 12px rgba(19,254,254,0.25), 0 0 20px rgba(19,254,254,0.15), inset 0 0 6px rgba(19,254,254,0.1); }
            50% { box-shadow: 0 0 16px rgba(19,254,254,0.3), 0 0 24px rgba(19,254,254,0.18), inset 0 0 8px rgba(19,254,254,0.12); }
        }
        .video-container {
            position: relative;
            background: linear-gradient(135deg, rgba(19,254,254,0.05) 0%, rgba(19,254,254,0.02) 100%);
            backdrop-filter: blur(10px);
            border: 2px solid rgba(19,254,254,0.3);
        }
        .play-button {
            background: linear-gradient(135deg, rgba(19,254,254,0.9) 0%, rgba(0,212,212,0.9) 100%);
            box-shadow: 0 0 40px rgba(19,254,254,0.6), 0 0 80px rgba(19,254,254,0.3), inset 0 2px 20px rgba(255,255,255,0.3);
            animation: bounce-glow 2s ease-in-out infinite;
        }
        @keyframes bounce-glow {
            0%,100% { transform: translateY(0) scale(1); box-shadow: 0 0 40px rgba(19,254,254,0.6), 0 0 80px rgba(19,254,254,0.3), inset 0 2px 20px rgba(255,255,255,0.3); }
            50% { transform: translateY(-10px) scale(1.05); box-shadow: 0 0 60px rgba(19,254,254,0.8), 0 0 100px rgba(19,254,254,0.5), inset 0 2px 30px rgba(255,255,255,0.4); }
        }
        .play-icon { filter: drop-shadow(0 2px 4px rgba(0,0,0,0.3)); }
        #captcha-image-home:hover { transform: scale(1.02); transition: transform 0.2s; }
        .swiper-pagination-bullet { background: #000; opacity: 0.4; }
        .swiper-pagination-bullet-active { background: #fff; opacity: 1; border: 2px solid #000; }
    </style>
</head>

<body class="font-sans">
    <header class="relative" x-data="{ 
        mobileMenuOpen: false, scrolled: false,
        init() { window.addEventListener('scroll', () => { this.scrolled = window.scrollY > 100; }); }
    }" x-init="init">
        <div x-show="scrolled" x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 -translate-y-full" x-transition:enter-end="opacity-100 translate-y-0"
            x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 translate-y-0"
            x-transition:leave-end="opacity-0 -translate-y-full"
            class="fixed top-0 left-0 w-full z-50 bg-[#030F47] bg-opacity-95 backdrop-blur-sm border-b border-white/10">
            <div class="container mx-auto p-4 flex items-center justify-between">
                <a href="./index.php" class="flex items-center gap-3">
                    <img src="https://erpsecurityexperts.com/assets/images/logo.svg" alt="Logo" class="max-h-[60px] w-auto" width="133" height="78" loading="lazy" />
                </a>
                <div class="hidden lg:flex items-center space-x-5">
                    <a href="./index.php" class="text-white hover:text-gray-300 transition-colors text-sm font-medium">Home</a>
                    <a href="./about.php" class="text-white hover:text-gray-300 transition-colors text-sm font-medium">About Us</a>
                    <a href="./service.php" class="text-white hover:text-gray-300 transition-colors text-sm font-medium">Our Services</a>
                    <a href="./contact.php" class="text-white hover:text-gray-300 transition-colors text-sm font-medium">Contact Us</a>
                </div>
                <button @click="mobileMenuOpen = true" class="lg:hidden p-2 rounded-md text-white hover:text-gray-300 transition-colors">
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
        <div x-show="scrolled" class="h-18"></div>
        <div class="absolute inset-0">
            <img src="https://erpsecurityexperts.com/assets/images/background.webp" alt="Background" class="w-full h-full object-cover" />
            <div class="absolute inset-0 bg-[#030F47]/70"></div>
        </div>
        <div class="relative z-10 container mx-auto px-4 sm:px-6 lg:px-8 flex flex-col justify-center h-full text-center text-white">
            <nav class="flex justify-between items-center py-4">
                <div class="flex flex-1 justify-between items-center text-white font-bold">
                    <a href="./index.php" class="flex items-center gap-3">
                        <img src="https://erpsecurityexperts.com/assets/images/logo.svg" alt="" class="h-[60px] lg:h-[78px] w-auto" width="133" height="78" />
                    </a>
                    <div class="hidden lg:flex items-center space-x-6">
                        <a href="./index.php" class="hover:text-gray-300 transition-colors">Home</a>
                        <a href="./about.php" class="hover:text-gray-300 transition-colors">About Us</a>
                        <a href="./service.php" class="hover:text-gray-300 transition-colors">Our Services</a>
                        <a href="./contact.php" class="hover:text-gray-300 transition-colors">Contact Us</a>
                    </div>
                    <button @click="mobileMenuOpen = true" class="lg:hidden p-2 rounded-md text-white hover:text-gray-300 transition-colors">
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </nav>
            <div class="mt-auto mb-auto py-5">
                <div class="container mx-auto text-left">
                    <div class="grid grid-cols-1 xl:grid-cols-2 gap-8">
                        <div class="flex flex-col justify-center order-2 xl:order-1">
                            <div class="relative rounded-2xl overflow-hidden video-container video-glow" id="videoContainer">
                                <video preload="none" poster="https://erpsecurityexperts.com/assets/videos/video-thumbnail.jpg" class="w-full h-auto lazy-video" id="heroVideo">
                                    Your browser does not support the video tag.
                                </video>
                                <button class="absolute inset-0 flex items-center justify-center z-10 transition-opacity duration-300" id="customPlayBtn">
                                    <span class="w-14 h-14 lg:w-20 lg:h-20 play-button rounded-full flex items-center justify-center shadow-2xl transition-all duration-300">
                                        <svg class="w-10 h-10 lg:w-12 lg:h-12 text-white ml-1 play-icon" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M8 5v14l11-7z" />
                                        </svg>
                                    </span>
                                </button>
                            </div>
                        </div>
                        <div class="flex flex-col justify-center order-1 xl:order-2">
                            <div>
                                <h1 class="font-bold text-2xl md:text-3xl lg:text-4xl leading-relaxed text-white mb-6">
                                    We help companies secure their <span class="gradient-text font-bold text-2xl md:text-3xl lg:text-4xl">Oracle ERP</span> to ensure Compliance, Governance and Audits
                                </h1>
                                <div class="flex">
                                    <a href="./contact.php" class="bg-[#13FEFE] text-black rounded-full py-2.5 px-8 text-base lg:text-lg font-semibold flex-1 text-center transition-all duration-300 hover:bg-[#0ee8e8] hover:shadow-2xl transform hover:-translate-y-1 hover:scale-105">
                                        Let's Talk
                                    </a>
                                </div>
                            </div>
                        </div>
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
            style="background: linear-gradient(80.2deg, #3945a2 18.15%, #151a3c 80.9%);">
            <div class="flex items-center justify-between p-4 border-b border-white/20 flex-shrink-0">
                <a href="./index.php">
                    <img src="https://erpsecurityexperts.com/assets/images/logo.svg" alt="" width="133" height="78" class="h-[60px] lg:h-[78px] w-auto" loading="lazy" />
                </a>
                <button @click="mobileMenuOpen = false" class="p-2 rounded-md text-white hover:text-gray-300 hover:bg-white/10 transition-colors duration-300">
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="flex-1 overflow-y-auto p-4">
                <div class="space-y-6">
                    <a href="./index.php" @click="mobileMenuOpen = false" class="block text-white font-medium text-lg hover:text-gray-300 transition-colors duration-300">Home</a>
                    <a href="./about.php" @click="mobileMenuOpen = false" class="block text-white font-medium text-lg hover:text-gray-300 transition-colors duration-300">About Us</a>
                    <a href="./service.php" @click="mobileMenuOpen = false" class="block text-white font-medium text-lg hover:text-gray-300 transition-colors duration-300">Our Services</a>
                    <a href="./contact.php" @click="mobileMenuOpen = false" class="block text-white font-medium text-lg hover:text-gray-300 transition-colors duration-300">Contact Us</a>
                </div>
            </div>
        </div>
    </header>

    <section>
        <div class="container mx-auto p-4 mt-5 sm:mt-10">
            <div class="max-w-3xl mx-auto">
                <h2 class="font-bold text-xl sm:text-2xl md:text-4xl text-left sm:text-center uppercase">Our Services</h2>
            </div>
        </div>
        <div class="bg-[#E2E2E2] mt-20 md:mt-24 pb-10">
            <div class="container mx-auto p-4 relative z-10" x-data="{ activeTab: 'secure-erp' }">
                <div class="bg-white overflow-hidden max-w-6xl mx-auto -mt-[90px]">
                    <div class="grid grid-cols-2 md:grid-cols-6 gap-4 bg-white">
                        <button @click="activeTab = 'secure-erp'" :class="activeTab === 'secure-erp' ? 'text-gray-900' : 'text-gray-600'" class="py-2 text-sm lg:text-base font-semibold transition-all duration-300 relative bg-white border-b-4 border-transparent" :style="activeTab === 'secure-erp' ? 'border-image: linear-gradient(90deg, #13FEFE 0%, #021451 100%) 1;' : ''"><span class="block">Security Assessments</span></button>
                        <button @click="activeTab = 'risk-intelligence'" :class="activeTab === 'risk-intelligence' ? 'text-gray-900' : 'text-gray-600'" class="py-2 text-sm lg:text-base font-semibold transition-all duration-300 relative bg-white border-b-4 border-transparent" :style="activeTab === 'risk-intelligence' ? 'border-image: linear-gradient(90deg, #13FEFE 0%, #021451 100%) 1;' : ''"><span class="block">Risk Assessments</span></button>
                        <button @click="activeTab = 'compliance'" :class="activeTab === 'compliance' ? 'text-gray-900' : 'text-gray-600'" class="py-2 text-sm lg:text-base font-semibold transition-all duration-300 relative bg-white border-b-4 border-transparent" :style="activeTab === 'compliance' ? 'border-image: linear-gradient(90deg, #13FEFE 0%, #021451 100%) 1;' : ''"><span class="block">SOD Compliances</span></button>
                        <button @click="activeTab = 'innovation'" :class="activeTab === 'innovation' ? 'text-gray-900' : 'text-gray-600'" class="py-2 text-sm lg:text-base font-semibold transition-all duration-300 relative bg-white border-b-4 border-transparent" :style="activeTab === 'innovation' ? 'border-image: linear-gradient(90deg, #13FEFE 0%, #021451 100%) 1;' : ''"><span class="block">Role Designs</span></button>
                        <button @click="activeTab = 'license-management'" :class="activeTab === 'license-management' ? 'text-gray-900' : 'text-gray-600'" class="py-2 text-sm lg:text-base font-semibold transition-all duration-300 relative bg-white border-b-4 border-transparent" :style="activeTab === 'license-management' ? 'border-image: linear-gradient(90deg, #13FEFE 0%, #021451 100%) 1;' : ''"><span class="block">Oracle ERP Cloud License Managements</span></button>
                        <button @click="activeTab = 'audit-certifications'" :class="activeTab === 'audit-certifications' ? 'text-gray-900' : 'text-gray-600'" class="py-2 text-sm lg:text-base font-semibold transition-all duration-300 relative bg-white border-b-4 border-transparent" :style="activeTab === 'audit-certifications' ? 'border-image: linear-gradient(90deg, #13FEFE 0%, #021451 100%) 1;' : ''"><span class="block">Risk/Audit Certifications</span></button>
                    </div>
                    <div class="p-4">
                        <div class="order-1 md:order-2 md:mt-6">
                            <div x-show="activeTab === 'secure-erp'" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform translate-y-4" x-transition:enter-end="opacity-100 transform translate-y-0">
                                <div class="grid md:grid-cols-4 gap-4 items-center">
                                    <div class="rounded-md overflow-hidden md:col-span-1"><img src="https://erpsecurityexperts.com/assets/images/security.webp" alt="Security Assessment" class="w-full h-full object-cover rounded-md" /></div>
                                    <div class="md:col-span-3 space-y-6">
                                        <p class="text-gray-700 leading-relaxed text-sm sm:text-base">Evaluate your Oracle ERP Security and can provide POC with in-depth reviews. Identify vulnerabilities, enforce stronger controls, and ensure compliance with industry standards.</p>
                                        <div class="flex justify-between items-center gap-4"><a href="./service.php" class="text-gradient text-xl font-semibold">Learn More</a><img src="https://erpsecurityexperts.com/assets/icons/arrow.svg" alt="" /></div>
                                    </div>
                                </div>
                            </div>
                            <div x-show="activeTab === 'risk-intelligence'" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform translate-y-4" x-transition:enter-end="opacity-100 transform translate-y-0">
                                <div class="grid md:grid-cols-4 gap-4 items-center">
                                    <div class="rounded-md overflow-hidden md:col-span-1"><img src="https://erpsecurityexperts.com/assets/images/risk-assessment.webp" alt="Risk Assessment" class="w-full h-full object-cover rounded-md" /></div>
                                    <div class="md:col-span-3 space-y-6">
                                        <p class="text-gray-700 leading-relaxed text-sm sm:text-base">Detect & Report Unauthorized User Access, Detect who have Config/Setup Access & Detect who have Super User / Elevated Access within the Company.</p>
                                        <p class="text-gray-700 leading-relaxed text-sm sm:text-base">Detect & Report Potential Error & Fraud/Suspicious Transactions on Financials, Procurement, Payroll and other Business Areas.</p>
                                        <div class="flex justify-between items-center gap-4"><a href="./service.php" class="text-gradient text-xl font-semibold">Learn More</a><img src="https://erpsecurityexperts.com/assets/icons/arrow.svg" alt="" /></div>
                                    </div>
                                </div>
                            </div>
                            <div x-show="activeTab === 'compliance'" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform translate-y-4" x-transition:enter-end="opacity-100 transform translate-y-0">
                                <div class="grid md:grid-cols-4 gap-4 items-center">
                                    <div class="rounded-md overflow-hidden md:col-span-1"><img src="https://erpsecurityexperts.com/assets/images/segregation-of-duties.webp" alt="SOD Compliance" class="w-full h-full object-cover rounded-md" /></div>
                                    <div class="md:col-span-3 space-y-6">
                                        <p class="text-gray-700 leading-relaxed text-sm sm:text-base">Prevent conflicts of interest and strengthen compliance with automated SoD controls. Detect role conflicts, enforce access policies, and monitor risks continuously to safeguard operations and meet audit requirements.</p>
                                        <div class="flex justify-between items-center gap-4"><a href="./service.php" class="text-gradient text-xl font-semibold">Learn More</a><img src="https://erpsecurityexperts.com/assets/icons/arrow.svg" alt="" /></div>
                                    </div>
                                </div>
                            </div>
                            <div x-show="activeTab === 'innovation'" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform translate-y-4" x-transition:enter-end="opacity-100 transform translate-y-0">
                                <div class="grid md:grid-cols-4 gap-4 items-center">
                                    <div class="rounded-md overflow-hidden md:col-span-1"><img src="https://erpsecurityexperts.com/assets/images/role-design.webp" alt="Role Design" class="w-full h-full object-cover rounded-md" /></div>
                                    <div class="md:col-span-3 space-y-6">
                                        <p class="text-gray-700 leading-relaxed text-sm sm:text-base">Build efficient, compliant ERP roles with clear access boundaries. Simplify user provisioning, minimize SoD conflicts, and align security with business needs.</p>
                                        <div class="flex justify-between items-center gap-4"><a href="./service.php" class="text-gradient text-xl font-semibold">Learn More</a><img src="https://erpsecurityexperts.com/assets/icons/arrow.svg" alt="" /></div>
                                    </div>
                                </div>
                            </div>
                            <div x-show="activeTab === 'license-management'" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform translate-y-4" x-transition:enter-end="opacity-100 transform translate-y-0">
                                <div class="grid md:grid-cols-4 gap-4 items-center">
                                    <div class="rounded-md overflow-hidden md:col-span-1"><img src="https://erpsecurityexperts.com/assets/images/oracle-erp-cloud-license-management.webp" alt="License Management" class="w-full h-full object-cover rounded-md" /></div>
                                    <div class="md:col-span-3 space-y-6">
                                        <p class="text-gray-700 leading-relaxed text-sm sm:text-base">Review and Evaluate Oracle Licenses Management & perform Optimization to reduce License Cost.</p>
                                        <div class="flex justify-between items-center gap-4"><a href="./service.php" class="text-gradient text-xl font-semibold">Learn More</a><img src="https://erpsecurityexperts.com/assets/icons/arrow.svg" alt="" /></div>
                                    </div>
                                </div>
                            </div>
                            <div x-show="activeTab === 'audit-certifications'" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform translate-y-4" x-transition:enter-end="opacity-100 transform translate-y-0">
                                <div class="grid md:grid-cols-4 gap-4 items-center">
                                    <div class="rounded-md overflow-hidden md:col-span-1"><img src="https://erpsecurityexperts.com/assets/images/security.webp" alt="Audit Certifications" class="w-full h-full object-cover rounded-md" /></div>
                                    <div class="md:col-span-3 space-y-6">
                                        <p class="text-gray-700 leading-relaxed text-sm sm:text-base">Streamline audit certifications and risk reviews with structured processes that ensure compliance and audit readiness across your ERP environment.</p>
                                        <div class="flex justify-between items-center gap-4"><a href="./service.php" class="text-gradient text-xl font-semibold">Learn More</a><img src="https://erpsecurityexperts.com/assets/icons/arrow.svg" alt="" /></div>
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
                <h2 class="font-bold text-xl sm:text-2xl md:text-4xl">Who We Serve</h2>
            </div>
            <div class="mt-5 sm:mt-10">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-6">
                    <div class="bg-[#E2E2E2] p-4 rounded-xl">
                        <div><img src="./assets/icons/it-teams.svg" alt="IT teams"></div>
                        <p class="font-bold text-xl mt-4">IT Teams</p>
                        <p class="text-sm sm:text-base mt-1">Gain centralized control over ERP access and security with automated provisioning, monitoring, and policy enforcement. Simplify IT processes, reduce manual work, and ensure systems run securely across business units</p>
                    </div>
                    <div class="bg-[#E2E2E2] p-4 rounded-xl">
                        <div><img src="./assets/icons/information-security.svg" alt="information Security"></div>
                        <p class="font-bold text-xl mt-4">Information Security Teams</p>
                        <p class="text-sm sm:text-base mt-1">Strengthen your ERP Security posture with continuous monitoring, SoD conflict detection, and identity governance. Maintain consistent controls, protect sensitive data, and meet compliance standards with ease.</p>
                    </div>
                    <div class="bg-[#E2E2E2] p-4 rounded-xl">
                        <div><img src="./assets/icons/compliance-risk.svg" alt="Compliance & Risk"></div>
                        <p class="font-bold text-xl mt-4">Compliance & Risk Teams</p>
                        <p class="text-sm sm:text-base mt-1">Simplify compliance with automated audit evidence, access certifications, and risk reporting. Reduce the time, cost, and complexity of staying audit-ready while aligning with regulatory requirements.</p>
                    </div>
                    <div class="bg-[#E2E2E2] p-4 rounded-xl">
                        <div><img src="./assets/icons/finance-&-audit.svg" alt="Finance & Audit"></div>
                        <p class="font-bold text-xl mt-4">Finance & Audit Teams</p>
                        <p class="text-sm sm:text-base mt-1">Ensure accurate financial reporting with tighter controls and reduced SoD risks. Streamline audit preparation, improve efficiency, and cut costs while safeguarding ERP-driven business processes.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container mx-auto p-4 mt-5 sm:mt-10">
            <div class="max-w-3xl mx-auto text-center">
                <h2 class="font-bold text-xl sm:text-2xl md:text-4xl">Trusted by Industry Leaders Worldwide</h2>
            </div>
            <div class="mt-5 sm:mt-10">
                <div class="swiper logosSwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide flex items-center justify-center p-4"><img src="https://erpsecurityexperts.com/assets/testimonials/indiana-university-health.webp" alt="Indiana University Health" loading="lazy" class="max-w-[140px] sm:max-w-[160px] max-h-20 object-contain" /></div>
                        <div class="swiper-slide flex items-center justify-center p-4"><img src="https://erpsecurityexperts.com//assets/testimonials/kaiser-permanente-logo.webp" alt="Kaiser Permanente" loading="lazy" class="max-w-[140px] sm:max-w-[160px] max-h-20 object-contain" /></div>
                        <div class="swiper-slide flex items-center justify-center p-4"><img src="https://erpsecurityexperts.com/assets/testimonials/exelon.webp" alt="Exelon" loading="lazy" class="max-w-[140px] sm:max-w-[160px] max-h-20 object-contain grayscale hover:grayscale-0 transition-all duration-300" /></div>
                        <div class="swiper-slide flex items-center justify-center p-4"><img src="https://erpsecurityexperts.com/assets/testimonials/twilio.webp" alt="Twilio" loading="lazy" class="max-w-[140px] sm:max-w-[160px] max-h-20 object-contain grayscale hover:grayscale-0 transition-all duration-300" /></div>
                        <div class="swiper-slide flex items-center justify-center p-4"><img src="https://erpsecurityexperts.com//assets/testimonials/dept-of-energy-logo.webp" alt="Dept of Energy" loading="lazy" class="max-w-[140px] sm:max-w-[160px] max-h-20 object-contain grayscale hover:grayscale-0 transition-all duration-300" /></div>
                        <div class="swiper-slide flex items-center justify-center p-4"><img src="https://erpsecurityexperts.com//assets/testimonials/blue-cross-blue-shield-vector-logo.webp" alt="Blue Cross Blue Shield" loading="lazy" class="max-w-[140px] sm:max-w-[160px] max-h-20 object-contain grayscale hover:grayscale-0 transition-all duration-300" /></div>
                        <div class="swiper-slide flex items-center justify-center p-4"><img src="https://erpsecurityexperts.com/assets/testimonials/acco-logo.webp" alt="ACCO Engineered Systems" loading="lazy" class="max-w-[140px] sm:max-w-[160px] max-h-20 object-contain grayscale hover:grayscale-0 transition-all duration-300" /></div>
                        <div class="swiper-slide flex items-center justify-center p-4"><img src="https://erpsecurityexperts.com/assets/testimonials/gkn-wheels-logo.webp" alt="GKN Wheels" loading="lazy" class="max-w-[140px] sm:max-w-[160px] max-h-20 object-contain grayscale hover:grayscale-0 transition-all duration-300" /></div>
                        <div class="swiper-slide flex items-center justify-center p-4"><img src="https://erpsecurityexperts.com/assets/testimonials/jpmc-logo.webp" alt="J.P. Morgan Chase" loading="lazy" class="max-w-[140px] sm:max-w-[160px] max-h-20 object-contain grayscale hover:grayscale-0 transition-all duration-300" /></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="p-4 mb-10">
        <div class="max-w-7xl mx-auto mt-5 sm:mt-10 border-2 border-slate-300 rounded-xl">
            <div class="grid lg:grid-cols-2">
                <div class="flex flex-col justify-center p-4 lg:p-10">
                    <div class="uppercase">
                        <h2 class="font-bold text-xl sm:text-2xl md:text-4xl text-[#3945A2]">Get In touch</h2>
                        <p>Tell us what can we help you with.</p>
                    </div>

                    <!-- ✅ Message container -->
                    <div id="message-container-home"></div>

                    <form action="send-mail.php" method="POST" id="contactFormHome" class="mt-2 space-y-4">
                        <!-- ✅ FIXED: 'page=home' se auto redirect index.php pe hoga -->
                        <input type="hidden" name="page" value="home">
                        <input type="hidden" name="source" value="Home page">

                        <div class="grid sm:grid-cols-2 gap-4">
                            <input type="text" placeholder="Name *" name="name" id="name-home" required minlength="2" maxlength="100" class="border-2 border-[#030F47] rounded-md bg-transparent px-4 py-2 focus:outline-none focus:ring-2 focus:ring-[#3945A2] w-full" />
                            <input type="email" placeholder="Email *" name="email" id="email-home" required class="border-2 border-[#030F47] rounded-md bg-transparent px-4 py-2 focus:outline-none focus:ring-2 focus:ring-[#3945A2] w-full" />
                            <input type="text" placeholder="Company Name" name="company" id="company-home" maxlength="100" class="border-2 border-[#030F47] rounded-md bg-transparent px-4 py-2 focus:outline-none focus:ring-2 focus:ring-[#3945A2] w-full col-span-2" />
                        </div>

                        <textarea name="message" placeholder="Message *" rows="6" id="message-home" required minlength="10" maxlength="5000" class="w-full border-2 border-[#030F47] rounded-md bg-transparent px-4 py-2 focus:outline-none focus:ring-2 focus:ring-[#3945A2]"></textarea>
                        <div class="text-sm text-gray-600"><span id="char-count-home">0/5000 characters</span></div>

                        <div class="space-y-2">
                            <label class="font-medium text-sm">Security Verification <span class="text-red-500">*</span></label>
                            <div class="flex flex-col sm:flex-row items-start sm:items-center gap-3 p-3 border-2 border-[#030F47] rounded-md bg-white/50">
                                <img src="generate-captcha.php" alt="CAPTCHA" id="captcha-image-home" class="border border-gray-300 rounded cursor-pointer hover:opacity-80 transition-opacity" width="200" height="60">
                                <button type="button" onclick="refreshCaptchaHome()" class="px-4 py-2 bg-[#030F47] text-white rounded hover:bg-[#3945A2] transition-colors text-sm">🔄 Refresh</button>
                            </div>
                            <input type="number" name="captcha_answer" id="captcha-answer-home" required placeholder="Enter the answer" class="w-full border-2 border-[#030F47] rounded-md bg-transparent px-4 py-2 focus:outline-none focus:ring-2 focus:ring-[#3945A2]">
                        </div>

                        <!-- Honeypot -->
                        <input type="text" name="website" id="website-home" style="display:none;" tabindex="-1" autocomplete="off">

                        <button class="bg-[#FF5500] text-white px-10 py-2 text-xl rounded-full hover:bg-[#ff6a1a] transition-colors disabled:opacity-50 disabled:cursor-not-allowed" type="submit" id="submitBtnHome">
                            SUBMIT
                        </button>
                    </form>
                </div>

                <div class="hidden lg:flex flex-col justify-end">
                    <img src="https://erpsecurityexperts.com/assets/images/get-in-touch.webp" alt="Get in touch" loading="lazy" class="w-auto max-h-[700px] object-contain" />
                </div>
            </div>
        </div>
    </section>

    <?php include 'footer.php'; ?>

    <!-- Video Script -->
    <script defer>
        document.addEventListener("DOMContentLoaded", function () {
            const video = document.getElementById('heroVideo');
            const playBtn = document.getElementById('customPlayBtn');
            const videoContainer = document.getElementById('videoContainer');
            let isVideoLoaded = false;
            if (!video || !playBtn || !videoContainer) return;
            playBtn.addEventListener("click", function () {
                if (!isVideoLoaded) {
                    video.src = "https://erpsecurityexperts.com/assets/videos/erp.mp4";
                    video.load();
                    video.addEventListener("loadeddata", () => { video.play(); video.setAttribute("controls", "true"); isVideoLoaded = true; }, { once: true });
                } else { video.play(); video.setAttribute("controls", "true"); }
                playBtn.style.opacity = '0'; playBtn.style.pointerEvents = 'none';
            });
            const videoObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (!entry.isIntersecting && isVideoLoaded && !video.paused) {
                        video.pause(); playBtn.style.opacity = '1'; playBtn.style.pointerEvents = 'auto';
                    }
                });
            }, { root: null, rootMargin: '0px', threshold: 0.5 });
            try { videoObserver.observe(videoContainer); } catch (e) {}
            video.addEventListener('pause', function () { if (video.currentTime < video.duration && isVideoLoaded) { playBtn.style.opacity = '1'; playBtn.style.pointerEvents = 'auto'; } });
            video.addEventListener('ended', function () { playBtn.style.opacity = '1'; playBtn.style.pointerEvents = 'auto'; });
            video.addEventListener('play', function () { playBtn.style.opacity = '0'; playBtn.style.pointerEvents = 'none'; });
        });
    </script>

    <!-- ✅ FIXED: Home Form Script - DOMContentLoaded ke andar -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {

            function refreshCaptchaHome() {
                document.getElementById('captcha-image-home').src = 'generate-captcha.php?' + Date.now();
                document.getElementById('captcha-answer-home').value = '';
            }
            window.refreshCaptchaHome = refreshCaptchaHome;

            const urlParams = new URLSearchParams(window.location.search);
            const status = urlParams.get('status');
            const messageContainer = document.getElementById('message-container-home');

            const statusMessages = {
                'success':         { message: "Thank you! Your message has been sent successfully. We'll get back to you soon.", type: 'success' },
                'error':           { message: 'Please fill all required fields!', type: 'error' },
                'invalid':         { message: 'Please enter a valid email address!', type: 'error' },
                'invalid_name':    { message: 'Name must be between 2 and 100 characters!', type: 'error' },
                'invalid_message': { message: 'Message must be between 10 and 5000 characters!', type: 'error' },
                'failed':          { message: 'Failed to send message. Please try again!', type: 'error' },
                'captcha_empty':   { message: 'Please solve the math problem!', type: 'error' },
                'captcha_failed':  { message: 'Incorrect answer! Please try again.', type: 'error' },
                'captcha_expired': { message: 'CAPTCHA expired! Please refresh and try again.', type: 'error' },
                'spam_detected':   { message: 'Your message was flagged as spam. Please contact us directly.', type: 'error' },
                'rate_limit':      { message: 'Too many submissions. Please try again later.', type: 'error' },
                'invalid_request': { message: 'Invalid request method.', type: 'error' }
            };

            if (status && statusMessages[status]) {
                const { message, type } = statusMessages[status];
                const bgColor = type === 'success'
                    ? 'bg-green-100 border border-green-400 text-green-700'
                    : 'bg-red-100 border border-red-400 text-red-700';

                messageContainer.innerHTML = `
                    <div class="${bgColor} px-4 py-3 rounded-lg my-4 text-center font-medium animate-pulse" style="font-size:16px;">
                        ${message}
                    </div>`;

                if (type === 'error' && ['captcha_failed','captcha_empty','captcha_expired'].includes(status)) {
                    refreshCaptchaHome();
                }

                setTimeout(() => {
                    messageContainer.scrollIntoView({ behavior: 'smooth', block: 'center' });
                    setTimeout(() => {
                        const msgDiv = messageContainer.querySelector('div');
                        if (msgDiv) msgDiv.classList.remove('animate-pulse');
                    }, 2000);
                }, 300);

                setTimeout(() => {
                    messageContainer.innerHTML = '';
                    window.history.replaceState({}, document.title, window.location.pathname);
                }, type === 'success' ? 10000 : 7000);
            }

            // Character counter
            const msgField = document.getElementById('message-home');
            const charCount = document.getElementById('char-count-home');
            if (msgField) {
                msgField.addEventListener('input', function () {
                    const len = this.value.length;
                    charCount.textContent = `${len}/5000 characters`;
                    charCount.className = len > 5000 ? 'text-red-500 text-sm' : 'text-gray-600 text-sm';
                });
            }

            // Email validation
            const emailHome = document.getElementById('email-home');
            if (emailHome) {
                emailHome.addEventListener('blur', function () {
                    const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                    this.classList.toggle('border-red-500', this.value && !regex.test(this.value));
                    this.classList.toggle('border-[#030F47]', !this.value || regex.test(this.value));
                });
            }

            // Form submit
            const formHome = document.getElementById('contactFormHome');
            if (formHome) {
                formHome.addEventListener('submit', function (e) {
                    const submitBtn = document.getElementById('submitBtnHome');
                    if (document.getElementById('website-home').value !== '') { e.preventDefault(); return false; }
                    if (!document.getElementById('captcha-answer-home').value) {
                        e.preventDefault(); alert('Please solve the math problem!'); return false;
                    }
                    submitBtn.disabled = true; submitBtn.innerHTML = 'SENDING... ⏳';
                });
            }

            // Name validation
            const nameHome = document.getElementById('name-home');
            if (nameHome) {
                nameHome.addEventListener('input', function () {
                    this.classList.toggle('border-red-500', this.value.length > 0 && this.value.length < 2);
                    this.classList.toggle('border-[#030F47]', this.value.length === 0 || this.value.length >= 2);
                });
            }

            // CAPTCHA clear
            const captchaHome = document.getElementById('captcha-answer-home');
            if (captchaHome) {
                captchaHome.addEventListener('input', function () {
                    this.classList.toggle('border-red-500', false);
                    this.classList.toggle('border-[#030F47]', true);
                });
            }
        });
    </script>

    <!-- Swiper -->
    <script defer>
        document.addEventListener('DOMContentLoaded', function () {
            new Swiper('.logosSwiper', {
                loop: true, slidesPerView: 2, spaceBetween: 20,
                autoplay: { delay: 2500, disableOnInteraction: false },
                pagination: { el: '.logos-pagination', clickable: true },
                breakpoints: {
                    640: { slidesPerView: 3, spaceBetween: 30 },
                    1024: { slidesPerView: 4, spaceBetween: 40 }
                }
            });
        });
    </script>

</body>
</html>