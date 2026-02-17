<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get in Touch</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Instrument+Sans:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: { primary: '#FF5500' },
                    container: {
                        center: true,
                        screens: { DEFAULT: "100%", xl: "1500px" }
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
        @keyframes scroll { 0% { transform: translateX(0); } 100% { transform: translateX(-50%); } }
        .marquee-content { animation: scroll 20s linear infinite; }
        .text-gradient {
            background: linear-gradient(to top, #020F4A 0%, #13FEFE 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        .captcha-box {
            border: 2px solid #ddd;
            border-radius: 8px;
            padding: 15px;
            background: #f9f9f9;
            display: flex;
            align-items: center;
            gap: 15px;
        }
        .captcha-image { border: 1px solid #ccc; border-radius: 4px; cursor: pointer; transition: transform 0.2s; }
        .captcha-image:hover { transform: scale(1.02); }
        .refresh-captcha {
            cursor: pointer; padding: 8px 12px; background: #030F47;
            color: white; border-radius: 4px; font-size: 14px; transition: background 0.3s;
        }
        .refresh-captcha:hover { background: #13FEFE; color: #030F47; }
    </style>
</head>

<body class="font-sans">

    <header class="relative" x-data="{ 
        mobileMenuOpen: false, 
        scrolled: false,
        init() { window.addEventListener('scroll', () => { this.scrolled = window.scrollY > 100; }); }
    }" x-init="init">
        <div x-show="scrolled" x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 -translate-y-full" x-transition:enter-end="opacity-100 translate-y-0"
            x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 translate-y-0"
            x-transition:leave-end="opacity-0 -translate-y-full"
            class="fixed top-0 left-0 w-full z-50 bg-[#030F47] bg-opacity-95 backdrop-blur-sm border-b border-white/10">
            <div class="container mx-auto p-4 flex items-center justify-between">
                <a href="./index.php" class="flex items-center gap-3">
                    <img src="https://erpsecurityexperts.com/assets/images/logo.svg" alt="Logo" class="max-h-[60px] w-auto" width="133" height="78" loading="lazy">
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
            <img src="https://erpsecurityexperts.com/assets/images/background.webp" alt="Background" class="w-full h-full object-cover">
            <div class="absolute inset-0" style="background: linear-gradient(180deg, rgba(3,15,71,0.7) 0%, rgba(19,254,254,0.5) 100%);"></div>
        </div>

        <div class="relative z-10 container mx-auto px-4 sm:px-6 lg:px-8 flex flex-col justify-center h-full text-center text-white">
            <nav class="flex justify-between items-center py-4">
                <div class="flex flex-1 justify-between items-center text-white font-bold">
                    <a href="./index.php" class="flex items-center gap-3">
                        <img src="https://erpsecurityexperts.com/assets/images/logo.svg" alt="" class="h-[60px] lg:h-[78px] w-auto" width="133" height="78">
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
                <div class="container mx-auto text-center">
                    <h1 class="font-bold text-3xl md:text-4xl lg:text-5xl xl:text-6xl 2xl:text-7xl leading-tight uppercase text-white">Contact US</h1>
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
                <img src="https://erpsecurityexperts.com/assets/images/logo.svg" alt="" width="133" height="78" class="h-[60px] lg:h-[78px] w-auto" loading="lazy">
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
                    <a href="./service.php" @click="mobileMenuOpen = false" class="block text-white font-medium text-lg hover:text-gray-300 transition-colors duration-300">Service Offerings</a>
                    <a href="./contact.php" @click="mobileMenuOpen = false" class="block text-white font-medium text-lg hover:text-gray-300 transition-colors duration-300">Contact Us</a>
                </div>
            </div>
        </div>
    </header>

    <section>
        <div class="container mx-auto p-4 mt-5 lg:mt-32">
            <div class="grid lg:grid-cols-2 gap-10">
                <div>
                    <h2 class="font-bold text-2xl sm:text-5xl xl:text-6xl">Get in Touch with ERP Security Experts</h2>
                    <p class="text-base md:text-xl mt-4 leading-relaxed">Ready to secure your ERP environment and accelerate compliance? Connect directly with our leadership team to discuss your Oracle and SAP security needs.</p>
                </div>
            </div>
        </div>

        <div class="bg-[rgba(217,217,217,0.41)]">
            <div class="container mx-auto p-4 mt-5 py-10">
                <div class="relative grid lg:grid-cols-2 gap-4 lg:gap-10">
                    <div>
                        <h2 class="font-bold text-xl sm:text-2xl md:text-4xl">Our Locations</h2>
                        <p class="text-base md:text-xl mt-4 leading-relaxed">7200 W University Dr, <br> Suite 216, <br> McKinney, TX 75071</p>
                        <p class="text-base md:text-xl mt-4 leading-relaxed">15650 N Black Canyon Hwy, <br> STE B135, <br> Phoenix, AZ - 85053.</p>
                        <p class="text-base md:text-xl mt-4 leading-relaxed">Phone: <a href="tel:+1-602-500-6054" class="hover:text-[#13FEFE]">+1 602 500 6054</a></p>
                        <p class="text-base md:text-xl mt-4 leading-relaxed font-semibold">Service Areas: We serve clients worldwide with expertise in Oracle and SAP environments across all major industries.</p>
                    </div>

                    <div class="relative">
                        <div class="lg:absolute lg:right-0 lg:-top-[380px] bg-[#E2E2E2] p-4 rounded-xl">

                            <!-- Success/Error Messages -->
                            <div id="message-container"></div>

                            <form action="send-mail.php" method="POST" id="contactForm" class="lg:max-w-xl space-y-4">
                                <!-- ✅ FIXED: 'page' field se auto redirect hoga, koi hardcoded URL nahi -->
                                <input type="hidden" name="page" value="contact">
                                <input type="hidden" name="source" value="Contact page">

                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                    <div class="space-y-1">
                                        <label class="font-medium">Full Name <span class="text-red-500">*</span></label>
                                        <input type="text" name="name" id="name" required minlength="2" maxlength="100"
                                            class="w-full bg-white rounded-md focus:outline-none focus:ring-2 focus:ring-[#030F47] text-xl px-4 py-2 border border-gray-300">
                                        <span class="text-red-500 text-sm hidden" id="name-error"></span>
                                    </div>
                                    <div class="space-y-1">
                                        <label class="font-medium">Email <span class="text-red-500">*</span></label>
                                        <input type="email" name="email" id="email" required
                                            class="w-full bg-white rounded-md focus:outline-none focus:ring-2 focus:ring-[#030F47] text-xl px-4 py-2 border border-gray-300">
                                        <span class="text-red-500 text-sm hidden" id="email-error"></span>
                                    </div>
                                    <div class="space-y-1 md:col-span-2">
                                        <label class="font-medium">Company Name</label>
                                        <input type="text" name="company" id="company" maxlength="100"
                                            class="w-full bg-white rounded-md focus:outline-none focus:ring-2 focus:ring-[#030F47] text-xl px-4 py-2 border border-gray-300">
                                    </div>
                                </div>

                                <div class="space-y-1">
                                    <label class="font-medium">Message <span class="text-red-500">*</span></label>
                                    <textarea name="message" id="message" rows="5" required minlength="10" maxlength="5000"
                                        class="w-full bg-white rounded-md focus:outline-none focus:ring-2 focus:ring-[#030F47] text-xl px-4 py-2 border border-gray-300"></textarea>
                                    <span class="text-red-500 text-sm hidden" id="message-error"></span>
                                    <span class="text-gray-500 text-sm" id="char-count">0/5000 characters</span>
                                </div>

                                <!-- CAPTCHA -->
                                <div class="space-y-1">
                                    <label class="font-medium">Security Verification <span class="text-red-500">*</span></label>
                                    <div class="captcha-box">
                                        <img src="generate-captcha.php" alt="CAPTCHA" id="captcha-image" class="captcha-image" width="200" height="60">
                                        <button type="button" onclick="refreshCaptcha()" class="refresh-captcha" title="Refresh CAPTCHA">
                                            🔄 Refresh
                                        </button>
                                    </div>
                                    <input type="number" name="captcha_answer" id="captcha_answer" required
                                        placeholder="Enter the answer"
                                        class="w-full bg-white rounded-md focus:outline-none focus:ring-2 focus:ring-[#030F47] text-xl px-4 py-2 border border-gray-300 mt-2">
                                    <span class="text-red-500 text-sm hidden" id="captcha-error"></span>
                                </div>

                                <!-- Honeypot -->
                                <input type="text" name="website" id="website" style="display:none;" tabindex="-1" autocomplete="off">

                                <button type="submit" id="submitBtn"
                                    class="bg-[#312E2E] text-white w-full py-4 mt-4 rounded-md hover:bg-[#030F47] transition-colors disabled:opacity-50 disabled:cursor-not-allowed">
                                    Submit Inquiry
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container mx-auto p-4 my-5 sm:my-10">
            <div class="grid md:grid-cols-2 gap-4">
                <div class="flex flex-col sm:flex-row gap-4 bg-[#ECEBEB] rounded-xl p-4 shadow-lg">
                    <div class="sm:h-[140px] lg:h-[200px] shrink-0">
                        <img src="https://erpsecurityexperts.com/assets/images/taraj-khan-image.webp" alt="Taraj Khan" class="w-full h-full object-contain">
                    </div>
                    <div>
                        <p class="text-xl font-semibold">Taraj Khan</p>
                        <p class="text-xl font-semibold">Co-Founder and Director – Oracle Security & Risk Management Expert</p>
                        <p>Email: <a href="mailto:tkhan@erpsecurityexperts.com">tkhan@erpsecurityexperts.com</a></p>
                    </div>
                </div>
                <div class="flex flex-col sm:flex-row gap-4 bg-[#ECEBEB] rounded-xl p-4 shadow-lg">
                    <div class="sm:h-[140px] lg:h-[200px] shrink-0">
                        <img src="https://erpsecurityexperts.com/assets/images/asim-siddiqui.webp" alt="Asim Siddiqui" class="w-full h-full object-contain">
                    </div>
                    <div>
                        <p class="text-xl font-semibold">Asim Siddiqui</p>
                        <p class="text-xl font-semibold">Co Founder and Director - Oracle Cloud & Cybersecurity Specialist</p>
                        <p>Email: <a href="mailto:asiddiqui@erpsecurityexperts.com">asiddiqui@erpsecurityexperts.com</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'footer.php'; ?>

    <script>
        document.addEventListener('DOMContentLoaded', function () {

            function refreshCaptcha() {
                document.getElementById('captcha-image').src = 'generate-captcha.php?' + Date.now();
                document.getElementById('captcha_answer').value = '';
            }
            window.refreshCaptcha = refreshCaptcha;

            // Status message
            const urlParams = new URLSearchParams(window.location.search);
            const status = urlParams.get('status');
            const messageContainer = document.getElementById('message-container');

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
                    <div class="${bgColor} px-4 py-3 rounded-lg mb-4 text-center font-medium animate-pulse" style="font-size:16px;">
                        ${message}
                    </div>`;

                if (type === 'error' && ['captcha_failed','captcha_empty','captcha_expired'].includes(status)) {
                    refreshCaptcha();
                }

                setTimeout(() => {
                    const formSection = document.querySelector('.bg-\\[rgba\\(217\\,217\\,217\\,0\\.41\\)\\]');
                    if (formSection) formSection.scrollIntoView({ behavior: 'smooth', block: 'start' });
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
            const messageField = document.getElementById('message');
            const charCount = document.getElementById('char-count');
            messageField.addEventListener('input', function () {
                const length = this.value.length;
                charCount.textContent = `${length}/5000 characters`;
                charCount.className = length > 5000 ? 'text-red-500 text-sm' : 'text-gray-500 text-sm';
            });

            // Email validation
            document.getElementById('email').addEventListener('blur', function () {
                const emailError = document.getElementById('email-error');
                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (this.value && !emailRegex.test(this.value)) {
                    emailError.textContent = 'Please enter a valid email address';
                    emailError.classList.remove('hidden');
                    this.classList.add('border-red-500');
                } else {
                    emailError.classList.add('hidden');
                    this.classList.remove('border-red-500');
                }
            });

            // Form submit
            document.getElementById('contactForm').addEventListener('submit', function (e) {
                const submitBtn = document.getElementById('submitBtn');
                if (document.getElementById('website').value !== '') { e.preventDefault(); return false; }
                if (!document.getElementById('captcha_answer').value) {
                    e.preventDefault();
                    const captchaError = document.getElementById('captcha-error');
                    captchaError.textContent = 'Please solve the math problem';
                    captchaError.classList.remove('hidden');
                    return false;
                }
                submitBtn.disabled = true;
                submitBtn.innerHTML = 'Sending... ⏳';
            });

            // Name validation
            document.getElementById('name').addEventListener('input', function () {
                const nameError = document.getElementById('name-error');
                if (this.value.length > 0 && this.value.length < 2) {
                    nameError.textContent = 'Name must be at least 2 characters';
                    nameError.classList.remove('hidden');
                } else {
                    nameError.classList.add('hidden');
                }
            });

            // CAPTCHA clear error
            document.getElementById('captcha_answer').addEventListener('input', function () {
                document.getElementById('captcha-error').classList.add('hidden');
            });

        });
    </script>

</body>
</html>