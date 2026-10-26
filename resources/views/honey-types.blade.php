<!DOCTYPE html>
<html lang="ar" dir="rtl" x-data="{ lang: 'ar', toggleLang(){ this.lang = this.lang === 'ar' ? 'en' : 'ar'; document.documentElement.lang = this.lang; document.body.dir = this.lang === 'ar' ? 'rtl' : 'ltr'; } }" :dir="lang === 'ar' ? 'rtl' : 'ltr'">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title x-text="lang === 'ar' ? 'أنواع العسل الملكي | عسل إسراء الملكي' : 'Royal Honey Types | Esraa Royal Honey'"></title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Cairo', sans-serif; }
    </style>
</head>
<body class="bg-amber-50/40 text-gray-800">

    <!-- Header -->
    <header class="bg-white shadow-md sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 py-3 flex justify-between items-center">
            <div class="flex items-center gap-3">
                <img src="{{ asset('images/logo.jpg') }}" alt="لوجو عسل إسراء الملكي" class="w-14 h-14 object-cover rounded-full border-2 border-amber-500 shadow-md">
                <div>
                    <h1 class="text-xl font-extrabold text-amber-900" x-text="lang === 'ar' ? 'عسل إسراء الملكي' : 'Esraa Royal Honey'"></h1>
                    <p class="text-xs text-amber-700 font-semibold" x-text="lang === 'ar' ? 'أنواع العسل الملكي العلاجي' : 'Royal Therapeutic Honey Types'"></p>
                </div>
            </div>
            <div class="flex items-center gap-4">
                <a href="{{ url('/') }}" class="text-sm font-bold text-amber-800 hover:text-amber-600 transition" x-text="lang === 'ar' ? 'الرئيسية' : 'Home'"></a>
                <button @click="toggleLang()" class="bg-amber-100 hover:bg-amber-200 text-amber-900 px-4 py-2 rounded-lg text-sm font-bold transition border border-amber-300 shadow-sm cursor-pointer">
                    <span x-text="lang === 'ar' ? 'English' : 'عربي'"></span>
                </button>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="max-w-6xl mx-auto px-4 py-10 space-y-8" 
          x-data="{ 
              qty1_30: 0, qty1_250: 0, qty1_500: 0, qty1_1000: 0,
              qty2_30: 0, qty2_250: 0, qty2_500: 0, qty2_1000: 0,
              qty3_30: 0, qty3_250: 0, qty3_500: 0, qty3_1000: 0,
              qty4_30: 0, qty4_250: 0, qty4_500: 0, qty4_1000: 0,
              qty5_30: 0, qty5_250: 0, qty5_500: 0, qty5_1000: 0,
              qty6_30: 0, qty6_250: 0, qty6_500: 0, qty6_1000: 0,
              qty7_30: 0, qty7_250: 0, qty7_500: 0, qty7_1000: 0,
              qty8_30: 0, qty8_250: 0, qty8_500: 0, qty8_1000: 0,
              qty9_30: 0, qty9_250: 0, qty9_500: 0, qty9_1000: 0,
              qty10_30: 0, qty10_250: 0, qty10_500: 0, qty10_1000: 0,
              qty11_30: 0, qty11_250: 0, qty11_500: 0, qty11_1000: 0,
              qty12_30: 0, qty12_250: 0, qty12_500: 0, qty12_1000: 0,
              qty13_30: 0, qty13_250: 0, qty13_500: 0, qty13_1000: 0,
              qty14_30: 0, qty14_250: 0, qty14_500: 0, qty14_1000: 0,
              qty15_30: 0, qty15_250: 0, qty15_500: 0, qty15_1000: 0,
              qty16_30: 0, qty16_250: 0, qty16_500: 0, qty16_1000: 0,
              qty17_30: 0, qty17_250: 0, qty17_500: 0, qty17_1000: 0,


              getTotalPrice() {
                  return (this.qty1_30 * 100) + (this.qty1_250 * 550) + (this.qty1_500 * 900) + (this.qty1_1000 * 1700) +
                         (this.qty2_30 * 120) + (this.qty2_250 * 750) + (this.qty2_500 * 1350) + (this.qty2_1000 * 2650) +
                         (this.qty3_30 * 110) + (this.qty3_250 * 750) + (this.qty3_500 * 1200) + (this.qty3_1000 * 2100) +
                         (this.qty4_30 * 0) + (this.qty4_250 * 1100) + (this.qty4_500 * 2100) + (this.qty4_1000 * 4000) +
                         (this.qty5_30 * 0) + (this.qty5_250 * 2500) + (this.qty5_500 * 5000) + (this.qty5_1000 * 9500) +
                         (this.qty6_30 * 0) + (this.qty6_250 * 900) + (this.qty6_500 * 1900) + (this.qty6_1000 * 3750) +
                         (this.qty7_30 * 0) + (this.qty7_250 * 750) + (this.qty7_500 * 1350) + (this.qty7_1000 * 2650) +
                         (this.qty8_30 * 0) + (this.qty8_250 * 1100) + (this.qty8_500 * 2100) + (this.qty8_1000 * 4000) +
                         (this.qty9_30 * 0) + (this.qty9_250 * 750) + (this.qty9_500 * 1350) + (this.qty9_1000 * 2650) +
                         (this.qty10_30 * 0) + (this.qty10_250 * 750) + (this.qty10_500 * 1250) + (this.qty10_1000 * 2350) +
                         (this.qty11_30 * 0) + (this.qty11_250 * 500) + (this.qty11_500 * 950) + (this.qty11_1000 * 1800) +
                         (this.qty12_30 * 0) + (this.qty12_250 * 0) + (this.qty12_500 * 1250) + (this.qty12_1000 * 2350) +
                         (this.qty13_30 * 0) + (this.qty13_250 * 0) + (this.qty13_500 * 0) + (this.qty13_1000 * 2950) +
                         (this.qty14_30 * 0) + (this.qty14_250 * 0) + (this.qty14_500 * 2200) + (this.qty14_1000 * 0) +
                         (this.qty15_30 * 0) + (this.qty15_250 * 650) + (this.qty15_500 * 1250) + (this.qty15_1000 * 2350) +
                         (this.qty16_30 * 0) + (this.qty16_250 * 0) + (this.qty16_500 * 2000) + (this.qty16_1000 * 3900) +
                         (this.qty17_30 * 0) + (this.qty17_250 * 1450) + (this.qty17_500 * 2800) + (this.qty17_1000 * 5450);
              },
              getTotalItems() {
                  return this.qty1_30 + this.qty1_250 + this.qty1_500 + this.qty1_1000 +
                         this.qty2_30 + this.qty2_250 + this.qty2_500 + this.qty2_1000 +
                         this.qty3_30 + this.qty3_250 + this.qty3_500 + this.qty3_1000 +
                         this.qty4_30 + this.qty4_250 + this.qty4_500 + this.qty4_1000 +
                         this.qty5_30 + this.qty5_250 + this.qty5_500 + this.qty5_1000 +
                         this.qty6_30 + this.qty6_250 + this.qty6_500 + this.qty6_1000 +
                         this.qty7_30 + this.qty7_250 + this.qty7_500 + this.qty7_1000 +
                         this.qty8_30 + this.qty8_250 + this.qty8_500 + this.qty8_1000 +
                         this.qty9_30 + this.qty9_250 + this.qty9_500 + this.qty9_1000 +
                         this.qty10_30 + this.qty10_250 + this.qty10_500 + this.qty10_1000 +
                         this.qty11_30 + this.qty11_250 + this.qty11_500 + this.qty11_1000 +
                         this.qty12_30 + this.qty12_250 + this.qty12_500 + this.qty12_1000 +
                         this.qty13_30 + this.qty13_250 + this.qty13_500 + this.qty13_1000 +
                         this.qty14_30 + this.qty14_250 + this.qty14_500 + this.qty14_1000 +
                         this.qty15_30 + this.qty15_250 + this.qty15_500 + this.qty15_1000 +
                         this.qty16_30 + this.qty16_250 + this.qty16_500 + this.qty16_1000 +
                         this.qty17_30 + this.qty17_250 + this.qty17_500 + this.qty17_1000;
              },
              addToCart() {
                  if(this.getTotalItems() === 0) {
                      alert('الرجاء اختيار عبوة واحدة على الأقل قبل الإضافة إلى السلة!');
                      return;
                  }
                  alert('تمت إضافة الطلب بنجاح إلى السلة!\nإجمالي القطع: ' + this.getTotalItems() + '\nالمجموع الكلي: ' + this.getTotalPrice() + ' ليرة');
              }
          }">
        
        <!-- Page Title Banner -->
        <div class="bg-gradient-to-r from-amber-800 to-amber-950 text-white p-8 rounded-3xl shadow-xl text-center space-y-3">
            <h2 class="text-3xl md:text-4xl font-extrabold text-amber-200" x-text="lang === 'ar' ? 'مجموعة العسل الملكي الفاخر' : 'Luxury Royal Honey Collection'"></h2>
            <p class="text-amber-100 text-sm md:text-base max-w-xl mx-auto" x-text="lang === 'ar' ? 'اكتشف أنواع العسل الطبيعي الصافي بجميع أوزانها وفوائدها العلاجية الملكية.' : 'Discover pure natural honey types with all weights and royal therapeutic benefits.'"></p>
        </div>

        <!-- Honey Grid (كل نوعين جنب بـ جنب) -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

            <!-- 1. عسل الأشواك -->
            <div x-data="{ open: false }" class="bg-white rounded-3xl shadow-lg border-2 border-amber-200 overflow-hidden flex flex-col justify-between hover:shadow-xl transition duration-300">
                <div class="p-6 flex flex-col space-y-4">
                    <div class="flex flex-col sm:flex-row items-center gap-6">
                        <div class="w-40 h-40 shrink-0 rounded-2xl overflow-hidden shadow-md border border-amber-300 bg-amber-50 flex items-center justify-center">
                            <img src="{{ asset('images/honey_1_1.jpg') }}" alt="عسل الأشواك" class="w-full h-full object-cover">
                        </div>
                        <div class="text-right space-y-2 flex-1">
                            <h3 class="text-2xl font-extrabold text-amber-900">عسل الأشواك</h3>
                            <div class="text-xs text-gray-700 space-y-1 bg-amber-50/80 p-3 rounded-xl border border-amber-200">
                                <p><strong>دعم الجهاز الهضمي:</strong> يهدئ القولون العصبي وقرحة المعدة.</p>
                                <p><strong>فقر الدم:</strong> غني بالحديد والمعادن لرفع الهيموغلوبين.</p>
                                <p><strong>الكبد:</strong> ينشط وظائف الكبد ويساعد على طرد السموم.</p>
                            </div>
                        </div>
                    </div>
                    <div class="pt-2 flex justify-center">
                        <button type="button" @click="open = !open" class="bg-amber-700 hover:bg-amber-800 text-white font-bold px-6 py-2.5 rounded-xl text-sm transition shadow flex items-center gap-2 cursor-pointer">
                            <span x-text="open ? 'إخفاء التفاصيل والأسعار' : 'اقرأ المزيد & الأسعار'"></span>
                            <svg class="w-4 h-4 transition-transform duration-300" :class="open ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                    </div>
                </div>

                <div x-show="open" x-transition class="bg-amber-50/70 border-t border-amber-200 p-6 space-y-6">
                    <div class="w-full h-48 sm:h-52 rounded-2xl overflow-hidden shadow-inner border border-amber-300 bg-white">
                        <img src="{{ asset('images/honey_1_2.jpg') }}" alt="عسل الأشواك - تفاصيل" class="w-full h-full object-contain">
                    </div>
                    <div class="space-y-3">
                        <h4 class="font-bold text-amber-900 border-b border-amber-300 pb-1 text-lg">الأحجام المتوفرة والأسعار:</h4>
                        <div class="grid grid-cols-1 gap-3">
                            <div class="bg-white p-3 rounded-xl border border-amber-200 flex items-center justify-between shadow-sm">
                                <div class="flex items-center gap-3">
                                    <div class="w-16 h-16 bg-amber-50 rounded-lg overflow-hidden border border-amber-200 shrink-0"><img src="{{ asset('images/honey_1_3.jpg') }}" alt="٣٠غ" class="w-full h-full object-cover"></div>
                                    <div><span class="font-bold text-amber-900 block text-sm">٣٠ غرام</span><span class="text-xs text-amber-600 block">عبوة زجاجية</span><span class="text-xs font-bold text-amber-700">١٠٠ ليرة</span></div>
                                </div>
                                <div class="flex items-center gap-2 bg-amber-50 p-1.5 rounded-xl border border-amber-200">
                                    <button type="button" @click="if(qty1_30 > 0) qty1_30--" class="w-7 h-7 bg-white text-amber-900 font-bold rounded-lg shadow-sm hover:bg-amber-100 flex items-center justify-center cursor-pointer">-</button>
                                    <span class="w-8 text-center font-bold text-sm" x-text="qty1_30"></span>
                                    <button type="button" @click="qty1_30++" class="w-7 h-7 bg-amber-700 text-white font-bold rounded-lg shadow-sm hover:bg-amber-800 flex items-center justify-center cursor-pointer">+</button>
                                </div>
                            </div>
                            <div class="bg-white p-3 rounded-xl border border-amber-200 flex items-center justify-between shadow-sm">
                                <div class="flex items-center gap-3">
                                    <div class="w-16 h-16 bg-amber-50 rounded-lg overflow-hidden border border-amber-200 shrink-0"><img src="{{ asset('images/honey_1_4.jpg') }}" alt="٢٥٠غ" class="w-full h-full object-cover"></div>
                                    <div><span class="font-bold text-amber-900 block text-sm">٢٥٠ غرام</span><span class="text-xs text-amber-600 block">عبوة زجاجية</span><span class="text-xs font-bold text-amber-700">٥٥٠ ليرة</span></div>
                                </div>
                                <div class="flex items-center gap-2 bg-amber-50 p-1.5 rounded-xl border border-amber-200">
                                    <button type="button" @click="if(qty1_250 > 0) qty1_250--" class="w-7 h-7 bg-white text-amber-900 font-bold rounded-lg shadow-sm hover:bg-amber-100 flex items-center justify-center cursor-pointer">-</button>
                                    <span class="w-8 text-center font-bold text-sm" x-text="qty1_250"></span>
                                    <button type="button" @click="qty1_250++" class="w-7 h-7 bg-amber-700 text-white font-bold rounded-lg shadow-sm hover:bg-amber-800 flex items-center justify-center cursor-pointer">+</button>
                                </div>
                            </div>
                            <div class="bg-white p-3 rounded-xl border border-amber-200 flex items-center justify-between shadow-sm">
                                <div class="flex items-center gap-3">
                                    <div class="w-16 h-16 bg-amber-50 rounded-lg overflow-hidden border border-amber-200 shrink-0"><img src="{{ asset('images/honey_1_5.jpg') }}" alt="٥٠٠غ" class="w-full h-full object-cover"></div>
                                    <div><span class="font-bold text-amber-900 block text-sm">٥٠٠ غرام</span><span class="text-xs text-amber-600 block">عبوة زجاجية</span><span class="text-xs font-bold text-amber-700">٩٠٠ ليرة</span></div>
                                </div>
                                <div class="flex items-center gap-2 bg-amber-50 p-1.5 rounded-xl border border-amber-200">
                                    <button type="button" @click="if(qty1_500 > 0) qty1_500--" class="w-7 h-7 bg-white text-amber-900 font-bold rounded-lg shadow-sm hover:bg-amber-100 flex items-center justify-center cursor-pointer">-</button>
                                    <span class="w-8 text-center font-bold text-sm" x-text="qty1_500"></span>
                                    <button type="button" @click="qty1_500++" class="w-7 h-7 bg-amber-700 text-white font-bold rounded-lg shadow-sm hover:bg-amber-800 flex items-center justify-center cursor-pointer">+</button>
                                </div>
                            </div>
                            <div class="bg-white p-3 rounded-xl border border-amber-200 flex items-center justify-between shadow-sm">
                                <div class="flex items-center gap-3">
                                    <div class="w-16 h-16 bg-amber-50 rounded-lg overflow-hidden border border-amber-200 shrink-0"><img src="{{ asset('images/honey_1_6.jpg') }}" alt="١٠٠٠غ" class="w-full h-full object-cover"></div>
                                    <div><span class="font-bold text-amber-900 block text-sm">١٠٠٠ غرام (كيلو)</span><span class="text-xs text-amber-600 block">عبوة زجاجية</span><span class="text-xs font-bold text-amber-700">١٧٠٠ ليرة</span></div>
                                </div>
                                <div class="flex items-center gap-2 bg-amber-50 p-1.5 rounded-xl border border-amber-200">
                                    <button type="button" @click="if(qty1_1000 > 0) qty1_1000--" class="w-7 h-7 bg-white text-amber-900 font-bold rounded-lg shadow-sm hover:bg-amber-100 flex items-center justify-center cursor-pointer">-</button>
                                    <span class="w-8 text-center font-bold text-sm" x-text="qty1_1000"></span>
                                    <button type="button" @click="qty1_1000++" class="w-7 h-7 bg-amber-700 text-white font-bold rounded-lg shadow-sm hover:bg-amber-800 flex items-center justify-center cursor-pointer">+</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white p-4 rounded-2xl border border-amber-200 space-y-2 text-sm text-gray-700">
                        <h4 class="font-bold text-amber-900 border-b pb-1">مواصفات عسل الأشواك:</h4>
                        <p><strong>اللون:</strong> العنبي الفاتح إلى الذهبي.</p>
                        <p><strong>الطعم:</strong> حلو ورائع مع لمسة عشبية خفيفة.</p>
                        <p><strong>الرائحة:</strong> منعشة تعبق برائحة الزهور البرية والشوكية.</p>
                        <p><strong>مكان الإنتاج:</strong> سوريا.</p>
                        <p><strong>وقت الإنتاج:</strong> من الشهر الخامس إلى الشهر السابع.</p>
                    </div>
                </div>
            </div>

            <!-- 2. عسل حبة البركة -->
            <div x-data="{ open: false }" class="bg-white rounded-3xl shadow-lg border-2 border-amber-200 overflow-hidden flex flex-col justify-between hover:shadow-xl transition duration-300">
                <div class="p-6 flex flex-col space-y-4">
                    <div class="flex flex-col sm:flex-row items-center gap-6">
                        <div class="w-40 h-40 shrink-0 rounded-2xl overflow-hidden shadow-md border border-amber-300 bg-amber-50 flex items-center justify-center">
                            <img src="{{ asset('images/honey_2_1.jpg') }}" alt="عسل حبة البركة" class="w-full h-full object-cover">
                        </div>
                        <div class="text-right space-y-2 flex-1">
                            <h3 class="text-2xl font-extrabold text-amber-900">عسل حبة البركة</h3>
                            <div class="text-xs text-gray-700 space-y-1 bg-amber-50/80 p-3 rounded-xl border border-amber-200">
                                <p><strong>تعزيز المناعة:</strong> يحتوي على مضادات أكسدة قوية ترفع مناعة الجسم.</p>
                                <p><strong>الجهاز التنفسي:</strong> يخفف السعال، الربو، والتهابات الصدر.</p>
                                <p><strong>نشاط البنكرياس:</strong> يساعد في تنظيم مستويات السكر في الدم.</p>
                            </div>
                        </div>
                    </div>
                    <div class="pt-2 flex justify-center">
                        <button type="button" @click="open = !open" class="bg-amber-700 hover:bg-amber-800 text-white font-bold px-6 py-2.5 rounded-xl text-sm transition shadow flex items-center gap-2 cursor-pointer">
                            <span x-text="open ? 'إخفاء التفاصيل والأسعار' : 'اقرأ المزيد & الأسعار'"></span>
                            <svg class="w-4 h-4 transition-transform duration-300" :class="open ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                    </div>
                </div>

                <div x-show="open" x-transition class="bg-amber-50/70 border-t border-amber-200 p-6 space-y-6">
                    <div class="w-full h-48 sm:h-52 rounded-2xl overflow-hidden shadow-inner border border-amber-300 bg-white">
                        <img src="{{ asset('images/honey_2_2.jpg') }}" alt="عسل حبة البركة - تفاصيل" class="w-full h-full object-contain">
                    </div>
                    <div class="space-y-3">
                        <h4 class="font-bold text-amber-900 border-b border-amber-300 pb-1 text-lg">الأحجام المتوفرة والأسعار:</h4>
                        <div class="grid grid-cols-1 gap-3">
                            <div class="bg-white p-3 rounded-xl border border-amber-200 flex items-center justify-between shadow-sm">
                                <div class="flex items-center gap-3">
                                    <div class="w-16 h-16 bg-amber-50 rounded-lg overflow-hidden border border-amber-200 shrink-0"><img src="{{ asset('images/honey_2_3.jpg') }}" alt="٣٠غ" class="w-full h-full object-cover"></div>
                                    <div><span class="font-bold text-amber-900 block text-sm">٣٠ غرام</span><span class="text-xs text-amber-600 block">عبوة زجاجية</span><span class="text-xs font-bold text-amber-700">١٢٠ ليرة</span></div>
                                </div>
                                <div class="flex items-center gap-2 bg-amber-50 p-1.5 rounded-xl border border-amber-200">
                                    <button type="button" @click="if(qty2_30 > 0) qty2_30--" class="w-7 h-7 bg-white text-amber-900 font-bold rounded-lg shadow-sm hover:bg-amber-100 flex items-center justify-center cursor-pointer">-</button>
                                    <span class="w-8 text-center font-bold text-sm" x-text="qty2_30"></span>
                                    <button type="button" @click="qty2_30++" class="w-7 h-7 bg-amber-700 text-white font-bold rounded-lg shadow-sm hover:bg-amber-800 flex items-center justify-center cursor-pointer">+</button>
                                </div>
                            </div>
                            <div class="bg-white p-3 rounded-xl border border-amber-200 flex items-center justify-between shadow-sm">
                                <div class="flex items-center gap-3">
                                    <div class="w-16 h-16 bg-amber-50 rounded-lg overflow-hidden border border-amber-200 shrink-0"><img src="{{ asset('images/honey_2_4.jpg') }}" alt="٢٥٠غ" class="w-full h-full object-cover"></div>
                                    <div><span class="font-bold text-amber-900 block text-sm">٢٥٠ غرام</span><span class="text-xs text-amber-600 block">عبوة زجاجية</span><span class="text-xs font-bold text-amber-700">٧٥٠ ليرة</span></div>
                                </div>
                                <div class="flex items-center gap-2 bg-amber-50 p-1.5 rounded-xl border border-amber-200">
                                    <button type="button" @click="if(qty2_250 > 0) qty2_250--" class="w-7 h-7 bg-white text-amber-900 font-bold rounded-lg shadow-sm hover:bg-amber-100 flex items-center justify-center cursor-pointer">-</button>
                                    <span class="w-8 text-center font-bold text-sm" x-text="qty2_250"></span>
                                    <button type="button" @click="qty2_250++" class="w-7 h-7 bg-amber-700 text-white font-bold rounded-lg shadow-sm hover:bg-amber-800 flex items-center justify-center cursor-pointer">+</button>
                                </div>
                            </div>
                            <div class="bg-white p-3 rounded-xl border border-amber-200 flex items-center justify-between shadow-sm">
                                <div class="flex items-center gap-3">
                                    <div class="w-16 h-16 bg-amber-50 rounded-lg overflow-hidden border border-amber-200 shrink-0"><img src="{{ asset('images/honey_2_5.jpg') }}" alt="٥٠٠غ" class="w-full h-full object-cover"></div>
                                    <div><span class="font-bold text-amber-900 block text-sm">٥٠٠ غرام</span><span class="text-xs text-amber-600 block">عبوة زجاجية</span><span class="text-xs font-bold text-amber-700">١٣٥٠ ليرة</span></div>
                                </div>
                                <div class="flex items-center gap-2 bg-amber-50 p-1.5 rounded-xl border border-amber-200">
                                    <button type="button" @click="if(qty2_500 > 0) qty2_500--" class="w-7 h-7 bg-white text-amber-900 font-bold rounded-lg shadow-sm hover:bg-amber-100 flex items-center justify-center cursor-pointer">-</button>
                                    <span class="w-8 text-center font-bold text-sm" x-text="qty2_500"></span>
                                    <button type="button" @click="qty2_500++" class="w-7 h-7 bg-amber-700 text-white font-bold rounded-lg shadow-sm hover:bg-amber-800 flex items-center justify-center cursor-pointer">+</button>
                                </div>
                            </div>
                            <div class="bg-white p-3 rounded-xl border border-amber-200 flex items-center justify-between shadow-sm">
                                <div class="flex items-center gap-3">
                                    <div class="w-16 h-16 bg-amber-50 rounded-lg overflow-hidden border border-amber-200 shrink-0"><img src="{{ asset('images/honey_2_6.jpg') }}" alt="١٠٠٠غ" class="w-full h-full object-cover"></div>
                                    <div><span class="font-bold text-amber-900 block text-sm">١٠٠٠ غرام (كيلو)</span><span class="text-xs text-amber-600 block">عبوة زجاجية</span><span class="text-xs font-bold text-amber-700">٢٦٥٠ ليرة</span></div>
                                </div>
                                <div class="flex items-center gap-2 bg-amber-50 p-1.5 rounded-xl border border-amber-200">
                                    <button type="button" @click="if(qty2_1000 > 0) qty2_1000--" class="w-7 h-7 bg-white text-amber-900 font-bold rounded-lg shadow-sm hover:bg-amber-100 flex items-center justify-center cursor-pointer">-</button>
                                    <span class="w-8 text-center font-bold text-sm" x-text="qty2_1000"></span>
                                    <button type="button" @click="qty2_1000++" class="w-7 h-7 bg-amber-700 text-white font-bold rounded-lg shadow-sm hover:bg-amber-800 flex items-center justify-center cursor-pointer">+</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white p-4 rounded-2xl border border-amber-200 space-y-2 text-sm text-gray-700">
                        <h4 class="font-bold text-amber-900 border-b pb-1">مواصفات عسل حبة البركة:</h4>
                        <p><strong>اللون:</strong> العنبي الغامق المائل للسواد.</p>
                        <p><strong>الطعم:</strong> قوي ومميز بنكهة حبة البركة الأصيلة.</p>
                        <p><strong>الرائحة:</strong> فواحة وعطرة تعكس خلاصة الحبة السوداء.</p>
                        <p><strong>مكان الإنتاج:</strong> سوريا.</p>
                        <p><strong>وقت الإنتاج:</strong> من الشهر السادس إلى الشهر التاسع.</p>
                    </div>
                </div>
            </div>

            <!-- 3. العسل الجبلي -->
            <div x-data="{ open: false }" class="bg-white rounded-3xl shadow-lg border-2 border-amber-200 overflow-hidden flex flex-col justify-between hover:shadow-xl transition duration-300">
                <div class="p-6 flex flex-col space-y-4">
                    <div class="flex flex-col sm:flex-row items-center gap-6">
                        <div class="w-40 h-40 shrink-0 rounded-2xl overflow-hidden shadow-md border border-amber-300 bg-amber-50 flex items-center justify-center">
                            <img src="{{ asset('images/honey_3_1.jpg') }}" alt="العسل الجبلي" class="w-full h-full object-cover">
                        </div>
                        <div class="text-right space-y-2 flex-1">
                            <h3 class="text-2xl font-extrabold text-amber-900">العسل الجبلي</h3>
                            <div class="text-xs text-gray-700 space-y-1 bg-amber-50/80 p-3 rounded-xl border border-amber-200">
                                <p><strong>مقوٍّ عام:</strong> يمنح الجسم طاقة فورية ويعالج الخمول والضعف العام.</p>
                                <p><strong>الصحة الجنسية:</strong> يعزز الخصوبة والقدرة الجنسية لدى الرجال والنساء.</p>
                                <p><strong>مكافحة الشيخوخة:</strong> غني بمضادات الأكسدة التي تحمي الخلايا.</p>
                            </div>
                        </div>
                    </div>
                    <div class="pt-2 flex justify-center">
                        <button type="button" @click="open = !open" class="bg-amber-700 hover:bg-amber-800 text-white font-bold px-6 py-2.5 rounded-xl text-sm transition shadow flex items-center gap-2 cursor-pointer">
                            <span x-text="open ? 'إخفاء التفاصيل والأسعار' : 'اقرأ المزيد & الأسعار'"></span>
                            <svg class="w-4 h-4 transition-transform duration-300" :class="open ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                    </div>
                </div>

                <div x-show="open" x-transition class="bg-amber-50/70 border-t border-amber-200 p-6 space-y-6">
                    <div class="w-full h-48 sm:h-52 rounded-2xl overflow-hidden shadow-inner border border-amber-300 bg-white">
                        <img src="{{ asset('images/honey_3_2.jpg') }}" alt="العسل الجبلي - تفاصيل" class="w-full h-full object-contain">
                    </div>
                    <div class="space-y-3">
                        <h4 class="font-bold text-amber-900 border-b border-amber-300 pb-1 text-lg">الأحجام المتوفرة والأسعار:</h4>
                        <div class="grid grid-cols-1 gap-3">
                            <div class="bg-white p-3 rounded-xl border border-amber-200 flex items-center justify-between shadow-sm">
                                <div class="flex items-center gap-3">
                                    <div class="w-16 h-16 bg-amber-50 rounded-lg overflow-hidden border border-amber-200 shrink-0"><img src="{{ asset('images/honey_3_3.jpg') }}" alt="٣٠غ" class="w-full h-full object-cover"></div>
                                    <div><span class="font-bold text-amber-900 block text-sm">٣٠ غرام</span><span class="text-xs text-amber-600 block">عبوة زجاجية</span><span class="text-xs font-bold text-amber-700">١١٠ ليرة</span></div>
                                </div>
                                <div class="flex items-center gap-2 bg-amber-50 p-1.5 rounded-xl border border-amber-200">
                                    <button type="button" @click="if(qty3_30 > 0) qty3_30--" class="w-7 h-7 bg-white text-amber-900 font-bold rounded-lg shadow-sm hover:bg-amber-100 flex items-center justify-center cursor-pointer">-</button>
                                    <span class="w-8 text-center font-bold text-sm" x-text="qty3_30"></span>
                                    <button type="button" @click="qty3_30++" class="w-7 h-7 bg-amber-700 text-white font-bold rounded-lg shadow-sm hover:bg-amber-800 flex items-center justify-center cursor-pointer">+</button>
                                </div>
                            </div>
                            <div class="bg-white p-3 rounded-xl border border-amber-200 flex items-center justify-between shadow-sm">
                                <div class="flex items-center gap-3">
                                    <div class="w-16 h-16 bg-amber-50 rounded-lg overflow-hidden border border-amber-200 shrink-0"><img src="{{ asset('images/honey_3_4.jpg') }}" alt="٢٥٠غ" class="w-full h-full object-cover"></div>
                                    <div><span class="font-bold text-amber-900 block text-sm">٢٥٠ غرام</span><span class="text-xs text-amber-600 block">عبوة زجاجية</span><span class="text-xs font-bold text-amber-700">٧٥٠ ليرة</span></div>
                                </div>
                                <div class="flex items-center gap-2 bg-amber-50 p-1.5 rounded-xl border border-amber-200">
                                    <button type="button" @click="if(qty3_250 > 0) qty3_250--" class="w-7 h-7 bg-white text-amber-900 font-bold rounded-lg shadow-sm hover:bg-amber-100 flex items-center justify-center cursor-pointer">-</button>
                                    <span class="w-8 text-center font-bold text-sm" x-text="qty3_250"></span>
                                    <button type="button" @click="qty3_250++" class="w-7 h-7 bg-amber-700 text-white font-bold rounded-lg shadow-sm hover:bg-amber-800 flex items-center justify-center cursor-pointer">+</button>
                                </div>
                            </div>
                            <div class="bg-white p-3 rounded-xl border border-amber-200 flex items-center justify-between shadow-sm">
                                <div class="flex items-center gap-3">
                                    <div class="w-16 h-16 bg-amber-50 rounded-lg overflow-hidden border border-amber-200 shrink-0"><img src="{{ asset('images/honey_3_5.jpg') }}" alt="٥٠٠غ" class="w-full h-full object-cover"></div>
                                    <div><span class="font-bold text-amber-900 block text-sm">٥٠٠ غرام</span><span class="text-xs text-amber-600 block">عبوة زجاجية</span><span class="text-xs font-bold text-amber-700">١٢٠٠ ليرة</span></div>
                                </div>
                                <div class="flex items-center gap-2 bg-amber-50 p-1.5 rounded-xl border border-amber-200">
                                    <button type="button" @click="if(qty3_500 > 0) qty3_500--" class="w-7 h-7 bg-white text-amber-900 font-bold rounded-lg shadow-sm hover:bg-amber-100 flex items-center justify-center cursor-pointer">-</button>
                                    <span class="w-8 text-center font-bold text-sm" x-text="qty3_500"></span>
                                    <button type="button" @click="qty3_500++" class="w-7 h-7 bg-amber-700 text-white font-bold rounded-lg shadow-sm hover:bg-amber-800 flex items-center justify-center cursor-pointer">+</button>
                                </div>
                            </div>
                            <div class="bg-white p-3 rounded-xl border border-amber-200 flex items-center justify-between shadow-sm">
                                <div class="flex items-center gap-3">
                                    <div class="w-16 h-16 bg-amber-50 rounded-lg overflow-hidden border border-amber-200 shrink-0"><img src="{{ asset('images/honey_3_6.jpg') }}" alt="١٠٠٠غ" class="w-full h-full object-cover"></div>
                                    <div><span class="font-bold text-amber-900 block text-sm">١٠٠٠ غرام (كيلو)</span><span class="text-xs text-amber-600 block">عبوة زجاجية</span><span class="text-xs font-bold text-amber-700">٢١٠٠ ليرة</span></div>
                                </div>
                                <div class="flex items-center gap-2 bg-amber-50 p-1.5 rounded-xl border border-amber-200">
                                    <button type="button" @click="if(qty3_1000 > 0) qty3_1000--" class="w-7 h-7 bg-white text-amber-900 font-bold rounded-lg shadow-sm hover:bg-amber-100 flex items-center justify-center cursor-pointer">-</button>
                                    <span class="w-8 text-center font-bold text-sm" x-text="qty3_1000"></span>
                                    <button type="button" @click="qty3_1000++" class="w-7 h-7 bg-amber-700 text-white font-bold rounded-lg shadow-sm hover:bg-amber-800 flex items-center justify-center cursor-pointer">+</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white p-4 rounded-2xl border border-amber-200 space-y-2 text-sm text-gray-700">
                        <h4 class="font-bold text-amber-900 border-b pb-1">مواصفات العسل الجبلي:</h4>
                        <p><strong>اللون:</strong> العنبي الداكن الغني.</p>
                        <p><strong>الطعم:</strong> عميق، قوي، وغني بعبق الأعشاب الجبلية.</p>
                        <p><strong>الرائحة:</strong> فواحة وقوية تعبر عن البيئة الجبلية البكر.</p>
                        <p><strong>مكان الإنتاج:</strong> سوريا.</p>
                        <p><strong>وقت الإنتاج:</strong> من الشهر السادس إلى الشهر العاشر.</p>
                    </div>
                </div>
            </div>

            <!-- 4. عسل الجبلي الجردي -->
            <div x-data="{ open: false }" class="bg-white rounded-3xl shadow-lg border-2 border-amber-200 overflow-hidden flex flex-col justify-between hover:shadow-xl transition duration-300">
                <div class="p-6 flex flex-col space-y-4">
                    <div class="flex flex-col sm:flex-row items-center gap-6">
                        <div class="w-40 h-40 shrink-0 rounded-2xl overflow-hidden shadow-md border border-amber-300 bg-amber-50 flex items-center justify-center">
                            <img src="{{ asset('images/honey_4_1.jpg') }}" alt="عسل الجبلي الجردي" class="w-full h-full object-cover">
                        </div>
                        <div class="text-right space-y-2 flex-1">
                            <h3 class="text-2xl font-extrabold text-amber-900">عسل الجبلي الجردي</h3>
                            <div class="text-xs text-gray-700 space-y-1 bg-amber-50/80 p-3 rounded-xl border border-amber-200">
                                <p><strong>مقوٍّ عام:</strong> يمنح الجسم طاقة فورية ويعالج الخمول.</p>
                                <p><strong>الصحة الجنسية:</strong> يعزز الخصوبة والقدرة الجنسية.</p>
                                <p><strong>خصائص علاجية أقوى:</strong> المستخلص من أعالي الجبال القاحلة يكون عالي التركيز.</p>
                            </div>
                        </div>
                    </div>
                    <div class="pt-2 flex justify-center">
                        <button type="button" @click="open = !open" class="bg-amber-700 hover:bg-amber-800 text-white font-bold px-6 py-2.5 rounded-xl text-sm transition shadow flex items-center gap-2 cursor-pointer">
                            <span x-text="open ? 'إخفاء التفاصيل والأسعار' : 'اقرأ المزيد & الأسعار'"></span>
                            <svg class="w-4 h-4 transition-transform duration-300" :class="open ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                    </div>
                </div>

                <div x-show="open" x-transition class="bg-amber-50/70 border-t border-amber-200 p-6 space-y-6">
                    <div class="w-full h-48 sm:h-52 rounded-2xl overflow-hidden shadow-inner border border-amber-300 bg-white">
                        <img src="{{ asset('images/honey_4_2.jpg') }}" alt="عسل الجبلي الجردي - تفاصيل" class="w-full h-full object-contain">
                    </div>
                    <div class="space-y-3">
                        <h4 class="font-bold text-amber-900 border-b border-amber-300 pb-1 text-lg">الأحجام المتوفرة والأسعار:</h4>
                        <div class="grid grid-cols-1 gap-3">
                            <div class="bg-white p-3 rounded-xl border border-amber-200 flex items-center justify-between shadow-sm opacity-60">
                                <div class="flex items-center gap-3">
                                    <div class="w-16 h-16 bg-amber-50 rounded-lg overflow-hidden border border-amber-200 shrink-0"><img src="{{ asset('images/honey_4_3.jpg') }}" alt="٣٠غ" class="w-full h-full object-cover"></div>
                                    <div><span class="font-bold text-amber-900 block text-sm">٣٠ غرام</span><span class="text-xs text-amber-600 block">عبوة زجاجية</span><span class="text-xs font-bold text-red-600">غير متوفر حاليا</span></div>
                                </div>
                                <div class="bg-gray-100 px-3 py-1.5 rounded-xl border border-gray-200"><span class="text-xs font-bold text-gray-500">غير متوفر</span></div>
                            </div>
                            <div class="bg-white p-3 rounded-xl border border-amber-200 flex items-center justify-between shadow-sm">
                                <div class="flex items-center gap-3">
                                    <div class="w-16 h-16 bg-amber-50 rounded-lg overflow-hidden border border-amber-200 shrink-0"><img src="{{ asset('images/honey_4_4.jpg') }}" alt="٢٥٠غ" class="w-full h-full object-cover"></div>
                                    <div><span class="font-bold text-amber-900 block text-sm">٢٥٠ غرام</span><span class="text-xs text-amber-600 block">عبوة زجاجية</span><span class="text-xs font-bold text-amber-700">١١٠٠ ليرة</span></div>
                                </div>
                                <div class="flex items-center gap-2 bg-amber-50 p-1.5 rounded-xl border border-amber-200">
                                    <button type="button" @click="if(qty4_250 > 0) qty4_250--" class="w-7 h-7 bg-white text-amber-900 font-bold rounded-lg shadow-sm hover:bg-amber-100 flex items-center justify-center cursor-pointer">-</button>
                                    <span class="w-8 text-center font-bold text-sm" x-text="qty4_250"></span>
                                    <button type="button" @click="qty4_250++" class="w-7 h-7 bg-amber-700 text-white font-bold rounded-lg shadow-sm hover:bg-amber-800 flex items-center justify-center cursor-pointer">+</button>
                                </div>
                            </div>
                            <div class="bg-white p-3 rounded-xl border border-amber-200 flex items-center justify-between shadow-sm">
                                <div class="flex items-center gap-3">
                                    <div class="w-16 h-16 bg-amber-50 rounded-lg overflow-hidden border border-amber-200 shrink-0"><img src="{{ asset('images/honey_4_5.jpg') }}" alt="٥٠٠غ" class="w-full h-full object-cover"></div>
                                    <div><span class="font-bold text-amber-900 block text-sm">٥٠٠ غرام</span><span class="text-xs text-amber-600 block">عبوة زجاجية</span><span class="text-xs font-bold text-amber-700">٢١٠٠ ليرة</span></div>
                                </div>
                                <div class="flex items-center gap-2 bg-amber-50 p-1.5 rounded-xl border border-amber-200">
                                    <button type="button" @click="if(qty4_500 > 0) qty4_500--" class="w-7 h-7 bg-white text-amber-900 font-bold rounded-lg shadow-sm hover:bg-amber-100 flex items-center justify-center cursor-pointer">-</button>
                                    <span class="w-8 text-center font-bold text-sm" x-text="qty4_500"></span>
                                    <button type="button" @click="qty4_500++" class="w-7 h-7 bg-amber-700 text-white font-bold rounded-lg shadow-sm hover:bg-amber-800 flex items-center justify-center cursor-pointer">+</button>
                                </div>
                            </div>
                            <div class="bg-white p-3 rounded-xl border border-amber-200 flex items-center justify-between shadow-sm">
                                <div class="flex items-center gap-3">
                                    <div class="w-16 h-16 bg-amber-50 rounded-lg overflow-hidden border border-amber-200 shrink-0"><img src="{{ asset('images/honey_4_6.jpg') }}" alt="١٠٠٠غ" class="w-full h-full object-cover"></div>
                                    <div><span class="font-bold text-amber-900 block text-sm">١٠٠٠ غرام (كيلو)</span><span class="text-xs text-amber-600 block">عبوة زجاجية</span><span class="text-xs font-bold text-amber-700">٤٠٠٠ ليرة</span></div>
                                </div>
                                <div class="flex items-center gap-2 bg-amber-50 p-1.5 rounded-xl border border-amber-200">
                                    <button type="button" @click="if(qty4_1000 > 0) qty4_1000--" class="w-7 h-7 bg-white text-amber-900 font-bold rounded-lg shadow-sm hover:bg-amber-100 flex items-center justify-center cursor-pointer">-</button>
                                    <span class="w-8 text-center font-bold text-sm" x-text="qty4_1000"></span>
                                    <button type="button" @click="qty4_1000++" class="w-7 h-7 bg-amber-700 text-white font-bold rounded-lg shadow-sm hover:bg-amber-800 flex items-center justify-center cursor-pointer">+</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white p-4 rounded-2xl border border-amber-200 space-y-2 text-sm text-gray-700">
                        <h4 class="font-bold text-amber-900 border-b pb-1">مواصفات عسل الجبلي الجردي:</h4>
                        <p><strong>اللون:</strong> العنبي العتيق الداكن.</p>
                        <p><strong>الطعم:</strong> شديد التركيز، عميق، ولاذع قليلاً بطابع جردي فريد.</p>
                        <p><strong>الرائحة:</strong> قوية ونفاذة تعكس نقاء القمم الجردية العالية.</p>
                        <p><strong>مكان الإنتاج:</strong> سوريا (الجرد).</p>
                        <p><strong>وقت الإنتاج:</strong> من الشهر السابع إلى الشهر العاشر.</p>
                    </div>
                </div>
            </div>

            <!-- 5. عسل السدر -->
            <div x-data="{ open: false }" class="bg-white rounded-3xl shadow-lg border-2 border-amber-200 overflow-hidden flex flex-col justify-between hover:shadow-xl transition duration-300">
                <div class="p-6 flex flex-col space-y-4">
                    <div class="flex flex-col sm:flex-row items-center gap-6">
                        <div class="w-40 h-40 shrink-0 rounded-2xl overflow-hidden shadow-md border border-amber-300 bg-amber-50 flex items-center justify-center">
                            <img src="{{ asset('images/honey_5_1.jpg') }}" alt="عسل السدر" class="w-full h-full object-cover">
                        </div>
                        <div class="text-right space-y-2 flex-1">
                            <h3 class="text-2xl font-extrabold text-amber-900">عسل السدر</h3>
                            <div class="text-xs text-gray-700 space-y-1 bg-amber-50/80 p-3 rounded-xl border border-amber-200">
                                <p><strong>مضاد حيوي طبيعي:</strong> يمتلك قدرة فائقة على محاربة الالتهابات البكتيرية.</p>
                                <p><strong>الجروح والحروق:</strong> يسرّع التئام الأنسجة عند تطبيقه موضعياً.</p>
                                <p><strong>الجهاز العصبي:</strong> مهدئ للأعصاب ويساعد على التخلص من الأرق والاسترخاء.</p>
                            </div>
                        </div>
                    </div>
                    <div class="pt-2 flex justify-center">
                        <button type="button" @click="open = !open" class="bg-amber-700 hover:bg-amber-800 text-white font-bold px-6 py-2.5 rounded-xl text-sm transition shadow flex items-center gap-2 cursor-pointer">
                            <span x-text="open ? 'إخفاء التفاصيل والأسعار' : 'اقرأ المزيد & الأسعار'"></span>
                            <svg class="w-4 h-4 transition-transform duration-300" :class="open ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                    </div>
                </div>

                <div x-show="open" x-transition class="bg-amber-50/70 border-t border-amber-200 p-6 space-y-6">
                    <div class="w-full h-48 sm:h-52 rounded-2xl overflow-hidden shadow-inner border border-amber-300 bg-white">
                        <img src="{{ asset('images/honey_5_2.jpg') }}" alt="عسل السدر - تفاصيل" class="w-full h-full object-contain">
                    </div>
                    <div class="space-y-3">
                        <h4 class="font-bold text-amber-900 border-b border-amber-300 pb-1 text-lg">الأحجام المتوفرة والأسعار:</h4>
                        <div class="grid grid-cols-1 gap-3">
                            <div class="bg-white p-3 rounded-xl border border-amber-200 flex items-center justify-between shadow-sm opacity-60">
                                <div class="flex items-center gap-3">
                                    <div class="w-16 h-16 bg-amber-50 rounded-lg overflow-hidden border border-amber-200 shrink-0"><img src="{{ asset('images/honey_5_3.jpg') }}" alt="٣٠غ" class="w-full h-full object-cover"></div>
                                    <div><span class="font-bold text-amber-900 block text-sm">٣٠ غرام</span><span class="text-xs text-amber-600 block">عبوة زجاجية</span><span class="text-xs font-bold text-red-600">غير متوفر</span></div>
                                </div>
                                <div class="bg-gray-100 px-2 py-1 rounded-xl border border-gray-200"><span class="text-[10px] font-bold text-gray-500">غير متوفر</span></div>
                            </div>
                            <div class="bg-white p-3 rounded-xl border border-amber-200 flex items-center justify-between shadow-sm">
                                <div class="flex items-center gap-3">
                                    <div class="w-16 h-16 bg-amber-50 rounded-lg overflow-hidden border border-amber-200 shrink-0"><img src="{{ asset('images/honey_5_4.jpg') }}" alt="٢٥٠غ" class="w-full h-full object-cover"></div>
                                    <div><span class="font-bold text-amber-900 block text-sm">٢٥٠ غرام</span><span class="text-xs text-amber-600 block">عبوة زجاجية</span><span class="text-xs font-bold text-amber-700">٢٥٠٠ ليرة</span></div>
                                </div>
                                <div class="flex items-center gap-2 bg-amber-50 p-1.5 rounded-xl border border-amber-200">
                                    <button type="button" @click="if(qty5_250 > 0) qty5_250--" class="w-7 h-7 bg-white text-amber-900 font-bold rounded-lg shadow-sm hover:bg-amber-100 flex items-center justify-center cursor-pointer">-</button>
                                    <span class="w-8 text-center font-bold text-sm" x-text="qty5_250"></span>
                                    <button type="button" @click="qty5_250++" class="w-7 h-7 bg-amber-700 text-white font-bold rounded-lg shadow-sm hover:bg-amber-800 flex items-center justify-center cursor-pointer">+</button>
                                </div>
                            </div>
                            <div class="bg-white p-3 rounded-xl border border-amber-200 flex items-center justify-between shadow-sm">
                                <div class="flex items-center gap-3">
                                    <div class="w-16 h-16 bg-amber-50 rounded-lg overflow-hidden border border-amber-200 shrink-0"><img src="{{ asset('images/honey_5_5.jpg') }}" alt="٥٠٠غ" class="w-full h-full object-cover"></div>
                                    <div><span class="font-bold text-amber-900 block text-sm">٥٠٠ غرام</span><span class="text-xs text-amber-600 block">عبوة زجاجية</span><span class="text-xs font-bold text-amber-700">٥٠٠٠ ليرة</span></div>
                                </div>
                                <div class="flex items-center gap-2 bg-amber-50 p-1.5 rounded-xl border border-amber-200">
                                    <button type="button" @click="if(qty5_500 > 0) qty5_500--" class="w-7 h-7 bg-white text-amber-900 font-bold rounded-lg shadow-sm hover:bg-amber-100 flex items-center justify-center cursor-pointer">-</button>
                                    <span class="w-8 text-center font-bold text-sm" x-text="qty5_500"></span>
                                    <button type="button" @click="qty5_500++" class="w-7 h-7 bg-amber-700 text-white font-bold rounded-lg shadow-sm hover:bg-amber-800 flex items-center justify-center cursor-pointer">+</button>
                                </div>
                            </div>
                            <div class="bg-white p-3 rounded-xl border border-amber-200 flex items-center justify-between shadow-sm">
                                <div class="flex items-center gap-3">
                                    <div class="w-16 h-16 bg-amber-50 rounded-lg overflow-hidden border border-amber-200 shrink-0"><img src="{{ asset('images/honey_5_6.jpg') }}" alt="١٠٠٠غ" class="w-full h-full object-cover"></div>
                                    <div><span class="font-bold text-amber-900 block text-sm">١٠٠٠ غرام (كيلو)</span><span class="text-xs text-amber-600 block">عبوة زجاجية</span><span class="text-xs font-bold text-amber-700">٩٥٠٠ ليرة</span></div>
                                </div>
                                <div class="flex items-center gap-2 bg-amber-50 p-1.5 rounded-xl border border-amber-200">
                                    <button type="button" @click="if(qty5_1000 > 0) qty5_1000--" class="w-7 h-7 bg-white text-amber-900 font-bold rounded-lg shadow-sm hover:bg-amber-100 flex items-center justify-center cursor-pointer">-</button>
                                    <span class="w-8 text-center font-bold text-sm" x-text="qty5_1000"></span>
                                    <button type="button" @click="qty5_1000++" class="w-7 h-7 bg-amber-700 text-white font-bold rounded-lg shadow-sm hover:bg-amber-800 flex items-center justify-center cursor-pointer">+</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white p-4 rounded-2xl border border-amber-200 space-y-2 text-sm text-gray-700">
                        <h4 class="font-bold text-amber-900 border-b pb-1">مواصفات عسل السدر:</h4>
                        <p><strong>اللون:</strong> العنبي الغامق اللامع.</p>
                        <p><strong>الطعم:</strong> فاخر، غني جداً، وحلاوة متوازنة لا تُوَصَف.</p>
                        <p><strong>الرائحة:</strong> زكية وعطرة للغاية تميز زهور السدر الأصيلة.</p>
                        <p><strong>مكان الإنتاج:</strong> سوريا.</p>
                        <p><strong>وقت الإنتاج:</strong> من الشهر العاشر إلى الشهر الثاني عشر.</p>
                    </div>
                </div>
            </div>

            <!-- 6. عسل حلاب جيجان (الجيجان) -->
            <div x-data="{ open: false }" class="bg-white rounded-3xl shadow-lg border-2 border-amber-200 overflow-hidden flex flex-col justify-between hover:shadow-xl transition duration-300">
                <div class="p-6 flex flex-col space-y-4">
                    <div class="flex flex-col sm:flex-row items-center gap-6">
                        <div class="w-40 h-40 shrink-0 rounded-2xl overflow-hidden shadow-md border border-amber-300 bg-amber-50 flex items-center justify-center">
                            <img src="{{ asset('images/honey_6_1.jpg') }}" alt="عسل حلاب جيجان" class="w-full h-full object-cover">
                        </div>
                        <div class="text-right space-y-2 flex-1">
                            <h3 class="text-2xl font-extrabold text-amber-900">عسل حلاب جيجان (الجيجان)</h3>
                            <div class="text-xs text-gray-700 space-y-1 bg-amber-50/80 p-3 rounded-xl border border-amber-200">
                                <p><strong>المجاري البولية:</strong> مطهر قوي للمسالك البولية ويفتت الحصى الصغيرة.</p>
                                <p><strong>مضاد للروماتيزم:</strong> يخفف آلام المفاصل والعظام الروماتزمية.</p>
                                <p><strong>البروستاتا:</strong> يخفف من احتقان والتهابات البروستاتا.</p>
                            </div>
                        </div>
                    </div>
                    <div class="pt-2 flex justify-center">
                        <button type="button" @click="open = !open" class="bg-amber-700 hover:bg-amber-800 text-white font-bold px-6 py-2.5 rounded-xl text-sm transition shadow flex items-center gap-2 cursor-pointer">
                            <span x-text="open ? 'إخفاء التفاصيل والأسعار' : 'اقرأ المزيد & الأسعار'"></span>
                            <svg class="w-4 h-4 transition-transform duration-300" :class="open ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                    </div>
                </div>

                <div x-show="open" x-transition class="bg-amber-50/70 border-t border-amber-200 p-6 space-y-6">
                    <div class="w-full h-48 sm:h-52 rounded-2xl overflow-hidden shadow-inner border border-amber-300 bg-white">
                        <img src="{{ asset('images/honey_6_2.jpg') }}" alt="عسل حلاب جيجان - تفاصيل مميزة" class="w-full h-full object-contain">
                    </div>
                    <div class="space-y-3">
                        <h4 class="font-bold text-amber-900 border-b border-amber-300 pb-1 text-lg">الأحجام المتوفرة والأسعار:</h4>
                        <div class="grid grid-cols-1 gap-3">
                            <div class="bg-white p-3 rounded-xl border border-amber-200 flex items-center justify-between shadow-sm opacity-60">
                                <div class="flex items-center gap-3">
                                    <div class="w-16 h-16 bg-amber-50 rounded-lg overflow-hidden border border-amber-200 shrink-0"><img src="{{ asset('images/honey_6_3.jpg') }}" alt="٣٠غ" class="w-full h-full object-cover"></div>
                                    <div><span class="font-bold text-amber-900 block text-sm">٣٠ غرام</span><span class="text-xs text-amber-600 block">عبوة زجاجية</span><span class="text-xs font-bold text-red-600">غير متوفر حاليا</span></div>
                                </div>
                                <div class="bg-gray-100 px-2 py-1 rounded-xl border border-gray-200"><span class="text-[10px] font-bold text-gray-500">غير متوفر</span></div>
                            </div>
                            <div class="bg-white p-3 rounded-xl border border-amber-200 flex items-center justify-between shadow-sm">
                                <div class="flex items-center gap-3">
                                    <div class="w-16 h-16 bg-amber-50 rounded-lg overflow-hidden border border-amber-200 shrink-0"><img src="{{ asset('images/honey_6_4.jpg') }}" alt="٢٥٠غ" class="w-full h-full object-cover"></div>
                                    <div><span class="font-bold text-amber-900 block text-sm">٢٥٠ غرام</span><span class="text-xs text-amber-600 block">عبوة زجاجية</span><span class="text-xs font-bold text-amber-700">٩٠٠ ليرة</span></div>
                                </div>
                                <div class="flex items-center gap-2 bg-amber-50 p-1.5 rounded-xl border border-amber-200">
                                    <button type="button" @click="if(qty6_250 > 0) qty6_250--" class="w-7 h-7 bg-white text-amber-900 font-bold rounded-lg shadow-sm hover:bg-amber-100 flex items-center justify-center cursor-pointer">-</button>
                                    <span class="w-8 text-center font-bold text-sm" x-text="qty6_250"></span>
                                    <button type="button" @click="qty6_250++" class="w-7 h-7 bg-amber-700 text-white font-bold rounded-lg shadow-sm hover:bg-amber-800 flex items-center justify-center cursor-pointer">+</button>
                                </div>
                            </div>
                            <div class="bg-white p-3 rounded-xl border border-amber-200 flex items-center justify-between shadow-sm">
                                <div class="flex items-center gap-3">
                                    <div class="w-16 h-16 bg-amber-50 rounded-lg overflow-hidden border border-amber-200 shrink-0"><img src="{{ asset('images/honey_6_5.jpg') }}" alt="٥٠٠غ" class="w-full h-full object-cover"></div>
                                    <div><span class="font-bold text-amber-900 block text-sm">٥٠٠ غرام</span><span class="text-xs text-amber-600 block">عبوة زجاجية</span><span class="text-xs font-bold text-amber-700">١٩٠٠ ليرة</span></div>
                                </div>
                                <div class="flex items-center gap-2 bg-amber-50 p-1.5 rounded-xl border border-amber-200">
                                    <button type="button" @click="if(qty6_500 > 0) qty6_500--" class="w-7 h-7 bg-white text-amber-900 font-bold rounded-lg shadow-sm hover:bg-amber-100 flex items-center justify-center cursor-pointer">-</button>
                                    <span class="w-8 text-center font-bold text-sm" x-text="qty6_500"></span>
                                    <button type="button" @click="qty6_500++" class="w-7 h-7 bg-amber-700 text-white font-bold rounded-lg shadow-sm hover:bg-amber-800 flex items-center justify-center cursor-pointer">+</button>
                                </div>
                            </div>
                            <div class="bg-white p-3 rounded-xl border border-amber-200 flex items-center justify-between shadow-sm">
                                <div class="flex items-center gap-3">
                                    <div class="w-16 h-16 bg-amber-50 rounded-lg overflow-hidden border border-amber-200 shrink-0"><img src="{{ asset('images/honey_6_6.jpg') }}" alt="١٠٠٠غ" class="w-full h-full object-cover"></div>
                                    <div><span class="font-bold text-amber-900 block text-sm">١٠٠٠ غرام (كيلو)</span><span class="text-xs text-amber-600 block">عبوة زجاجية</span><span class="text-xs font-bold text-amber-700">٣٧٥٠ ليرة</span></div>
                                </div>
                                <div class="flex items-center gap-2 bg-amber-50 p-1.5 rounded-xl border border-amber-200">
                                    <button type="button" @click="if(qty6_1000 > 0) qty6_1000--" class="w-7 h-7 bg-white text-amber-900 font-bold rounded-lg shadow-sm hover:bg-amber-100 flex items-center justify-center cursor-pointer">-</button>
                                    <span class="w-8 text-center font-bold text-sm" x-text="qty6_1000"></span>
                                    <button type="button" @click="qty6_1000++" class="w-7 h-7 bg-amber-700 text-white font-bold rounded-lg shadow-sm hover:bg-amber-800 flex items-center justify-center cursor-pointer">+</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white p-4 rounded-2xl border border-amber-200 space-y-2 text-sm text-gray-700">
                        <h4 class="font-bold text-amber-900 border-b pb-1">مواصفات عسل حلاب جيجان (الجيجان):</h4>
                        <p><strong>اللون:</strong> البني الداكن.</p>
                        <p><strong>الطعم:</strong> قوي، غني، وحلاوة طبيعية لذيذة ومميزة.</p>
                        <p><strong>الرائحة:</strong> زكية وفواحة جداً، تعكس عبير الأزهار البرية الجافة.</p>
                        <p><strong>مكان الإنتاج:</strong> سوريا.</p>
                        <p><strong>وقت الإنتاج:</strong> من الشهر الثامن إلى الشهر العاشر.</p>
                    </div>
                </div>
            </div>

            <!-- 7. عسل القبار (الشفلح) -->
            <div x-data="{ open: false }" class="bg-white rounded-3xl shadow-lg border-2 border-amber-200 overflow-hidden flex flex-col justify-between hover:shadow-xl transition duration-300">
                <div class="p-6 flex flex-col space-y-4">
                    <div class="flex flex-col sm:flex-row items-center gap-6">
                        <div class="w-40 h-40 shrink-0 rounded-2xl overflow-hidden shadow-md border border-amber-300 bg-amber-50 flex items-center justify-center">
                            <img src="{{ asset('images/honey_7_1.jpg') }}" alt="عسل القبار" class="w-full h-full object-cover">
                        </div>
                        <div class="text-right space-y-2 flex-1">
                            <h3 class="text-2xl font-extrabold text-amber-900">عسل القبار (الشفلح)</h3>
                            <div class="text-xs text-gray-700 space-y-1 bg-amber-50/80 p-3 rounded-xl border border-amber-200">
                                <p><strong>الضعف الجنسي:</strong> يعالج مشاكل العجز الجنسي بشكل فعال جداً.</p>
                                <p><strong>الشرايين والدورة الدموية:</strong> ينشط الدورة الدموية يحمي القلب.</p>
                                <p><strong>آلام الظهر:</strong> يخفف من أوجاع الديسك وآلام المفاصل الحادة.</p>
                            </div>
                        </div>
                    </div>
                    <div class="pt-2 flex justify-center">
                        <button type="button" @click="open = !open" class="bg-amber-700 hover:bg-amber-800 text-white font-bold px-6 py-2.5 rounded-xl text-sm transition shadow flex items-center gap-2 cursor-pointer">
                            <span x-text="open ? 'إخفاء التفاصيل والأسعار' : 'اقرأ المزيد & الأسعار'"></span>
                            <svg class="w-4 h-4 transition-transform duration-300" :class="open ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                    </div>
                </div>

                <div x-show="open" x-transition class="bg-amber-50/70 border-t border-amber-200 p-6 space-y-6">
                    <div class="w-full h-48 sm:h-52 rounded-2xl overflow-hidden shadow-inner border border-amber-300 bg-white">
                        <img src="{{ asset('images/honey_7_2.jpg') }}" alt="عسل القبار - تفاصيل" class="w-full h-full object-contain">
                    </div>
                    <div class="space-y-3">
                        <h4 class="font-bold text-amber-900 border-b border-amber-300 pb-1 text-lg">الأحجام المتوفرة والأسعار:</h4>
                        <div class="grid grid-cols-1 gap-3">
                            <div class="bg-white p-3 rounded-xl border border-amber-200 flex items-center justify-between shadow-sm opacity-60">
                                <div class="flex items-center gap-3">
                                    <div class="w-16 h-16 bg-amber-50 rounded-lg overflow-hidden border border-amber-200 shrink-0"><img src="{{ asset('images/honey_7_3.jpg') }}" alt="٣٠غ" class="w-full h-full object-cover"></div>
                                    <div><span class="font-bold text-amber-900 block text-sm">٣٠ غرام</span><span class="text-xs text-amber-600 block">عبوة زجاجية</span><span class="text-xs font-bold text-red-600">غير متوفر حاليا</span></div>
                                </div>
                                <div class="bg-gray-100 px-2 py-1 rounded-xl border border-gray-200"><span class="text-[10px] font-bold text-gray-500">غير متوفر</span></div>
                            </div>
                            <div class="bg-white p-3 rounded-xl border border-amber-200 flex items-center justify-between shadow-sm">
                                <div class="flex items-center gap-3">
                                    <div class="w-16 h-16 bg-amber-50 rounded-lg overflow-hidden border border-amber-200 shrink-0"><img src="{{ asset('images/honey_7_4.jpg') }}" alt="٢٥٠غ" class="w-full h-full object-cover"></div>
                                    <div><span class="font-bold text-amber-900 block text-sm">٢٥٠ غرام</span><span class="text-xs text-amber-600 block">عبوة زجاجية</span><span class="text-xs font-bold text-amber-700">٧٥٠ ليرة</span></div>
                                </div>
                                <div class="flex items-center gap-2 bg-amber-50 p-1.5 rounded-xl border border-amber-200">
                                    <button type="button" @click="if(qty7_250 > 0) qty7_250--" class="w-7 h-7 bg-white text-amber-900 font-bold rounded-lg shadow-sm hover:bg-amber-100 flex items-center justify-center cursor-pointer">-</button>
                                    <span class="w-8 text-center font-bold text-sm" x-text="qty7_250"></span>
                                    <button type="button" @click="qty7_250++" class="w-7 h-7 bg-amber-700 text-white font-bold rounded-lg shadow-sm hover:bg-amber-800 flex items-center justify-center cursor-pointer">+</button>
                                </div>
                            </div>
                            <div class="bg-white p-3 rounded-xl border border-amber-200 flex items-center justify-between shadow-sm">
                                <div class="flex items-center gap-3">
                                    <div class="w-16 h-16 bg-amber-50 rounded-lg overflow-hidden border border-amber-200 shrink-0"><img src="{{ asset('images/honey_7_5.jpg') }}" alt="٥٠٠غ" class="w-full h-full object-cover"></div>
                                    <div><span class="font-bold text-amber-900 block text-sm">٥٠٠ غرام</span><span class="text-xs text-amber-600 block">عبوة زجاجية</span><span class="text-xs font-bold text-amber-700">١٣٥٠ ليرة</span></div>
                                </div>
                                <div class="flex items-center gap-2 bg-amber-50 p-1.5 rounded-xl border border-amber-200">
                                    <button type="button" @click="if(qty7_500 > 0) qty7_500--" class="w-7 h-7 bg-white text-amber-900 font-bold rounded-lg shadow-sm hover:bg-amber-100 flex items-center justify-center cursor-pointer">-</button>
                                    <span class="w-8 text-center font-bold text-sm" x-text="qty7_500"></span>
                                    <button type="button" @click="qty7_500++" class="w-7 h-7 bg-amber-700 text-white font-bold rounded-lg shadow-sm hover:bg-amber-800 flex items-center justify-center cursor-pointer">+</button>
                                </div>
                            </div>
                            <div class="bg-white p-3 rounded-xl border border-amber-200 flex items-center justify-between shadow-sm">
                                <div class="flex items-center gap-3">
                                    <div class="w-16 h-16 bg-amber-50 rounded-lg overflow-hidden border border-amber-200 shrink-0"><img src="{{ asset('images/honey_7_6.jpg') }}" alt="١٠٠٠غ" class="w-full h-full object-cover"></div>
                                    <div><span class="font-bold text-amber-900 block text-sm">١٠٠٠ غرام (كيلو)</span><span class="text-xs text-amber-600 block">عبوة زجاجية</span><span class="text-xs font-bold text-amber-700">٢٦٥٠ ليرة</span></div>
                                </div>
                                <div class="flex items-center gap-2 bg-amber-50 p-1.5 rounded-xl border border-amber-200">
                                    <button type="button" @click="if(qty7_1000 > 0) qty7_1000--" class="w-7 h-7 bg-white text-amber-900 font-bold rounded-lg shadow-sm hover:bg-amber-100 flex items-center justify-center cursor-pointer">-</button>
                                    <span class="w-8 text-center font-bold text-sm" x-text="qty7_1000"></span>
                                    <button type="button" @click="qty7_1000++" class="w-7 h-7 bg-amber-700 text-white font-bold rounded-lg shadow-sm hover:bg-amber-800 flex items-center justify-center cursor-pointer">+</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white p-4 rounded-2xl border border-amber-200 space-y-2 text-sm text-gray-700">
                        <h4 class="font-bold text-amber-900 border-b pb-1">مواصفات عسل القبار (الشفلح):</h4>
                        <p><strong>اللون:</strong> العنبري الفاتح إلى الذهبي (وقد يميل للبني الداكن أحياناً).</p>
                        <p><strong>الطعم:</strong> حلو متوازن يمتزج بنكهة زهرية مع لمسة مرارة خفيفة جداً في النهاية.</p>
                        <p><strong>الرائحة:</strong> عطرية عشبية خفيفة ونفاذة.</p>
                        <p><strong>مكان الإنتاج:</strong> سوريا (حمص - ريف دمشق).</p>
                        <p><strong>وقت الإنتاج:</strong> من الشهر السابع إلى الشهر الثامن.</p>
                    </div>
                </div>
            </div>

            <!-- 8. عسل الكينا (الأوكالبتوس) -->
            <div x-data="{ open: false }" class="bg-white rounded-3xl shadow-lg border-2 border-amber-200 overflow-hidden flex flex-col justify-between hover:shadow-xl transition duration-300">
                <div class="p-6 flex flex-col space-y-4">
                    <div class="flex flex-col sm:flex-row items-center gap-6">
                        <div class="w-40 h-40 shrink-0 rounded-2xl overflow-hidden shadow-md border border-amber-300 bg-amber-50 flex items-center justify-center">
                            <img src="{{ asset('images/honey_8_1.jpg') }}" alt="عسل الكينا" class="w-full h-full object-cover">
                        </div>
                        <div class="text-right space-y-2 flex-1">
                            <h3 class="text-2xl font-extrabold text-amber-900">عسل الكينا (الأوكالبتوس)</h3>
                            <div class="text-xs text-gray-700 space-y-1 bg-amber-50/80 p-3 rounded-xl border border-amber-200">
                                <p><strong>الجهاز التنفسي:</strong> الصديق الأول للرئتين؛ يعالج البلغم، الحساسية، والتهاب القصبات.</p>
                                <p><strong>صحة الفم:</strong> يطهر اللثة ويقضي على البكتيريا المسببة لرائحة الفم الكريهة.</p>
                                <p><strong>الكلى:</strong> يساعد في تنقية الكلى وطرد الفضلات.</p>
                            </div>
                        </div>
                    </div>
                    <div class="pt-2 flex justify-center">
                        <button type="button" @click="open = !open" class="bg-amber-700 hover:bg-amber-800 text-white font-bold px-6 py-2.5 rounded-xl text-sm transition shadow flex items-center gap-2 cursor-pointer">
                            <span x-text="open ? 'إخفاء التفاصيل والأسعار' : 'اقرأ المزيد & الأسعار'"></span>
                            <svg class="w-4 h-4 transition-transform duration-300" :class="open ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                    </div>
                </div>

                <div x-show="open" x-transition class="bg-amber-50/70 border-t border-amber-200 p-6 space-y-6">
                    <div class="w-full h-48 sm:h-52 rounded-2xl overflow-hidden shadow-inner border border-amber-300 bg-white">
                        <img src="{{ asset('images/honey_8_2.jpg') }}" alt="عسل الكينا - تفاصيل" class="w-full h-full object-contain">
                    </div>
                    <div class="space-y-3">
                        <h4 class="font-bold text-amber-900 border-b border-amber-300 pb-1 text-lg">الأحجام المتوفرة والأسعار:</h4>
                        <div class="grid grid-cols-1 gap-3">
                            <div class="bg-white p-3 rounded-xl border border-amber-200 flex items-center justify-between shadow-sm opacity-60">
                                <div class="flex items-center gap-3">
                                    <div class="w-16 h-16 bg-amber-50 rounded-lg overflow-hidden border border-amber-200 shrink-0"><img src="{{ asset('images/honey_8_3.jpg') }}" alt="٣٠غ" class="w-full h-full object-cover"></div>
                                    <div><span class="font-bold text-amber-900 block text-sm">٣٠ غرام</span><span class="text-xs text-amber-600 block">عبوة زجاجية</span><span class="text-xs font-bold text-red-600">غير متوفر حاليا</span></div>
                                </div>
                                <div class="bg-gray-100 px-2 py-1 rounded-xl border border-gray-200"><span class="text-[10px] font-bold text-gray-500">غير متوفر</span></div>
                            </div>
                            <div class="bg-white p-3 rounded-xl border border-amber-200 flex items-center justify-between shadow-sm">
                                <div class="flex items-center gap-3">
                                    <div class="w-16 h-16 bg-amber-50 rounded-lg overflow-hidden border border-amber-200 shrink-0"><img src="{{ asset('images/honey_8_4.jpg') }}" alt="٢٥٠غ" class="w-full h-full object-cover"></div>
                                    <div><span class="font-bold text-amber-900 block text-sm">٢٥٠ غرام</span><span class="text-xs text-amber-600 block">عبوة زجاجية</span><span class="text-xs font-bold text-amber-700">١١٠٠ ليرة</span></div>
                                </div>
                                <div class="flex items-center gap-2 bg-amber-50 p-1.5 rounded-xl border border-amber-200">
                                    <button type="button" @click="if(qty8_250 > 0) qty8_250--" class="w-7 h-7 bg-white text-amber-900 font-bold rounded-lg shadow-sm hover:bg-amber-100 flex items-center justify-center cursor-pointer">-</button>
                                    <span class="w-8 text-center font-bold text-sm" x-text="qty8_250"></span>
                                    <button type="button" @click="qty8_250++" class="w-7 h-7 bg-amber-700 text-white font-bold rounded-lg shadow-sm hover:bg-amber-800 flex items-center justify-center cursor-pointer">+</button>
                                </div>
                            </div>
                            <div class="bg-white p-3 rounded-xl border border-amber-200 flex items-center justify-between shadow-sm">
                                <div class="flex items-center gap-3">
                                    <div class="w-16 h-16 bg-amber-50 rounded-lg overflow-hidden border border-amber-200 shrink-0"><img src="{{ asset('images/honey_8_5.jpg') }}" alt="٥٠٠غ" class="w-full h-full object-cover"></div>
                                    <div><span class="font-bold text-amber-900 block text-sm">٥٠٠ غرام</span><span class="text-xs text-amber-600 block">عبوة زجاجية</span><span class="text-xs font-bold text-amber-700">٢١٠٠ ليرة</span></div>
                                </div>
                                <div class="flex items-center gap-2 bg-amber-50 p-1.5 rounded-xl border border-amber-200">
                                    <button type="button" @click="if(qty8_500 > 0) qty8_500--" class="w-7 h-7 bg-white text-amber-900 font-bold rounded-lg shadow-sm hover:bg-amber-100 flex items-center justify-center cursor-pointer">-</button>
                                    <span class="w-8 text-center font-bold text-sm" x-text="qty8_500"></span>
                                    <button type="button" @click="qty8_500++" class="w-7 h-7 bg-amber-700 text-white font-bold rounded-lg shadow-sm hover:bg-amber-800 flex items-center justify-center cursor-pointer">+</button>
                                </div>
                            </div>
                            <div class="bg-white p-3 rounded-xl border border-amber-200 flex items-center justify-between shadow-sm">
                                <div class="flex items-center gap-3">
                                    <div class="w-16 h-16 bg-amber-50 rounded-lg overflow-hidden border border-amber-200 shrink-0"><img src="{{ asset('images/honey_8_6.jpg') }}" alt="١٠٠٠غ" class="w-full h-full object-cover"></div>
                                    <div><span class="font-bold text-amber-900 block text-sm">١٠٠٠ غرام (كيلو)</span><span class="text-xs text-amber-600 block">عبوة زجاجية</span><span class="text-xs font-bold text-amber-700">٤٠٠٠ ليرة</span></div>
                                </div>
                                <div class="flex items-center gap-2 bg-amber-50 p-1.5 rounded-xl border border-amber-200">
                                    <button type="button" @click="if(qty8_1000 > 0) qty8_1000--" class="w-7 h-7 bg-white text-amber-900 font-bold rounded-lg shadow-sm hover:bg-amber-100 flex items-center justify-center cursor-pointer">-</button>
                                    <span class="w-8 text-center font-bold text-sm" x-text="qty8_1000"></span>
                                    <button type="button" @click="qty8_1000++" class="w-7 h-7 bg-amber-700 text-white font-bold rounded-lg shadow-sm hover:bg-amber-800 flex items-center justify-center cursor-pointer">+</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white p-4 rounded-2xl border border-amber-200 space-y-2 text-sm text-gray-700">
                        <h4 class="font-bold text-amber-900 border-b pb-1">مواصفات عسل الكينا (الأوكالبتوس):</h4>
                        <p><strong>اللون:</strong> يتميز بلون عنبري (كهرماني) فاتح إلى متوسط، وقد يميل إلى الاصفرار قليلاً باختلاف فصيلة الشجرة.</p>
                        <p><strong>الطعم:</strong> ذو مذاق قوي، غني ومتوازن، حلاوته واضحة وتترك خلفها نكهة عشبية خفيفة تشبه الكراميل، وقد تظهر فيه أحياناً لمحة مرار ذكية خفيفة جداً.</p>
                        <p><strong>الرائحة:</strong> يتمتع برائحة عطرية نفاثة ومميزة تعكس شجر الكينا بوضوح.</p>
                        <p><strong>القوام:</strong> قوام سائل متوسط إلى كثيف، وهو من الأعسال التي تميل إلى التبلور بشكل طبيعي وسريع (بسبب ارتفاع نسبة الجلوكوز فيه) ليتحول إلى قوام كريمي مجمد، وهو دليل على جودته ونقائه.</p>
                        <p><strong>مكان الإنتاج في سورية:</strong> تنتشر أشجار الكينا بكثرة في سورية كأحزمة خضراء حول الأراضي الزراعية، ومصدات للرياح، وضفاف الأنهار والمجاري المائية، ويتركز إنتاجه في المنطقة الساحلية (طرطوس واللاذقية) نظراً لتوفر الرطوبة العالية والأشجار الكثيفة، والمناطق المروية ووديان الأنهار مثل ضفاف نهر العاصي في ريف حماه وإدلب ومناطق الغاب، وغوطة دمشق وأرياف حمص حيث تُزرع الأشجار بكثرة حول البساتين والمزارع.</p>
                        <p><strong>وقت الإنتاج في سورية:</strong> يتم قطاف عسل الكينا من الشهر الرابع إلى الخامس أو من التاسع إلى العاشر.</p>
                    </div>
                </div>
            </div>

            <!-- 9. العسل الكريمي (المتبلور الطبيعي) -->
            <div x-data="{ open: false }" class="bg-white rounded-3xl shadow-lg border-2 border-amber-200 overflow-hidden flex flex-col justify-between hover:shadow-xl transition duration-300">
                <div class="p-6 flex flex-col space-y-4">
                    <div class="flex flex-col sm:flex-row items-center gap-6">
                        <div class="w-40 h-40 shrink-0 rounded-2xl overflow-hidden shadow-md border border-amber-300 bg-amber-50 flex items-center justify-center">
                            <img src="{{ asset('images/honey_9_1.jpg') }}" alt="العسل الكريمي" class="w-full h-full object-cover">
                        </div>
                        <div class="text-right space-y-2 flex-1">
                            <h3 class="text-2xl font-extrabold text-amber-900">العسل الكريمي (المتبلور الطبيعي)</h3>
                            <div class="text-xs text-gray-700 space-y-1 bg-amber-50/80 p-3 rounded-xl border border-amber-200">
                                <p><strong>صحة الأطفال:</strong> سهل الهضم ومثالي لنمو الأطفال وتقوية عظامهم.</p>
                                <p><strong>البشرة والجمال:</strong> يرطب البشرة بعمق ويستخدم كقناع طبيعي لتغذية الوجه.</p>
                                <p><strong>الحلق:</strong> يغلف غشاء الحلق ويخفف من جفافه والتهابه.</p>
                            </div>
                        </div>
                    </div>
                    <div class="pt-2 flex justify-center">
                        <button type="button" @click="open = !open" class="bg-amber-700 hover:bg-amber-800 text-white font-bold px-6 py-2.5 rounded-xl text-sm transition shadow flex items-center gap-2 cursor-pointer">
                            <span x-text="open ? 'إخفاء التفاصيل والأسعار' : 'اقرأ المزيد & الأسعار'"></span>
                            <svg class="w-4 h-4 transition-transform duration-300" :class="open ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                    </div>
                </div>

                <div x-show="open" x-transition class="bg-amber-50/70 border-t border-amber-200 p-6 space-y-6">
                    <div class="w-full h-48 sm:h-52 rounded-2xl overflow-hidden shadow-inner border border-amber-300 bg-white">
                        <img src="{{ asset('images/honey_9_2.jpg') }}" alt="العسل الكريمي - تفاصيل" class="w-full h-full object-contain">
                    </div>
                    <div class="space-y-3">
                        <h4 class="font-bold text-amber-900 border-b border-amber-300 pb-1 text-lg">الأحجام المتوفرة والأسعار:</h4>
                        <div class="grid grid-cols-1 gap-3">
                            <div class="bg-white p-3 rounded-xl border border-amber-200 flex items-center justify-between shadow-sm opacity-60">
                                <div class="flex items-center gap-3">
                                    <div class="w-16 h-16 bg-amber-50 rounded-lg overflow-hidden border border-amber-200 shrink-0"><img src="{{ asset('images/honey_9_3.jpg') }}" alt="٣٠غ" class="w-full h-full object-cover"></div>
                                    <div><span class="font-bold text-amber-900 block text-sm">٣٠ غرام</span><span class="text-xs text-amber-600 block">عبوة زجاجية</span><span class="text-xs font-bold text-red-600">غير متوفر حاليا</span></div>
                                </div>
                                <div class="bg-gray-100 px-2 py-1 rounded-xl border border-gray-200"><span class="text-[10px] font-bold text-gray-500">غير متوفر</span></div>
                            </div>
                            <div class="bg-white p-3 rounded-xl border border-amber-200 flex items-center justify-between shadow-sm">
                                <div class="flex items-center gap-3">
                                    <div class="w-16 h-16 bg-amber-50 rounded-lg overflow-hidden border border-amber-200 shrink-0"><img src="{{ asset('images/honey_9_4.jpg') }}" alt="٢٥٠غ" class="w-full h-full object-cover"></div>
                                    <div><span class="font-bold text-amber-900 block text-sm">٢٥٠ غرام</span><span class="text-xs text-amber-600 block">عبوة زجاجية</span><span class="text-xs font-bold text-amber-700">٧٥٠ ليرة</span></div>
                                </div>
                                <div class="flex items-center gap-2 bg-amber-50 p-1.5 rounded-xl border border-amber-200">
                                    <button type="button" @click="if(qty9_250 > 0) qty9_250--" class="w-7 h-7 bg-white text-amber-900 font-bold rounded-lg shadow-sm hover:bg-amber-100 flex items-center justify-center cursor-pointer">-</button>
                                    <span class="w-8 text-center font-bold text-sm" x-text="qty9_250"></span>
                                    <button type="button" @click="qty9_250++" class="w-7 h-7 bg-amber-700 text-white font-bold rounded-lg shadow-sm hover:bg-amber-800 flex items-center justify-center cursor-pointer">+</button>
                                </div>
                            </div>
                            <div class="bg-white p-3 rounded-xl border border-amber-200 flex items-center justify-between shadow-sm">
                                <div class="flex items-center gap-3">
                                    <div class="w-16 h-16 bg-amber-50 rounded-lg overflow-hidden border border-amber-200 shrink-0"><img src="{{ asset('images/honey_9_5.jpg') }}" alt="٥٠٠غ" class="w-full h-full object-cover"></div>
                                    <div><span class="font-bold text-amber-900 block text-sm">٥٠٠ غرام</span><span class="text-xs text-amber-600 block">عبوة زجاجية</span><span class="text-xs font-bold text-amber-700">١٣٥٠ ليرة</span></div>
                                </div>
                                <div class="flex items-center gap-2 bg-amber-50 p-1.5 rounded-xl border border-amber-200">
                                    <button type="button" @click="if(qty9_500 > 0) qty9_500--" class="w-7 h-7 bg-white text-amber-900 font-bold rounded-lg shadow-sm hover:bg-amber-100 flex items-center justify-center cursor-pointer">-</button>
                                    <span class="w-8 text-center font-bold text-sm" x-text="qty9_500"></span>
                                    <button type="button" @click="qty9_500++" class="w-7 h-7 bg-amber-700 text-white font-bold rounded-lg shadow-sm hover:bg-amber-800 flex items-center justify-center cursor-pointer">+</button>
                                </div>
                            </div>
                            <div class="bg-white p-3 rounded-xl border border-amber-200 flex items-center justify-between shadow-sm">
                                <div class="flex items-center gap-3">
                                    <div class="w-16 h-16 bg-amber-50 rounded-lg overflow-hidden border border-amber-200 shrink-0"><img src="{{ asset('images/honey_9_6.jpg') }}" alt="١٠٠٠غ" class="w-full h-full object-cover"></div>
                                    <div><span class="font-bold text-amber-900 block text-sm">١٠٠٠ غرام (كيلو)</span><span class="text-xs text-amber-600 block">عبوة زجاجية</span><span class="text-xs font-bold text-amber-700">٢٦٥٠ ليرة</span></div>
                                </div>
                                <div class="flex items-center gap-2 bg-amber-50 p-1.5 rounded-xl border border-amber-200">
                                    <button type="button" @click="if(qty9_1000 > 0) qty9_1000--" class="w-7 h-7 bg-white text-amber-900 font-bold rounded-lg shadow-sm hover:bg-amber-100 flex items-center justify-center cursor-pointer">-</button>
                                    <span class="w-8 text-center font-bold text-sm" x-text="qty9_1000"></span>
                                    <button type="button" @click="qty9_1000++" class="w-7 h-7 bg-amber-700 text-white font-bold rounded-lg shadow-sm hover:bg-amber-800 flex items-center justify-center cursor-pointer">+</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white p-4 rounded-2xl border border-amber-200 space-y-2 text-sm text-gray-700">
                        <h4 class="font-bold text-amber-900 border-b pb-1">مواصفات العسل الكريمي (المتبلور الطبيعي):</h4>
                        <p class="text-amber-800 font-semibold bg-amber-50 p-2 rounded-lg">ملاحظة أساسية: العسل الكريمي ليس عسلاً مستقلاً أو نوعاً مختلفاً من أنواع العسل، بل هو نوع من أنواع العسل البلدي ولكن تمت معالجته بطريقة فيزيائية لنقله من لون إلى لون ومن حالة إلى حالة (حيث لا يعد صنفاً جغرافياً أو زهرة برية مستقلة، بل قوام فيزيائي خاص يتحكم بتبلور العسل الطبيعي لمنع تشكل بلورات خشنة، وتعتمد خصائصه على العسل السوري الأساسي المستخدم مثل القطن، الجبلي، الحمضيات أو الأشواك).</p>
                        <p><strong>اللون:</strong> يميل دائماً إلى الأبيض العاجي أو الأصفر الباهت جداً؛ حيث تكتسب بلورات السكر الدقيقة لوناً فاتحاً جداً أثناء عملية التحريك المستمر، بغض النظر عن لون العسل الأصلي.</p>
                        <p><strong>الطعم:</strong> حلو ومتوازن، وتكون حلاوته أقل حدة على اللسان مقارنة بالعسل السائل، كما يمتاز بقوام ناعم ومخملي يشبه الزبدة أو "النوتيلا" يذوب سريعاً في الفم.</p>
                        <p><strong>الرائحة:</strong> عطرية هادئة وخفيفة، تعكس رائحة الأزهار والنباتات التي جُمع منها العسل الأساسي قبل تحويله (كالكينا، القطن، أو اليانسون).</p>
                    </div>
                </div>
            </div>

            <!-- 10. عسل اليانسون -->
            <div x-data="{ open: false }" class="bg-white rounded-3xl shadow-lg border-2 border-amber-200 overflow-hidden flex flex-col justify-between hover:shadow-xl transition duration-300">
                <div class="p-6 flex flex-col space-y-4">
                    <div class="flex flex-col sm:flex-row items-center gap-6">
                        <div class="w-40 h-40 shrink-0 rounded-2xl overflow-hidden shadow-md border border-amber-300 bg-amber-50 flex items-center justify-center">
                            <img src="{{ asset('images/honey_10_1.jpg') }}" alt="عسل اليانسون" class="w-full h-full object-cover">
                        </div>
                        <div class="text-right space-y-2 flex-1">
                            <h3 class="text-2xl font-extrabold text-amber-900">عسل اليانسون</h3>
                            <div class="text-xs text-gray-700 space-y-1 bg-amber-50/80 p-3 rounded-xl border border-amber-200">
                                <p><strong>الغازات والانتفاخ:</strong> طارد ممتاز للغازات ومهدئ للمغص والتقلصات المعوية.</p>
                                <p><strong>الصداع:</strong> يسكن آلام الصداع والشقيقة الناتجة عن التوتر.</p>
                                <p><strong>مدر للحليب:</strong> مفيد جداً للمرأة المرضعة لزيادة إدرار الحليب.</p>
                            </div>
                        </div>
                    </div>
                    <div class="pt-2 flex justify-center">
                        <button type="button" @click="open = !open" class="bg-amber-700 hover:bg-amber-800 text-white font-bold px-6 py-2.5 rounded-xl text-sm transition shadow flex items-center gap-2 cursor-pointer">
                            <span x-text="open ? 'إخفاء التفاصيل والأسعار' : 'اقرأ المزيد & الأسعار'"></span>
                            <svg class="w-4 h-4 transition-transform duration-300" :class="open ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                    </div>
                </div>

                <div x-show="open" x-transition class="bg-amber-50/70 border-t border-amber-200 p-6 space-y-6">
                    <div class="w-full h-48 sm:h-52 rounded-2xl overflow-hidden shadow-inner border border-amber-300 bg-white">
                        <img src="{{ asset('images/honey_10_2.jpg') }}" alt="عسل اليانسون - تفاصيل" class="w-full h-full object-contain">
                    </div>
                    <div class="space-y-3">
                        <h4 class="font-bold text-amber-900 border-b border-amber-300 pb-1 text-lg">الأحجام المتوفرة والأسعار:</h4>
                        <div class="grid grid-cols-1 gap-3">
                            <div class="bg-white p-3 rounded-xl border border-amber-200 flex items-center justify-between shadow-sm opacity-60">
                                <div class="flex items-center gap-3">
                                    <div class="w-16 h-16 bg-amber-50 rounded-lg overflow-hidden border border-amber-200 shrink-0"><img src="{{ asset('images/honey_10_3.jpg') }}" alt="٣٠غ" class="w-full h-full object-cover"></div>
                                    <div><span class="font-bold text-amber-900 block text-sm">٣٠ غرام</span><span class="text-xs text-amber-600 block">عبوة زجاجية</span><span class="text-xs font-bold text-red-600">غير متوفر حاليا</span></div>
                                </div>
                                <div class="bg-gray-100 px-2 py-1 rounded-xl border border-gray-200"><span class="text-[10px] font-bold text-gray-500">غير متوفر</span></div>
                            </div>
                            <div class="bg-white p-3 rounded-xl border border-amber-200 flex items-center justify-between shadow-sm">
                                <div class="flex items-center gap-3">
                                    <div class="w-16 h-16 bg-amber-50 rounded-lg overflow-hidden border border-amber-200 shrink-0"><img src="{{ asset('images/honey_10_4.jpg') }}" alt="٢٥٠غ" class="w-full h-full object-cover"></div>
                                    <div><span class="font-bold text-amber-900 block text-sm">٢٥٠ غرام</span><span class="text-xs text-amber-600 block">عبوة زجاجية</span><span class="text-xs font-bold text-amber-700">٧٥٠ ليرة</span></div>
                                </div>
                                <div class="flex items-center gap-2 bg-amber-50 p-1.5 rounded-xl border border-amber-200">
                                    <button type="button" @click="if(qty10_250 > 0) qty10_250--" class="w-7 h-7 bg-white text-amber-900 font-bold rounded-lg shadow-sm hover:bg-amber-100 flex items-center justify-center cursor-pointer">-</button>
                                    <span class="w-8 text-center font-bold text-sm" x-text="qty10_250"></span>
                                    <button type="button" @click="qty10_250++" class="w-7 h-7 bg-amber-700 text-white font-bold rounded-lg shadow-sm hover:bg-amber-800 flex items-center justify-center cursor-pointer">+</button>
                                </div>
                            </div>
                            <div class="bg-white p-3 rounded-xl border border-amber-200 flex items-center justify-between shadow-sm">
                                <div class="flex items-center gap-3">
                                    <div class="w-16 h-16 bg-amber-50 rounded-lg overflow-hidden border border-amber-200 shrink-0"><img src="{{ asset('images/honey_10_5.jpg') }}" alt="٥٠٠غ" class="w-full h-full object-cover"></div>
                                    <div><span class="font-bold text-amber-900 block text-sm">٥٠٠ غرام</span><span class="text-xs text-amber-600 block">عبوة زجاجية</span><span class="text-xs font-bold text-amber-700">١٢٥٠ ليرة</span></div>
                                </div>
                                <div class="flex items-center gap-2 bg-amber-50 p-1.5 rounded-xl border border-amber-200">
                                    <button type="button" @click="if(qty10_500 > 0) qty10_500--" class="w-7 h-7 bg-white text-amber-900 font-bold rounded-lg shadow-sm hover:bg-amber-100 flex items-center justify-center cursor-pointer">-</button>
                                    <span class="w-8 text-center font-bold text-sm" x-text="qty10_500"></span>
                                    <button type="button" @click="qty10_500++" class="w-7 h-7 bg-amber-700 text-white font-bold rounded-lg shadow-sm hover:bg-amber-800 flex items-center justify-center cursor-pointer">+</button>
                                </div>
                            </div>
                            <div class="bg-white p-3 rounded-xl border border-amber-200 flex items-center justify-between shadow-sm">
                                <div class="flex items-center gap-3">
                                    <div class="w-16 h-16 bg-amber-50 rounded-lg overflow-hidden border border-amber-200 shrink-0"><img src="{{ asset('images/honey_10_6.jpg') }}" alt="١٠٠٠غ" class="w-full h-full object-cover"></div>
                                    <div><span class="font-bold text-amber-900 block text-sm">١٠٠٠ غرام (كيلو)</span><span class="text-xs text-amber-600 block">عبوة زجاجية</span><span class="text-xs font-bold text-amber-700">٢٣٥٠ ليرة</span></div>
                                </div>
                                <div class="flex items-center gap-2 bg-amber-50 p-1.5 rounded-xl border border-amber-200">
                                    <button type="button" @click="if(qty10_1000 > 0) qty10_1000--" class="w-7 h-7 bg-white text-amber-900 font-bold rounded-lg shadow-sm hover:bg-amber-100 flex items-center justify-center cursor-pointer">-</button>
                                    <span class="w-8 text-center font-bold text-sm" x-text="qty10_1000"></span>
                                    <button type="button" @click="qty10_1000++" class="w-7 h-7 bg-amber-700 text-white font-bold rounded-lg shadow-sm hover:bg-amber-800 flex items-center justify-center cursor-pointer">+</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white p-4 rounded-2xl border border-amber-200 space-y-2 text-sm text-gray-700">
                        <h4 class="font-bold text-amber-900 border-b pb-1">مواصفات عسل اليانسون:</h4>
                        <p><strong>اللون:</strong> العنبي الفاتح المائل للذهبي.</p>
                        <p><strong>الطعم:</strong> حلو بنكهة اليانسون العطري المميزة والدافئة.</p>
                        <p><strong>الرائحة:</strong> عطرية قوية تعبق برائحة بذور اليانسون البري.</p>
                        <p><strong>مكان الإنتاج:</strong> سوريا.</p>
                        <p><strong>وقت الإنتاج:</strong> من الشهر السادس إلى الشهر التاسع.</p>
                    </div>
                </div>
            </div>

            <!-- 11. عسل الحمضيات -->
            <div x-data="{ open: false }" class="bg-white rounded-3xl shadow-lg border-2 border-amber-200 overflow-hidden flex flex-col justify-between hover:shadow-xl transition duration-300">
                <div class="p-6 flex flex-col space-y-4">
                    <div class="flex flex-col sm:flex-row items-center gap-6">
                        <div class="w-40 h-40 shrink-0 rounded-2xl overflow-hidden shadow-md border border-amber-300 bg-amber-50 flex items-center justify-center">
                            <img src="{{ asset('images/honey_11_1.jpg') }}" alt="عسل الحمضيات" class="w-full h-full object-cover">
                        </div>
                        <div class="text-right space-y-2 flex-1">
                            <h3 class="text-2xl font-extrabold text-amber-900">عسل الحمضيات</h3>
                            <div class="text-xs text-gray-700 space-y-1 bg-amber-50/80 p-3 rounded-xl border border-amber-200">
                                <p><strong>فيتامين C:</strong> غني جداً بالفيتامينات التي تقي من الإنفلونزا ونزلات البرد.</p>
                                <p><strong>مهدئ للأطفال:</strong> يساعد الأطفال على النوم الهادئ ويخفف المغص.</p>
                                <p><strong>فقر الدم:</strong> يسهل امتصاص الحديد في الجسم.</p>
                            </div>
                        </div>
                    </div>
                    <div class="pt-2 flex justify-center">
                        <button type="button" @click="open = !open" class="bg-amber-700 hover:bg-amber-800 text-white font-bold px-6 py-2.5 rounded-xl text-sm transition shadow flex items-center gap-2 cursor-pointer">
                            <span x-text="open ? 'إخفاء التفاصيل والأسعار' : 'اقرأ المزيد & الأسعار'"></span>
                            <svg class="w-4 h-4 transition-transform duration-300" :class="open ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                    </div>
                </div>

                <div x-show="open" x-transition class="bg-amber-50/70 border-t border-amber-200 p-6 space-y-6">
                    <div class="w-full h-48 sm:h-52 rounded-2xl overflow-hidden shadow-inner border border-amber-300 bg-white">
                        <img src="{{ asset('images/honey_11_2.jpg') }}" alt="عسل الحمضيات - تفاصيل" class="w-full h-full object-contain">
                    </div>
                    <div class="space-y-3">
                        <h4 class="font-bold text-amber-900 border-b border-amber-300 pb-1 text-lg">الأحجام المتوفرة والأسعار:</h4>
                        <div class="grid grid-cols-1 gap-3">
                            <div class="bg-white p-3 rounded-xl border border-amber-200 flex items-center justify-between shadow-sm opacity-60">
                                <div class="flex items-center gap-3">
                                    <div class="w-16 h-16 bg-amber-50 rounded-lg overflow-hidden border border-amber-200 shrink-0"><img src="{{ asset('images/honey_11_3.jpg') }}" alt="٣٠غ" class="w-full h-full object-cover"></div>
                                    <div><span class="font-bold text-amber-900 block text-sm">٣٠ غرام</span><span class="text-xs text-amber-600 block">عبوة زجاجية</span><span class="text-xs font-bold text-red-600">غير متوفر حاليا</span></div>
                                </div>
                                <div class="bg-gray-100 px-2 py-1 rounded-xl border border-gray-200"><span class="text-[10px] font-bold text-gray-500">غير متوفر</span></div>
                            </div>
                            <div class="bg-white p-3 rounded-xl border border-amber-200 flex items-center justify-between shadow-sm">
                                <div class="flex items-center gap-3">
                                    <div class="w-16 h-16 bg-amber-50 rounded-lg overflow-hidden border border-amber-200 shrink-0"><img src="{{ asset('images/honey_11_4.jpg') }}" alt="٢٥٠غ" class="w-full h-full object-cover"></div>
                                    <div><span class="font-bold text-amber-900 block text-sm">٢٥٠ غرام</span><span class="text-xs text-amber-600 block">عبوة زجاجية</span><span class="text-xs font-bold text-amber-700">٥٠٠ ليرة</span></div>
                                </div>
                                <div class="flex items-center gap-2 bg-amber-50 p-1.5 rounded-xl border border-amber-200">
                                    <button type="button" @click="if(qty11_250 > 0) qty11_250--" class="w-7 h-7 bg-white text-amber-900 font-bold rounded-lg shadow-sm hover:bg-amber-100 flex items-center justify-center cursor-pointer">-</button>
                                    <span class="w-8 text-center font-bold text-sm" x-text="qty11_250"></span>
                                    <button type="button" @click="qty11_250++" class="w-7 h-7 bg-amber-700 text-white font-bold rounded-lg shadow-sm hover:bg-amber-800 flex items-center justify-center cursor-pointer">+</button>
                                </div>
                            </div>
                            <div class="bg-white p-3 rounded-xl border border-amber-200 flex items-center justify-between shadow-sm">
                                <div class="flex items-center gap-3">
                                    <div class="w-16 h-16 bg-amber-50 rounded-lg overflow-hidden border border-amber-200 shrink-0"><img src="{{ asset('images/honey_11_5.jpg') }}" alt="٥٠٠غ" class="w-full h-full object-cover"></div>
                                    <div><span class="font-bold text-amber-900 block text-sm">٥٠٠ غرام</span><span class="text-xs text-amber-600 block">عبوة زجاجية</span><span class="text-xs font-bold text-amber-700">٩٥٠ ليرة</span></div>
                                </div>
                                <div class="flex items-center gap-2 bg-amber-50 p-1.5 rounded-xl border border-amber-200">
                                    <button type="button" @click="if(qty11_500 > 0) qty11_500--" class="w-7 h-7 bg-white text-amber-900 font-bold rounded-lg shadow-sm hover:bg-amber-100 flex items-center justify-center cursor-pointer">-</button>
                                    <span class="w-8 text-center font-bold text-sm" x-text="qty11_500"></span>
                                    <button type="button" @click="qty11_500++" class="w-7 h-7 bg-amber-700 text-white font-bold rounded-lg shadow-sm hover:bg-amber-800 flex items-center justify-center cursor-pointer">+</button>
                                </div>
                            </div>
                            <div class="bg-white p-3 rounded-xl border border-amber-200 flex items-center justify-between shadow-sm">
                                <div class="flex items-center gap-3">
                                    <div class="w-16 h-16 bg-amber-50 rounded-lg overflow-hidden border border-amber-200 shrink-0"><img src="{{ asset('images/honey_11_6.jpg') }}" alt="١٠٠٠غ" class="w-full h-full object-cover"></div>
                                    <div><span class="font-bold text-amber-900 block text-sm">١٠٠٠ غرام (كيلو)</span><span class="text-xs text-amber-600 block">عبوة زجاجية</span><span class="text-xs font-bold text-amber-700">١٨٠٠ ليرة</span></div>
                                </div>
                                <div class="flex items-center gap-2 bg-amber-50 p-1.5 rounded-xl border border-amber-200">
                                    <button type="button" @click="if(qty11_1000 > 0) qty11_1000--" class="w-7 h-7 bg-white text-amber-900 font-bold rounded-lg shadow-sm hover:bg-amber-100 flex items-center justify-center cursor-pointer">-</button>
                                    <span class="w-8 text-center font-bold text-sm" x-text="qty11_1000"></span>
                                    <button type="button" @click="qty11_1000++" class="w-7 h-7 bg-amber-700 text-white font-bold rounded-lg shadow-sm hover:bg-amber-800 flex items-center justify-center cursor-pointer">+</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white p-4 rounded-2xl border border-amber-200 space-y-2 text-sm text-gray-700">
                        <h4 class="font-bold text-amber-900 border-b pb-1">مواصفات عسل الحمضيات:</h4>
                        <p><strong>اللون:</strong> أصفر فاتح ذهبي، ويتحول إلى اللون الأبيض أو الكريمي عند التبلور.</p>
                        <p><strong>الطعم:</strong> حلو خفيف ومنعش، يتميز بحموضة طبيعية خفيفة جداً تشبه نكهة الثمار.</p>
                        <p><strong>الرائحة:</strong> عطرية نفاذة وقوية، تشبه تماماً رائحة أزهار الليمون والبرتقال الفواحة.</p>
                        <p><strong>مكان الإنتاج:</strong> يتركز إنتاجه بشكل أساسي في محافظتي اللاذقية وطرطوس (المنطقة الساحلية)، وذلك بسبب انتشار البيوت البلاستيكية وبساتين الحمضيات الشاسعة على طول الساحل والسهول الساحلية.</p>
                        <p><strong>وقت الإنتاج:</strong> من أواخر الشهر الثالث إلى بداية الشهر الخامس.</p>
                    </div>
                </div>
            </div>

            <!-- 12. عسل الزعتر -->
            <div x-data="{ open: false }" class="bg-white rounded-3xl shadow-lg border-2 border-amber-200 overflow-hidden flex flex-col justify-between hover:shadow-xl transition duration-300">
                <div class="p-6 flex flex-col space-y-4"><div class="flex flex-col sm:flex-row items-center gap-6"><div class="w-40 h-40 shrink-0 rounded-2xl overflow-hidden shadow-md border border-amber-300 bg-amber-50 flex items-center justify-center"><img src="{{ asset('images/honey_12_1.jpg') }}" alt="عسل الزعتر" class="w-full h-full object-cover"></div><div class="text-right space-y-2 flex-1"><h3 class="text-2xl font-extrabold text-amber-900">عسل الزعتر</h3><div class="text-xs text-gray-700 space-y-1 bg-amber-50/80 p-3 rounded-xl border border-amber-200">                                <p><strong>مضاد للفطريات:</strong> يطهر الأمعاء والمعدة من الطفيليات والديدان.</p>
                                <p><strong>الكحة الجافة:</strong> يهدئ نوبات السعال الديكي والجاف بفعالية.</p>
                                <p><strong>الذاكرة:</strong> ينشط الدماغ ويزيد من القدرة على التركيز والاستيعاب.</p></div></div></div><div class="pt-2 flex justify-center"><button type="button" @click="open = !open" class="bg-amber-700 hover:bg-amber-800 text-white font-bold px-6 py-2.5 rounded-xl text-sm transition shadow flex items-center gap-2 cursor-pointer"><span x-text="open ? 'إخفاء التفاصيل والأسعار' : 'اقرأ المزيد & الأسعار'"></span><svg class="w-4 h-4 transition-transform duration-300" :class="open ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button></div></div>
                <div x-show="open" x-transition class="bg-amber-50/70 border-t border-amber-200 p-6 space-y-6"><div class="w-full h-48 sm:h-52 rounded-2xl overflow-hidden shadow-inner border border-amber-300 bg-white"><img src="{{ asset('images/honey_12_2.jpg') }}" alt="عسل الزعتر - تفاصيل" class="w-full h-full object-contain"></div><div class="space-y-3"><h4 class="font-bold text-amber-900 border-b border-amber-300 pb-1 text-lg">الأحجام المتوفرة والأسعار:</h4><div class="grid grid-cols-1 gap-3">                            <div class="bg-white p-3 rounded-xl border border-amber-200 flex items-center justify-between shadow-sm opacity-60"><div class="flex items-center gap-3"><div class="w-16 h-16 bg-amber-50 rounded-lg overflow-hidden border border-amber-200 shrink-0"><img src="{{ asset('images/honey_12_3.jpg') }}" alt="٣٠ غرام" class="w-full h-full object-cover"></div><div><span class="font-bold text-amber-900 block text-sm">٣٠ غرام</span><span class="text-xs text-amber-600 block">عبوة زجاجية</span><span class="text-xs font-bold text-red-600">غير متوفر حاليا</span></div></div><div class="bg-gray-100 px-2 py-1 rounded-xl border border-gray-200"><span class="text-[10px] font-bold text-gray-500">غير متوفر</span></div></div>
                            <div class="bg-white p-3 rounded-xl border border-amber-200 flex items-center justify-between shadow-sm opacity-60"><div class="flex items-center gap-3"><div class="w-16 h-16 bg-amber-50 rounded-lg overflow-hidden border border-amber-200 shrink-0"><img src="{{ asset('images/honey_12_4.jpg') }}" alt="٢٥٠ غرام" class="w-full h-full object-cover"></div><div><span class="font-bold text-amber-900 block text-sm">٢٥٠ غرام</span><span class="text-xs text-amber-600 block">عبوة زجاجية</span><span class="text-xs font-bold text-red-600">غير متوفر حاليا</span></div></div><div class="bg-gray-100 px-2 py-1 rounded-xl border border-gray-200"><span class="text-[10px] font-bold text-gray-500">غير متوفر</span></div></div>
                            <div class="bg-white p-3 rounded-xl border border-amber-200 flex items-center justify-between shadow-sm"><div class="flex items-center gap-3"><div class="w-16 h-16 bg-amber-50 rounded-lg overflow-hidden border border-amber-200 shrink-0"><img src="{{ asset('images/honey_12_5.jpg') }}" alt="٥٠٠ غرام" class="w-full h-full object-cover"></div><div><span class="font-bold text-amber-900 block text-sm">٥٠٠ غرام</span><span class="text-xs text-amber-600 block">عبوة زجاجية</span><span class="text-xs font-bold text-amber-700">1250 ليرة</span></div></div><div class="flex items-center gap-2 bg-amber-50 p-1.5 rounded-xl border border-amber-200"><button type="button" @click="if(qty12_500 > 0) qty12_500--" class="w-7 h-7 bg-white text-amber-900 font-bold rounded-lg shadow-sm hover:bg-amber-100 flex items-center justify-center cursor-pointer">-</button><span class="w-8 text-center font-bold text-sm" x-text="qty12_500"></span><button type="button" @click="qty12_500++" class="w-7 h-7 bg-amber-700 text-white font-bold rounded-lg shadow-sm hover:bg-amber-800 flex items-center justify-center cursor-pointer">+</button></div></div>
                            <div class="bg-white p-3 rounded-xl border border-amber-200 flex items-center justify-between shadow-sm"><div class="flex items-center gap-3"><div class="w-16 h-16 bg-amber-50 rounded-lg overflow-hidden border border-amber-200 shrink-0"><img src="{{ asset('images/honey_12_6.jpg') }}" alt="١٠٠٠ غرام (كيلو)" class="w-full h-full object-cover"></div><div><span class="font-bold text-amber-900 block text-sm">١٠٠٠ غرام (كيلو)</span><span class="text-xs text-amber-600 block">عبوة زجاجية</span><span class="text-xs font-bold text-amber-700">2350 ليرة</span></div></div><div class="flex items-center gap-2 bg-amber-50 p-1.5 rounded-xl border border-amber-200"><button type="button" @click="if(qty12_1000 > 0) qty12_1000--" class="w-7 h-7 bg-white text-amber-900 font-bold rounded-lg shadow-sm hover:bg-amber-100 flex items-center justify-center cursor-pointer">-</button><span class="w-8 text-center font-bold text-sm" x-text="qty12_1000"></span><button type="button" @click="qty12_1000++" class="w-7 h-7 bg-amber-700 text-white font-bold rounded-lg shadow-sm hover:bg-amber-800 flex items-center justify-center cursor-pointer">+</button></div></div></div></div><div class="bg-white p-4 rounded-2xl border border-amber-200 space-y-2 text-sm text-gray-700"><h4 class="font-bold text-amber-900 border-b pb-1">مواصفات عسل الزعتر:</h4>                        <p><strong>اللون:</strong> يتراوح بين العنبري الإيجابي (الأصفر الداكن) إلى الأحمر النحاسي، ويصبح داكناً أكثر كلما تخزن.</p>
                        <p><strong>الطعم:</strong> قوي، حار قليلاً، شديد الحلاوة، ويترك أثراً دافئاً ومستساغاً في الحلق.</p>
                        <p><strong>الرائحة:</strong> عطرية نفاذة، قوية جداً، وتفوح برائحة نبتة الزعتر البري بوضوح بمجرد فتح العبوة.</p>
                        <p><strong>مكان الإنتاج:</strong> يُنتج في المنطقة الساحلية (الجبال الساحلية في اللاذقية وطرطوس)، وبادية الشام، والمناطق الجبلية في ريف دمشق مثل القلمون حيث ينمو الزعتر البري بكثرة.</p>
                        <p><strong>وقت الإنتاج:</strong> يُجنى العسل في الشهر السابع والثامن.</p></div></div>
            </div>

            <!-- 13. عسل الخزامى (اللافندر) -->
            <div x-data="{ open: false }" class="bg-white rounded-3xl shadow-lg border-2 border-amber-200 overflow-hidden flex flex-col justify-between hover:shadow-xl transition duration-300">
                <div class="p-6 flex flex-col space-y-4"><div class="flex flex-col sm:flex-row items-center gap-6"><div class="w-40 h-40 shrink-0 rounded-2xl overflow-hidden shadow-md border border-amber-300 bg-amber-50 flex items-center justify-center"><img src="{{ asset('images/honey_13_1.jpg') }}" alt="عسل الخزامى (اللافندر)" class="w-full h-full object-cover"></div><div class="text-right space-y-2 flex-1"><h3 class="text-2xl font-extrabold text-amber-900">عسل الخزامى (اللافندر)</h3><div class="text-xs text-gray-700 space-y-1 bg-amber-50/80 p-3 rounded-xl border border-amber-200">                                <p><strong>محاربة القلق:</strong> مهدئ نفسي ممتاز ويزيل التوتر والاضطرابات النفسية.</p>
                                <p><strong>تجديد خلايا الجلد:</strong> يعالج الحروق السطحية وآثار حب الشباب.</p>
                                <p><strong>مضاد للفطريات:</strong> يكافح الالتهابات الفطرية الجلدية.</p></div></div></div><div class="pt-2 flex justify-center"><button type="button" @click="open = !open" class="bg-amber-700 hover:bg-amber-800 text-white font-bold px-6 py-2.5 rounded-xl text-sm transition shadow flex items-center gap-2 cursor-pointer"><span x-text="open ? 'إخفاء التفاصيل والأسعار' : 'اقرأ المزيد & الأسعار'"></span><svg class="w-4 h-4 transition-transform duration-300" :class="open ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button></div></div>
                <div x-show="open" x-transition class="bg-amber-50/70 border-t border-amber-200 p-6 space-y-6"><div class="w-full h-48 sm:h-52 rounded-2xl overflow-hidden shadow-inner border border-amber-300 bg-white"><img src="{{ asset('images/honey_13_2.jpg') }}" alt="عسل الخزامى (اللافندر) - تفاصيل" class="w-full h-full object-contain"></div><div class="space-y-3"><h4 class="font-bold text-amber-900 border-b border-amber-300 pb-1 text-lg">الأحجام المتوفرة والأسعار:</h4><div class="grid grid-cols-1 gap-3">                            <div class="bg-white p-3 rounded-xl border border-amber-200 flex items-center justify-between shadow-sm opacity-60"><div class="flex items-center gap-3"><div class="w-16 h-16 bg-amber-50 rounded-lg overflow-hidden border border-amber-200 shrink-0"><img src="{{ asset('images/honey_13_3.jpg') }}" alt="٣٠ غرام" class="w-full h-full object-cover"></div><div><span class="font-bold text-amber-900 block text-sm">٣٠ غرام</span><span class="text-xs text-amber-600 block">عبوة زجاجية</span><span class="text-xs font-bold text-red-600">غير متوفر حاليا</span></div></div><div class="bg-gray-100 px-2 py-1 rounded-xl border border-gray-200"><span class="text-[10px] font-bold text-gray-500">غير متوفر</span></div></div>
                            <div class="bg-white p-3 rounded-xl border border-amber-200 flex items-center justify-between shadow-sm opacity-60"><div class="flex items-center gap-3"><div class="w-16 h-16 bg-amber-50 rounded-lg overflow-hidden border border-amber-200 shrink-0"><img src="{{ asset('images/honey_13_4.jpg') }}" alt="٢٥٠ غرام" class="w-full h-full object-cover"></div><div><span class="font-bold text-amber-900 block text-sm">٢٥٠ غرام</span><span class="text-xs text-amber-600 block">عبوة زجاجية</span><span class="text-xs font-bold text-red-600">غير متوفر حاليا</span></div></div><div class="bg-gray-100 px-2 py-1 rounded-xl border border-gray-200"><span class="text-[10px] font-bold text-gray-500">غير متوفر</span></div></div>
                            <div class="bg-white p-3 rounded-xl border border-amber-200 flex items-center justify-between shadow-sm opacity-60"><div class="flex items-center gap-3"><div class="w-16 h-16 bg-amber-50 rounded-lg overflow-hidden border border-amber-200 shrink-0"><img src="{{ asset('images/honey_13_5.jpg') }}" alt="٥٠٠ غرام" class="w-full h-full object-cover"></div><div><span class="font-bold text-amber-900 block text-sm">٥٠٠ غرام</span><span class="text-xs text-amber-600 block">عبوة زجاجية</span><span class="text-xs font-bold text-red-600">غير متوفر حاليا</span></div></div><div class="bg-gray-100 px-2 py-1 rounded-xl border border-gray-200"><span class="text-[10px] font-bold text-gray-500">غير متوفر</span></div></div>
                            <div class="bg-white p-3 rounded-xl border border-amber-200 flex items-center justify-between shadow-sm"><div class="flex items-center gap-3"><div class="w-16 h-16 bg-amber-50 rounded-lg overflow-hidden border border-amber-200 shrink-0"><img src="{{ asset('images/honey_13_6.jpg') }}" alt="١٠٠٠ غرام (كيلو)" class="w-full h-full object-cover"></div><div><span class="font-bold text-amber-900 block text-sm">١٠٠٠ غرام (كيلو)</span><span class="text-xs text-amber-600 block">عبوة زجاجية</span><span class="text-xs font-bold text-amber-700">2950 ليرة</span></div></div><div class="flex items-center gap-2 bg-amber-50 p-1.5 rounded-xl border border-amber-200"><button type="button" @click="if(qty13_1000 > 0) qty13_1000--" class="w-7 h-7 bg-white text-amber-900 font-bold rounded-lg shadow-sm hover:bg-amber-100 flex items-center justify-center cursor-pointer">-</button><span class="w-8 text-center font-bold text-sm" x-text="qty13_1000"></span><button type="button" @click="qty13_1000++" class="w-7 h-7 bg-amber-700 text-white font-bold rounded-lg shadow-sm hover:bg-amber-800 flex items-center justify-center cursor-pointer">+</button></div></div></div></div><div class="bg-white p-4 rounded-2xl border border-amber-200 space-y-2 text-sm text-gray-700"><h4 class="font-bold text-amber-900 border-b pb-1">مواصفات عسل الخزامى (اللافندر):</h4>                        <p><strong>اللون:</strong> يتميز بلون عنبري خفيف (كهرماني فاتح)، ويتحول إلى اللون الذهبي الفاتح عند التبلور.</p>
                        <p><strong>الطعم:</strong> طعمه عذب ومتوازن الحلاوة، ويترك نكهة عشبية عطرية رائعة ودائمة في الفم، مع حموضة خفيفة جداً.</p>
                        <p><strong>الرائحة:</strong> فواحة وعطرية قوية ومتخصصة جداً؛ تشبه عبق أزهار الخزامى الطازجة فور فتح العبوة.</p>
                        <p><strong>مكان الإنتاج:</strong> يُنتج بشكل أساسي في المناطق الساحلية (اللاذقية وطرطوس) والمرتفعات الجبلية المجاورة لها، بالإضافة إلى ريف حماة وحمص في المناطق التي نجحت فيها مشاريع استزراع اللافندر الاقتصادي مؤخراً.</p>
                        <p><strong>وقت الإنتاج:</strong> من الشهر السابع إلى الشهر الثامن</p></div></div>
            </div>

            <!-- 14. عسل العاقول -->
            <div x-data="{ open: false }" class="bg-white rounded-3xl shadow-lg border-2 border-amber-200 overflow-hidden flex flex-col justify-between hover:shadow-xl transition duration-300">
                <div class="p-6 flex flex-col space-y-4"><div class="flex flex-col sm:flex-row items-center gap-6"><div class="w-40 h-40 shrink-0 rounded-2xl overflow-hidden shadow-md border border-amber-300 bg-amber-50 flex items-center justify-center"><img src="{{ asset('images/honey_14_1.jpg') }}" alt="عسل العاقول" class="w-full h-full object-cover"></div><div class="text-right space-y-2 flex-1"><h3 class="text-2xl font-extrabold text-amber-900">عسل العاقول</h3><div class="text-xs text-gray-700 space-y-1 bg-amber-50/80 p-3 rounded-xl border border-amber-200">                                <p><strong>البواسير:</strong> معروف شعبياً وطبياً بفوائده الكبيرة في تخفيف آلام البواسير والتهاباتها.</p>
                                <p><strong>الروماتيزم:</strong> يسكن آلام العظام الظهرية والمفصلية.</p>
                                <p><strong>مسيل طبيعي:</strong> يساهم في تنشيط الدورة الدموية ومنع التجلطات.</p></div></div></div><div class="pt-2 flex justify-center"><button type="button" @click="open = !open" class="bg-amber-700 hover:bg-amber-800 text-white font-bold px-6 py-2.5 rounded-xl text-sm transition shadow flex items-center gap-2 cursor-pointer"><span x-text="open ? 'إخفاء التفاصيل والأسعار' : 'اقرأ المزيد & الأسعار'"></span><svg class="w-4 h-4 transition-transform duration-300" :class="open ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button></div></div>
                <div x-show="open" x-transition class="bg-amber-50/70 border-t border-amber-200 p-6 space-y-6"><div class="w-full h-48 sm:h-52 rounded-2xl overflow-hidden shadow-inner border border-amber-300 bg-white"><img src="{{ asset('images/honey_14_2.jpg') }}" alt="عسل العاقول - تفاصيل" class="w-full h-full object-contain"></div><div class="space-y-3"><h4 class="font-bold text-amber-900 border-b border-amber-300 pb-1 text-lg">الأحجام المتوفرة والأسعار:</h4><div class="grid grid-cols-1 gap-3">                            <div class="bg-white p-3 rounded-xl border border-amber-200 flex items-center justify-between shadow-sm opacity-60"><div class="flex items-center gap-3"><div class="w-16 h-16 bg-amber-50 rounded-lg overflow-hidden border border-amber-200 shrink-0"><img src="{{ asset('images/honey_14_3.jpg') }}" alt="٣٠ غرام" class="w-full h-full object-cover"></div><div><span class="font-bold text-amber-900 block text-sm">٣٠ غرام</span><span class="text-xs text-amber-600 block">عبوة زجاجية</span><span class="text-xs font-bold text-red-600">غير متوفر حاليا</span></div></div><div class="bg-gray-100 px-2 py-1 rounded-xl border border-gray-200"><span class="text-[10px] font-bold text-gray-500">غير متوفر</span></div></div>
                            <div class="bg-white p-3 rounded-xl border border-amber-200 flex items-center justify-between shadow-sm opacity-60"><div class="flex items-center gap-3"><div class="w-16 h-16 bg-amber-50 rounded-lg overflow-hidden border border-amber-200 shrink-0"><img src="{{ asset('images/honey_14_4.jpg') }}" alt="٢٥٠ غرام" class="w-full h-full object-cover"></div><div><span class="font-bold text-amber-900 block text-sm">٢٥٠ غرام</span><span class="text-xs text-amber-600 block">عبوة زجاجية</span><span class="text-xs font-bold text-red-600">غير متوفر حاليا</span></div></div><div class="bg-gray-100 px-2 py-1 rounded-xl border border-gray-200"><span class="text-[10px] font-bold text-gray-500">غير متوفر</span></div></div>
                            <div class="bg-white p-3 rounded-xl border border-amber-200 flex items-center justify-between shadow-sm"><div class="flex items-center gap-3"><div class="w-16 h-16 bg-amber-50 rounded-lg overflow-hidden border border-amber-200 shrink-0"><img src="{{ asset('images/honey_14_5.jpg') }}" alt="٥٠٠ غرام" class="w-full h-full object-cover"></div><div><span class="font-bold text-amber-900 block text-sm">٥٠٠ غرام</span><span class="text-xs text-amber-600 block">عبوة زجاجية</span><span class="text-xs font-bold text-amber-700">2200 ليرة</span></div></div><div class="flex items-center gap-2 bg-amber-50 p-1.5 rounded-xl border border-amber-200"><button type="button" @click="if(qty14_500 > 0) qty14_500--" class="w-7 h-7 bg-white text-amber-900 font-bold rounded-lg shadow-sm hover:bg-amber-100 flex items-center justify-center cursor-pointer">-</button><span class="w-8 text-center font-bold text-sm" x-text="qty14_500"></span><button type="button" @click="qty14_500++" class="w-7 h-7 bg-amber-700 text-white font-bold rounded-lg shadow-sm hover:bg-amber-800 flex items-center justify-center cursor-pointer">+</button></div></div>
                            <div class="bg-white p-3 rounded-xl border border-amber-200 flex items-center justify-between shadow-sm opacity-60"><div class="flex items-center gap-3"><div class="w-16 h-16 bg-amber-50 rounded-lg overflow-hidden border border-amber-200 shrink-0"><img src="{{ asset('images/honey_14_6.jpg') }}" alt="١٠٠٠ غرام (كيلو)" class="w-full h-full object-cover"></div><div><span class="font-bold text-amber-900 block text-sm">١٠٠٠ غرام (كيلو)</span><span class="text-xs text-amber-600 block">عبوة زجاجية</span><span class="text-xs font-bold text-red-600">غير متوفر حاليا</span></div></div><div class="bg-gray-100 px-2 py-1 rounded-xl border border-gray-200"><span class="text-[10px] font-bold text-gray-500">غير متوفر</span></div></div></div></div><div class="bg-white p-4 rounded-2xl border border-amber-200 space-y-2 text-sm text-gray-700"><h4 class="font-bold text-amber-900 border-b pb-1">مواصفات عسل العاقول:</h4>                        <p><strong>اللون:</strong> يتميز بلونه العنبري الفاتح الذي قد يميل إلى الصفراء الذهبية، ويتحول إلى اللون الأبيض أو البيج الفاتح عند التبلور (التجمد).</p>
                        <p><strong>الطعم:</strong> طعمه حلو معتدل اللذاذة مع لوعة أو مرارة خفيفة جداً تظهر في نهاية التذوق، وهو مرغوب للذين لا يفضلون العسل شديد السكريات.</p>
                        <p><strong>الرائحة:</strong> يتمتع برائحة عشبية خفيفة وزكية تعكس عبير زهور أشواك البراري السورية.</p>
                        <p><strong>مكان الإنتاج:</strong> يُنتج في البادية السورية والمناطق الشرقية مثل دير الزور والرقة والحسكة، بالإضافة إلى بعض السهول الجافة والأراضي شبه الصحراوية في محافظات حلب وحماة وحمص.</p>
                        <p><strong>وقت الإنتاج:</strong> من الشهر السابع إلى الشهر الثامن</p></div></div>
            </div>

            <!-- 15. عسل المرير (المرّار) -->
            <div x-data="{ open: false }" class="bg-white rounded-3xl shadow-lg border-2 border-amber-200 overflow-hidden flex flex-col justify-between hover:shadow-xl transition duration-300">
                <div class="p-6 flex flex-col space-y-4"><div class="flex flex-col sm:flex-row items-center gap-6"><div class="w-40 h-40 shrink-0 rounded-2xl overflow-hidden shadow-md border border-amber-300 bg-amber-50 flex items-center justify-center"><img src="{{ asset('images/honey_15_1.jpg') }}" alt="عسل المرير (المرّار)" class="w-full h-full object-cover"></div><div class="text-right space-y-2 flex-1"><h3 class="text-2xl font-extrabold text-amber-900">عسل المرير (المرّار)</h3><div class="text-xs text-gray-700 space-y-1 bg-amber-50/80 p-3 rounded-xl border border-amber-200">                                <p><strong>مرضى السكري:</strong> يحتوي على نسب منخفضة جداً من السكروز، مما يجعله خياراً آمناً (باعتدال) لمرضى السكر.</p>
                                <p><strong>الكبد والمرارة:</strong> ينشط إفراز العصارة الصفراوية ويطهر الكبد.</p>
                                <p><strong>الأورام:</strong> غني جداً بمضادات الأكسدة التي تحارب الخلايا السرطانية.</p></div></div></div><div class="pt-2 flex justify-center"><button type="button" @click="open = !open" class="bg-amber-700 hover:bg-amber-800 text-white font-bold px-6 py-2.5 rounded-xl text-sm transition shadow flex items-center gap-2 cursor-pointer"><span x-text="open ? 'إخفاء التفاصيل والأسعار' : 'اقرأ المزيد & الأسعار'"></span><svg class="w-4 h-4 transition-transform duration-300" :class="open ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button></div></div>
                <div x-show="open" x-transition class="bg-amber-50/70 border-t border-amber-200 p-6 space-y-6"><div class="w-full h-48 sm:h-52 rounded-2xl overflow-hidden shadow-inner border border-amber-300 bg-white"><img src="{{ asset('images/honey_15_2.jpg') }}" alt="عسل المرير (المرّار) - تفاصيل" class="w-full h-full object-contain"></div><div class="space-y-3"><h4 class="font-bold text-amber-900 border-b border-amber-300 pb-1 text-lg">الأحجام المتوفرة والأسعار:</h4><div class="grid grid-cols-1 gap-3">                            <div class="bg-white p-3 rounded-xl border border-amber-200 flex items-center justify-between shadow-sm opacity-60"><div class="flex items-center gap-3"><div class="w-16 h-16 bg-amber-50 rounded-lg overflow-hidden border border-amber-200 shrink-0"><img src="{{ asset('images/honey_15_3.jpg') }}" alt="٣٠ غرام" class="w-full h-full object-cover"></div><div><span class="font-bold text-amber-900 block text-sm">٣٠ غرام</span><span class="text-xs text-amber-600 block">عبوة زجاجية</span><span class="text-xs font-bold text-red-600">غير متوفر حاليا</span></div></div><div class="bg-gray-100 px-2 py-1 rounded-xl border border-gray-200"><span class="text-[10px] font-bold text-gray-500">غير متوفر</span></div></div>
                            <div class="bg-white p-3 rounded-xl border border-amber-200 flex items-center justify-between shadow-sm"><div class="flex items-center gap-3"><div class="w-16 h-16 bg-amber-50 rounded-lg overflow-hidden border border-amber-200 shrink-0"><img src="{{ asset('images/honey_15_4.jpg') }}" alt="٢٥٠ غرام" class="w-full h-full object-cover"></div><div><span class="font-bold text-amber-900 block text-sm">٢٥٠ غرام</span><span class="text-xs text-amber-600 block">عبوة زجاجية</span><span class="text-xs font-bold text-amber-700">650 ليرة</span></div></div><div class="flex items-center gap-2 bg-amber-50 p-1.5 rounded-xl border border-amber-200"><button type="button" @click="if(qty15_250 > 0) qty15_250--" class="w-7 h-7 bg-white text-amber-900 font-bold rounded-lg shadow-sm hover:bg-amber-100 flex items-center justify-center cursor-pointer">-</button><span class="w-8 text-center font-bold text-sm" x-text="qty15_250"></span><button type="button" @click="qty15_250++" class="w-7 h-7 bg-amber-700 text-white font-bold rounded-lg shadow-sm hover:bg-amber-800 flex items-center justify-center cursor-pointer">+</button></div></div>
                            <div class="bg-white p-3 rounded-xl border border-amber-200 flex items-center justify-between shadow-sm"><div class="flex items-center gap-3"><div class="w-16 h-16 bg-amber-50 rounded-lg overflow-hidden border border-amber-200 shrink-0"><img src="{{ asset('images/honey_15_5.jpg') }}" alt="٥٠٠ غرام" class="w-full h-full object-cover"></div><div><span class="font-bold text-amber-900 block text-sm">٥٠٠ غرام</span><span class="text-xs text-amber-600 block">عبوة زجاجية</span><span class="text-xs font-bold text-amber-700">1250 ليرة</span></div></div><div class="flex items-center gap-2 bg-amber-50 p-1.5 rounded-xl border border-amber-200"><button type="button" @click="if(qty15_500 > 0) qty15_500--" class="w-7 h-7 bg-white text-amber-900 font-bold rounded-lg shadow-sm hover:bg-amber-100 flex items-center justify-center cursor-pointer">-</button><span class="w-8 text-center font-bold text-sm" x-text="qty15_500"></span><button type="button" @click="qty15_500++" class="w-7 h-7 bg-amber-700 text-white font-bold rounded-lg shadow-sm hover:bg-amber-800 flex items-center justify-center cursor-pointer">+</button></div></div>
                            <div class="bg-white p-3 rounded-xl border border-amber-200 flex items-center justify-between shadow-sm"><div class="flex items-center gap-3"><div class="w-16 h-16 bg-amber-50 rounded-lg overflow-hidden border border-amber-200 shrink-0"><img src="{{ asset('images/honey_15_6.jpg') }}" alt="١٠٠٠ غرام (كيلو)" class="w-full h-full object-cover"></div><div><span class="font-bold text-amber-900 block text-sm">١٠٠٠ غرام (كيلو)</span><span class="text-xs text-amber-600 block">عبوة زجاجية</span><span class="text-xs font-bold text-amber-700">2350 ليرة</span></div></div><div class="flex items-center gap-2 bg-amber-50 p-1.5 rounded-xl border border-amber-200"><button type="button" @click="if(qty15_1000 > 0) qty15_1000--" class="w-7 h-7 bg-white text-amber-900 font-bold rounded-lg shadow-sm hover:bg-amber-100 flex items-center justify-center cursor-pointer">-</button><span class="w-8 text-center font-bold text-sm" x-text="qty15_1000"></span><button type="button" @click="qty15_1000++" class="w-7 h-7 bg-amber-700 text-white font-bold rounded-lg shadow-sm hover:bg-amber-800 flex items-center justify-center cursor-pointer">+</button></div></div></div></div><div class="bg-white p-4 rounded-2xl border border-amber-200 space-y-2 text-sm text-gray-700"><h4 class="font-bold text-amber-900 border-b pb-1">مواصفات عسل المرير (المرّار):</h4>                        <p><strong>اللون:</strong> يتميز بلون أخضر فوسفوري واضح أو داكن يميل إلى الخضار عند تحريكه، وقد يتدرج أحياناً إلى اللون الكهرماني الداكن أو البني الفاتح إذا اختلط بنباتات برية أخرى.</p>
                        <p><strong>الطعم:</strong> يبدأ بمذاق حلو معتدل، وينتهي بلسعة مرارة خفيفة ومميزة في الحلق، تمنحه نكهة برية عميقة وفريدة.</p>
                        <p><strong>الرائحة:</strong> يمتلك رائحة عشبية نفاذة وقوية تعكس طبيعة الزهور الشوكية البرية التي يتغذى عليها النحل.</p>
                        <p><strong>مكان الإنتاج:</strong> يُنتج في مناطق البادية والبراري الجافة مثل سهول حوران (درعا) والمناطق شبه الصحراوية.</p>
                        <p><strong>وقت الإنتاج:</strong> من الشهر الخامس إلى الشهر السادس</p></div></div>
            </div>

            <!-- 16. عسل السنديان -->
            <div x-data="{ open: false }" class="bg-white rounded-3xl shadow-lg border-2 border-amber-200 overflow-hidden flex flex-col justify-between hover:shadow-xl transition duration-300">
                <div class="p-6 flex flex-col space-y-4"><div class="flex flex-col sm:flex-row items-center gap-6"><div class="w-40 h-40 shrink-0 rounded-2xl overflow-hidden shadow-md border border-amber-300 bg-amber-50 flex items-center justify-center"><img src="{{ asset('images/honey_16_1.jpg') }}" alt="عسل السنديان" class="w-full h-full object-cover"></div><div class="text-right space-y-2 flex-1"><h3 class="text-2xl font-extrabold text-amber-900">عسل السنديان</h3><div class="text-xs text-gray-700 space-y-1 bg-amber-50/80 p-3 rounded-xl border border-amber-200">                                <p><strong>القولون:</strong> يعالج حالات الإسهال المزمن والتهابات القولون بفضل خصائصه القابضة.</p>
                                <p><strong>المعادن الثقيلة:</strong> يزود الجسم بنسبة عالية جداً من الكالسيوم والماغنيسيوم.</p>
                                <p><strong>اللثة:</strong> يمنع نزيف اللثة ويقوي الأسنان.</p></div></div></div><div class="pt-2 flex justify-center"><button type="button" @click="open = !open" class="bg-amber-700 hover:bg-amber-800 text-white font-bold px-6 py-2.5 rounded-xl text-sm transition shadow flex items-center gap-2 cursor-pointer"><span x-text="open ? 'إخفاء التفاصيل والأسعار' : 'اقرأ المزيد & الأسعار'"></span><svg class="w-4 h-4 transition-transform duration-300" :class="open ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button></div></div>
                <div x-show="open" x-transition class="bg-amber-50/70 border-t border-amber-200 p-6 space-y-6"><div class="w-full h-48 sm:h-52 rounded-2xl overflow-hidden shadow-inner border border-amber-300 bg-white"><img src="{{ asset('images/honey_16_2.jpg') }}" alt="عسل السنديان - تفاصيل" class="w-full h-full object-contain"></div><div class="space-y-3"><h4 class="font-bold text-amber-900 border-b border-amber-300 pb-1 text-lg">الأحجام المتوفرة والأسعار:</h4><div class="grid grid-cols-1 gap-3">                            <div class="bg-white p-3 rounded-xl border border-amber-200 flex items-center justify-between shadow-sm opacity-60"><div class="flex items-center gap-3"><div class="w-16 h-16 bg-amber-50 rounded-lg overflow-hidden border border-amber-200 shrink-0"><img src="{{ asset('images/honey_16_3.jpg') }}" alt="٣٠ غرام" class="w-full h-full object-cover"></div><div><span class="font-bold text-amber-900 block text-sm">٣٠ غرام</span><span class="text-xs text-amber-600 block">عبوة زجاجية</span><span class="text-xs font-bold text-red-600">غير متوفر حاليا</span></div></div><div class="bg-gray-100 px-2 py-1 rounded-xl border border-gray-200"><span class="text-[10px] font-bold text-gray-500">غير متوفر</span></div></div>
                            <div class="bg-white p-3 rounded-xl border border-amber-200 flex items-center justify-between shadow-sm opacity-60"><div class="flex items-center gap-3"><div class="w-16 h-16 bg-amber-50 rounded-lg overflow-hidden border border-amber-200 shrink-0"><img src="{{ asset('images/honey_16_4.jpg') }}" alt="٢٥٠ غرام" class="w-full h-full object-cover"></div><div><span class="font-bold text-amber-900 block text-sm">٢٥٠ غرام</span><span class="text-xs text-amber-600 block">عبوة زجاجية</span><span class="text-xs font-bold text-red-600">غير متوفر حاليا</span></div></div><div class="bg-gray-100 px-2 py-1 rounded-xl border border-gray-200"><span class="text-[10px] font-bold text-gray-500">غير متوفر</span></div></div>
                            <div class="bg-white p-3 rounded-xl border border-amber-200 flex items-center justify-between shadow-sm"><div class="flex items-center gap-3"><div class="w-16 h-16 bg-amber-50 rounded-lg overflow-hidden border border-amber-200 shrink-0"><img src="{{ asset('images/honey_16_5.jpg') }}" alt="٥٠٠ غرام" class="w-full h-full object-cover"></div><div><span class="font-bold text-amber-900 block text-sm">٥٠٠ غرام</span><span class="text-xs text-amber-600 block">عبوة زجاجية</span><span class="text-xs font-bold text-amber-700">2000 ليرة</span></div></div><div class="flex items-center gap-2 bg-amber-50 p-1.5 rounded-xl border border-amber-200"><button type="button" @click="if(qty16_500 > 0) qty16_500--" class="w-7 h-7 bg-white text-amber-900 font-bold rounded-lg shadow-sm hover:bg-amber-100 flex items-center justify-center cursor-pointer">-</button><span class="w-8 text-center font-bold text-sm" x-text="qty16_500"></span><button type="button" @click="qty16_500++" class="w-7 h-7 bg-amber-700 text-white font-bold rounded-lg shadow-sm hover:bg-amber-800 flex items-center justify-center cursor-pointer">+</button></div></div>
                            <div class="bg-white p-3 rounded-xl border border-amber-200 flex items-center justify-between shadow-sm"><div class="flex items-center gap-3"><div class="w-16 h-16 bg-amber-50 rounded-lg overflow-hidden border border-amber-200 shrink-0"><img src="{{ asset('images/honey_16_6.jpg') }}" alt="١٠٠٠ غرام (كيلو)" class="w-full h-full object-cover"></div><div><span class="font-bold text-amber-900 block text-sm">١٠٠٠ غرام (كيلو)</span><span class="text-xs text-amber-600 block">عبوة زجاجية</span><span class="text-xs font-bold text-amber-700">3900 ليرة</span></div></div><div class="flex items-center gap-2 bg-amber-50 p-1.5 rounded-xl border border-amber-200"><button type="button" @click="if(qty16_1000 > 0) qty16_1000--" class="w-7 h-7 bg-white text-amber-900 font-bold rounded-lg shadow-sm hover:bg-amber-100 flex items-center justify-center cursor-pointer">-</button><span class="w-8 text-center font-bold text-sm" x-text="qty16_1000"></span><button type="button" @click="qty16_1000++" class="w-7 h-7 bg-amber-700 text-white font-bold rounded-lg shadow-sm hover:bg-amber-800 flex items-center justify-center cursor-pointer">+</button></div></div></div></div><div class="bg-white p-4 rounded-2xl border border-amber-200 space-y-2 text-sm text-gray-700"><h4 class="font-bold text-amber-900 border-b pb-1">مواصفات عسل السنديان:</h4>                        <p><strong>اللون:</strong> داكن جداً يميل إلى اللون الأسود أو البني المحروق، ويتميز بمظهر فخم وكثيف.</p>
                        <p><strong>الطعم:</strong> غني ودافئ ذو حلاوة خفيفة (أقل حلاوة من العسل العادي) مع نكهة خشبية مميزة تشبه مناخ الغابات.</p>
                        <p><strong>الرائحة:</strong> قوية وعميقة تعكس رائحة خشب السنديان العتيق وأوراق الأشجار ونسمات الجبال.</p>
                        <p><strong>القوام:</strong> ثقيل جداً ولزج، ويتميز بأنه لا يتبلور (لا يتجمد) بسهولة خلال فصل الشتاء مثل باقي أنواع العسل.</p>
                        <p><strong>أماكن الإنتاج في سوريا:</strong> ينتج هذا العسل في المناطق الجبلية والبيئات الغابوية الكثيفة التي تنتشر فيها أشجار السنديان المعمرة، ومنها الساحل السوري: جبال غابات اللاذقية وطرطوس ومناطق جبل صنمين ومحيطها، والمنطقة الوسطى والغربية، والمنطقة الجنوبية.</p>
                        <p><strong>وقت الإنتاج:</strong> في فصل الصيف ويختلف وقت الإنتاج حسب الحرارة والرطوبة</p></div></div>
            </div>

            <!-- 17. عسل الجرجير -->
            <div x-data="{ open: false }" class="bg-white rounded-3xl shadow-lg border-2 border-amber-200 overflow-hidden flex flex-col justify-between hover:shadow-xl transition duration-300">
                <div class="p-6 flex flex-col space-y-4"><div class="flex flex-col sm:flex-row items-center gap-6"><div class="w-40 h-40 shrink-0 rounded-2xl overflow-hidden shadow-md border border-amber-300 bg-amber-50 flex items-center justify-center"><img src="{{ asset('images/honey_17_1.jpg') }}" alt="عسل الجرجير" class="w-full h-full object-cover"></div><div class="text-right space-y-2 flex-1"><h3 class="text-2xl font-extrabold text-amber-900">عسل الجرجير</h3><div class="text-xs text-gray-700 space-y-1 bg-amber-50/80 p-3 rounded-xl border border-amber-200">                                <p><strong>المقوي الجنسي:</strong> يعتبر من أقوى المنشطات الجنسية الطبيعية للرجال (يزيد عدد الحيوانات المنوية).</p>
                                <p><strong>تساقط الشعر:</strong> يغذي بصيلات الشعر عند تناوله بانتظام أو إدخاله في الخلطات.</p>
                                <p><strong>الغدة الدرقية:</strong> يساعد في تنظيم إفرازات الغدة الهرمونية</p></div></div></div><div class="pt-2 flex justify-center"><button type="button" @click="open = !open" class="bg-amber-700 hover:bg-amber-800 text-white font-bold px-6 py-2.5 rounded-xl text-sm transition shadow flex items-center gap-2 cursor-pointer"><span x-text="open ? 'إخفاء التفاصيل والأسعار' : 'اقرأ المزيد & الأسعار'"></span><svg class="w-4 h-4 transition-transform duration-300" :class="open ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button></div></div>
                <div x-show="open" x-transition class="bg-amber-50/70 border-t border-amber-200 p-6 space-y-6"><div class="w-full h-48 sm:h-52 rounded-2xl overflow-hidden shadow-inner border border-amber-300 bg-white"><img src="{{ asset('images/honey_17_2.jpg') }}" alt="عسل الجرجير - تفاصيل" class="w-full h-full object-contain"></div><div class="space-y-3"><h4 class="font-bold text-amber-900 border-b border-amber-300 pb-1 text-lg">الأحجام المتوفرة والأسعار:</h4><div class="grid grid-cols-1 gap-3">                            <div class="bg-white p-3 rounded-xl border border-amber-200 flex items-center justify-between shadow-sm opacity-60"><div class="flex items-center gap-3"><div class="w-16 h-16 bg-amber-50 rounded-lg overflow-hidden border border-amber-200 shrink-0"><img src="{{ asset('images/honey_17_3.jpg') }}" alt="٣٠ غرام" class="w-full h-full object-cover"></div><div><span class="font-bold text-amber-900 block text-sm">٣٠ غرام</span><span class="text-xs text-amber-600 block">عبوة زجاجية</span><span class="text-xs font-bold text-red-600">غير متوفر حاليا</span></div></div><div class="bg-gray-100 px-2 py-1 rounded-xl border border-gray-200"><span class="text-[10px] font-bold text-gray-500">غير متوفر</span></div></div>
                            <div class="bg-white p-3 rounded-xl border border-amber-200 flex items-center justify-between shadow-sm"><div class="flex items-center gap-3"><div class="w-16 h-16 bg-amber-50 rounded-lg overflow-hidden border border-amber-200 shrink-0"><img src="{{ asset('images/honey_17_4.jpg') }}" alt="٢٥٠ غرام" class="w-full h-full object-cover"></div><div><span class="font-bold text-amber-900 block text-sm">٢٥٠ غرام</span><span class="text-xs text-amber-600 block">عبوة زجاجية</span><span class="text-xs font-bold text-amber-700">1450 ليرة</span></div></div><div class="flex items-center gap-2 bg-amber-50 p-1.5 rounded-xl border border-amber-200"><button type="button" @click="if(qty17_250 > 0) qty17_250--" class="w-7 h-7 bg-white text-amber-900 font-bold rounded-lg shadow-sm hover:bg-amber-100 flex items-center justify-center cursor-pointer">-</button><span class="w-8 text-center font-bold text-sm" x-text="qty17_250"></span><button type="button" @click="qty17_250++" class="w-7 h-7 bg-amber-700 text-white font-bold rounded-lg shadow-sm hover:bg-amber-800 flex items-center justify-center cursor-pointer">+</button></div></div>
                            <div class="bg-white p-3 rounded-xl border border-amber-200 flex items-center justify-between shadow-sm"><div class="flex items-center gap-3"><div class="w-16 h-16 bg-amber-50 rounded-lg overflow-hidden border border-amber-200 shrink-0"><img src="{{ asset('images/honey_17_5.jpg') }}" alt="٥٠٠ غرام" class="w-full h-full object-cover"></div><div><span class="font-bold text-amber-900 block text-sm">٥٠٠ غرام</span><span class="text-xs text-amber-600 block">عبوة زجاجية</span><span class="text-xs font-bold text-amber-700">2800 ليرة</span></div></div><div class="flex items-center gap-2 bg-amber-50 p-1.5 rounded-xl border border-amber-200"><button type="button" @click="if(qty17_500 > 0) qty17_500--" class="w-7 h-7 bg-white text-amber-900 font-bold rounded-lg shadow-sm hover:bg-amber-100 flex items-center justify-center cursor-pointer">-</button><span class="w-8 text-center font-bold text-sm" x-text="qty17_500"></span><button type="button" @click="qty17_500++" class="w-7 h-7 bg-amber-700 text-white font-bold rounded-lg shadow-sm hover:bg-amber-800 flex items-center justify-center cursor-pointer">+</button></div></div>
                            <div class="bg-white p-3 rounded-xl border border-amber-200 flex items-center justify-between shadow-sm"><div class="flex items-center gap-3"><div class="w-16 h-16 bg-amber-50 rounded-lg overflow-hidden border border-amber-200 shrink-0"><img src="{{ asset('images/honey_17_6.jpg') }}" alt="١٠٠٠ غرام (كيلو)" class="w-full h-full object-cover"></div><div><span class="font-bold text-amber-900 block text-sm">١٠٠٠ غرام (كيلو)</span><span class="text-xs text-amber-600 block">عبوة زجاجية</span><span class="text-xs font-bold text-amber-700">5450 ليرة</span></div></div><div class="flex items-center gap-2 bg-amber-50 p-1.5 rounded-xl border border-amber-200"><button type="button" @click="if(qty17_1000 > 0) qty17_1000--" class="w-7 h-7 bg-white text-amber-900 font-bold rounded-lg shadow-sm hover:bg-amber-100 flex items-center justify-center cursor-pointer">-</button><span class="w-8 text-center font-bold text-sm" x-text="qty17_1000"></span><button type="button" @click="qty17_1000++" class="w-7 h-7 bg-amber-700 text-white font-bold rounded-lg shadow-sm hover:bg-amber-800 flex items-center justify-center cursor-pointer">+</button></div></div></div></div><div class="bg-white p-4 rounded-2xl border border-amber-200 space-y-2 text-sm text-gray-700"><h4 class="font-bold text-amber-900 border-b pb-1">مواصفات عسل الجرجير:</h4>                        <p><strong>اللون:</strong> يتراوح بين الأصفر الفاتح والذهبي، ولكنه يتحول سريعاً بعد قطافه بفترة وجيزة إلى الأبيض الكريمي نتيجة قابليته العالية والسرعية للتبلور.</p>
                        <p><strong>الطعم:</strong> قوي جداً، حار ومركّز، يترك لسعة خفيفة دافئة في الحلق تحاكي طعم أوراق الجرجير الطازجة واللاذعة.</p>
                        <p><strong>الرائحة:</strong> نفاذة وعطرية قوية تشبه رائحة زهور النباتات الحقلية والخردلية بشكل واضح بمجرد فتح العبوة.</p>
                        <p><strong>القوام:</strong> ناعم وكثيف جداً (كريمي)، ويعد من أسرع أنواع العسل تبلوراً وتجمداً بسبب طبيعة سكريات زهرة الجرجير.</p>
                        <p><strong>أماكن الإنتاج في سوريا:</strong> يزدهر إنتاج عسل الجرجير في المناطق التي تعتمد على الزراعات المروية والمساحات الحقلية الواسعة، وأبرزها غوطة دمشق وريفها: حيث تنتشر زراعة الخضروات الورقية والجرجير.</p>
                        <p><strong>وقت الإنتاج:</strong> من الشهر الرابع إلى الشهر الخامس</p></div></div>
            </div>

        </div>


        <!-- زر الانتقال إلى الصفحة الثالثة -->
        <div class="fixed bottom-20 left-0 right-0 z-30 flex justify-center px-4">
            <a href="{{ url('/page3') }}"
               class="bg-amber-800 hover:bg-amber-900 text-white font-extrabold px-8 py-3 rounded-2xl shadow-xl transition transform hover:scale-105 text-center">
                <span x-text="lang === 'ar' ? 'الانتقال إلى الصفحة الثالثة' : 'Go to Page 3'"></span>
            </a>
        </div>

        <!-- Floating Cart Bar (شريط سلة المشتريات العائم الثابت بالأسفل) -->
        <div class="fixed bottom-0 left-0 right-0 bg-white/95 backdrop-blur-md border-t border-amber-300 shadow-2xl p-4 z-40">
            <div class="max-w-4xl mx-auto flex flex-col sm:flex-row justify-between items-center gap-4">
                <div class="flex items-center gap-6 text-center sm:text-right">
                    <div>
                        <span class="text-xs text-gray-500 block">إجمالي القطع المختارة</span>
                        <span class="text-lg font-extrabold text-amber-900" x-text="getTotalItems() + ' قطع'"></span>
                    </div>
                    <div class="border-r border-amber-200 pr-6">
                        <span class="text-xs text-gray-500 block">المجموع الكلي</span>
                        <span class="text-xl font-extrabold text-amber-700" x-text="getTotalPrice() + ' ليرة سورية'"></span>
                    </div>
                </div>
                <button type="button" @click="addToCart()" class="w-full sm:w-auto bg-gradient-to-r from-amber-600 to-amber-800 hover:from-amber-700 hover:to-amber-900 text-white font-extrabold px-8 py-3 rounded-2xl shadow-lg transition transform active:scale-95 flex items-center justify-center gap-3 cursor-pointer">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                    <span>إضافة إلى السلة وإتمام الطلب</span>
                </button>
            </div>
        </div>

    </main>

    <div class="flex justify-center px-4 pb-6">
        <a href="{{ url('/') }}" class="bg-amber-700 hover:bg-amber-800 text-white font-extrabold px-8 py-3 rounded-2xl shadow-lg transition transform active:scale-95 flex items-center justify-center gap-3">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l9-9 9 9M5 10v10h14V10M10 20v-6h4v6"></path></svg>
            <span x-text="lang === 'ar' ? 'العودة إلى الصفحة الرئيسية' : 'Back to Home Page'"></span>
        </a>
    </div>

    <!-- Footer -->
    <footer class="bg-amber-950 text-amber-100 py-8 mt-20 mb-20 text-center text-sm border-t border-amber-900">
        <p x-text="lang === 'ar' ? 'جميع الحقوق محفوظة © عسل إسراء الملكي' : 'All Rights Reserved © Esraa Royal Honey'"></p>
    </footer>

</body>
</html>