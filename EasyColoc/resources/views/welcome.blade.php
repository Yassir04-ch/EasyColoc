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
    <a href="#" class="bg-[#00e5a0] text-black font-bold px-8 py-4 rounded-xl text-base hover:opacity-90 hover:-translate-y-1 transition-all no-underline flex items-center gap-2">
      🚀 Créer ma colocation
    </a>
    <a href="#how" class="border border-white/10 text-white font-medium px-8 py-4 rounded-xl text-base hover:bg-white/5 transition-all no-underline flex items-center gap-2">
      📖 Comment ça marche
    </a>
  </div>

  <!-- Stats -->
  <div class="relative z-10 flex flex-wrap gap-10 justify-center mt-16 pt-16 border-t border-white/5 w-full max-w-2xl">
    <div class="text-center">
      <div class="text-3xl font-extrabold text-[#00e5a0]">2.4k+</div>
      <div class="text-[#555] text-xs mt-1">Colocations actives</div>
    </div>
    <div class="text-center">
      <div class="text-3xl font-extrabold text-[#ffe234]">12k+</div>
      <div class="text-[#555] text-xs mt-1">Utilisateurs</div>
    </div>
    <div class="text-center">
      <div class="text-3xl font-extrabold text-[#ff4f91]">98%</div>
      <div class="text-[#555] text-xs mt-1">Satisfaction</div>
    </div>
    <div class="text-center">
      <div class="text-3xl font-extrabold text-[#4f8fff]">0 DH</div>
      <div class="text-[#555] text-xs mt-1">Conflits résolus</div>
    </div>
  </div>
</section>

<section id="features" class="px-6 md:px-16 py-24">

  <div class="inline-block bg-[#00e5a0]/10 text-[#00e5a0] text-xs font-bold tracking-widest uppercase px-4 py-1.5 rounded-full mb-5">
    ✦ Fonctionnalités
  </div>
  <h2 class="text-4xl md:text-5xl font-extrabold leading-tight mb-4">
    Tout ce qu'il vous faut<br/>pour vivre en harmonie
  </h2>
  <p class="text-[#888] text-base max-w-md leading-relaxed mb-14">
    Des outils simples et puissants pour gérer chaque aspect de votre vie en colocation.
  </p>

  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">

    <div class="group bg-[#141414] border border-white/5 hover:border-[#00e5a0]/40 hover:-translate-y-1 transition-all duration-300 rounded-2xl p-7 cursor-default">
      <div class="w-12 h-12 bg-[#00e5a0]/10 rounded-xl flex items-center justify-center text-2xl mb-5">💸</div>
      <h3 class="text-lg font-bold mb-2">Dépenses partagées</h3>
      <p class="text-[#666] text-sm leading-relaxed">Ajoutez vos dépenses facilement. EasyColoc calcule automatiquement qui doit quoi à qui.</p>
    </div>

    <div class="group bg-[#141414] border border-white/5 hover:border-[#ffe234]/40 hover:-translate-y-1 transition-all duration-300 rounded-2xl p-7 cursor-default">
      <div class="w-12 h-12 bg-[#ffe234]/10 rounded-xl flex items-center justify-center text-2xl mb-5">⚖️</div>
      <h3 class="text-lg font-bold mb-2">Soldes en temps réel</h3>
      <p class="text-[#666] text-sm leading-relaxed">Vue claire et instantanée des balances. Plus jamais de "t'as combien tu m'dois ?"</p>
    </div>

    <div class="group bg-[#141414] border border-white/5 hover:border-[#ff4f91]/40 hover:-translate-y-1 transition-all duration-300 rounded-2xl p-7 cursor-default">
      <div class="w-12 h-12 bg-[#ff4f91]/10 rounded-xl flex items-center justify-center text-2xl mb-5">🔔</div>
      <h3 class="text-lg font-bold mb-2">Invitations par email</h3>
      <p class="text-[#666] text-sm leading-relaxed">Invitez vos colocataires avec un lien sécurisé. Rejoindre une coloc n'a jamais été aussi simple.</p>
    </div>

    <div class="group bg-[#141414] border border-white/5 hover:border-[#4f8fff]/40 hover:-translate-y-1 transition-all duration-300 rounded-2xl p-7 cursor-default">
      <div class="w-12 h-12 bg-[#4f8fff]/10 rounded-xl flex items-center justify-center text-2xl mb-5">🗂️</div>
      <h3 class="text-lg font-bold mb-2">Catégories personnalisées</h3>
      <p class="text-[#666] text-sm leading-relaxed">Loyer, courses, électricité... Organisez vos dépenses par catégories selon vos besoins.</p>
    </div>

    <div class="group bg-[#141414] border border-white/5 hover:border-[#a855f7]/40 hover:-translate-y-1 transition-all duration-300 rounded-2xl p-7 cursor-default">
      <div class="w-12 h-12 bg-[#a855f7]/10 rounded-xl flex items-center justify-center text-2xl mb-5">⭐</div>
      <h3 class="text-lg font-bold mb-2">Système de réputation</h3>
      <p class="text-[#666] text-sm leading-relaxed">Un score de confiance basé sur les remboursements et le comportement de chaque colocataire.</p>
    </div>

    <div class="group bg-[#141414] border border-white/5 hover:border-[#ff7b2f]/40 hover:-translate-y-1 transition-all duration-300 rounded-2xl p-7 cursor-default">
      <div class="w-12 h-12 bg-[#ff7b2f]/10 rounded-xl flex items-center justify-center text-2xl mb-5">🛡️</div>
      <h3 class="text-lg font-bold mb-2">Rôles & Permissions</h3>
      <p class="text-[#666] text-sm leading-relaxed">Owner, Member, Admin Global — chacun a ses droits. Une gestion structurée et équitable.</p>
    </div>

  </div>
