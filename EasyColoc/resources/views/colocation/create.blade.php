<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>EasyColoc — Créer une colocation</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&display=swap" rel="stylesheet"/>
</head>
<body class="bg-[#0d0d0d] text-white font-['Outfit',sans-serif] min-h-screen">

<!-- NAV -->
<nav class="flex items-center justify-between px-6 md:px-16 py-4 border-b border-white/5">
  <a href="/" class="flex items-center gap-3 no-underline">
    <div class="w-9 h-9 bg-[#00e5a0] rounded-xl flex items-center justify-center text-black font-bold text-lg">🏠</div>
    <span class="text-xl font-bold text-white">Easy<span class="text-[#00e5a0]">Coloc</span></span>
  </a>
  <div class="flex items-center gap-3">
     <form method="POST" action="{{ route('logout') }}">
      @csrf
      <button class="text-sm text-[#888] hover:text-white transition-colors">Déconnexion</button>
    </form>
  </div>
</nav>

<main class="flex items-center justify-center min-h-[calc(100vh-73px)] px-4 py-12 relative overflow-hidden">

  <div class="absolute w-[400px] h-[400px] bg-[#00e5a0] rounded-full blur-[140px] opacity-[0.06] -top-40 -left-40 pointer-events-none"></div>
  <div class="absolute w-[350px] h-[350px] bg-[#4f8fff] rounded-full blur-[140px] opacity-[0.06] -bottom-40 -right-40 pointer-events-none"></div>

  <div class="relative z-10 w-full max-w-lg">

    <div class="bg-[#141414] border border-white/[0.08] rounded-3xl p-8 md:p-10">

      <div class="flex items-center gap-4 mb-8">
        <div class="w-14 h-14 bg-[#00e5a0]/10 border border-[#00e5a0]/20 rounded-2xl flex items-center justify-center text-2xl flex-shrink-0">
          🏠
        </div>
        <div>
          <h1 class="text-2xl font-bold">Créer une colocation</h1>
          <p class="text-[#666] text-sm mt-0.5">Vous deviendrez automatiquement le Owner 👑</p>
        </div>
      </div>


      <form action="{{ route('colocation.store') }}" method="POST" class="flex flex-col gap-5">
        @csrf
        @method('post')
        <div class="flex flex-col gap-1.5">
          <label class="text-sm font-medium text-[#aaa]">Nom de la colocation</label>
          <input type="text" name="colocation_name" placeholder="Ex: Appart Guéliz, Villa Californie..."
            class="bg-[#1a1a1a] border border-white/[0.08] focus:border-[#00e5a0]/50 focus:outline-none text-white text-sm px-4 py-3 rounded-xl placeholder-[#444] transition-colors" />
        </div>
        
        <div class="flex flex-col gap-1.5">
          <label class="text-sm font-medium text-[#aaa]">Description</label>
          <input type="text" name="description" placeholder="Ex: colocation pour aprenent Youcode"
            class="bg-[#1a1a1a] border border-white/[0.08] focus:border-[#00e5a0]/50 focus:outline-none text-white text-sm px-4 py-3 rounded-xl placeholder-[#444] transition-colors" />
        </div>

        <div class="bg-[#1a1a1a] border border-white/[0.05] rounded-xl p-4 flex flex-col gap-2">
          <p class="text-xs text-[#555] font-semibold uppercase tracking-widest mb-1">Ce qui sera créé</p>
          <div class="flex items-center gap-2 text-sm text-[#777]">
            <span class="text-[#00e5a0]">✓</span> Votre colocation avec statut <span class="text-white font-medium ml-1">Actif</span>
          </div>
          <div class="flex items-center gap-2 text-sm text-[#777]">
            <span class="text-[#00e5a0]">✓</span> Votre rôle : <span class="text-[#ffe234] font-medium ml-1">Owner 👑</span>
          </div>
        </div>

        <div class="flex gap-3 mt-1">
          <a href="{{ route('colocation.index') }}"
            class="flex-1 text-center border border-white/10 text-[#888] hover:text-white hover:border-white/20 font-medium py-3 rounded-xl text-sm transition-all no-underline">
            Annuler
          </a>
          <button type="submit"
            class="flex-1 bg-[#00e5a0] text-black font-bold py-3 rounded-xl text-sm hover:opacity-90 hover:-translate-y-0.5 transition-all">
            Créer la colocation →
          </button>
        </div>

      </form>

    </div>

  </div>
</main>

</body>
</html>