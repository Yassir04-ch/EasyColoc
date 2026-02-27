<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>EasyColoc — {{ $colocation->colocation_name }}</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet"/>
</head>
<body class="bg-gray-950 text-white min-h-screen flex">

<!-- SIDEBAR -->
<aside class="hidden md:flex flex-col w-60 min-h-screen bg-gray-900 border-r border-white/5 px-3 py-6 fixed left-0 top-0 bottom-0 z-40">

  <a href="{{ route('colocation.index') }}" class="flex items-center gap-2.5 px-3 mb-8 no-underline">
    <div class="w-8 h-8 bg-emerald-400 rounded-lg flex items-center justify-center text-black font-black text-base">🏠</div>
    <span class="text-lg font-black text-white tracking-tight">Easy<span class="text-emerald-400">Coloc</span></span>
  </a>

  <div class="px-3 mb-6">
    <p class="text-gray-600 text-xs uppercase font-bold tracking-widest mb-1">Colocation</p>
    <p class="text-white font-bold text-sm truncate">{{ $colocation->colocation_name }}</p>
    <span class="inline-block mt-1 text-xs px-2 py-0.5 rounded-full font-semibold
      {{ $colocation->status === 'active' ? 'bg-emerald-400/10 text-emerald-400 border border-emerald-400/20' : 'bg-red-500/10 text-red-400 border border-red-500/20' }}">
      {{ $colocation->status }}
    </span>
  </div>

  <nav class="flex flex-col gap-0.5 flex-1">
    <p class="text-gray-700 text-xs font-bold uppercase tracking-widest px-3 mb-2">Navigation</p>
    <a href="" class="sidebar-link active flex items-center gap-3 px-3 py-2.5 rounded-xl text-sm font-medium no-underline">
      <span>📊</span> Vue d'ensemble
    </a>
    <a href="{{route('depense.index',$colocation)}}" class="sidebar-link flex items-center gap-3 px-3 py-2.5 rounded-xl text-sm font-medium text-gray-500 no-underline">
      <span>💸</span> Dépenses
    </a>

    @if(Auth::id() == $owner->id)
    <p class="text-gray-700 text-xs font-bold uppercase tracking-widest px-3 mb-2 mt-4">Gestion</p>
    <a href="{{ route('categorie.create', $colocation) }}"
      class="sidebar-link flex items-center gap-3 px-3 py-2.5 rounded-xl text-sm font-medium text-gray-500 no-underline">
      <span>+</span> Ajouter catégorie
    </a>
    <a href="{{ route('colocation.edit', $colocation) }}"
      class="sidebar-link flex items-center gap-3 px-3 py-2.5 rounded-xl text-sm font-medium text-gray-500 no-underline">
      <span>✏️</span> Modifier
    </a>
    @endif
    <a href="{{ route('depense.create', $colocation) }}"
      class="sidebar-link flex items-center gap-3 px-3 py-2.5 rounded-xl text-sm font-medium text-gray-500 no-underline">
      <span>+</span> Ajouter dépense
    </a>
  </nav>

  <div class="border-t border-white/5 pt-4 flex flex-col gap-1">
    <form action="{{ route('colocation.exite', $colocation) }}" method="POST">
      @csrf
      @method('put')
      <button type="submit" class="w-full flex items-center gap-3 px-3 py-2.5 rounded-xl text-sm font-medium text-red-400 hover:bg-red-500/10 transition-all text-left">
        Quitter
      </button>
    </form>

    @if(Auth::id() == $owner->id)
    <form action="{{ route('colocation.destroy', $colocation) }}" method="POST" onsubmit="return confirm('Désactiver cette colocation ?')">
      @csrf
      @method('delete')
      <button type="submit" class="w-full flex items-center gap-3 px-3 py-2.5 rounded-xl text-sm font-medium text-red-500 hover:bg-red-500/10 transition-all text-left">
       Désactiver
      </button>
    </form>
    @endif
  </div>
</aside>