</section>

<!-- ══════════════════════════════
     HOW IT WORKS
══════════════════════════════ -->
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

<!-- ══════════════════════════════
     ROLES
══════════════════════════════ -->
<section id="roles" class="px-6 md:px-16 py-24">

  <div class="inline-block bg-[#ff4f91]/10 text-[#ff4f91] text-xs font-bold tracking-widest uppercase px-4 py-1.5 rounded-full mb-5">
    ✦ Rôles
  </div>
  <h2 class="text-4xl md:text-5xl font-extrabold leading-tight mb-4">Chaque membre a sa place</h2>
  <p class="text-[#888] text-base max-w-md leading-relaxed mb-14">Un système de rôles clair pour une gestion équilibrée de votre colocation.</p>

  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">

    <!-- Owner -->
    <div class="bg-[#ffe234]/5 border border-[#ffe234]/20 hover:border-[#ffe234]/50 hover:-translate-y-1 transition-all duration-300 rounded-2xl p-6 cursor-default">
      <div class="text-3xl mb-4">👑</div>
      <div class="text-lg font-bold text-[#ffe234] mb-2">Owner</div>
      <p class="text-[#666] text-sm leading-relaxed mb-4">Créateur et gestionnaire principal de la colocation.</p>
      <ul class="space-y-2 list-none p-0 m-0">
        <li class="flex items-center gap-2 text-xs text-[#777]"><span class="text-[#ffe234] font-bold">✓</span> Créer & annuler la coloc</li>
        <li class="flex items-center gap-2 text-xs text-[#777]"><span class="text-[#ffe234] font-bold">✓</span> Inviter & retirer des membres</li>
        <li class="flex items-center gap-2 text-xs text-[#777]"><span class="text-[#ffe234] font-bold">✓</span> Gérer les catégories</li>
        <li class="flex items-center gap-2 text-xs text-[#777]"><span class="text-[#ffe234] font-bold">✓</span> Toutes les actions Member</li>
      </ul>
    </div>

    <!-- Member -->
    <div class="bg-[#00e5a0]/5 border border-[#00e5a0]/20 hover:border-[#00e5a0]/50 hover:-translate-y-1 transition-all duration-300 rounded-2xl p-6 cursor-default">
      <div class="text-3xl mb-4">👤</div>
      <div class="text-lg font-bold text-[#00e5a0] mb-2">Member</div>
      <p class="text-[#666] text-sm leading-relaxed mb-4">Colocataire actif participant à la vie commune.</p>
      <ul class="space-y-2 list-none p-0 m-0">
        <li class="flex items-center gap-2 text-xs text-[#777]"><span class="text-[#00e5a0] font-bold">✓</span> Rejoindre & quitter une coloc</li>
        <li class="flex items-center gap-2 text-xs text-[#777]"><span class="text-[#00e5a0] font-bold">✓</span> Ajouter des dépenses</li>
        <li class="flex items-center gap-2 text-xs text-[#777]"><span class="text-[#00e5a0] font-bold">✓</span> Marquer des paiements</li>
        <li class="flex items-center gap-2 text-xs text-[#777]"><span class="text-[#00e5a0] font-bold">✓</span> Voir soldes & dettes</li>
      </ul>
    </div>

    <!-- User -->
    <div class="bg-[#4f8fff]/5 border border-[#4f8fff]/20 hover:border-[#4f8fff]/50 hover:-translate-y-1 transition-all duration-300 rounded-2xl p-6 cursor-default">
      <div class="text-3xl mb-4">🙋</div>
      <div class="text-lg font-bold text-[#4f8fff] mb-2">User</div>
      <p class="text-[#666] text-sm leading-relaxed mb-4">Utilisateur inscrit sans colocation active.</p>
      <ul class="space-y-2 list-none p-0 m-0">
        <li class="flex items-center gap-2 text-xs text-[#777]"><span class="text-[#4f8fff] font-bold">✓</span> Modifier son profil</li>
        <li class="flex items-center gap-2 text-xs text-[#777]"><span class="text-[#4f8fff] font-bold">✓</span> Rejoindre via invitation</li>
        <li class="flex items-center gap-2 text-xs text-[#777]"><span class="text-[#4f8fff] font-bold">✓</span> Créer une colocation</li>
      </ul>
    </div>

    <!-- Admin -->
    <div class="bg-[#ff4f91]/5 border border-[#ff4f91]/20 hover:border-[#ff4f91]/50 hover:-translate-y-1 transition-all duration-300 rounded-2xl p-6 cursor-default">
      <div class="text-3xl mb-4">🛡️</div>
      <div class="text-lg font-bold text-[#ff4f91] mb-2">Admin Global</div>
      <p class="text-[#666] text-sm leading-relaxed mb-4">Superviseur de toute la plateforme.</p>
      <ul class="space-y-2 list-none p-0 m-0">
        <li class="flex items-center gap-2 text-xs text-[#777]"><span class="text-[#ff4f91] font-bold">✓</span> Voir statistiques globales</li>
        <li class="flex items-center gap-2 text-xs text-[#777]"><span class="text-[#ff4f91] font-bold">✓</span> Gérer tous les utilisateurs</li>
        <li class="flex items-center gap-2 text-xs text-[#777]"><span class="text-[#ff4f91] font-bold">✓</span> Bannir / Débannir</li>
        <li class="flex items-center gap-2 text-xs text-[#777]"><span class="text-[#ff4f91] font-bold">✓</span> Voir toutes les colocations</li>
      </ul>
    </div>

  </div>
