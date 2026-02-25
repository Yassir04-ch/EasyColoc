<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>EasyColoc — Gérez votre colocation simplement</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&display=swap" rel="stylesheet"/>
</head>
<body class="bg-[#0d0d0d] text-white font-['Outfit',sans-serif] overflow-x-hidden">

<nav class="sticky top-0 z-50 flex items-center justify-between px-6 md:px-16 py-4 bg-[#0d0d0d]/90 backdrop-blur-xl border-b border-white/5">

  <a href="#" class="flex items-center gap-3 no-underline">
    <div class="w-9 h-9 bg-[#00e5a0] rounded-xl flex items-center justify-center text-black font-bold text-lg">🏠</div>
    <span class="text-xl font-bold text-white">Easy<span class="text-[#00e5a0]">Coloc</span></span>
  </a>

  <ul class="hidden md:flex items-center gap-8 list-none m-0 p-0">
    <li><a href="#features" class="text-[#888] text-sm font-medium hover:text-white transition-colors no-underline">Fonctionnalités</a></li>
    <li><a href="#how"      class="text-[#888] text-sm font-medium hover:text-white transition-colors no-underline">Comment ça marche</a></li>
    <li><a href="#roles"    class="text-[#888] text-sm font-medium hover:text-white transition-colors no-underline">Rôles</a></li>
    <li>
      <a href="#" class="bg-[#00e5a0] text-black text-sm font-bold px-5 py-2 rounded-lg hover:opacity-90 transition-opacity no-underline">
        Commencer →
      </a>
    </li>
  </ul>

  <!-- Mobile menu icon -->
  <button class="md:hidden text-white text-2xl">☰</button>
</nav>

<section class="relative flex flex-col items-center justify-center text-center px-6 py-32 min-h-screen overflow-hidden">

  <!-- Blobs -->
  <div class="absolute w-[500px] h-[500px] bg-[#00e5a0] rounded-full blur-[120px] opacity-[0.15] -top-48 -left-32 pointer-events-none"></div>
  <div class="absolute w-[400px] h-[400px] bg-[#ff4f91] rounded-full blur-[120px] opacity-[0.15] top-1/3 -right-40 pointer-events-none"></div>
  <div class="absolute w-[350px] h-[350px] bg-[#4f8fff] rounded-full blur-[100px] opacity-[0.12] bottom-0 left-1/3 pointer-events-none"></div>
  <div class="absolute w-[280px] h-[280px] bg-[#ffe234] rounded-full blur-[100px] opacity-[0.12] bottom-10 right-10 pointer-events-none"></div>

  <!-- Badge -->
  <div class="relative z-10 inline-flex items-center gap-2 bg-[#00e5a0]/10 border border-[#00e5a0]/30 text-[#00e5a0] text-xs font-semibold tracking-widest uppercase px-4 py-2 rounded-full mb-8">
    <span class="w-2 h-2 bg-[#00e5a0] rounded-full"></span>
    Nouveau — Gestion intelligente de colocation
  </div>

  <!-- Title -->
  <h1 class="relative z-10 text-5xl md:text-7xl font-extrabold leading-[1.05] tracking-tight mb-6">
    Gérez votre <span class="text-[#00e5a0]">colocation</span><br/>
    sans <span class="text-[#ff4f91]">stress</span> ni <span class="text-[#ffe234]">conflits</span>
  </h1>

  <!-- Subtitle -->
  <p class="relative z-10 text-[#888] text-lg max-w-lg leading-relaxed mb-10">
    Dépenses partagées, soldes en temps réel, rôles clairs.<br/>
    EasyColoc simplifie la vie commune pour tout le monde.
  </p>

  <!-- CTAs -->
  <div class="relative z-10 flex flex-wrap gap-4 justify-center">
    <a href="/register" class="bg-[#00e5a0] text-black font-bold px-8 py-4 rounded-xl text-base hover:opacity-90 hover:-translate-y-1 transition-all no-underline flex items-center gap-2">
      🚀 S'inscrire
    </a>
    <a href="/login" class="border border-white/10 text-white font-medium px-8 py-4 rounded-xl text-base hover:bg-white/5 transition-all no-underline flex items-center gap-2">
      Connection
    </a>
  </div>

</section>
 

<section id="how" class="bg-[#141414] border-t border-b border-white/5 px-6 md:px-16 py-24">

  <div class="text-center mb-16">
    <div class="inline-block bg-[#ffe234]/10 text-[#ffe234] text-xs font-bold tracking-widest uppercase px-4 py-1.5 rounded-full mb-5">
      ✦ Comment ça marche
    </div>
    <h2 class="text-4xl md:text-5xl font-extrabold mb-4">Démarrez en 4 étapes</h2>
    <p class="text-[#888] text-base max-w-sm mx-auto leading-relaxed">Simple, rapide, efficace. Votre colocation organisée en quelques minutes.</p>
  </div>

  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">

    <div class="text-center px-4">
      <div class="w-14 h-14 rounded-full border-2 border-[#00e5a0] bg-[#00e5a0]/10 text-[#00e5a0] text-xl font-extrabold flex items-center justify-center mx-auto mb-5">1</div>
      <h3 class="font-bold text-base mb-2">Créez votre compte</h3>
      <p class="text-[#666] text-sm leading-relaxed">Inscrivez-vous en 30 secondes avec votre email. Votre profil est prêt instantanément.</p>
    </div>

    <div class="text-center px-4">
      <div class="w-14 h-14 rounded-full border-2 border-[#ffe234] bg-[#ffe234]/10 text-[#ffe234] text-xl font-extrabold flex items-center justify-center mx-auto mb-5">2</div>
      <h3 class="font-bold text-base mb-2">Créez une colocation</h3>
      <p class="text-[#666] text-sm leading-relaxed">Donnez un nom à votre coloc et devenez automatiquement l'Owner avec tous les droits.</p>
    </div>

    <div class="text-center px-4">
      <div class="w-14 h-14 rounded-full border-2 border-[#ff4f91] bg-[#ff4f91]/10 text-[#ff4f91] text-xl font-extrabold flex items-center justify-center mx-auto mb-5">3</div>
      <h3 class="font-bold text-base mb-2">Invitez vos colocataires</h3>
      <p class="text-[#666] text-sm leading-relaxed">Envoyez des invitations par email. Rejoindre la coloc se fait en un seul clic.</p>
    </div>

    <div class="text-center px-4">
      <div class="w-14 h-14 rounded-full border-2 border-[#4f8fff] bg-[#4f8fff]/10 text-[#4f8fff] text-xl font-extrabold flex items-center justify-center mx-auto mb-5">4</div>
      <h3 class="font-bold text-base mb-2">Gérez vos dépenses</h3>
      <p class="text-[#666] text-sm leading-relaxed">Ajoutez des dépenses, marquez les paiements, consultez les soldes en temps réel.</p>
    </div>

  </div>
</section>

</body>
</html>