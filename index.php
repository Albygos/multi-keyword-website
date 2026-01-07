<?php
$domain = "https://tempmessage.com/";

// --- Load keyword.txt file (each line = one keyword) ---
$keywordsFile = __DIR__ . '/keywords.txt';
$keywordsList = file_exists($keywordsFile)
  ? file($keywordsFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES)
  : [];

// --- Choose keyword ---
// 1. If ?q= is present, use it
// 2. Else randomly pick one from keywords.txt (changes daily for SEO stability)
// 3. Else fallback to default keyword
if (isset($_GET['q']) && trim($_GET['q']) !== '') {
    $keyword = trim($_GET['q']);
} elseif (!empty($keywordsList)) {
    // Optional: stable random keyword per day (better for SEO)
    $daySeed = date('Ymd');
    srand(crc32($daySeed));
    $keyword = $keywordsList[array_rand($keywordsList)];
} else {
    $keyword = 'car insurance united states';
}

// --- Sanitize output ---
$keyword = htmlspecialchars($keyword, ENT_QUOTES, 'UTF-8');

// --- Dynamic description ---
$description = "$keyword — Learn about car insurance in the United States, including average costs, coverage types, and how auto insurance works for US drivers.";

?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title><?php echo $keyword; ?></title>
  <meta name="description" content="<?php echo $description; ?>" />
<meta name="keywords" content="car insurance united states, auto insurance united states, us car insurance cost, average car insurance rates usa, vehicle insurance coverage usa, full coverage auto insurance usa, liability car insurance usa, state minimum car insurance usa, car insurance laws united states, auto insurance guide usa">
  <meta property="og:title" content="<?php echo $keyword; ?>" />
  <meta property="og:description" content="<?php echo $description; ?>" />
  <meta property="og:url" content="<?php echo $domain; ?>" />
  <meta property="og:type" content="website" />
  <meta property="og:image" content="<?php echo $domain; ?>assets/preview.jpg" />
  <link rel="canonical" href="<?php echo $domain . '?q=' . urlencode($keyword); ?>" />
  <link rel="stylesheet" href="assets/style.css" />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;900&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" /> <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script> <!-- Theme Configuration -->
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#2b8cee",
                        "background-light": "#f6f7f8",
                        "background-dark": "#101922",
                    },
                    fontFamily: {
                        "display": ["Inter", "sans-serif"]
                    },
                    borderRadius: {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                },
            },
        }
    </script>
   <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "WebSite",
      "@id": "<?php echo $domain; ?>#website",
      "url": "<?php echo $domain; ?>",
      "name": "car insurance united states",
      "description": "<?php echo $description; ?>",
      "publisher": {
        "@id": "<?php echo $domain; ?>#organization"
      },
      "potentialAction": {
        "@type": "SearchAction",
        "target": "<?php echo $domain; ?>?q={search_term_string}",
        "query-input": "required name=search_term_string"
      }
    },
    {
      "@type": "Organization",
      "@id": "<?php echo $domain; ?>#organization",
      "name": "car insurance united states",
      "url": "<?php echo $domain; ?>",
      "logo": {
        "@type": "ImageObject",
        "url": "<?php echo $domain; ?>assets/logo.png"
      },
      "sameAs": [
        "https://twitter.com/",
        "https://www.facebook.com/",
        "https://www.linkedin.com/"
      ]
    },
    {
      "@type": "WebApplication",
      "@id": "<?php echo $domain; ?>#webapp",
      "name": "<?php echo $keyword; ?>",
      "url": "<?php echo $domain; ?>",
      "applicationCategory": "UtilityApplication",
      "operatingSystem": "All",
      "browserRequirements": "Requires JavaScript",
      "description": "<?php echo $description; ?>",
      "offers": {
        "@type": "Offer",
        "price": "0",
        "priceCurrency": "USD"
      },
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.8",
        "reviewCount": "18234"
      }
    }
  ]
}
</script>
  <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2885050972904135"
     crossorigin="anonymous"></script>

