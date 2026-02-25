<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>EasyColoc — Liste des colocations</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&display=swap" rel="stylesheet"/>
</head>
<body class="bg-[#0d0d0d] text-white font-['Outfit',sans-serif] min-h-screen">

<nav class="flex items-center justify-between px-6 md:px-16 py-4 border-b border-white/5 sticky top-0 z-50 bg-[#0d0d0d]/90 backdrop-blur-xl">
  <div class="flex items-center gap-3 no-underline">
    <div class="w-9 h-9 bg-[#00e5a0] rounded-xl flex items-center justify-center text-black font-bold text-lg">🏠</div>
    <span class="text-xl font-bold text-white">Easy<span class="text-[#00e5a0]">Coloc</span></span>
  </div>
  <div>
    <a href="{{route('colocation.create')}}"><span class="text-[#888] text-sm italic">+ Create New Colocation</span></a>
  </div>
</nav>

<main class="px-6 md:px-16 py-10 max-w-6xl mx-auto">

  <div class="flex items-center justify-between mb-8">
    <div>
      <h1 class="text-2xl font-bold">Toutes les colocations</h1>
      <p class="text-[#555] text-sm mt-1">Découvrez les colocations actives sur la plateforme</p>
    </div>
  </div>

    @if(session('error'))
        <div class="bg-red-500/10 border border-red-500/30 rounded-xl px-4 py-3 mb-6 flex items-center gap-2">
            <p class="text-white text-sm font-medium">{{ session('error') }}</p>
        </div>
    @endif
  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">

    @forelse($colocations as $colocation)
    <div class="bg-[#141414] border border-white/[0.07] hover:border-[#00e5a0]/30 hover:-translate-y-1 transition-all duration-300 rounded-2xl p-6 flex flex-col gap-4 {{ $colocation->status == 'annulé' ? 'opacity-60' : '' }}">
      
      <div class="flex items-start justify-between">
        <div class="flex items-center gap-3">
          <div class="w-11 h-11 bg-[#00e5a0]/10 border border-[#00e5a0]/20 rounded-xl flex items-center justify-center text-xl">🏠</div>
          <div>
            <h3 class="font-bold text-base">{{ $colocation->colocation_name }}</h3>
            <p class="text-xs text-[#555] mt-0.5">Créée le {{ $colocation->created_at }}</p>
          </div>
        </div>
        <span class="bg-[#00e5a0]/10 text-[#00e5a0] text-xs font-semibold px-2.5 py-1 rounded-full border border-[#00e5a0]/20 capitalize">
            {{ $colocation->status }}
        </span>
      </div>

      <div class="grid grid-cols-2 gap-2">
        <div class="bg-[#1a1a1a] rounded-xl p-3 text-center">
          <p class="text-base font-bold text-white">{{ $colocation->users->count() }}</p>
          <p class="text-[#555] text-xs mt-0.5">Membres</p>
        </div>
      </div>

      <div class="pt-1 border-t border-white/[0.04]">
        <a href="{{route('colocation.show',$colocation)}}" class="block w-full text-center bg-white/5 text-[#888] hover:text-white border border-white/[0.07] text-sm font-semibold py-2.5 rounded-xl transition-all no-underline">
          Détails de la colocation
        </a>
      </div>
    </div>
    @empty
    <div class="col-span-full py-20 text-center">
        <p class="text-[#555]">Aucune colocation n'est disponible pour le moment.</p>
    </div>
    @endforelse

  </div>
</main>

</body>
</html>