<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>EasyColoc — Dépenses</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet"/>

</head>
<body class="bg-gray-950 text-white min-h-screen flex">

<aside class="hidden md:flex flex-col w-60 min-h-screen bg-gray-900 border-r border-white/5 px-3 py-6 fixed left-0 top-0 bottom-0 z-40">

  <a href="{{ route('colocation.index') }}" class="flex items-center gap-2.5 px-3 mb-8 no-underline">
    <div class="w-8 h-8 bg-emerald-400 rounded-lg flex items-center justify-center text-black font-black text-base">🏠</div>
    <span class="text-lg font-black text-white tracking-tight">Easy<span class="text-emerald-400">Coloc</span></span>
  </a>

  <div class="px-3 mb-6">
    <p class="text-gray-600 text-xs uppercase font-bold tracking-widest mb-1">Colocation</p>
    <p class="text-white font-bold text-sm truncate">{{ $colocation->colocation_name }}</p>
  </div>

  <nav class="flex flex-col gap-0.5 flex-1">
    <p class="text-gray-700 text-xs font-bold uppercase tracking-widest px-3 mb-2">Navigation</p>
    <a href="{{ route('colocation.index') }}"
      class="sidebar-link flex items-center gap-3 px-3 py-2.5 rounded-xl text-sm font-medium text-gray-500 no-underline">
      <span>📊</span> Vue d'ensemble
    </a>
    <a href=""
      class="sidebar-link active flex items-center gap-3 px-3 py-2.5 rounded-xl text-sm font-medium no-underline">
      <span>💸</span> Dépenses
    </a>
  </nav>

  <div class="border-t border-white/5 pt-4">
    <a href="{{ route('colocation.index') }}"
      class="sidebar-link flex items-center gap-3 px-3 py-2.5 rounded-xl text-sm font-medium text-gray-500 no-underline">
      <span>←</span> Mes colocations
    </a>
  </div>
</aside>

