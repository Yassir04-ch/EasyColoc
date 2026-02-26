<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>EasyColoc — Créer une catégorie</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&display=swap" rel="stylesheet"/>
</head>
<body class="bg-gray-950 text-white font-['Outfit',sans-serif] min-h-screen">

<!-- NAV -->
<nav class="flex items-center justify-between px-6 md:px-16 py-4 border-b border-white/5 sticky top-0 z-50 bg-gray-950/90 backdrop-blur-xl">
  <a href="index.html" class="flex items-center gap-3 no-underline">
    <div class="w-9 h-9 bg-emerald-400 rounded-xl flex items-center justify-center text-black font-bold text-lg">🏠</div>
    <span class="text-xl font-bold text-white">Easy<span class="text-emerald-400">Coloc</span></span>
  </a>
  <div class="flex items-center gap-3">
    <a href="/logout" class="text-sm text-gray-500 hover:text-white transition-colors no-underline">Déconnexion</a>
  </div>
</nav>

<!-- MAIN -->
<main class="flex items-center justify-center min-h-[calc(100vh-73px)] px-4 py-12 relative overflow-hidden">

  <!-- Blobs -->
  <div class="absolute w-96 h-96 bg-purple-500 rounded-full blur-[140px] opacity-[0.06] -top-40 -right-40 pointer-events-none"></div>
  <div class="absolute w-80 h-80 bg-emerald-400 rounded-full blur-[140px] opacity-[0.06] -bottom-40 -left-40 pointer-events-none"></div>

  <div class="relative z-10 w-full max-w-lg">

    <!-- CARD -->
    <div class="bg-gray-900 border border-white/[0.08] rounded-3xl p-8 md:p-10">

      <!-- Header -->
      <div class="flex items-center gap-4 mb-8">
        <div class="w-14 h-14 bg-purple-500/10 border border-purple-500/20 rounded-2xl flex items-center justify-center text-2xl flex-shrink-0">
          🗂️
        </div>
        <div>
          <h1 class="text-2xl font-bold">Nouvelle catégorie</h1>
          <p class="text-gray-500 text-sm mt-0.5">Appart Guéliz</p>
        </div>
      </div>

      <!-- Form -->
      <form action="{{route('categorie.store')}}" method="POST" class="flex flex-col gap-5">
        @csrf
        <!-- Nom categorie -->
        <div class="flex flex-col gap-1.5">
          <label class="text-sm font-medium text-gray-400">Nom de la catégorie</label>
          <input type="text" name="categorie_name" placeholder="Ex: Loyer, Courses, Électricité..."
            class="bg-gray-800 border border-white focus:border-purple-500/50 focus:outline-none text-white text-sm px-4 py-3 rounded-xl placeholder-gray-700 transition-colors"/>
          <input type="hidden" name="colocation_id" value="{{$colocation->id}}" >
        </div>

        <!-- Buttons -->
        <div class="flex gap-3 mt-1">
          <a href="{{route('colocation.index')}}" class="flex-1 text-center border border-white/10 text-gray-500 hover:text-white hover:border-white/20 font-medium py-3 rounded-xl text-sm transition-all no-underline">
            Annuler
          </a>
          <button type="submit" class="flex-1 bg-purple-500 text-white font-bold py-3 rounded-xl text-sm hover:opacity-90 hover:-translate-y-0.5 transition-all">
            Créer la catégorie →
          </button>
        </div>

      </form>

    </div>

  </div>
</main>

</body>
</html>