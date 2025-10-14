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
                    <div class="flex items-center gap-3">
                        <img src="https://boffinbrains.in/erp/assets/images/logo.svg" alt="" class="h-[60px] lg:h-[78px] w-auto" width="133"
                            height="78">
                    </div>

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
                <div class="container mx-auto">
                    <div class="grid lg:grid-cols-2 gap-8">
                        <div class="text-left flex flex-col justify-center">
                            <h1
                                class="font-bold text-3xl md:text-4xl lg:text-5xl leading-tight sm:leading-tight md:leading-tight lg:leading-tight uppercase text-white">
                                Enterprise Grade <br> ERP Security & <br><span class="text-[#1EF3FE]"> Risk Assessment
                                    Services</span></h1>

                            <p class="mt-4 text-base md:text-2xl lg:text-3xl leading-relaxed tracking-wide">From rapid
                                Risk Assessments to full ERP Transformation.</p>
                            <div class="mt-5 lg:mt-10">
                                <a href="./contact.php" class="bg-white px-8 py-2 rounded-full text-black">Contact
                                    Us</a>
                            </div>
                        </div>
                        <div class="flex justify-center items-center">
                            <img src="https://boffinbrains.in/erp/assets/images/erp-service.webp" alt="ERP service"
                                class="w-auto h-96 object-contain">
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
            <div class="max-w-4xl mx-auto text-left sm:text-center uppercase">
                <p class="text-[#3945A2] font-semibold">Our Services</p>
                <h2 class="font-bold text-xl sm:text-2xl md:text-4xl">
                    HELPING GLOBAL CLIENTS AUTOMATE AUDIT & ERP RISK MANAGEMENT
                </h2>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-10 mt-5 md:mt-10">
                <div
                    class="bg-[#EFEFEF] rounded-md p-4 flex flex-col sm:items-center sm:text-center space-y-3 shadow-[0px_4px_20px_5px_#13FEFE]/30 transition-shadow duration-500 hover:shadow-[0px_4px_50px_10px_#13FEFE]">
                    <div class="bg-[#D9D9D9] mt-4 w-24 h-24 rounded-full flex justify-center items-center">
                        <svg class="w-12 h-12" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 1L3 5V11C3 16.55 6.84 21.74 12 23C17.16 21.74 21 16.55 21 11V5L12 1Z"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M9 12L11 14L15 10" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </div>
                    <h3 class="text-xl md:text-2xl font-semibold mt-2">Security Assessment</h3>
                    <p class="text-sm italic mb-2">Uncover vulnerabilities, strengthen ERP defences.</p>
                    <div class="text-left"
                        x-data="expandableText(`We help organizations evaluate the security posture of their Oracle ERP Cloud. Our security assessment identifies gaps in access management, user privileges, and system controls that may expose your ERP to risk. Through comprehensive reviews and automated testing, we highlight vulnerabilities, recommend corrective actions, and deliver a clear roadmap to strengthen your ERP Security. This ensures you meet compliance standards and maintain continuous protection across critical business processes.`)">

                        <div class="text-sm text-gray-600 leading-relaxed whitespace-pre-line"
                            x-text="expanded ? fullText : previewText">
                        </div>

                        <div class="text-right">
                            <button
                                class="mt-3 text-sm hover:underline text-blue-600 hover:text-blue-800 font-medium transition-colors duration-200"
                                x-text="expanded ? 'Read less' : 'Read more'" @click="toggle()">
                            </button>
                        </div>
                    </div>
                </div>

                <div
                    class="bg-[#EFEFEF] rounded-md p-4 flex flex-col sm:items-center sm:text-center space-y-3 shadow-[0px_4px_20px_5px_#13FEFE]/30 transition-shadow duration-500 hover:shadow-[0px_4px_50px_10px_#13FEFE]">
                    <div class="bg-[#D9D9D9] mt-4 w-24 h-24 rounded-full flex justify-center items-center">
                        <svg class="w-12 h-12" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 9V13" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path
                                d="M10.29 3.86L1.82 18A2 2 0 003.68 21h16.64a2 2 0 001.86-2.86L13.71 3.86a2 2 0 00-3.42 0z"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M12 17H12.01" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </div>
                    <h3 class="text-xl md:text-2xl font-semibold mt-2">Risk Assessment</h3>
                    <p class="text-sm italic mb-2">Stay ahead of threats with proactive risk insights.</p>

                    <div class="text-left" x-data="expandableText(`Our risk assessment services provide proactive insights into threats impacting your Oracle ERP environment. We analyze transactions, access patterns, and control
                        effectiveness to identify potential risks before they escalate.
                        With continuous monitoring, automated reporting, and actionable insights, we enable organizations to reduce fraud exposure, improve internal controls, and align with regulatory
                        requirements while minimizing operational disruptions.`)">

                        <div class="text-sm text-gray-600 leading-relaxed whitespace-pre-line"
                            x-text="expanded ? fullText : previewText">
                        </div>

                        <div class="text-right">
                            <button
                                class="mt-3 text-sm hover:underline text-blue-600 hover:text-blue-800 font-medium transition-colors duration-200"
                                x-text="expanded ? 'Read less' : 'Read more'" @click="toggle()">
                            </button>
                        </div>
                    </div>
                </div>

                <div
                    class="bg-[#EFEFEF] rounded-md p-4 flex flex-col sm:items-center sm:text-center space-y-3 shadow-[0px_4px_20px_5px_#13FEFE]/30 transition-shadow duration-500 hover:shadow-[0px_4px_50px_10px_#13FEFE]">
                    <div class="bg-[#D9D9D9] mt-4 w-24 h-24 rounded-full flex justify-center items-center">
                        <svg class="w-12 h-12" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M16 21V19a4 4 0 00-4-4H5a4 4 0 00-4 4v2" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                            <circle cx="8.5" cy="7" r="4" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M20 8v6M23 11l-3 3-3-3" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <h3 class="text-xl md:text-2xl font-semibold mt-2">Segregation of Duties (SoD)</h3>
                    <p class="text-sm italic mb-2">Prevent conflicts, enforce compliance, and protect operations.</p>
                    <div class="text-left"
                        x-data="expandableText(`Conflicts in user roles can result in financial fraud, compliance failures, and audit issues. Our SoD services enforce rigorous controls by detecting and remediating role conflicts across your ERP Cloud. We design preventive and detective SoD policies, automate conflict monitoring, and provide
                        compliance-ready reports. This ensures your ERP operations remain secure, audit-friendly, and aligned with best practices in access governance.`)">

                        <div class="text-sm text-gray-600 leading-relaxed whitespace-pre-line"
                            x-text="expanded ? fullText : previewText">
                        </div>

                        <div class="text-right">
                            <button
                                class="mt-3 text-sm hover:underline text-blue-600 hover:text-blue-800 font-medium transition-colors duration-200"
                                x-text="expanded ? 'Read less' : 'Read more'" @click="toggle()">
                            </button>
                        </div>
                    </div>
                </div>

                <div
                    class="bg-[#EFEFEF] rounded-md p-4 flex flex-col sm:items-center sm:text-center space-y-3 shadow-[0px_4px_20px_5px_#13FEFE]/30 transition-shadow duration-500 hover:shadow-[0px_4px_50px_10px_#13FEFE]">
                    <div class="bg-[#D9D9D9] mt-4 w-24 h-24 rounded-full flex justify-center items-center">
                        <svg class="w-12 h-12" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                            <circle cx="12" cy="7" r="4" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </div>
                    <h3 class="text-xl md:text-2xl font-semibold mt-2">Role Design</h3>
                    <p class="text-sm italic mb-2">Simplify access with efficient, compliant role structures.</p>
                    <div class="text-left"
                        x-data="expandableText(`A well-structured role design is the foundation of ERP Security. We specialize in creating efficient, business-aligned roles that balance usability and compliance.
                        Our experts define access boundaries, eliminate SoD conflicts, and ensure each user has the right level of access nothing more, nothing less. This results in streamlined provisioning, easier governance, and reduced risks across your ERP.`)">

                        <div class="text-sm text-gray-600 leading-relaxed whitespace-pre-line"
                            x-text="expanded ? fullText : previewText">
                        </div>

                        <div class="text-right">
                            <button
                                class="mt-3 text-sm hover:underline text-blue-600 hover:text-blue-800 font-medium transition-colors duration-200"
                                x-text="expanded ? 'Read less' : 'Read more'" @click="toggle()">
                            </button>
                        </div>
                    </div>
                </div>

                <div
                    class="bg-[#EFEFEF] rounded-md p-4 flex flex-col sm:items-center sm:text-center space-y-3 shadow-[0px_4px_20px_5px_#13FEFE]/30 transition-shadow duration-500 hover:shadow-[0px_4px_50px_10px_#13FEFE] lg:col-start-2">
                    <div class="bg-[#D9D9D9] mt-4 w-24 h-24 rounded-full flex justify-center items-center">
                        <svg class="w-12 h-12" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="3" y="4" width="18" height="18" rx="2" ry="2" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <line x1="16" y1="2" x2="16" y2="6" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                            <line x1="8" y1="2" x2="8" y2="6" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                            <line x1="3" y1="10" x2="21" y2="10" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M8 14h.01M12 14h.01M16 14h.01M8 18h.01M12 18h.01M16 18h.01" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <h3 class="text-xl md:text-2xl font-semibold mt-2">License Management</h3>
                    <p class="text-sm italic mb-2">Optimize Oracle ERP licenses, cut costs, and stay compliant.</p>
                    <div class="text-left"
                        x-data="expandableText(`Oracle ERP Cloud licenses are a significant investment and mismanagement leads to unnecessary costs. Our license management services help you optimize license utilization, prevent overspending, and maintain compliance with Oracle policies. We provide detailed tracking of license usage, identify underutilized entitlements, and guide you in aligning your licenses with actual business needs. The result is maximum efficiency, reduced expenses, and complete control over your Oracle ERP Cloud licensing.`)">

                        <div class="text-sm text-gray-600 leading-relaxed whitespace-pre-line"
                            x-text="expanded ? fullText : previewText">
                        </div>

                        <div class="text-right">
                            <button
                                class="mt-3 text-sm hover:underline text-blue-600 hover:text-blue-800 font-medium transition-colors duration-200"
                                x-text="expanded ? 'Read less' : 'Read more'" @click="toggle()">
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script defer>
        function expandableText(text, chars = 200) {
            return {
                expanded: false,
                fullText: text,
                get previewText() {
                    return this.fullText.length > chars ?
                        this.fullText.substring(0, chars) + '...' :
                        this.fullText;
                },
                toggle() {
                    this.expanded = !this.expanded;
                }
            }
        }
    </script>

    <style>
        @keyframes smoothBounce {

            0%,
            100% {
                transform: translateY(0);
                animation-timing-function: cubic-bezier(0.8, 0, 1, 1);
            }

            50% {
                transform: translateY(-25px);
                animation-timing-function: cubic-bezier(0, 0, 0.2, 1);
            }
        }

        .bounce-smooth {
            animation: smoothBounce 2s infinite;
        }
    </style>

    <section>
        <div class="container mx-auto p-4 mt-5 sm:mt-10">
            <div class="max-w-3xl mx-auto text-left sm:text-center uppercase">
                <h2 class="font-bold text-xl sm:text-2xl md:text-4xl">Why Choose <span class="text-[#9972FF]">Us</span>
                </h2>
            </div>

            <div class="my-5 md:my-10">
                <div class="hidden lg:block">
                    <div class="flex justify-center items-center relative max-w-[800px] h-[450px] mx-auto">
                        <div class="w-96 h-96">
                            <img src="https://boffinbrains.in/erp/assets/images/why-choose-us.webp" alt="Why Choose Us"
                                class="w-full h-full object-contain">
                        </div>

                        <div class="absolute top-0 left-24 max-w-[300px]">
                            <div class="flex gap-4 items-center">
                                <p class="text-base font-semibold text-right">Unmatched Expertise</p>
                                <div
                                    class="bg-[#D9D9D9] p-3 w-14 h-14 rounded-full shrink-0 flex justify-center items-center">
                                    <img src="https://boffinbrains.in/erp/assets/icons/unmatched-expertise.svg" alt="" loading="lazy"
                                        class="w-full h-auto object-contain">
                                </div>
                            </div>
                        </div>

                        <div class="absolute top-0 right-8 max-w-[300px]">
                            <div class="flex gap-4 items-center">
                                <div
                                    class="bg-[#D9D9D9] p-3 w-14 h-14 rounded-full shrink-0 flex justify-center items-center">
                                    <img src="https://boffinbrains.in/erp/assets/icons/innovative-thinkers-icon.svg" alt="" loading="lazy"
                                        class="w-full h-auto object-contain">
                                </div>
                                <p class="text-base font-semibold text-left">Forward-Thinking Approach</p>
                            </div>
                        </div>

                        <div class="absolute top-32 -left-24 max-w-[300px]">
                            <div class="flex gap-4 items-center">
                                <p class="text-base font-semibold text-right">Practical Solutions That Deliver Value
                                    Fast</p>
                                <div
                                    class="bg-[#D9D9D9] p-3 w-14 h-14 shrink-0 rounded-full flex justify-center items-center">
                                    <img src="https://boffinbrains.in/erp/assets/icons/combined-years.svg" alt="" loading="lazy"
                                        class="w-full h-auto object-contain">
                                </div>
                            </div>
                        </div>

                        <div class="absolute top-32 -right-24 max-w-[300px]">
                            <div class="flex gap-4 items-center">
                                <div
                                    class="bg-[#D9D9D9] p-3 w-14 h-14 shrink-0 rounded-full flex justify-center items-center">
                                    <img src="https://boffinbrains.in/erp/assets/icons/pragmatic-solutions.svg" alt="" loading="lazy"
                                        class="w-full h-auto object-contain">
                                </div>
                                <p class="text-base font-semibold text-left">Decades of Proven Experience Across Big-4,
                                    Oracle, and SAP</p>
                            </div>
                        </div>

                        <div class="absolute top-72 -left-10 max-w-[300px]">
                            <div class="flex gap-4 items-center">
                                <p class="text-base font-semibold text-right">Collaborative Journey</p>
                                <div
                                    class="bg-[#D9D9D9] p-3 w-14 h-14 shrink-0 rounded-full flex justify-center items-center">
                                    <img src="https://boffinbrains.in/erp/assets/icons/collaborative-journey.svg" alt="" loading="lazy"
                                        class="w-full h-auto object-contain">
                                </div>
                            </div>
                        </div>

                        <div class="absolute top-72 -right-1 max-w-[300px]">
                            <div class="flex gap-4 items-center">
                                <div
                                    class="bg-[#D9D9D9] p-3 w-14 h-14 shrink-0 rounded-full flex justify-center items-center">
                                    <img src="https://boffinbrains.in/erp/assets/icons/results-driven.svg" alt="" loading="lazy"
                                        class="w-full h-auto object-contain">
                                </div>
                                <p class="text-base font-semibold text-right">Results-Driven</p>
                            </div>
                        </div>

                        <div class="absolute -bottom-10 left-4 max-w-[300px]">
                            <div class="flex gap-4 items-center">
                                <p class="text-base font-semibold text-right">Clear Delivery With Defined Roles and
                                    Checkpoints</p>
                                <div
                                    class="bg-[#D9D9D9] p-3 w-14 h-14 shrink-0 rounded-full flex justify-center items-center">
                                    <img src="https://boffinbrains.in/erp/assets/icons/clear-roles-weekly-checkpoints.svg" alt="" loading="lazy"
                                        class="w-full h-auto object-contain">
                                </div>
                            </div>
                        </div>

                        <div class="absolute -bottom-10 right-4 max-w-[300px]">
                            <div class="flex gap-4 items-center">
                                <div
                                    class="bg-[#D9D9D9] p-3 w-14 h-14 shrink-0 rounded-full flex justify-center items-center">
                                    <img src="https://boffinbrains.in/erp/assets/icons/audit-findings-drop.svg" alt="" loading="lazy"
                                        class="w-full h-auto object-contain">
                                </div>
                                <p class="text-base font-semibold text-left">Audit-Ready Evidence With Fewer Findings
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="block lg:hidden">
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 max-w-4xl mx-auto">
                        <div class="bg-white p-4 rounded-xl border">
                            <div class="flex items-center gap-4">
                                <div
                                    class="bg-[#D9D9D9] p-3 w-14 h-14 rounded-full shrink-0 flex justify-center items-center">
                                    <img src="https://boffinbrains.in/erp/assets/icons/unmatched-expertise.svg" alt="" loading="lazy"
                                        class="w-full h-auto object-contain">
                                </div>
                                <div>
                                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Unmatched Expertise</h3>
                                </div>
                            </div>
                        </div>
                        <div class="bg-white p-4 rounded-xl border">
                            <div class="flex items-center gap-4">
                                <div
                                    class="bg-[#D9D9D9] p-3 w-14 h-14 rounded-full shrink-0 flex justify-center items-center">
                                    <img src="https://boffinbrains.in/erp/assets/icons/innovative-thinkers-icon.svg" alt="" loading="lazy"
                                        class="w-full h-auto object-contain">
                                </div>
                                <div>
                                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Forward-Thinking Approach</h3>
                                </div>
                            </div>
                        </div>

                        <div class="bg-white p-4 rounded-xl border">
                            <div class="flex items-center gap-4">
                                <div
                                    class="bg-[#D9D9D9] p-3 w-14 h-14 rounded-full shrink-0 flex justify-center items-center">
                                    <img src="https://boffinbrains.in/erp/assets/icons/combined-years.svg" alt="" loading="lazy"
                                        class="w-full h-auto object-contain">
                                </div>
                                <div>
                                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Practical Solutions That Deliver Value
                                        Fast</h3>
                                </div>
                            </div>
                        </div>

                        <div class="bg-white p-4 rounded-xl border">
                            <div class="flex items-center gap-4">
                                <div
                                    class="bg-[#D9D9D9] p-3 w-14 h-14 rounded-full shrink-0 flex justify-center items-center">
                                    <img src="https://boffinbrains.in/erp/assets/icons/pragmatic-solutions.svg" alt="" loading="lazy"
                                        class="w-full h-auto object-contain">
                                </div>
                                <div>
                                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Decades of Proven Experience Across Big-4,
                                        Oracle, and SAP</h3>
                                </div>
                            </div>
                        </div>

                        <div class="bg-white p-4 rounded-xl border">
                            <div class="flex items-center gap-4">
                                <div
                                    class="bg-[#D9D9D9] p-3 w-14 h-14 rounded-full shrink-0 flex justify-center items-center">
                                    <img src="https://boffinbrains.in/erp/assets/icons/collaborative-journey.svg" alt="" loading="lazy"
                                        class="w-full h-auto object-contain">
                                </div>
                                <div>
                                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Collaborative Journey</h3>
                                </div>
                            </div>
                        </div>

                        <div class="bg-white p-4 rounded-xl border">
                            <div class="flex items-center gap-4">
                                <div
                                    class="bg-[#D9D9D9] p-3 w-14 h-14 rounded-full shrink-0 flex justify-center items-center">
                                    <img src="https://boffinbrains.in/erp/assets/icons/results-driven.svg" alt="" loading="lazy"
                                        class="w-full h-auto object-contain">
                                </div>
                                <div>
                                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Results-Driven</h3>
                                </div>
                            </div>
                        </div>

                        <div class="bg-white p-4 rounded-xl border">
                            <div class="flex items-center gap-4">
                                <div
                                    class="bg-[#D9D9D9] p-3 w-14 h-14 rounded-full shrink-0 flex justify-center items-center">
                                    <img src="https://boffinbrains.in/erp/assets/icons/clear-roles-weekly-checkpoints.svg" alt="" loading="lazy"
                                        class="w-full h-auto object-contain">
                                </div>
                                <div>
                                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Clear Delivery With Defined Roles and
                                        Checkpoints</h3>
                                </div>
                            </div>
                        </div>

                        <div class="bg-white p-4 rounded-xl border">
                            <div class="flex items-center gap-4">
                                <div
                                    class="bg-[#D9D9D9] p-3 w-14 h-14 rounded-full shrink-0 flex justify-center items-center">
                                    <img src="https://boffinbrains.in/erp/assets/icons/audit-findings-drop.svg" alt="" loading="lazy"
                                        class="w-full h-auto object-contain">
                                </div>
                                <div>
                                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Audit-Ready Evidence With Fewer Findings</h3>
                                </div>
                            </div>
                        </div>
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
                                <img src="https://boffinbrains.in/erp//assets/testimonials/dept-of-energy-logo.png"
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
                                <img src="https://boffinbrains.in/erp//assets/testimonials/blue-cross-blue-shield-vector-logo.png"
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
                                <img src="https://boffinbrains.in/erp//assets/testimonials/kaiser-permanente-logo.png"
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
                                <img src="https://boffinbrains.in/erp/assets/testimonials/acco-logo.png"
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
                                <img src="https://boffinbrains.in/erp/assets/testimonials/gkn-wheels-logo.png"
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
                                <img src="https://boffinbrains.in/erp/assets/testimonials/indiana-university-health.svg"
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
                                <img src="https://boffinbrains.in/erp/assets/testimonials/twilio.svg"
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
                                <img src="https://boffinbrains.in/erp/assets/testimonials/exelon.png"
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
                                <img src="https://boffinbrains.in/erp/assets/testimonials/jpmc-logo.svg"
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
    <?php include 'footer.php'; ?>
</body>

</html>