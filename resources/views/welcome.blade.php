<!DOCTYPE html>
<html lang="en" class="h-full bg-[color:var(--html-bg-color,theme(colors.white))]">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preload" href="/fonts/Inter-roman.var.woff2?v=3.18" as="font" type="font/woff2" crossorigin="">
    <script src="https://cdn.usefathom.com/script.js" data-site="SOXJJCZQ" data-auto="false" defer></script>
    <script src="https://cdn.paddle.com/paddle/paddle.js"></script>
    <link rel="preload" as="style" href="https://tailwindui.com/build/assets/app-fb087be6.css" />
    <link rel="modulepreload" href="https://tailwindui.com/build/assets/app-e0f43721.js" />
    <link rel="modulepreload" href="https://tailwindui.com/build/assets/index-0c85f979.js" />
    <link rel="modulepreload" href="https://tailwindui.com/build/assets/_commonjsHelpers-87174ba5.js" />
    <link rel="stylesheet" href="https://tailwindui.com/build/assets/app-fb087be6.css" />
    <script type="module" src="https://tailwindui.com/build/assets/app-e0f43721.js"></script>

    <title inertia>Keynote - Tailwind CSS Conference Template</title>
</head>

<body class="font-sans antialiased text-gray-600 min-h-full flex flex-col [overflow-anchor:none]" scroll-region>
    <div id="app"
        data-page="{&quot;component&quot;:&quot;Template&quot;,&quot;props&quot;:{&quot;tailwindVersion&quot;:&quot;3.3&quot;,&quot;versionPrefix&quot;:&quot;&quot;,&quot;errors&quot;:{},&quot;decorator&quot;:&quot;tailwind-v3-ready&quot;,&quot;auth&quot;:null,&quot;snippetLang&quot;:&quot;html&quot;,&quot;commandPalette&quot;:[{&quot;url&quot;:&quot;/components/application-ui/application-shells/stacked&quot;,&quot;name&quot;:&quot;Stacked Layouts&quot;,&quot;category&quot;:&quot;Application UI / Application Shells&quot;},{&quot;url&quot;:&quot;/components/application-ui/application-shells/sidebar&quot;,&quot;name&quot;:&quot;Sidebar Layouts&quot;,&quot;category&quot;:&quot;Application UI / Application Shells&quot;},{&quot;url&quot;:&quot;/components/application-ui/application-shells/multi-column&quot;,&quot;name&quot;:&quot;Multi-Column Layouts&quot;,&quot;category&quot;:&quot;Application UI / Application Shells&quot;},{&quot;url&quot;:&quot;/components/application-ui/headings/page-headings&quot;,&quot;name&quot;:&quot;Page Headings&quot;,&quot;category&quot;:&quot;Application UI / Headings&quot;},{&quot;url&quot;:&quot;/components/application-ui/headings/card-headings&quot;,&quot;name&quot;:&quot;Card Headings&quot;,&quot;category&quot;:&quot;Application UI / Headings&quot;},{&quot;url&quot;:&quot;/components/application-ui/headings/section-headings&quot;,&quot;name&quot;:&quot;Section Headings&quot;,&quot;category&quot;:&quot;Application UI / Headings&quot;},{&quot;url&quot;:&quot;/components/application-ui/data-display/description-lists&quot;,&quot;name&quot;:&quot;Description Lists&quot;,&quot;category&quot;:&quot;Application UI / Data Display&quot;},{&quot;url&quot;:&quot;/components/application-ui/data-display/stats&quot;,&quot;name&quot;:&quot;Stats&quot;,&quot;category&quot;:&quot;Application UI / Data Display&quot;},{&quot;url&quot;:&quot;/components/application-ui/data-display/calendars&quot;,&quot;name&quot;:&quot;Calendars&quot;,&quot;category&quot;:&quot;Application UI / Data Display&quot;},{&quot;url&quot;:&quot;/components/application-ui/lists/tables&quot;,&quot;name&quot;:&quot;Tables&quot;,&quot;category&quot;:&quot;Application UI / Lists&quot;},{&quot;url&quot;:&quot;/components/application-ui/lists/stacked-lists&quot;,&quot;name&quot;:&quot;Stacked Lists&quot;,&quot;category&quot;:&quot;Application UI / Lists&quot;},{&quot;url&quot;:&quot;/components/application-ui/lists/grid-lists&quot;,&quot;name&quot;:&quot;Grid Lists&quot;,&quot;category&quot;:&quot;Application UI / Lists&quot;},{&quot;url&quot;:&quot;/components/application-ui/lists/feeds&quot;,&quot;name&quot;:&quot;Feeds&quot;,&quot;category&quot;:&quot;Application UI / Lists&quot;},{&quot;url&quot;:&quot;/components/application-ui/forms/form-layouts&quot;,&quot;name&quot;:&quot;Form Layouts&quot;,&quot;category&quot;:&quot;Application UI / Forms&quot;},{&quot;url&quot;:&quot;/components/application-ui/forms/input-groups&quot;,&quot;name&quot;:&quot;Input Groups&quot;,&quot;category&quot;:&quot;Application UI / Forms&quot;},{&quot;url&quot;:&quot;/components/application-ui/forms/select-menus&quot;,&quot;name&quot;:&quot;Select Menus&quot;,&quot;category&quot;:&quot;Application UI / Forms&quot;},{&quot;url&quot;:&quot;/components/application-ui/forms/textareas&quot;,&quot;name&quot;:&quot;Textareas&quot;,&quot;category&quot;:&quot;Application UI / Forms&quot;},{&quot;url&quot;:&quot;/components/application-ui/forms/radio-groups&quot;,&quot;name&quot;:&quot;Radio Groups&quot;,&quot;category&quot;:&quot;Application UI / Forms&quot;},{&quot;url&quot;:&quot;/components/application-ui/forms/checkboxes&quot;,&quot;name&quot;:&quot;Checkboxes&quot;,&quot;category&quot;:&quot;Application UI / Forms&quot;},{&quot;url&quot;:&quot;/components/application-ui/forms/toggles&quot;,&quot;name&quot;:&quot;Toggles&quot;,&quot;category&quot;:&quot;Application UI / Forms&quot;},{&quot;url&quot;:&quot;/components/application-ui/forms/sign-in-forms&quot;,&quot;name&quot;:&quot;Sign-in and Registration&quot;,&quot;category&quot;:&quot;Application UI / Forms&quot;},{&quot;url&quot;:&quot;/components/application-ui/forms/action-panels&quot;,&quot;name&quot;:&quot;Action Panels&quot;,&quot;category&quot;:&quot;Application UI / Forms&quot;},{&quot;url&quot;:&quot;/components/application-ui/forms/comboboxes&quot;,&quot;name&quot;:&quot;Comboboxes&quot;,&quot;category&quot;:&quot;Application UI / Forms&quot;},{&quot;url&quot;:&quot;/components/application-ui/feedback/alerts&quot;,&quot;name&quot;:&quot;Alerts&quot;,&quot;category&quot;:&quot;Application UI / Feedback&quot;},{&quot;url&quot;:&quot;/components/application-ui/feedback/empty-states&quot;,&quot;name&quot;:&quot;Empty States&quot;,&quot;category&quot;:&quot;Application UI / Feedback&quot;},{&quot;url&quot;:&quot;/components/application-ui/navigation/tabs&quot;,&quot;name&quot;:&quot;Tabs&quot;,&quot;category&quot;:&quot;Application UI / Navigation&quot;},{&quot;url&quot;:&quot;/components/application-ui/navigation/navbars&quot;,&quot;name&quot;:&quot;Navbars&quot;,&quot;category&quot;:&quot;Application UI / Navigation&quot;},{&quot;url&quot;:&quot;/components/application-ui/navigation/vertical-navigation&quot;,&quot;name&quot;:&quot;Vertical Navigation&quot;,&quot;category&quot;:&quot;Application UI / Navigation&quot;},{&quot;url&quot;:&quot;/components/application-ui/navigation/pagination&quot;,&quot;name&quot;:&quot;Pagination&quot;,&quot;category&quot;:&quot;Application UI / Navigation&quot;},{&quot;url&quot;:&quot;/components/application-ui/navigation/sidebar-navigation&quot;,&quot;name&quot;:&quot;Sidebar Navigation&quot;,&quot;category&quot;:&quot;Application UI / Navigation&quot;},{&quot;url&quot;:&quot;/components/application-ui/navigation/breadcrumbs&quot;,&quot;name&quot;:&quot;Breadcrumbs&quot;,&quot;category&quot;:&quot;Application UI / Navigation&quot;},{&quot;url&quot;:&quot;/components/application-ui/navigation/steps&quot;,&quot;name&quot;:&quot;Steps&quot;,&quot;category&quot;:&quot;Application UI / Navigation&quot;},{&quot;url&quot;:&quot;/components/application-ui/navigation/command-palettes&quot;,&quot;name&quot;:&quot;Command Palettes&quot;,&quot;category&quot;:&quot;Application UI / Navigation&quot;},{&quot;url&quot;:&quot;/components/application-ui/overlays/modals&quot;,&quot;name&quot;:&quot;Modals&quot;,&quot;category&quot;:&quot;Application UI / Overlays&quot;},{&quot;url&quot;:&quot;/components/application-ui/overlays/slide-overs&quot;,&quot;name&quot;:&quot;Slide-overs&quot;,&quot;category&quot;:&quot;Application UI / Overlays&quot;},{&quot;url&quot;:&quot;/components/application-ui/overlays/notifications&quot;,&quot;name&quot;:&quot;Notifications&quot;,&quot;category&quot;:&quot;Application UI / Overlays&quot;},{&quot;url&quot;:&quot;/components/application-ui/elements/avatars&quot;,&quot;name&quot;:&quot;Avatars&quot;,&quot;category&quot;:&quot;Application UI / Elements&quot;},{&quot;url&quot;:&quot;/components/application-ui/elements/badges&quot;,&quot;name&quot;:&quot;Badges&quot;,&quot;category&quot;:&quot;Application UI / Elements&quot;},{&quot;url&quot;:&quot;/components/application-ui/elements/buttons&quot;,&quot;name&quot;:&quot;Buttons&quot;,&quot;category&quot;:&quot;Application UI / Elements&quot;},{&quot;url&quot;:&quot;/components/application-ui/elements/button-groups&quot;,&quot;name&quot;:&quot;Button Groups&quot;,&quot;category&quot;:&quot;Application UI / Elements&quot;},{&quot;url&quot;:&quot;/components/application-ui/elements/dropdowns&quot;,&quot;name&quot;:&quot;Dropdowns&quot;,&quot;category&quot;:&quot;Application UI / Elements&quot;},{&quot;url&quot;:&quot;/components/application-ui/layout/containers&quot;,&quot;name&quot;:&quot;Containers&quot;,&quot;category&quot;:&quot;Application UI / Layout&quot;},{&quot;url&quot;:&quot;/components/application-ui/layout/panels&quot;,&quot;name&quot;:&quot;Panels&quot;,&quot;category&quot;:&quot;Application UI / Layout&quot;},{&quot;url&quot;:&quot;/components/application-ui/layout/list-containers&quot;,&quot;name&quot;:&quot;List containers&quot;,&quot;category&quot;:&quot;Application UI / Layout&quot;},{&quot;url&quot;:&quot;/components/application-ui/layout/media-objects&quot;,&quot;name&quot;:&quot;Media Objects&quot;,&quot;category&quot;:&quot;Application UI / Layout&quot;},{&quot;url&quot;:&quot;/components/application-ui/layout/dividers&quot;,&quot;name&quot;:&quot;Dividers&quot;,&quot;category&quot;:&quot;Application UI / Layout&quot;},{&quot;url&quot;:&quot;/components/application-ui/page-examples/home-screens&quot;,&quot;name&quot;:&quot;Home Screens&quot;,&quot;category&quot;:&quot;Application UI / Page Examples&quot;},{&quot;url&quot;:&quot;/components/application-ui/page-examples/detail-screens&quot;,&quot;name&quot;:&quot;Detail Screens&quot;,&quot;category&quot;:&quot;Application UI / Page Examples&quot;},{&quot;url&quot;:&quot;/components/application-ui/page-examples/settings-screens&quot;,&quot;name&quot;:&quot;Settings Screens&quot;,&quot;category&quot;:&quot;Application UI / Page Examples&quot;},{&quot;url&quot;:&quot;/components/ecommerce/components/product-overviews&quot;,&quot;name&quot;:&quot;Product Overviews&quot;,&quot;category&quot;:&quot;Ecommerce / Components&quot;},{&quot;url&quot;:&quot;/components/ecommerce/components/product-lists&quot;,&quot;name&quot;:&quot;Product Lists&quot;,&quot;category&quot;:&quot;Ecommerce / Components&quot;},{&quot;url&quot;:&quot;/components/ecommerce/components/category-previews&quot;,&quot;name&quot;:&quot;Category Previews&quot;,&quot;category&quot;:&quot;Ecommerce / Components&quot;},{&quot;url&quot;:&quot;/components/ecommerce/components/shopping-carts&quot;,&quot;name&quot;:&quot;Shopping Carts&quot;,&quot;category&quot;:&quot;Ecommerce / Components&quot;},{&quot;url&quot;:&quot;/components/ecommerce/components/checkout-forms&quot;,&quot;name&quot;:&quot;Checkout Forms&quot;,&quot;category&quot;:&quot;Ecommerce / Components&quot;},{&quot;url&quot;:&quot;/components/ecommerce/components/category-filters&quot;,&quot;name&quot;:&quot;Category Filters&quot;,&quot;category&quot;:&quot;Ecommerce / Components&quot;},{&quot;url&quot;:&quot;/components/ecommerce/components/reviews&quot;,&quot;name&quot;:&quot;Reviews&quot;,&quot;category&quot;:&quot;Ecommerce / Components&quot;},{&quot;url&quot;:&quot;/components/ecommerce/components/product-quickviews&quot;,&quot;name&quot;:&quot;Product Quickviews&quot;,&quot;category&quot;:&quot;Ecommerce / Components&quot;},{&quot;url&quot;:&quot;/components/ecommerce/components/product-features&quot;,&quot;name&quot;:&quot;Product Features&quot;,&quot;category&quot;:&quot;Ecommerce / Components&quot;},{&quot;url&quot;:&quot;/components/ecommerce/components/store-navigation&quot;,&quot;name&quot;:&quot;Store Navigation&quot;,&quot;category&quot;:&quot;Ecommerce / Components&quot;},{&quot;url&quot;:&quot;/components/ecommerce/components/order-summaries&quot;,&quot;name&quot;:&quot;Order Summaries&quot;,&quot;category&quot;:&quot;Ecommerce / Components&quot;},{&quot;url&quot;:&quot;/components/ecommerce/components/order-history&quot;,&quot;name&quot;:&quot;Order History&quot;,&quot;category&quot;:&quot;Ecommerce / Components&quot;},{&quot;url&quot;:&quot;/components/ecommerce/components/promo-sections&quot;,&quot;name&quot;:&quot;Promo Sections&quot;,&quot;category&quot;:&quot;Ecommerce / Components&quot;},{&quot;url&quot;:&quot;/components/ecommerce/components/incentives&quot;,&quot;name&quot;:&quot;Incentives&quot;,&quot;category&quot;:&quot;Ecommerce / Components&quot;},{&quot;url&quot;:&quot;/components/ecommerce/page-examples/storefront-pages&quot;,&quot;name&quot;:&quot;Storefront Pages&quot;,&quot;category&quot;:&quot;Ecommerce / Page Examples&quot;},{&quot;url&quot;:&quot;/components/ecommerce/page-examples/product-pages&quot;,&quot;name&quot;:&quot;Product Pages&quot;,&quot;category&quot;:&quot;Ecommerce / Page Examples&quot;},{&quot;url&quot;:&quot;/components/ecommerce/page-examples/category-pages&quot;,&quot;name&quot;:&quot;Category Pages&quot;,&quot;category&quot;:&quot;Ecommerce / Page Examples&quot;},{&quot;url&quot;:&quot;/components/ecommerce/page-examples/shopping-cart-pages&quot;,&quot;name&quot;:&quot;Shopping Cart Pages&quot;,&quot;category&quot;:&quot;Ecommerce / Page Examples&quot;},{&quot;url&quot;:&quot;/components/ecommerce/page-examples/checkout-pages&quot;,&quot;name&quot;:&quot;Checkout Pages&quot;,&quot;category&quot;:&quot;Ecommerce / Page Examples&quot;},{&quot;url&quot;:&quot;/components/ecommerce/page-examples/order-detail-pages&quot;,&quot;name&quot;:&quot;Order Detail Pages&quot;,&quot;category&quot;:&quot;Ecommerce / Page Examples&quot;},{&quot;url&quot;:&quot;/components/ecommerce/page-examples/order-history-pages&quot;,&quot;name&quot;:&quot;Order History Pages&quot;,&quot;category&quot;:&quot;Ecommerce / Page Examples&quot;},{&quot;url&quot;:&quot;/components/marketing/sections/heroes&quot;,&quot;name&quot;:&quot;Hero Sections&quot;,&quot;category&quot;:&quot;Marketing / Page Sections&quot;},{&quot;url&quot;:&quot;/components/marketing/sections/feature-sections&quot;,&quot;name&quot;:&quot;Feature Sections&quot;,&quot;category&quot;:&quot;Marketing / Page Sections&quot;},{&quot;url&quot;:&quot;/components/marketing/sections/cta-sections&quot;,&quot;name&quot;:&quot;CTA Sections&quot;,&quot;category&quot;:&quot;Marketing / Page Sections&quot;},{&quot;url&quot;:&quot;/components/marketing/sections/pricing&quot;,&quot;name&quot;:&quot;Pricing Sections&quot;,&quot;category&quot;:&quot;Marketing / Page Sections&quot;},{&quot;url&quot;:&quot;/components/marketing/sections/header&quot;,&quot;name&quot;:&quot;Header Sections&quot;,&quot;category&quot;:&quot;Marketing / Page Sections&quot;},{&quot;url&quot;:&quot;/components/marketing/sections/faq-sections&quot;,&quot;name&quot;:&quot;FAQs&quot;,&quot;category&quot;:&quot;Marketing / Page Sections&quot;},{&quot;url&quot;:&quot;/components/marketing/sections/newsletter-sections&quot;,&quot;name&quot;:&quot;Newsletter Sections&quot;,&quot;category&quot;:&quot;Marketing / Page Sections&quot;},{&quot;url&quot;:&quot;/components/marketing/sections/stats-sections&quot;,&quot;name&quot;:&quot;Stats&quot;,&quot;category&quot;:&quot;Marketing / Page Sections&quot;},{&quot;url&quot;:&quot;/components/marketing/sections/testimonials&quot;,&quot;name&quot;:&quot;Testimonials&quot;,&quot;category&quot;:&quot;Marketing / Page Sections&quot;},{&quot;url&quot;:&quot;/components/marketing/sections/blog-sections&quot;,&quot;name&quot;:&quot;Blog Sections&quot;,&quot;category&quot;:&quot;Marketing / Page Sections&quot;},{&quot;url&quot;:&quot;/components/marketing/sections/contact-sections&quot;,&quot;name&quot;:&quot;Contact Sections&quot;,&quot;category&quot;:&quot;Marketing / Page Sections&quot;},{&quot;url&quot;:&quot;/components/marketing/sections/team-sections&quot;,&quot;name&quot;:&quot;Team Sections&quot;,&quot;category&quot;:&quot;Marketing / Page Sections&quot;},{&quot;url&quot;:&quot;/components/marketing/sections/content-sections&quot;,&quot;name&quot;:&quot;Content Sections&quot;,&quot;category&quot;:&quot;Marketing / Page Sections&quot;},{&quot;url&quot;:&quot;/components/marketing/sections/footers&quot;,&quot;name&quot;:&quot;Footers&quot;,&quot;category&quot;:&quot;Marketing / Page Sections&quot;},{&quot;url&quot;:&quot;/components/marketing/sections/logo-clouds&quot;,&quot;name&quot;:&quot;Logo Clouds&quot;,&quot;category&quot;:&quot;Marketing / Page Sections&quot;},{&quot;url&quot;:&quot;/components/marketing/elements/headers&quot;,&quot;name&quot;:&quot;Headers&quot;,&quot;category&quot;:&quot;Marketing / Elements&quot;},{&quot;url&quot;:&quot;/components/marketing/elements/flyout-menus&quot;,&quot;name&quot;:&quot;Flyout Menus&quot;,&quot;category&quot;:&quot;Marketing / Elements&quot;},{&quot;url&quot;:&quot;/components/marketing/elements/banners&quot;,&quot;name&quot;:&quot;Banners&quot;,&quot;category&quot;:&quot;Marketing / Elements&quot;},{&quot;url&quot;:&quot;/components/marketing/feedback/404-pages&quot;,&quot;name&quot;:&quot;404 Pages&quot;,&quot;category&quot;:&quot;Marketing / Feedback&quot;},{&quot;url&quot;:&quot;/components/marketing/page-examples/landing-pages&quot;,&quot;name&quot;:&quot;Landing Pages&quot;,&quot;category&quot;:&quot;Marketing / Page Examples&quot;},{&quot;url&quot;:&quot;/components/marketing/page-examples/pricing-pages&quot;,&quot;name&quot;:&quot;Pricing Pages&quot;,&quot;category&quot;:&quot;Marketing / Page Examples&quot;},{&quot;url&quot;:&quot;/components/marketing/page-examples/about-pages&quot;,&quot;name&quot;:&quot;About Pages&quot;,&quot;category&quot;:&quot;Marketing / Page Examples&quot;}],&quot;isImpersonating&quot;:false,&quot;product&quot;:{&quot;name&quot;:&quot;Keynote&quot;,&quot;type&quot;:&quot;Conference&quot;,&quot;preview_url&quot;:&quot;https://keynote.tailwindui.com&quot;,&quot;downloadable&quot;:false,&quot;download_url&quot;:&quot;https://tailwindui.com/templates/keynote/download&quot;,&quot;checkout_url&quot;:&quot;https://tailwindui.com/checkout/8a3351de-d4ee-4443-8d80-3c2a8166ff40&quot;,&quot;summary&quot;:&quot;Launch your next conference with a splash with this eye-catching template.&quot;,&quot;description&quot;:&quot;As if finding compelling speakers and a posh venue for your conference wasn’t hard enough, now you need a website too. Fret not, we’ve got you covered.&quot;,&quot;overview&quot;:&quot;&lt;p&gt;Keynote is a beautiful conference template built with Tailwind CSS and Next.js, designed and built by the Tailwind CSS team. It’s production-ready and easy to customize, making it the perfect starting point for your own conference site.&lt;/p&gt;\n&lt;p&gt;We’ve taken just as much care with the code as we have with the design, so it’s also an invaluable resource if you want to study how experts build a website with Tailwind CSS and React.&lt;/p&gt;\n&quot;,&quot;technologies&quot;:[{&quot;name&quot;:&quot;Next.js&quot;,&quot;version&quot;:&quot;v13.4&quot;},{&quot;name&quot;:&quot;Tailwind CSS&quot;,&quot;version&quot;:&quot;v3.3&quot;},{&quot;name&quot;:&quot;Headless UI&quot;,&quot;version&quot;:&quot;v1.7&quot;},{&quot;name&quot;:&quot;React&quot;,&quot;version&quot;:&quot;v18&quot;}],&quot;banner_image_url&quot;:&quot;/img/templates/keynote/banner.png&quot;,&quot;twitter_image_url&quot;:&quot;https://tailwindui.com/img/templates/keynote/twitter.png&quot;,&quot;images&quot;:[{&quot;url&quot;:&quot;https://tailwindui.com/img/templates/keynote/detail-01.png&quot;,&quot;alt&quot;:&quot;This is a detail image&quot;,&quot;type&quot;:&quot;detail&quot;},{&quot;url&quot;:&quot;https://tailwindui.com/img/templates/keynote/detail-02.png&quot;,&quot;alt&quot;:&quot;This is a detail image&quot;,&quot;type&quot;:&quot;detail&quot;},{&quot;url&quot;:&quot;https://tailwindui.com/img/templates/keynote/detail-03.png&quot;,&quot;alt&quot;:&quot;This is a detail image&quot;,&quot;type&quot;:&quot;detail&quot;},{&quot;url&quot;:&quot;https://tailwindui.com/img/templates/keynote/detail-04.png&quot;,&quot;alt&quot;:&quot;This is a detail image&quot;,&quot;type&quot;:&quot;detail&quot;}],&quot;price&quot;:{&quot;currency&quot;:&quot;USD&quot;,&quot;country&quot;:null,&quot;symbol&quot;:&quot;$&quot;,&quot;advertised&quot;:99,&quot;amount&quot;:99}},&quot;allAccessPricing&quot;:{&quot;currency&quot;:&quot;USD&quot;,&quot;country&quot;:null,&quot;symbol&quot;:&quot;$&quot;,&quot;advertised&quot;:299,&quot;amount&quot;:299}},&quot;url&quot;:&quot;/templates/keynote&quot;,&quot;version&quot;:&quot;0f7126021ee891e4f659d2ecbf7a0e48&quot;}"
        data-reactroot="">
        <header class="relative z-50 w-full flex-none text-sm font-semibold leading-6 text-slate-900">
            <nav aria-label="Global" class="mx-auto max-w-container px-4 sm:px-6 lg:px-8">
                <div class="relative flex items-center py-[2.125rem]">
                    <a class="mr-auto flex-none text-slate-900" href="/">
                        <img src=" {{ asset('11.png') }} " class="w-20 h-10" alt="" />
                    </a>

                    <div class="hidden lg:ml-8 lg:flex lg:items-center lg:border-l lg:border-slate-900/15 lg:pl-8">


                        <a class="inline-flex justify-center rounded-lg text-sm font-semibold py-2.5 px-4 bg-slate-900 text-white hover:bg-slate-700 -my-2.5 ml-8"
                            href="/login">
                            <span>Log In <span aria-hidden="true">→</span>
                            </span>
                        </a>

                    </div>
                </div>
            </nav>
        </header>
        <div class="relative -mt-[5.75rem] bg-slate-50 pt-[5.75rem]">
            <div class="absolute inset-0 overflow-hidden"><img src="/img/beams-template-header.png" alt=""
                    class="absolute bottom-0 hidden lg:block" /><img src="/img/beams-templates.png" alt=""
                    class="absolute -top-[7rem] left-1/2 -ml-[16rem] w-[60.4375rem] max-w-none sm:-ml-[10rem] md:-ml-[16rem] lg:-top-[10rem] lg:-ml-[22rem] lg:hidden" />
            </div>
            <div class="relative">
                <div class="relative mx-auto max-w-container px-4 pt-16 sm:px-6 lg:px-8 lg:pt-20">
                    <div class="mx-auto grid max-w-[40rem] grid-cols-1 gap-x-8 gap-y-16 lg:max-w-none lg:grid-cols-3">
                        <div class="flex flex-col lg:pb-6">
                            <h1
                                class="mt-4 text-4xl font-extrabold leading-none tracking-tight text-slate-900 sm:text-5xl sm:leading-[3.5rem]">
                                SafeHub</h1>
                            <p class="order-first text-base font-semibold leading-7 text-sky-500">Empowering HSE
                                Excellence
                            </p>
                            <p class="mt-6 text-base leading-7 text-slate-700">Welcome to SafeHub, your ultimate
                                resource for Health, Safety, and Environment (HSE) management. Our platform is
                                dedicated to empowering organizations and individuals in achieving HSE excellence. With
                                a comprehensive range of tools,
                                resources, and expert guidance, SafeHub aims to create safer and healthier work
                                environments.</p>


                            <div class="mt-10 flex gap-4">
                                <a href="/register"
                                    class="inline-flex justify-center rounded-lg text-sm font-semibold py-3 px-4 bg-slate-900 text-white hover:bg-slate-700">
                                    <span>
                                        <span class="inline-flex items-center">
                                            <span>Sign Up</span>
                                            <svg viewBox="0 0 20 20" class="ml-1.5 h-5 w-5 fill-slate-400"
                                                fill-rule="evenodd" clip-rule="evenodd">
                                                <path
                                                    d="M7 3.25H3.25v13.5h13.5V13h-1.5v2.25H4.75V4.75H7v-1.5Zm9.75 0H10v1.5h4.19l-5.72 5.72 1.06 1.06 5.72-5.72V10h1.5V3.25Z">
                                                </path>
                                            </svg>
                                        </span>
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="relative lg:col-span-2"><img
                                src=" {{ asset('pop-zebra-wp81DxKUd1E-unsplash.jpg') }} " alt="" width="1600"
                                height="1280"
                                class="relative z-20 -mb-36 aspect-[853/682] max-w-[853px] rounded-xl bg-slate-200 shadow-xl shadow-black/5 ring-1 ring-slate-900/5 sm:-mb-16 lg:-mb-8 xl:-mb-16" />
                            <div class="z-0 hidden md:block">
                                <div
                                    class="absolute -left-12 -right-12 -top-4 h-px bg-slate-900/[0.1] [mask-image:linear-gradient(to_right,transparent,white_4rem,white_calc(100%-4rem),transparent)]">
                                </div>
                                <div
                                    class="absolute -left-4 -top-12 bottom-0 w-px bg-slate-900/[0.1] [mask-image:linear-gradient(to_top,white_4rem,white_calc(100%-4rem),transparent)]">
                                </div>
                                <div
                                    class="absolute -right-4 -top-12 bottom-0 w-px bg-slate-900/[0.1] [mask-image:linear-gradient(to_top,white_4rem,white_calc(100%-4rem),transparent)]">
                                </div>
                                <div class="absolute -top-12 right-10 mt-px flex h-8 items-end overflow-hidden">
                                    <div class="flex -mb-px h-[2px] w-80 -scale-x-100">
                                        <div
                                            class="w-full flex-none blur-sm [background-image:linear-gradient(90deg,rgba(56,189,248,0)_0%,#0EA5E9_32.29%,rgba(236,72,153,0.3)_67.19%,rgba(236,72,153,0)_100%)]">
                                        </div>
                                        <div
                                            class="-ml-[100%] w-full flex-none blur-[1px] [background-image:linear-gradient(90deg,rgba(56,189,248,0)_0%,#0EA5E9_32.29%,rgba(236,72,153,0.3)_67.19%,rgba(236,72,153,0)_100%)]">
                                        </div>
                                    </div>
                                </div>
                                <div class="absolute -left-48 bottom-0 flex h-8 items-end overflow-hidden">
                                    <div class="flex -mb-px h-[2px] w-80 -scale-x-100">
                                        <div
                                            class="w-full flex-none blur-sm [background-image:linear-gradient(90deg,rgba(56,189,248,0)_0%,#0EA5E9_32.29%,rgba(236,72,153,0.3)_67.19%,rgba(236,72,153,0)_100%)]">
                                        </div>
                                        <div
                                            class="-ml-[100%] w-full flex-none blur-[1px] [background-image:linear-gradient(90deg,rgba(56,189,248,0)_0%,#0EA5E9_32.29%,rgba(236,72,153,0.3)_67.19%,rgba(236,72,153,0)_100%)]">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="absolute inset-x-0 bottom-0 h-px overflow-hidden">
                <div
                    class="absolute -left-8 -right-8 bottom-0 h-px bg-slate-900/[0.1] [mask-image:linear-gradient(to_right,transparent,white_4rem,white_calc(100%-4rem),transparent)]">
                </div>
            </div>
        </div>
        <div
            class="mx-auto mt-52 w-full max-w-container px-4 pb-20 sm:mt-36 sm:px-6 sm:pb-24 lg:mt-28 lg:px-8 lg:pb-32 xl:mt-36">
            <div
                class="mx-auto max-w-[40rem] space-y-20 divide-y divide-slate-200 sm:space-y-24 lg:max-w-none lg:space-y-32">
                <section class="grid grid-cols-1 items-baseline gap-x-6 gap-y-10 lg:grid-cols-3">
                    <h2 class="text-2xl font-semibold leading-9 tracking-tight text-slate-900">What’s included</h2>
                    <div
                        class="max-w-2xl space-y-10 lg:col-span-2 prose prose-slate prose-a:font-semibold prose-a:text-sky-500 hover:prose-a:text-sky-600">
                        <div class="[&amp;&gt;:first-child]:mt-0 [&amp;&gt;:last-child]:mb-0">
                            <p>Introduction:
                                Welcome to SafeHub, your ultimate resource for Health, Safety, and Environment (HSE)
                                management. Our platform is
                                designed to assist organizations and individuals in achieving and maintaining HSE
                                excellence. With a comprehensive range
                                of features and tools, SafeHub empowers you to create safer and healthier work
                                environments.</p>
                        </div>
                        <p><strong>Risk Assessment:</strong> — Conduct thorough risk assessments, identify potential
                            hazards, and implement effective control measures to mitigate
                            risks.</p>
                        <p><strong>Incident Management:</strong> — Streamline the reporting and management of incidents,
                            accidents, and near misses. Track investigations, corrective
                            actions, and preventive measures.</p>
                        <p><strong>Safety Training : </strong> — Access a library of interactive and engaging training
                            modules to educate employees on HSE best practices, regulatory
                            compliance, and emergency preparedness.</p>
                        <p><strong>Compliance Monitoring </strong> — Stay up-to-date with HSE regulations and ensure
                            compliance through automated monitoring, reporting, and audit trails.</p>

                        <p><strong> Analytics and Reporting : </strong> — Gain valuable insights into your HSE
                            performance through comprehensive analytics and customizable reports. Identify
                            trends, measure progress, and make data-driven decisions.</p>
                        <p><strong> Collaboration and Communication </strong> — Foster a culture of safety and
                            collaboration by facilitating communication, sharing best practices, and engaging
                            employees in HSE initiatives.</p>
                        <p><strong> </strong> — </p>

                    </div>
                </section>
            </div>
        </div>

        <footer class="mx-auto w-full max-w-container px-4 sm:px-6 lg:px-8">
            <div class="border-t border-slate-900/5 py-10">
                <img src=" {{ asset('11.png') }} " class=" h-10 mx-auto  w-auto" alt="" />

                <p class="mt-5 text-center text-sm leading-6 text-slate-500">© 2023 YaneCode Digitale Labs Inc. All
                    rights
                    reserved.</p>
                <div
                    class="mt-16 flex items-center justify-center space-x-4 text-sm font-semibold leading-6 text-slate-700">
                    <a href="">Privacy policy</a>
                    <div class="h-4 w-px bg-slate-500/20"></div><a href="">Changelog</a>
                </div>
            </div>
        </footer>
    </div>
</body>

</html>