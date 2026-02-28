<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>EasyColoc — Dashboard Admin</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&display=swap" rel="stylesheet"/>
</head>
<body class="bg-[#0d0d0d] text-white font-['Outfit',sans-serif] min-h-screen flex">

<aside class="hidden md:flex flex-col w-64 min-h-screen bg-[#141414] border-r border-white/5 px-4 py-6 fixed left-0 top-0 bottom-0 z-40">

  <!-- Logo -->
  <a href="index.html" class="flex items-center gap-3 no-underline mb-8 px-2">
    <div class="w-9 h-9 bg-[#00e5a0] rounded-xl flex items-center justify-center text-black font-bold text-lg">🏠</div>
    <span class="text-xl font-bold text-white">Easy<span class="text-[#00e5a0]">Coloc</span></span>
  </a>

  <!-- Admin badge -->
  <div class="bg-[#ff4f91]/10 border border-[#ff4f91]/20 rounded-xl px-3 py-2 mb-6 flex items-center gap-2">
    <span class="text-lg">🛡️</span>
    <div>
      <p class="text-xs font-bold text-[#ff4f91]">Admin Global</p>
      <p class="text-xs text-[#555]">Accès complet</p>
    </div>
  </div>

  <!-- Nav links -->
  <nav class="flex flex-col gap-1 flex-1">
    <p class="text-[#333] text-xs font-semibold uppercase tracking-widest px-3 mb-2">Général</p>

    <a href="" class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-[#888] hover:text-white hover:bg-white/5 text-sm no-underline transition-all">
      <span>📊</span> Dashboard
    </a>
    <a href="{{route('admin.index')}}" class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-[#888] hover:text-white hover:bg-white/5 text-sm no-underline transition-all">
      <span>📊</span> Utilisateurs
    </a>
    <a href="#" class="flex items-center gap-3 px-3 py-2.5 rounded-xl bg-[#00e5a0]/10 text-[#00e5a0] font-semibold text-sm no-underline">
      <span>🏠</span> Colocations
    </a>
    
  </nav>

  <!-- User info bottom -->
  <div class="border-t border-white/5 pt-4 px-2 flex items-center gap-3">
    <div class="w-9 h-9 rounded-xl bg-[#ff4f91]/20 text-[#ff4f91] flex items-center justify-center font-bold text-sm flex-shrink-0">A</div>
    <div class="flex-1 min-w-0">
      <p class="text-sm font-semibold truncate">{{auth()->user()->firstname}}</p>
      <p class="text-xs text-[#555] truncate"> {{auth()->user()->email}}</p>
    </div>
    <a href="login.html" class="text-[#555] hover:text-white text-xs transition-colors no-underline">↩</a>
  </div>
</aside>

<div class="flex-1 md:ml-64 min-h-screen">

  <!-- Top bar -->
  <header class="sticky top-0 z-30 flex items-center justify-between px-6 md:px-10 py-4 bg-[#0d0d0d]/90 backdrop-blur-xl border-b border-white/5">
    <div>
      <h1 class="text-lg font-bold">Dashboard</h1>
      <p class="text-[#555] text-xs">Mardi 24 Février 2026</p>
    </div>
    <div class="flex items-center gap-3">
      <div class="flex items-center gap-3">
        <form method="POST" action="{{ route('logout') }}">
          @csrf
          <button class="text-sm text-[#888] hover:text-white transition-colors">Déconnexion</button>
        </form>
      </div>
      <a href="/profile" ><div class="w-9 h-9 rounded-xl bg-[#ff4f91]/20 text-[#ff4f91] flex items-center justify-center font-bold text-sm">A</div></a>
    </div>
  </header>

  <main class="px-6 md:px-10 py-8">

    <!-- ── STATS CARDS ── -->
    <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 mb-8">

      <div class="bg-[#141414] border border-white/5 rounded-2xl p-5 hover:-translate-y-0.5 transition-all">
        <div class="flex items-center justify-between mb-3">
          <p class="text-[#555] text-xs font-medium">Utilisateurs</p>
          <div class="w-8 h-8 bg-[#4f8fff]/10 rounded-lg flex items-center justify-center text-sm">👥</div>
        </div>
        <p class="text-3xl font-extrabold text-white">{{$users->count()}}</p>
      </div>

      <div class="bg-[#141414] border border-white/5 rounded-2xl p-5 hover:-translate-y-0.5 transition-all">
        <div class="flex items-center justify-between mb-3">
          <p class="text-[#555] text-xs font-medium">Colocations</p>
          <div class="w-8 h-8 bg-[#00e5a0]/10 rounded-lg flex items-center justify-center text-sm">🏠</div>
        </div>
        <p class="text-3xl font-extrabold text-white">{{$colocations->count()}}</p>
       </div>

      <div class="bg-[#141414] border border-white/5 rounded-2xl p-5 hover:-translate-y-0.5 transition-all">
        <div class="flex items-center justify-between mb-3">
          <p class="text-[#555] text-xs font-medium">Dépenses totales</p>
          <div class="w-8 h-8 bg-[#ffe234]/10 rounded-lg flex items-center justify-center text-sm">💸</div>
        </div>
        <p class="text-3xl font-extrabold text-[#ffe234]">{{$depensetotal}}DH</p>
       </div>

      <div class="bg-[#141414] border border-white/5 rounded-2xl p-5 hover:-translate-y-0.5 transition-all">
        <div class="flex items-center justify-between mb-3">
          <p class="text-[#555] text-xs font-medium">Utilisateurs bannis</p>
          <div class="w-8 h-8 bg-[#ff4f91]/10 rounded-lg flex items-center justify-center text-sm">🚫</div>
        </div>
        <p class="text-3xl font-extrabold text-[#ff4f91]">{{$usersban->count()}}</p>
       </div>

    </div>

    <!-- ── GRID: USERS + COLOCATIONS ── -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-6">

      <!-- ── DERNIERS UTILISATEURS ── -->
      <div id="users" class="bg-[#141414] border border-white/5 rounded-2xl p-6">
        <div class="flex items-center justify-between mb-5">
          <h2 class="font-bold text-base flex items-center gap-2">👥All Colocations</h2>
        </div>

        <div class="flex flex-col gap-1">

          <!-- User row -->
          @foreach($colocations as $colocation)

          <div class="flex items-center justify-between py-2.5 border-b border-white/[0.04]">
            <div class="flex items-center gap-3">
              <div class="w-8 h-8 rounded-lg bg-[#4f8fff]/20 text-[#4f8fff] flex items-center justify-center text-xs font-bold">Y</div>
              <div>
                <p class="text-sm font-medium">{{$colocation->colocation_name}}</p>
              </div>
            </div>
          </div>
          @endforeach

        </div>
      </div>

  </main>
</div>

</body>
</html>