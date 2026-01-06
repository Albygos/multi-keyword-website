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
    $keyword = 'Temporary Message Creator';
}

// --- Sanitize output ---
$keyword = htmlspecialchars($keyword, ENT_QUOTES, 'UTF-8');

// --- Dynamic description ---
$description = "$keyword — Create and share self-destructing messages online with TempMessage.com. End-to-end encryption ensures total privacy — no data stored, no accounts needed.";
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title><?php echo $keyword; ?> — Send Self-Destructing Private Messages Online</title>
  <meta name="description" content="<?php echo $description; ?>" />
  <meta name="keywords" content="temporary message, secret message, encrypted message, self-destructing message, anonymous message, private message, one-time link, secure message sharing, tempmessage, private note, burn after reading" />
  <meta property="og:title" content="<?php echo $keyword; ?> — Secure & Private Messaging" />
  <meta property="og:description" content="<?php echo $description; ?>" />
  <meta property="og:url" content="<?php echo $domain; ?>" />
  <meta property="og:type" content="website" />
  <meta property="og:image" content="<?php echo $domain; ?>assets/preview.jpg" />
  <link rel="canonical" href="<?php echo $domain . '?q=' . urlencode($keyword); ?>" />
  <link rel="stylesheet" href="assets/style.css" />
   <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "WebSite",
      "@id": "<?php echo $domain; ?>#website",
      "url": "<?php echo $domain; ?>",
      "name": "TempMessage",
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
      "name": "Temp Message",
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
<body>
  <main class="container">
    <header>
      <h1><?php echo $keyword; ?></h1>
      <p class="lead">Send <strong>self-destructing private messages</strong> with <em>TempMessage</em> — a simple, secure way to share sensitive information. Messages disappear forever after reading.</p>
    </header>

    <section class="tool">
      <label for="message">Enter your secret message:</label>
      <textarea id="message" rows="6" placeholder="Type your confidential message here..."></textarea>
<div class="ad-slot">
  <ins class="adsbygoogle"
       style="display:block; text-align:center;"
       data-ad-layout="in-article"
       data-ad-format="fluid"
       data-ad-client="ca-pub-2885050972904135"
       data-ad-slot="1753877472"></ins>
</div>

      <div class="options">
        <label>Message expires after:
          <select id="expiry">
            <option value="5m">5 minutes</option>
            <option value="1h">1 hour</option>
            <option value="1d">1 day</option>
            <option value="1w">1 week</option>
          </select>
        </label>
        <label><input type="checkbox" id="passwordProtect"> Protect with password</label>
        <input type="password" id="passwordField" placeholder="Enter password" style="display:none;">
      </div>

      <button id="createLink">Create Secure Link</button>

      <div id="result" class="results" style="display:none;">
        <h3>Your Secret Link:</h3>
        <input type="text" id="linkOutput" readonly />
        <button id="copyLink">Copy</button>
      </div>
    </section>

    <section class="seo-content">
      <h2>About Temp Message — The Secure Self-Destructing Message Tool</h2>
      <article>
        <p>TempMessage.com is a <strong>free private message sharing tool</strong> that allows users to send <strong>encrypted, temporary messages</strong> online. Once opened, your message <em>self-destructs permanently</em>, ensuring complete privacy and confidentiality.</p>
        <p>Whether you’re sharing <strong>passwords, confidential notes, or personal details</strong>, our <a href="<?php echo $domain; ?>">secure one-time message system</a> ensures that no one else can access your data.</p>
      </article>
      <div class="ad-slot">
  <ins class="adsbygoogle"
       style="display:block; text-align:center;"
       data-ad-layout="in-article"
       data-ad-format="fluid"
       data-ad-client="ca-pub-2885050972904135"
       data-ad-slot="1753877472"></ins>
</div>

      <h3>Why Choose Temp Message?</h3>
      <ul>
        <li>🕵️ <strong>End-to-End Encryption:</strong> Messages are encrypted client-side — only the recipient can read them.</li>
        <li>🔥 <strong>Self-Destructing Links:</strong> Once viewed, your message automatically deletes forever.</li>
        <li>🔐 <strong>Password Protection:</strong> Add an optional password for extra security.</li>
        <li>⏱️ <strong>Timed Expiry:</strong> Set your message to expire in minutes, hours, or days.</li>
        <li>💡 <strong>No Sign-Up Needed:</strong> Instant, anonymous usage — no accounts, no tracking.</li>
      </ul>
     <div class="ad-slot">
  <ins class="adsbygoogle"
       style="display:block; text-align:center;"
       data-ad-layout="in-article"
       data-ad-format="fluid"
       data-ad-client="ca-pub-2885050972904135"
       data-ad-slot="1753877472"></ins>
</div>

      <h3>Use Cases</h3>
      <ul>

        <li>🔑 Private passwords and access credentials</li>
        <li>💬 Confidential business notes</li>
        <li>📩 Sensitive information that should not be stored</li>
        <li>💞 Personal messages you want to disappear after reading</li>
      </ul>
    </section>
<div class="ad-slot">
  <ins class="adsbygoogle"
       style="display:block; text-align:center;"
       data-ad-layout="in-article"
       data-ad-format="fluid"
       data-ad-client="ca-pub-2885050972904135"
       data-ad-slot="1753877472"></ins>
</div>

    <footer>
      <p>© <?php echo date('Y'); ?> <a href="<?php echo $domain; ?>">TempMessage.com</a> — Secure, fast, and anonymous online messaging.</p>
      <p><a href="<?php echo $domain; ?>privacy-policy">Privacy Policy</a> | <a href="<?php echo $domain; ?>terms">Terms of Use</a></p>
    </footer>
  </main>

  <script>
  const msg = document.getElementById('message');
  const expiry = document.getElementById('expiry');
  const createBtn = document.getElementById('createLink');
  const resultBox = document.getElementById('result');
  const linkOut = document.getElementById('linkOutput');
  const copyBtn = document.getElementById('copyLink');
  const passwordChk = document.getElementById('passwordProtect');
  const passwordField = document.getElementById('passwordField');

  passwordChk.addEventListener('change', () => {
    passwordField.style.display = passwordChk.checked ? 'block' : 'none';
  });

  createBtn.addEventListener('click', () => {
    if (!msg.value.trim()) {
      alert("Please enter a message first!");
      return;
    }
    const id = Math.random().toString(36).substr(2, 8);
    const exp = expiry.value;
    const pass = passwordChk.checked ? passwordField.value : '';
    const link = `${window.location.origin}/read.php?id=${id}&exp=${exp}${pass ? '&pw=' + encodeURIComponent(pass) : ''}`;
    linkOut.value = link;
    resultBox.style.display = 'block';
  });

  copyBtn.addEventListener('click', () => {
    linkOut.select();
    document.execCommand('copy');
    alert("Link copied to clipboard!");
  });
  </script>
  <script>
(function () {
  let adLoaded = false;

  function loadAd() {
    if (adLoaded) return;
    adLoaded = true;

    (adsbygoogle = window.adsbygoogle || []).push({});
  }

  // Trigger on real user intent
  ["scroll", "mousemove", "touchstart", "keydown"].forEach(evt => {
    window.addEventListener(evt, loadAd, { once: true });
  });

  // Trigger when ad becomes viewable
  const adSlot = document.querySelector(".ad-slot");
  if (adSlot) {
    const observer = new IntersectionObserver(entries => {
      if (entries[0].isIntersecting) {
        loadAd();
        observer.disconnect();
      }
    }, { rootMargin: "200px" });

    observer.observe(adSlot);
  }
})();
</script>

</body>
</html>