</section>

<!-- ══════════════════════════════
     CTA BANNER
══════════════════════════════ -->
<section class="px-6 md:px-16 pb-24">
  <div class="relative bg-gradient-to-br from-[#0a2a1e] via-[#0d0d0d] to-[#1a0a2e] border border-[#00e5a0]/15 rounded-3xl px-8 py-20 text-center overflow-hidden">

    <div class="absolute w-80 h-80 bg-[#00e5a0] rounded-full blur-[130px] opacity-[0.08] -top-32 -left-20 pointer-events-none"></div>
    <div class="absolute w-64 h-64 bg-[#a855f7] rounded-full blur-[100px] opacity-[0.08] -bottom-24 -right-16 pointer-events-none"></div>

    <div class="relative z-10">
      <div class="inline-block bg-[#00e5a0]/10 text-[#00e5a0] text-xs font-bold tracking-widest uppercase px-4 py-1.5 rounded-full mb-6">
        🎉 Gratuit pour commencer
      </div>
      <h2 class="text-4xl md:text-5xl font-extrabold mb-4">
        Prêt à simplifier<br/>votre <span class="text-[#00e5a0]">colocation</span> ?
      </h2>
      <p class="text-[#888] text-base max-w-sm mx-auto leading-relaxed mb-8">
        Rejoignez des milliers de colocataires qui gèrent leur vie commune sereinement.
      </p>
      <div class="flex flex-wrap gap-4 justify-center">
        <a href="#" class="bg-[#00e5a0] text-black font-bold px-8 py-4 rounded-xl text-base hover:opacity-90 hover:-translate-y-1 transition-all no-underline flex items-center gap-2">
          🚀 Créer mon compte gratuitement
        </a>
        <a href="#features" class="border border-white/10 text-white font-medium px-8 py-4 rounded-xl text-base hover:bg-white/5 transition-all no-underline flex items-center gap-2">
          En savoir plus →
        </a>
      </div>
    </div>
  </div>
</section>

<footer class="border-t border-white/5 px-6 md:px-16 py-8 flex flex-col md:flex-row items-center justify-between gap-4">
  <span class="text-lg font-bold">Easy<span class="text-[#00e5a0]">Coloc</span></span>
  <p class="text-[#444] text-xs">© 2026 EasyColoc — Tous droits réservés.</p>
  <ul class="flex gap-6 list-none p-0 m-0">
    <li><a href="#" class="text-[#555] text-xs hover:text-white transition-colors no-underline">Confidentialité</a></li>
    <li><a href="#" class="text-[#555] text-xs hover:text-white transition-colors no-underline">CGU</a></li>
    <li><a href="#" class="text-[#555] text-xs hover:text-white transition-colors no-underline">Contact</a></li>
  </ul>
</footer>

</body>
</html>