<div class="flex-1 md:ml-60 min-h-screen">

  <!-- Top bar -->
  <header class="sticky top-0 z-30 flex items-center justify-between px-6 md:px-10 py-4 bg-gray-950/90 backdrop-blur-xl border-b border-white/5">
    <div>
      <h1 class="text-base font-bold">Dépenses</h1>
      <p class="text-gray-600 text-xs">{{ $colocation->colocation_name }}</p>
    </div>
    <a href="{{route('depense.create',$colocation)}}"
      class="bg-emerald-400 text-black font-bold px-4 py-2 rounded-xl text-sm hover:opacity-90 transition-opacity glow no-underline flex items-center gap-2">
      + Ajouter
    </a>
  </header> 

  <main class="px-6 md:px-10 py-8">

    <!-- ── STATS ── -->
    <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 mb-8">

      <div class="stat-card p-5">
        <div class="flex items-center justify-between mb-3">
          <p class="text-gray-500 text-xs font-medium">Total dépenses</p>
          <div class="w-8 h-8 bg-emerald-400/10 rounded-lg flex items-center justify-center text-sm">💸</div>
        </div>
        <p class="text-2xl font-black text-emerald-400">{{ number_format($depenses->sum('price'), 2) }} DH</p>
      </div>

      <div class="stat-card p-5">
        <div class="flex items-center justify-between mb-3">
          <p class="text-gray-500 text-xs font-medium">Nb dépenses</p>
          <div class="w-8 h-8 bg-blue-400/10 rounded-lg flex items-center justify-center text-sm">📋</div>
        </div>
        <p class="text-2xl font-black text-white">{{ $depenses->count() }}</p>
      </div>

      <div class="stat-card p-5">
        <div class="flex items-center justify-between mb-3">
          <p class="text-gray-500 text-xs font-medium">Ma part</p>
          <div class="w-8 h-8 bg-yellow-300/10 rounded-lg flex items-center justify-center text-sm">👤</div>
        </div>
      </div>

    </div>

    <!-- ── TABLE DEPENSES ── -->
    <div class="card">
      <div class="flex items-center justify-between px-6 py-4 border-b border-white/5">
        <h2 class="font-bold text-sm flex items-center gap-2">
          💸 Liste des dépenses
          <span class="bg-white/5 text-gray-500 text-xs px-2 py-0.5 rounded-full">{{ $depenses->count() }}</span>
        </h2>
      </div>

      
        <div class="overflow-x-auto">
          <table class="w-full text-left">
            <thead class="bg-white/[0.02] border-b border-white/5">
              <tr>
                <th class="px-6 py-3 text-gray-600 text-xs uppercase font-bold">Titre</th>
                <th class="px-6 py-3 text-gray-600 text-xs uppercase font-bold">Payeur</th>
                <th class="px-6 py-3 text-gray-600 text-xs uppercase font-bold">Catégorie</th>
                <th class="px-6 py-3 text-gray-600 text-xs uppercase font-bold">Date</th>
                <th class="px-6 py-3 text-gray-600 text-xs uppercase font-bold">Montant</th>
                <th class="px-6 py-3 text-gray-600 text-xs uppercase font-bold text-center">Status</th>
                <th class="px-6 py-3 text-gray-600 text-xs uppercase font-bold text-right">Action</th>
              </tr>
            </thead>
            <tbody class="divide-y divide-white/[0.03]">
              @foreach($depenses as $depense)
              <tr class="table-row">

                <!-- Titre -->
                <td class="px-6 py-4">
                  <div class="flex items-center gap-3">
                    <div class="w-8 h-8 bg-gray-800 rounded-lg flex items-center justify-center text-sm flex-shrink-0">
                      📦
                    </div>
                    <span class="font-semibold text-sm text-white">{{ $depense->titre }}</span>
                  </div>
                </td>

                <!-- Payeur -->
                <td class="px-6 py-4">
                  <div class="flex items-center gap-2">
                    <div class="w-6 h-6 bg-emerald-400/10 rounded-md flex items-center justify-center text-xs font-bold text-emerald-400">
                      {{ substr($depense->user->firstname, 0, 2) }}
                    </div>
                    <span class="text-sm text-gray-400">{{ $depense->user->firstname }}</span>
                  </div>
                </td>

                <!-- Categorie -->
                <td class="px-6 py-4">
                     <span class="bg-purple-400/10 text-purple-400 border border-purple-400/20 text-xs font-medium px-2.5 py-1 rounded-full">
                      {{ $depense->categorie->categorie_name }}
                    </span>
                  </td>

                <!-- Date -->
                <td class="px-6 py-4">
                  <span class="text-gray-500 text-sm">{{ $depense->date }}</span>
                </td>

                <!-- Montant -->
                <td class="px-6 py-4">
                  <div>
                    <p class="font-bold text-emerald-400 text-sm">{{ number_format($depense->price /$users->count(),2) }} DH</p>
                  </div>
                </td>


                <td class="px-6 py-4 text-center">
                  @if($depense->paiement->where('is_paid', 0)->count() > 0)
                      <span class="bg-red-500/10 text-red-400 border border-red-500/20 text-xs font-bold px-3 py-1 rounded-full">
                      En attente
                    </span>
                  @else
                    <span class="bg-emerald-400/10 text-emerald-400 border border-emerald-400/20 text-xs font-bold px-3 py-1 rounded-full">
                       Payé
                    </span>
                  @endif
                </td>
                <!-- Action -->
                <td class="px-6 py-4 text-right">
                  @if($depense->paiement->where('is_paid', 0)->count() > 0)
                  <div class="inline-flex items-center gap-1">
                    <form action="{{route('paiement.paye',$depense)}}" method="POST" >
                        @csrf
                        @method('put')
                        <button type="submit"
                          class="bg-emerald-400/10 border border-emerald-400/20 text-emerald-400 hover:bg-emerald-400 hover:text-black text-xs font-bold px-3 py-1.5 rounded-lg transition-all">
                          💳 Payer
                        </button>
                      </form>
                  </div>
                  @endif
                </td>

              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
     </div>

  </main>
</div>

</body>
</html>