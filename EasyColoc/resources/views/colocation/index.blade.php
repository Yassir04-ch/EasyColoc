 <!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>EasyColoc — Mes colocations</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&display=swap" rel="stylesheet"/>
</head>
<body class="bg-[#0d0d0d] text-white font-['Outfit',sans-serif] min-h-screen">

<!-- NAV -->
<nav class="flex items-center justify-between px-6 md:px-16 py-4 border-b border-white/5 sticky top-0 z-50 bg-[#0d0d0d]/90 backdrop-blur-xl">
  <a href="index.html" class="flex items-center gap-3 no-underline">
    <div class="w-9 h-9 bg-[#00e5a0] rounded-xl flex items-center justify-center text-black font-bold text-lg">🏠</div>
    <span class="text-xl font-bold text-white">Easy<span class="text-[#00e5a0]">Coloc</span></span>
  </a>
  <div class="flex items-center gap-3">
    <span class="text-[#888] text-sm hidden md:block">Yassine Alaoui</span>
    <a href="login.html" class="text-sm text-[#888] hover:text-white transition-colors no-underline">Déconnexion</a>
  </div>
</nav>

<!-- MAIN -->
<main class="px-6 md:px-16 py-10 max-w-6xl mx-auto">

  <!-- Alert success (exemple) -->
  <div class="bg-[#00e5a0]/10 border border-[#00e5a0]/30 rounded-xl px-4 py-3 mb-6 flex items-center gap-2">
    <span>✅</span>
    <p class="text-[#00e5a0] text-sm">Colocation créée avec succès !</p>
  </div>

  <!-- Header -->
  <div class="flex items-center justify-between mb-8">
    <div>
      <h1 class="text-2xl font-bold">Mes colocations</h1>
      <p class="text-[#555] text-sm mt-1">Bonjour <span class="text-white">Yassine</span> 👋</p>
    </div>
    <a href="create.html"
      class="bg-[#00e5a0] text-black font-bold text-sm px-5 py-2.5 rounded-xl hover:opacity-90 hover:-translate-y-0.5 transition-all no-underline flex items-center gap-2">
      + Créer une colocation
    </a>
  </div>

  <!-- Grid colocations -->
  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">

    <!-- ── Card 1 — Owner ── -->
    <div class="bg-[#141414] border border-white/[0.07] hover:border-[#00e5a0]/30 hover:-translate-y-1 transition-all duration-300 rounded-2xl p-6 flex flex-col gap-4">
      <div class="flex items-start justify-between">
        <div class="flex items-center gap-3">
          <div class="w-11 h-11 bg-[#00e5a0]/10 border border-[#00e5a0]/20 rounded-xl flex items-center justify-center text-xl">🏠</div>
          <div>
            <h3 class="font-bold text-base">Appart Guéliz</h3>
            <p class="text-xs text-[#555] mt-0.5">Créée le 10/01/2026</p>
          </div>
        </div>
        <span class="bg-[#00e5a0]/10 text-[#00e5a0] text-xs font-semibold px-2.5 py-1 rounded-full border border-[#00e5a0]/20">Actif</span>
      </div>

      <!-- Stats -->
      <div class="grid grid-cols-3 gap-2">
        <div class="bg-[#1a1a1a] rounded-xl p-3 text-center">
          <p class="text-base font-bold text-white">4</p>
          <p class="text-[#555] text-xs mt-0.5">Membres</p>
        </div>
        <div class="bg-[#1a1a1a] rounded-xl p-3 text-center">
          <p class="text-base font-bold text-[#00e5a0]">3 200</p>
          <p class="text-[#555] text-xs mt-0.5">DH total</p>
        </div>
        <div class="bg-[#1a1a1a] rounded-xl p-3 text-center">
          <p class="text-base font-bold text-[#ffe234]">👑</p>
          <p class="text-[#555] text-xs mt-0.5">Owner</p>
        </div>
      </div>

      <!-- Avatars membres -->
      <div class="flex items-center gap-1">
        <div class="w-7 h-7 rounded-lg bg-[#ffe234]/20 text-[#ffe234] flex items-center justify-center text-xs font-bold" title="Yassine (Owner)">Y</div>
        <div class="w-7 h-7 rounded-lg bg-[#4f8fff]/20 text-[#4f8fff] flex items-center justify-center text-xs font-bold" title="Sara">S</div>
        <div class="w-7 h-7 rounded-lg bg-[#4f8fff]/20 text-[#4f8fff] flex items-center justify-center text-xs font-bold" title="Omar">O</div>
        <div class="w-7 h-7 rounded-lg bg-[#4f8fff]/20 text-[#4f8fff] flex items-center justify-center text-xs font-bold" title="Nadia">N</div>
      </div>

      <!-- Actions -->
      <div class="flex gap-2 pt-1 border-t border-white/[0.04]">
        <a href="show.html"
          class="flex-1 text-center bg-[#00e5a0]/10 text-[#00e5a0] border border-[#00e5a0]/20 hover:bg-[#00e5a0]/20 text-sm font-semibold py-2.5 rounded-xl transition-all no-underline">
          Voir →
        </a>
        <a href="edit.html"
          class="bg-white/5 text-[#888] hover:text-white border border-white/[0.07] hover:border-white/20 text-sm font-medium px-4 py-2.5 rounded-xl transition-all no-underline">
          ✏️
        </a>
      </div>
    </div>

    <!-- ── Card 2 — Member ── -->
    <div class="bg-[#141414] border border-white/[0.07] hover:border-[#00e5a0]/30 hover:-translate-y-1 transition-all duration-300 rounded-2xl p-6 flex flex-col gap-4">
      <div class="flex items-start justify-between">
        <div class="flex items-center gap-3">
          <div class="w-11 h-11 bg-[#00e5a0]/10 border border-[#00e5a0]/20 rounded-xl flex items-center justify-center text-xl">🏠</div>
          <div>
            <h3 class="font-bold text-base">Villa Californie</h3>
            <p class="text-xs text-[#555] mt-0.5">Créée le 05/02/2026</p>
          </div>
        </div>
        <span class="bg-[#00e5a0]/10 text-[#00e5a0] text-xs font-semibold px-2.5 py-1 rounded-full border border-[#00e5a0]/20">Actif</span>
      </div>

      <div class="grid grid-cols-3 gap-2">
        <div class="bg-[#1a1a1a] rounded-xl p-3 text-center">
          <p class="text-base font-bold text-white">3</p>
          <p class="text-[#555] text-xs mt-0.5">Membres</p>
        </div>
        <div class="bg-[#1a1a1a] rounded-xl p-3 text-center">
          <p class="text-base font-bold text-[#00e5a0]">1 800</p>
          <p class="text-[#555] text-xs mt-0.5">DH total</p>
        </div>
        <div class="bg-[#1a1a1a] rounded-xl p-3 text-center">
          <p class="text-base font-bold text-[#4f8fff]">👤</p>
          <p class="text-[#555] text-xs mt-0.5">Member</p>
        </div>
      </div>

      <div class="flex items-center gap-1">
        <div class="w-7 h-7 rounded-lg bg-[#ffe234]/20 text-[#ffe234] flex items-center justify-center text-xs font-bold" title="Karim (Owner)">K</div>
        <div class="w-7 h-7 rounded-lg bg-[#4f8fff]/20 text-[#4f8fff] flex items-center justify-center text-xs font-bold" title="Yassine">Y</div>
        <div class="w-7 h-7 rounded-lg bg-[#4f8fff]/20 text-[#4f8fff] flex items-center justify-center text-xs font-bold" title="Leila">L</div>
      </div>

      <div class="flex gap-2 pt-1 border-t border-white/[0.04]">
        <a href="show.html"
          class="flex-1 text-center bg-[#00e5a0]/10 text-[#00e5a0] border border-[#00e5a0]/20 hover:bg-[#00e5a0]/20 text-sm font-semibold py-2.5 rounded-xl transition-all no-underline">
          Voir →
        </a>
      </div>
    </div>

    <!-- ── Card 3 — Annulée ── -->
    <div class="bg-[#141414] border border-white/[0.07] opacity-60 rounded-2xl p-6 flex flex-col gap-4">
      <div class="flex items-start justify-between">
        <div class="flex items-center gap-3">
          <div class="w-11 h-11 bg-white/5 rounded-xl flex items-center justify-center text-xl">🏠</div>
          <div>
            <h3 class="font-bold text-base">Ancien Appart</h3>
            <p class="text-xs text-[#555] mt-0.5">Créée le 01/06/2025</p>
          </div>
        </div>
        <span class="bg-[#ff4f91]/10 text-[#ff4f91] text-xs font-semibold px-2.5 py-1 rounded-full border border-[#ff4f91]/20">Annulé</span>
      </div>

      <div class="grid grid-cols-3 gap-2">
        <div class="bg-[#1a1a1a] rounded-xl p-3 text-center">
          <p class="text-base font-bold text-white">2</p>
          <p class="text-[#555] text-xs mt-0.5">Membres</p>
        </div>
        <div class="bg-[#1a1a1a] rounded-xl p-3 text-center">
          <p class="text-base font-bold text-[#555]">950</p>
          <p class="text-[#555] text-xs mt-0.5">DH total</p>
        </div>
        <div class="bg-[#1a1a1a] rounded-xl p-3 text-center">
          <p class="text-base font-bold text-[#ffe234]">👑</p>
          <p class="text-[#555] text-xs mt-0.5">Owner</p>
        </div>
      </div>

      <div class="flex items-center gap-1">
        <div class="w-7 h-7 rounded-lg bg-white/10 text-[#555] flex items-center justify-center text-xs font-bold">Y</div>
        <div class="w-7 h-7 rounded-lg bg-white/10 text-[#555] flex items-center justify-center text-xs font-bold">A</div>
      </div>

      <div class="flex gap-2 pt-1 border-t border-white/[0.04]">
        <a href="show.html"
          class="flex-1 text-center bg-white/5 text-[#555] border border-white/[0.07] text-sm font-semibold py-2.5 rounded-xl no-underline">
          Voir →
        </a>
      </div>
    </div>

  </div>

</main>

</body>
</html>