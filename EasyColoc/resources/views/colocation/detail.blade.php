<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>EasyColoc — {{ $colocation->colocation_name }}</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&display=swap" rel="stylesheet"/>
</head>
<body class="bg-gray-950 text-white font-['Outfit',sans-serif] min-h-screen">

<nav class="flex items-center justify-between px-6 md:px-16 py-4 border-b border-white/5 sticky top-0 z-50 bg-gray-950/90 backdrop-blur-xl">

  <a href="{{ route('colocation.index') }}" class="flex items-center gap-3 no-underline">
    <div class="w-9 h-9 bg-emerald-400 rounded-xl flex items-center justify-center text-black font-bold text-lg">🏠</div>
    <span class="text-xl font-bold text-white">Easy<span class="text-emerald-400">Coloc</span></span>
  </a>

  @if(Auth::id() == $owner->id)
  <div class="flex items-center gap-2 flex-wrap justify-end">

    <form action="{{route('invitation.store',$colocation)}}" method="POST" class="flex items-center gap-2">
      @csrf
      <input type="email" name="email" placeholder="Email du colocataire..."
        class="bg-gray-800 border border-white/10 rounded-xl px-4 py-2 text-sm focus:outline-none focus:border-emerald-400/50 transition-all text-white placeholder-gray-600 w-56 hidden md:block"/>
      <button type="submit"
        class="bg-emerald-400 text-black font-bold px-4 py-2 rounded-xl text-sm hover:opacity-90 transition-opacity whitespace-nowrap">
        ✉️ Inviter
      </button>
    </form>

    <a href="{{ route('categorie.create', $colocation) }}"
      class="bg-gray-800 border border-white/10 text-gray-400 hover:text-white text-sm font-medium px-4 py-2 rounded-xl transition-all no-underline whitespace-nowrap">
      🗂️ Catégorie
    </a>

    <a href="{{ route('colocation.edit', $colocation) }}"
      class="bg-gray-800 border border-white/10 text-gray-400 hover:text-white text-sm font-medium px-4 py-2 rounded-xl transition-all no-underline">
      ✏️ Modifier
    </a>

    <form action="{{ route('colocation.destroy', $colocation) }}" method="POST">
      @csrf
      @method('delete')
      <button type="submit"
        class="bg-red-500/10 border border-red-500/30 text-red-400 text-sm font-medium px-4 py-2 rounded-xl hover:bg-red-500/20 transition-all">
        Désactiver
      </button>
    </form>

  </div>
  @endif

</nav>