</head>
<body class="bg-background-light dark:bg-background-dark font-display text-[#111418] dark:text-white overflow-x-hidden antialiased flex flex-col min-h-screen"> <!-- Top Navigation -->
    <header class="sticky top-0 z-50 bg-white/95 backdrop-blur-sm border-b border-gray-200 dark:border-gray-800">
        <div class="flex items-center justify-between px-4 lg:px-10 py-3 max-w-7xl mx-auto w-full">
            <div class="flex items-center gap-4">
                <div class="size-8 text-primary flex items-center justify-center bg-primary/10 rounded-lg"> <span class="material-symbols-outlined text-xl">verified_user</span> </div>
                <h2 class="text-[#111418] dark:text-white text-lg font-bold leading-tight tracking-[-0.015em]" <?php echo $keyword; ?> Guide</h2>
            </div>
            <div class="hidden md:flex flex-1 justify-end gap-8">
                <nav class="flex items-center gap-6 lg:gap-9"> <a class="text-[#111418] dark:text-gray-200 text-sm font-medium hover:text-primary transition-colors" href="#comparison">Comparison</a> <a class="text-[#111418] dark:text-gray-200 text-sm font-medium hover:text-primary transition-colors" href="#costs">Costs</a> <a class="text-[#111418] dark:text-gray-200 text-sm font-medium hover:text-primary transition-colors" href="#coverage">Coverage</a> <a class="text-[#111418] dark:text-gray-200 text-sm font-medium hover:text-primary transition-colors" href="#faq">FAQ</a> </nav>
            </div> <!-- Mobile Menu Button --> <button class="md:hidden p-2 text-gray-600"> <span class="material-symbols-outlined">menu</span> </button>
        </div>
    </header>
    <div class="flex flex-1 max-w-7xl mx-auto w-full"> <!-- Sidebar Navigation (Desktop) -->
        <aside class="hidden lg:flex w-64 flex-col gap-6 sticky top-[65px] h-[calc(100vh-65px)] overflow-y-auto p-6 border-r border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-900 z-10">
            <div>
                <h3 class="text-[#111418] dark:text-white text-xs font-bold uppercase tracking-wider mb-4 text-gray-500">Table of Contents</h3>
                <nav class="flex flex-col gap-1"> <a class="flex items-center gap-3 px-3 py-2 rounded-lg bg-primary/10 text-primary font-medium text-sm transition-colors" href="#hero"> <span class="material-symbols-outlined text-[18px]">home</span> Start Here </a> <a class="flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-800 text-gray-700 dark:text-gray-300 text-sm font-medium transition-colors" href="#comparison"> <span class="material-symbols-outlined text-[18px]">table_chart</span> Comparison Table </a> <a class="flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-800 text-gray-700 dark:text-gray-300 text-sm font-medium transition-colors" href="#costs"> <span class="material-symbols-outlined text-[18px]">attach_money</span> Cost Analysis </a> <a class="flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-800 text-gray-700 dark:text-gray-300 text-sm font-medium transition-colors" href="#coverage"> <span class="material-symbols-outlined text-[18px]">shield</span> Coverage Types </a> <a class="flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-800 text-gray-700 dark:text-gray-300 text-sm font-medium transition-colors" href="#faq"> <span class="material-symbols-outlined text-[18px]">help</span> FAQ </a> </nav>
            </div>
            <div class="mt-auto bg-gray-50 dark:bg-gray-800 p-4 rounded-xl border border-gray-100 dark:border-gray-700">
                <p class="text-xs text-gray-500 dark:text-gray-400 mb-2">Editorial Disclosure</p>
                <p class="text-xs text-gray-400 dark:text-gray-500 leading-relaxed"> We are an independent publisher. We may earn a commission when you click on links, at no extra cost to you. Our opinions are our own. </p>
            </div>
        </aside> <!-- Main Content -->
        <main class="flex-1 flex flex-col w-full min-w-0 bg-white dark:bg-background-dark"> <!-- Hero Section -->
            <section class="px-4 py-8 md:px-8 lg:py-12 border-b border-gray-100 dark:border-gray-800" id="hero">
                <div class="max-w-4xl mx-auto"> <!-- Trust Badge -->
                    <div class="flex justify-center mb-6"> <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-green-50 text-green-700 border border-green-200 text-xs font-semibold tracking-wide uppercase"> <span class="material-symbols-outlined text-sm">check_circle</span> Updated for 2024 </span> </div>
                    <div class="flex flex-col lg:flex-row gap-8 items-center">
                        <div class="flex-1 flex flex-col gap-6 text-center lg:text-left">
                            <h1 class="text-4xl md:text-5xl font-black leading-tight tracking-tight text-[#111418] dark:text-white"> <?php echo $keyword; ?> </h1>
                            <p class="text-lg text-gray-600 dark:text-gray-300 leading-relaxed"> Unbiased, independent comparison of top providers. No sign-up required to view our data. We prioritize your needs over commissions. </p>
                            <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start"> <a class="inline-flex h-12 items-center justify-center rounded-lg bg-primary px-6 text-base font-bold text-white shadow-lg shadow-primary/20 hover:bg-primary/90 transition-all focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2" href="#comparison"> Jump to Comparison </a> <a class="inline-flex h-12 items-center justify-center rounded-lg bg-gray-100 dark:bg-gray-800 px-6 text-base font-bold text-gray-900 dark:text-white hover:bg-gray-200 dark:hover:bg-gray-700 transition-all" href="#faq"> How We Rate </a> </div>
                        </div>
                        <div class="w-full lg:w-5/12 aspect-[4/3] rounded-2xl overflow-hidden shadow-2xl bg-gray-100 relative group">
                            <div class="absolute inset-0 bg-gradient-to-tr from-primary/20 to-transparent"></div>
                            <div class="w-full h-full bg-cover bg-center" data-alt="A clean, modern car driving on a coastal American highway representing freedom and insurance safety" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBTirlQE9BqWGaf8n2CJ-iwZ2zXwuIUYheOlWaDndMKlLO3T3ws2Ia1Lsu54hdD5kL3OiBIoKCJEKoyrY_asq_wPGthsn2bTh_v1Psh3tIifgANlkcHzB9HgKMM9FQyhWn4PBB0laXmwUDNniJuxrCiflOUqXho4ALUmPiqnZb6mmg98Iq9wK7miLm1CL8xGdEYwHaNX4q4KjEZMuC1ofjoRAiKhI1Dex9L-kvsCLh_m6HaYAYeTTSbZl8hv9Jr0i1pAE_wDpURRLP1");'></div>
                        </div>
                    </div>
                </div>
            </section> <!-- Ad Slot (Leaderboard) -->
            <div class="w-full bg-gray-50 dark:bg-[#151f2b] py-8 border-b border-gray-100 dark:border-gray-800 flex justify-center">
                <div class="w-[728px] h-[90px] bg-gray-200 dark:bg-gray-800 rounded flex flex-col items-center justify-center text-gray-400 text-xs border border-dashed border-gray-300 dark:border-gray-700"> <span class="font-bold tracking-widest uppercase mb-1">Advertisement</span> <span>728 x 90 Leaderboard</span> </div>
            </div> <!-- Intro Text -->
            <section class="px-4 py-10 md:px-8 max-w-4xl mx-auto w-full">
                <div class="prose prose-lg prose-slate dark:prose-invert max-w-none">
                    <h3 class="text-2xl font-bold text-[#111418] dark:text-white mb-4">Why compare independently?</h3>
                    <p class="text-gray-600 dark:text-gray-300 mb-6">  <?php echo $keyword; ?> Choosing the right auto insurance policy is more than just finding the lowest price. It's about ensuring your financial safety in the event of an accident. Our data is sourced from verified consumer reports, J.D. Power claims satisfaction studies, and AM Best financial strength ratings. </p>
                    <p class="text-gray-600 dark:text-gray-300"> We analyze thousands of data points to bring you a clear, side-by-side comparison of the top national carriers. Whether you are looking for minimum liability or full coverage, this guide will help you navigate the complex US insurance market. </p>
                </div>
            </section> <!-- Comparison Table Section -->
            <section class="px-4 py-10 md:px-8 bg-gray-50 dark:bg-[#131b24] border-y border-gray-200 dark:border-gray-800" id="comparison">
                <div class="max-w-4xl mx-auto w-full">
                    <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-6 gap-4">
                        <div>
                            <h2 class="text-2xl font-bold text-[#111418] dark:text-white">Top 5 Insurers Comparison</h2>
                            <p class="text-sm text-gray-500 mt-1">Based on J.D. Power 2023 Study &amp; National Average Premiums</p>
                        </div>
                        <div class="flex gap-2"> <button class="px-3 py-1.5 text-sm font-medium bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded shadow-sm hover:bg-gray-50 dark:hover:bg-gray-700">Filter</button> <button class="px-3 py-1.5 text-sm font-medium bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded shadow-sm hover:bg-gray-50 dark:hover:bg-gray-700">Sort</button> </div>
                    </div>
                    <div class="overflow-x-auto rounded-xl border border-gray-200 dark:border-gray-700 shadow-sm bg-white dark:bg-gray-900">
                        <table class="w-full text-left border-collapse">
                            <thead>
                                <tr class="bg-gray-100 dark:bg-gray-800 text-xs uppercase tracking-wider text-gray-600 dark:text-gray-400 font-semibold">
                                    <th class="p-4 min-w-[150px]">Company</th>
                                    <th class="p-4 text-center">J.D. Power Rating</th>
                                    <th class="p-4 text-center">Avg. Annual Cost</th>
                                    <th class="p-4">Best For</th>
                                    <th class="p-4 text-right">Action</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-100 dark:divide-gray-800"> <!-- Row 1 -->
                                <tr class="group hover:bg-blue-50/30 dark:hover:bg-blue-900/10 transition-colors">
                                    <td class="p-4">
                                        <div class="flex items-center gap-3">
                                            <div class="size-10 bg-blue-600 text-white rounded-lg flex items-center justify-center font-bold text-xs">SF</div>
                                            <div>
                                                <p class="font-bold text-[#111418] dark:text-white">State Farm</p>
                                                <p class="text-xs text-green-600 font-medium">Top Pick 2024</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="p-4 text-center">
                                        <div class="inline-flex items-center gap-1 bg-gray-100 dark:bg-gray-800 px-2 py-1 rounded"> <span class="text-sm font-bold">877</span> <span class="text-[10px] text-gray-500">/1000</span> </div>
                                    </td>
                                    <td class="p-4 text-center"> <span class="font-medium text-[#111418] dark:text-white">$1,480</span> </td>
                                    <td class="p-4 text-sm text-gray-600 dark:text-gray-300">Customer Service &amp; Local Agents</td>
                                    <td class="p-4 text-right"> <button class="px-4 py-2 bg-primary text-white text-sm font-bold rounded-lg hover:bg-primary/90 transition-colors">View Details</button> </td>
                                </tr> <!-- Row 2 -->
                                <tr class="group hover:bg-blue-50/30 dark:hover:bg-blue-900/10 transition-colors">
                                    <td class="p-4">
                                        <div class="flex items-center gap-3">
                                            <div class="size-10 bg-[#164585] text-white rounded-lg flex items-center justify-center font-bold text-xs">G</div>
                                            <div>
                                                <p class="font-bold text-[#111418] dark:text-white">Geico</p>
                                                <p class="text-xs text-gray-500">Berkshire Hathaway</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="p-4 text-center">
                                        <div class="inline-flex items-center gap-1 bg-gray-100 dark:bg-gray-800 px-2 py-1 rounded"> <span class="text-sm font-bold">853</span> <span class="text-[10px] text-gray-500">/1000</span> </div>
                                    </td>
                                    <td class="p-4 text-center"> <span class="font-medium text-[#111418] dark:text-white">$1,350</span> </td>
                                    <td class="p-4 text-sm text-gray-600 dark:text-gray-300">Budget Conscious Drivers</td>
                                    <td class="p-4 text-right"> <button class="px-4 py-2 bg-primary/10 text-primary border border-primary/20 text-sm font-bold rounded-lg hover:bg-primary/20 transition-colors">View Details</button> </td>
                                </tr> <!-- Row 3 -->
                                <tr class="group hover:bg-blue-50/30 dark:hover:bg-blue-900/10 transition-colors">
                                    <td class="p-4">
                                        <div class="flex items-center gap-3">
                                            <div class="size-10 bg-[#00A8E0] text-white rounded-lg flex items-center justify-center font-bold text-xs">P</div>
                                            <div>
                                                <p class="font-bold text-[#111418] dark:text-white">Progressive</p>
                                                <p class="text-xs text-gray-500">Snapshot®</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="p-4 text-center">
                                        <div class="inline-flex items-center gap-1 bg-gray-100 dark:bg-gray-800 px-2 py-1 rounded"> <span class="text-sm font-bold">814</span> <span class="text-[10px] text-gray-500">/1000</span> </div>
                                    </td>
                                    <td class="p-4 text-center"> <span class="font-medium text-[#111418] dark:text-white">$1,610</span> </td>
                                    <td class="p-4 text-sm text-gray-600 dark:text-gray-300">High-Risk Drivers</td>
                                    <td class="p-4 text-right"> <button class="px-4 py-2 bg-primary/10 text-primary border border-primary/20 text-sm font-bold rounded-lg hover:bg-primary/20 transition-colors">View Details</button> </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section> <!-- Cost Analysis Section -->
            <section class="px-4 py-12 md:px-8 max-w-4xl mx-auto w-full" id="costs">
                <div class="mb-8">
                    <h2 class="text-2xl font-bold text-[#111418] dark:text-white mb-2">Average Cost by State</h2>
                    <p class="text-gray-600 dark:text-gray-300"> Insurance premiums vary significantly by location due to state regulations, weather patterns, and accident rates. </p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-start"> <!-- Map Graphic Placeholder -->
                    <div class="bg-blue-50 dark:bg-[#1a2634] rounded-2xl p-6 flex items-center justify-center aspect-video relative overflow-hidden"> <!-- Abstract US Map Representation -->
                        <div class="absolute inset-0 opacity-10 bg-[radial-gradient(ellipse_at_center,_var(--tw-gradient-stops))] from-blue-400 to-transparent"></div> <span class="material-symbols-outlined text-[120px] text-primary/30">public</span>
                        <div class="absolute bottom-4 right-4 bg-white dark:bg-gray-800 p-3 rounded-lg shadow-sm text-xs">
                            <div class="flex items-center gap-2 mb-1">
                                <div class="size-2 rounded-full bg-red-400"></div> High Cost &gt; $2k
                            </div>
                            <div class="flex items-center gap-2">
                                <div class="size-2 rounded-full bg-green-400"></div> Low Cost &lt; $1k
                            </div>
                        </div>
                    </div> <!-- Cost Stats Cards -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div class="bg-white dark:bg-gray-900 p-5 rounded-xl border border-gray-100 dark:border-gray-800 shadow-sm">
                            <p class="text-xs font-medium text-gray-500 uppercase tracking-wide">Most Expensive</p>
                            <h4 class="text-lg font-bold text-[#111418] dark:text-white mt-1">Florida</h4>
                            <p class="text-2xl font-black text-primary mt-2">$2,560<span class="text-sm font-normal text-gray-400">/yr</span></p>
                        </div>
                        <div class="bg-white dark:bg-gray-900 p-5 rounded-xl border border-gray-100 dark:border-gray-800 shadow-sm">
                            <p class="text-xs font-medium text-gray-500 uppercase tracking-wide">Least Expensive</p>
                            <h4 class="text-lg font-bold text-[#111418] dark:text-white mt-1">Vermont</h4>
                            <p class="text-2xl font-black text-green-600 mt-2">$995<span class="text-sm font-normal text-gray-400">/yr</span></p>
                        </div>
                        <div class="bg-white dark:bg-gray-900 p-5 rounded-xl border border-gray-100 dark:border-gray-800 shadow-sm col-span-1 sm:col-span-2">
                            <p class="text-xs font-medium text-gray-500 uppercase tracking-wide">National Average</p>
                            <div class="flex items-end gap-3 mt-1">
                                <h4 class="text-3xl font-black text-[#111418] dark:text-white">$1,780</h4> <span class="text-sm text-red-500 font-medium mb-1.5 flex items-center"> <span class="material-symbols-outlined text-sm">trending_up</span> +12% from 2023 </span>
                            </div>
                        </div>
                    </div>
                </div>
            </section> <!-- In-Article Ad Slot -->
            <div class="w-full py-8 flex justify-center bg-white dark:bg-background-dark">
                <div class="w-[300px] h-[250px] md:w-[728px] md:h-[90px] bg-gray-50 dark:bg-gray-900 rounded flex flex-col items-center justify-center text-gray-400 text-xs border border-dashed border-gray-200 dark:border-gray-800"> <span class="font-bold tracking-widest uppercase mb-1">Advertisement</span> <span class="md:hidden">300 x 250 Medium Rectangle</span> <span class="hidden md:inline">728 x 90 Leaderboard</span> </div>
            </div> <!-- Coverage Types -->
            <section class="px-4 py-12 md:px-8 bg-gray-50 dark:bg-[#131b24] border-y border-gray-200 dark:border-gray-800" id="coverage">
                <div class="max-w-4xl mx-auto w-full">
                    <h2 class="text-2xl font-bold text-[#111418] dark:text-white mb-6">Coverage Types Explained</h2>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6"> <!-- Card 1 -->
                        <div class="bg-white dark:bg-gray-900 p-6 rounded-xl border border-gray-200 dark:border-gray-800 hover:shadow-md transition-shadow">
                            <div class="size-12 bg-blue-100 dark:bg-blue-900/30 rounded-full flex items-center justify-center text-blue-600 dark:text-blue-400 mb-4"> <span class="material-symbols-outlined">gavel</span> </div>
                            <h3 class="text-lg font-bold text-[#111418] dark:text-white mb-2">Liability</h3>
                            <p class="text-sm text-gray-600 dark:text-gray-400 leading-relaxed"> <?php echo $keyword; ?>  Mandatory in most states. Covers bodily injury and property damage to <strong>others</strong> if you are at fault in an accident. </p>
                        </div> <!-- Card 2 -->
                        <div class="bg-white dark:bg-gray-900 p-6 rounded-xl border border-gray-200 dark:border-gray-800 hover:shadow-md transition-shadow">
                            <div class="size-12 bg-orange-100 dark:bg-orange-900/30 rounded-full flex items-center justify-center text-orange-600 dark:text-orange-400 mb-4"> <span class="material-symbols-outlined">car_crash</span> </div>
                            <h3 class="text-lg font-bold text-[#111418] dark:text-white mb-2">Collision</h3>
                            <p class="text-sm text-gray-600 dark:text-gray-400 leading-relaxed"> Covers repairs to <strong>your vehicle</strong> after an accident with another car or object (like a fence), regardless of fault. </p>
                        </div> <!-- Card 3 -->
                        <div class="bg-white dark:bg-gray-900 p-6 rounded-xl border border-gray-200 dark:border-gray-800 hover:shadow-md transition-shadow">
                            <div class="size-12 bg-purple-100 dark:bg-purple-900/30 rounded-full flex items-center justify-center text-purple-600 dark:text-purple-400 mb-4"> <span class="material-symbols-outlined">thunderstorm</span> </div>
                            <h3 class="text-lg font-bold text-[#111418] dark:text-white mb-2">Comprehensive</h3>
                            <p class="text-sm text-gray-600 dark:text-gray-400 leading-relaxed"> Protection against non-collision events: theft, vandalism, fire, falling objects, and severe weather damage. </p>
                        </div>
                    </div>
                </div>
            </section> <!-- FAQ Section -->
            <section class="px-4 py-12 md:px-8 max-w-4xl mx-auto w-full" id="faq">
                <h2 class="text-2xl font-bold text-[#111418] dark:text-white mb-8 text-center">Frequently Asked Questions</h2>
                <div class="flex flex-col gap-4">
                    <details class="group bg-white dark:bg-gray-900 border border-gray-200 dark:border-gray-800 rounded-xl overflow-hidden">
                        <summary class="flex cursor-pointer items-center justify-between p-5 font-medium text-[#111418] dark:text-white"> <span>How can I lower my car insurance rates?</span> <span class="material-symbols-outlined transition-transform group-open:rotate-180">expand_more</span> </summary>
                        <div class="px-5 pb-5 pt-0 text-gray-600 dark:text-gray-400 text-sm leading-relaxed"> You can lower your rates by bundling policies (home + auto), maintaining a clean driving record, improving your credit score, and increasing your deductible. Many insurers also offer discounts for defensive driving courses. </div>
                    </details>
                    <details class="group bg-white dark:bg-gray-900 border border-gray-200 dark:border-gray-800 rounded-xl overflow-hidden">
                        <summary class="flex cursor-pointer items-center justify-between p-5 font-medium text-[#111418] dark:text-white"> <span>Is full coverage worth it for an old car?</span> <span class="material-symbols-outlined transition-transform group-open:rotate-180">expand_more</span> </summary>
                        <div class="px-5 pb-5 pt-0 text-gray-600 dark:text-gray-400 text-sm leading-relaxed"> A general rule of thumb is that if your annual premium for full coverage exceeds 10% of your car's cash value, it might be time to drop collision and comprehensive coverage. </div>
                    </details>
                    <details class="group bg-white dark:bg-gray-900 border border-gray-200 dark:border-gray-800 rounded-xl overflow-hidden">
                        <summary class="flex cursor-pointer items-center justify-between p-5 font-medium text-[#111418] dark:text-white"> <span>Does credit score affect car insurance?</span> <span class="material-symbols-outlined transition-transform group-open:rotate-180">expand_more</span> </summary>
                        <div class="px-5 pb-5 pt-0 text-gray-600 dark:text-gray-400 text-sm leading-relaxed"> Yes, in most states (except California, Hawaii, Massachusetts, and Michigan), insurers use a credit-based insurance score to help determine your premium. Higher scores generally lead to lower rates. </div>
                    </details>
                </div>
            </section> <!-- Final CTA Area -->
            <section class="bg-primary/5 dark:bg-primary/10 py-16 px-4 text-center border-t border-primary/10">
                <div class="max-w-2xl mx-auto">
                    <h2 class="text-3xl font-black text-[#111418] dark:text-white mb-4">Ready to find your policy?</h2>
                    <p class="text-gray-600 dark:text-gray-300 mb-8">Compare quotes from over 20 providers in under 5 minutes. No hidden fees.</p> <button class="bg-primary text-white text-lg font-bold py-4 px-8 rounded-xl shadow-lg shadow-primary/30 hover:bg-primary/90 transition-all hover:scale-[1.02]"> Start Independent Comparison </button>
                    <p class="text-xs text-gray-400 mt-4">Free service. No obligation.</p>
                </div>
            </section> <!-- Footer -->
            <footer class="bg-white dark:bg-background-dark border-t border-gray-200 dark:border-gray-800 pt-16 pb-8 px-8">
                <div class="max-w-7xl mx-auto">
                    <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-12">
                        <div class="col-span-1 md:col-span-2">
                            <div class="flex items-center gap-2 mb-4">
                                <div class="size-6 text-primary flex items-center justify-center bg-primary/10 rounded"> <span class="material-symbols-outlined text-sm">verified_user</span> </div>
                                <h2 class="text-[#111418] dark:text-white font-bold">US AutoInsure Guide</h2>
                            </div>
                            <p class="text-gray-500 dark:text-gray-400 text-sm leading-relaxed max-w-sm"> Your trusted, independent resource for navigating the US insurance market. Our mission is to provide transparent, data-driven insurance education for every American driver. </p>
                        </div>
                        <div>
                            <h4 class="font-bold text-[#111418] dark:text-white mb-4">Navigation</h4>
                            <ul class="flex flex-col gap-2 text-sm text-gray-500 dark:text-gray-400">
                                <li><a class="hover:text-primary transition-colors" href="#">Comparison</a></li>
                                <li><a class="hover:text-primary transition-colors" href="#">Cost Analysis</a></li>
                                <li><a class="hover:text-primary transition-colors" href="#">Coverage Guide</a></li>
                                <li><a class="hover:text-primary transition-colors" href="#">FAQ</a></li>
                            </ul>
                        </div>
                        <div>
                            <h4 class="font-bold text-[#111418] dark:text-white mb-4">Legal</h4>
                            <ul class="flex flex-col gap-2 text-sm text-gray-500 dark:text-gray-400">
                                <li><a class="hover:text-primary transition-colors" href="#">Privacy Policy</a></li>
                                <li><a class="hover:text-primary transition-colors" href="#">Terms of Use</a></li>
                                <li><a class="hover:text-primary transition-colors" href="#">Cookie Policy</a></li>
                                <li><a class="hover:text-primary transition-colors" href="#">Accessibility</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="pt-8 border-t border-gray-100 dark:border-gray-800 flex flex-col md:flex-row justify-between items-center gap-4">
                        <p class="text-xs text-gray-400 dark:text-gray-600 text-center md:text-left"> © 2024 US AutoInsure Guide. All rights reserved. <br class="md:hidden" /> This site is for educational purposes only. </p>
                        <p class="text-[10px] text-gray-300 dark:text-gray-700 max-w-md text-center md:text-right"> Disclaimer: We are not an insurance broker or agent. The quotes and information provided are for informational purposes. </p>
                    </div>
                </div>
            </footer>
        </main>
    </div>
</body>

</html>