<!-- MAIN -->
<div class="flex-1 md:ml-60 min-h-screen">

  <header class="sticky top-0 z-30 flex items-center justify-between px-6 md:px-10 py-4 bg-gray-950/90 backdrop-blur-xl border-b border-white/5">
    <div>
      <h1 class="text-base font-bold">{{ $colocation->colocation_name }}</h1>
      <p class="text-gray-600 text-xs">{{ $colocation->users->count() }} membre(s) · Créée le {{ $colocation->created_at->format('d/m/Y') }}</p>
    </div>

    @if(Auth::id() == $owner->id)
    <form action="{{ route('invitation.store', $colocation) }}" method="POST" class="hidden md:flex items-center gap-2">
      @csrf
      <input type="email" name="email" placeholder="Email du colocataire..."
        class="bg-gray-800 border border-white/10 rounded-xl px-4 py-2 text-sm text-white placeholder-gray-600 w-56 transition-all"/>
      <button type="submit" class="bg-emerald-400 text-black font-bold px-4 py-2 rounded-xl text-sm hover:opacity-90 transition-opacity glow whitespace-nowrap">
        ✉️ Inviter
      </button>
    </form>
    @endif
  </header>

  <main class="px-6 md:px-10 py-8">

    <!-- STATS -->
    <div id="overview" class="grid grid-cols-2 lg:grid-cols-4 gap-4 mb-8">
      <div class="stat-card p-5">
        <div class="flex items-center justify-between mb-3">
          <p class="text-gray-500 text-xs font-medium">Membres</p>
          <div class="w-8 h-8 bg-blue-400/10 rounded-lg flex items-center justify-center text-sm">👥</div>
        </div>
        <p class="text-3xl font-black text-white">{{ $colocation->users->count() }}</p>
      </div>

      <div class="stat-card p-5">
        <div class="flex items-center justify-between mb-3">
          <p class="text-gray-500 text-xs font-medium">Catégories</p>
          <div class="w-8 h-8 bg-purple-400/10 rounded-lg flex items-center justify-center text-sm">🗂️</div>
        </div>
        <p class="text-3xl font-black text-purple-400">{{ $colocation->categories->count() }}</p>
      </div>

      <div class="stat-card p-5">
        <div class="flex items-center justify-between mb-3">
          <p class="text-gray-500 text-xs font-medium">Status</p>
          <div class="w-8 h-8 bg-emerald-400/10 rounded-lg flex items-center justify-center text-sm">📋</div>
        </div>
        <p class="text-lg font-black uppercase {{ $colocation->status === 'active' ? 'text-emerald-400' : 'text-red-400' }}">
          {{ $colocation->status }}
        </p>
      </div>

      <div class="stat-card p-5">
        <div class="flex items-center justify-between mb-3">
          <p class="text-gray-500 text-xs font-medium">Owner</p>
          <div class="w-8 h-8 bg-yellow-300/10 rounded-lg flex items-center justify-center text-sm">👑</div>
        </div>
        <p class="text-sm font-bold text-yellow-300 truncate">{{ $owner->firstname }}</p>
      </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-6">

      <!-- MEMBRES -->
      <div id="membres" class="card">
        <div class="flex items-center justify-between px-6 py-4 border-b border-white/5">
          <h2 class="font-bold text-sm flex items-center gap-2">
             Équipe du logement
            <span class="bg-white/5 text-gray-500 text-xs px-2 py-0.5 rounded-full">{{ $colocation->users->count() }}</span>
          </h2>
        </div>
        <table class="w-full text-left">
          <thead class="bg-white/[0.02] border-b border-white/5">
            <tr>
              <th class="px-6 py-3 text-gray-600 text-xs uppercase font-bold">Collaborateur</th>
              <th class="px-6 py-3 text-gray-600 text-xs uppercase font-bold">Rôle</th>
              <th class="px-6 py-3 text-gray-600 text-xs uppercase font-bold text-right">État</th>
            </tr>
          </thead>
          <tbody class="divide-y divide-white/[0.03]">
            @foreach($colocation->users as $user)
            <tr class="table-row">
              <td class="px-6 py-4">
                <div class="flex items-center gap-3">
                  <div class="w-8 h-8 bg-gray-800 rounded-lg flex items-center justify-center font-bold text-xs text-emerald-400 flex-shrink-0">
                    {{ substr($user->firstname, 0, 1)}}
                  </div>
                  <span class="font-medium text-sm text-white">{{ $user->firstname }} {{ $user->lastname }}</span>
                </div>
              </td>
              <td class="px-6 py-4">
                <span class="text-xs px-2 py-1 rounded-lg border font-bold uppercase
                  {{ $user->pivot->role == 'owner' ? 'text-yellow-300 border-yellow-300/20 bg-yellow-300/5' : 'text-gray-500 border-white/10' }}">
                  {{ $user->pivot->role }}
                </span>
              </td>
              <td class="px-6 py-4 text-right">
                <div class="inline-flex items-center gap-1.5">
                  <span class="w-2 h-2 rounded-full {{ $user->pivot->status == 'active' ? 'bg-emerald-400' : 'bg-red-500' }}"></span>
                  <span class="text-xs font-bold uppercase {{ $user->pivot->status == 'active' ? 'text-emerald-400' : 'text-red-400' }}">
                    {{ $user->pivot->status }}
                  </span>
                </div>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>

      <!-- CATEGORIES -->
      <div id="categories" class="card">
        <div class="flex items-center justify-between px-6 py-4 border-b border-white/5">
          <h2 class="font-bold text-sm flex items-center gap-2">
            🗂️ Catégories
            <span class="bg-white/5 text-gray-500 text-xs px-2 py-0.5 rounded-full">{{ $colocation->categories->count() }}</span>
          </h2>
        </div>
        <table class="w-full text-left">
          <thead class="bg-white/[0.02] border-b border-white/5">
            <tr>
              <th class="px-6 py-3 text-gray-600 text-xs uppercase font-bold">Catégorie</th>
              <th class="px-6 py-3 text-gray-600 text-xs uppercase font-bold">Créée le</th>
              @if(Auth::id() == $owner->id)
              <th class="px-6 py-3 text-gray-600 text-xs uppercase font-bold text-right">Actions</th>
              @endif
            </tr>
            </thead>
              <tbody class="divide-y divide-white/[0.03]">
              @foreach($colocation->categories as $categorie)
              <tr class="table-row">
              <td class="px-6 py-4">
                <span class="font-medium text-sm text-white">{{ $categorie->categorie_name }}</span>
              </td>
              <td class="px-6 py-4">
                <span class="text-xs text-gray-600">{{ $categorie->created_at->format('d/m/Y') }}</span>
              </td>
              @if(Auth::id() == $owner->id)
              <td class="px-6 py-4 text-right">
                <div class="inline-flex items-center gap-1">
                  <a href="{{ route('categorie.edit', $categorie) }}"
                    class="text-gray-500 hover:text-blue-400 text-xs px-2 py-1 rounded-lg hover:bg-blue-400/10 transition-all no-underline">✏️</a>
                  <form method="POST" action="{{ route('categorie.destroy', $categorie) }}" class="inline" onsubmit="return confirm('Supprimer ?')">
                    @csrf
                    @method('delete')
                    <button type="submit" class="text-gray-500 hover:text-red-400 text-xs px-2 py-1 rounded-lg hover:bg-red-400/10 transition-all">✕</button>
                  </form>
                </div>
              </td>
              @endif
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