<main class="px-6 md:px-16 py-10 max-w-6xl mx-auto">

  <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 mb-10">
    <div>
      <div class="flex items-center gap-3 mb-2 flex-wrap">
        <span class="bg-emerald-400/10 text-emerald-400 text-xs font-black px-3 py-1 rounded-full border border-emerald-400/20 uppercase tracking-widest">
          {{ $colocation->status }}
        </span>
        <span class="text-gray-600 text-xs">Depuis {{ $colocation->created_at }}</span>
      </div>
      <h1 class="text-4xl md:text-5xl font-extrabold text-white tracking-tight">
        {{ $colocation->colocation_name }}
      </h1>
    </div>

    <div class="bg-white/5 p-5 rounded-2xl border border-white/10 text-center">
      <p class="text-gray-600 text-xs uppercase font-bold mb-1">Total Membres</p>
      <p class="text-3xl font-black text-emerald-400">{{ $colocation->users->count() }}</p>
    </div>
  </div>

  <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">

    <div class="lg:col-span-1 flex flex-col gap-6">

      <div>
        <h2 class="text-xs font-bold text-gray-600 uppercase tracking-widest mb-3">Responsable</h2>
        <div class="bg-gray-900 border border-yellow-300/20 rounded-2xl p-5 flex items-center gap-4">
          <div class="w-14 h-14 bg-yellow-300/10 border border-yellow-300/30 rounded-2xl flex items-center justify-center text-xl font-bold text-yellow-300 flex-shrink-0">
            YA
          </div>
          <div>
            <p class="text-white font-bold">{{ $owner->firstname }} {{ $owner->lastname }}</p>
            <p class="text-gray-600 text-xs mt-0.5">{{ $owner->email }}</p>
            <p class="text-yellow-300 text-xs mt-1">👑 Owner</p>
          </div>
        </div>
      </div>

      <div>
        <h2 class="text-xs font-bold text-gray-600 uppercase tracking-widest mb-3">Équipe du logement</h2>
        <div class="bg-gray-900 border border-white/5 rounded-2xl overflow-hidden">
          <table class="w-full text-left border-collapse">
            <thead class="bg-white/[0.02] border-b border-white/5">
              <tr>
                <th class="px-5 py-3 text-gray-600 text-xs uppercase font-bold">Collaborateur</th>
                <th class="px-5 py-3 text-gray-600 text-xs uppercase font-bold">Rôle</th>
                <th class="px-5 py-3 text-gray-600 text-xs uppercase font-bold text-right">État</th>
              </tr>
            </thead>
            <tbody class="divide-y divide-white/[0.03]">
              @foreach($colocation->users as $user)
              <tr class="hover:bg-white/[0.01] transition-all">

                <td class="px-5 py-4">
                  <div class="flex items-center gap-3">
                    <div class="w-8 h-8 bg-gray-800 rounded-lg flex items-center justify-center font-bold text-xs text-emerald-400 flex-shrink-0">
                    Y
                    </div>
                    <span class="font-medium text-sm text-white">{{ $user->firstname }} {{ $user->lastname }}</span>
                  </div>
                </td>

                <td class="px-5 py-4">
                  <span class="text-xs px-2 py-1 rounded-lg border font-bold uppercase tracking-tight text-yellow-300 border-yellow-300/20 bg-yellow-300/5'">
                    {{ $user->pivot->role }}
                  </span>
                </td>

                <td class="px-5 py-4 text-right">
                  <div class="inline-flex items-center gap-1.5">
                    <span class="w-2 h-2 rounded-full">
                      {{ $user->pivot->status }}
                    </span>
                  </div>
                </td>

              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        <h2 class="text-xs font-bold text-gray-600 uppercase tracking-widest mb-3">List Categories</h2>
        <div class="bg-gray-900 border border-white/5 rounded-2xl overflow-hidden">
          <table class="w-full text-left border-collapse">
            <thead class="bg-white/[0.02] border-b border-white/5">
              <tr>
                <th class="px-5 py-3 text-gray-600 text-xs uppercase font-bold">categorie</th>
                <th class="px-5 py-3 text-gray-600 text-xs uppercase font-bold">created_at</th>
                <th class="px-5 py-3 text-gray-600 text-xs uppercase font-bold">action</th>
              </tr>
            </thead>
            <tbody class="divide-y divide-white/[0.03]">
              @foreach($colocation->categories as $categorie)
              <tr class="hover:bg-white/[0.01] transition-all">

                <td class="px-5 py-4">
                  <div class="flex items-center gap-3">
                   
                    <span class="font-medium text-sm text-white">{{ $categorie->categorie_name }}</span>
                  </div>
                </td>

                <td class="px-5 py-4">
                  <span class="text-xs px-2 py-1 rounded-lg border font-bold uppercase tracking-tight text-yellow-300 border-yellow-300/20 bg-yellow-300/5'">
                    {{ $categorie->created_at }}
                  </span>
                </td>
                <td class="px-5 py-4">
                <a href="{{ route('categorie.edit', $categorie) }}"><button type="submit" class="text-[#555] hover:text-[#ff4f91] text-xs transition-colors px-2 py-1 rounded-lg hover:bg-[#ff4f91]/10">✏️</button></a>
                
                <form method="POST" action="{{ route('categorie.destroy', $categorie) }}">
                  @csrf
                  @method('delete')
                    <button type="submit" class="text-[#555] hover:text-[#ff4f91] text-xs transition-colors px-2 py-1 rounded-lg hover:bg-[#ff4f91]/10">X</button>
                </form> 

                </td>     


              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>

    </div>

  </div>

</main>

</body>
</html>