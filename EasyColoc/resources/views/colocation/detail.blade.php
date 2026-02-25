<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>EasyColoc — {{ $colocation->colocation_name }}</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&display=swap" rel="stylesheet"/>
</head>
<body class="bg-[#0d0d0d] text-white font-['Outfit',sans-serif] min-h-screen">

<nav class="flex items-center justify-between px-6 md:px-16 py-4 border-b border-white/5 sticky top-0 z-50 bg-[#0d0d0d]/90 backdrop-blur-xl">
  @if(Auth::id() == $owner->id)
    <div class="bg-[#1a1a1a] border border-dashed border-white/20 rounded-3xl p-6 mb-8">
        <h3 class="text-sm font-bold text-[#00e5a0] uppercase tracking-widest mb-4 italic">+ Ajouter un membre</h3>
        <form action="" method="POST" class="flex flex-col md:flex-row gap-4">
            @csrf
            <input type="email" name="email" placeholder="Email du colocataire..." 
                  class="flex-1 bg-black/50 border border-white/10 rounded-xl px-4 py-3 text-sm focus:outline-none focus:border-[#00e5a0] transition-all" required>
            <button type="submit" class="bg-[#00e5a0] text-black font-bold px-6 py-3 rounded-xl text-sm hover:scale-105 transition-all">Inviter</button>
        </form>
    </div>
         <form action="{{route('colocation.destroy',$colocation)}}" method="POST" class="flex flex-col md:flex-row gap-4">
            @csrf
            @method('delete')
            <button type="submit" class="bg-red-500/100 text-black font-bold px-6 py-3 rounded-xl text-sm hover:scale-105 transition-all">Desactive Colocation</button>
        </form>
    <div class="flex items-center gap-4 text-[#888] text-sm italic">  
        <a href="{{route('categorie.create',$colocation)}}" class="block w-full text-center bg-white/5 text-[#888] hover:text-white border border-white/[0.07] text-sm font-semibold py-2.5 rounded-xl transition-all no-underline">
        + Ajouter Categorie
        </a>
    </div>
   @endif
</nav>

<main class="px-6 md:px-16 py-10 max-w-6xl mx-auto">

  <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 mb-12 border-l-4 border-[#00e5a0] pl-6">
    <div>
      <div class="flex items-center gap-3 mb-2">
        <span class="bg-[#00e5a0]/10 text-[#00e5a0] text-[10px] font-black px-3 py-1 rounded-full border border-[#00e5a0]/20 uppercase tracking-widest">
           {{ $colocation->status }}
        </span>
        <span class="text-[#555] text-xs">Depuis {{ $colocation->created_at }}</span>
      </div>
      <h1 class="text-5xl font-extrabold text-white tracking-tighter italic">
        {{ $colocation->colocation_name }}
      </h1>
    </div>

    <div class="bg-white/5 p-4 rounded-2xl border border-white/10">
      <p class="text-[#555] text-[10px] uppercase font-bold mb-1">Total Membres</p>
      <p class="text-2xl font-black text-[#00e5a0]">{{ $colocation->users->count() }}</p>
    </div>
  </div>

  <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
    
    <div class="lg:col-span-1">
      <h2 class="text-sm font-bold text-[#555] uppercase tracking-[0.2em] mb-4">Responsable</h2>
      
       <div class="bg-[#141414] border border-[#ffe234]/20 rounded-3xl p-6 shadow-2xl relative overflow-hidden group">
        <div class="flex items-center gap-4">
          <div class="w-16 h-16 bg-[#ffe234]/10 border border-[#ffe234]/30 rounded-2xl flex items-center justify-center text-3xl font-bold text-[#ffe234]">
             YA
          </div>
          <div>
            <p class="text-white font-bold text-xl">yassir cherqui</p>
            <p class="text-[#888] text-xs">yyyyyyy</p>
          </div>
        </div>
      </div>
    </div>

    <div class="lg:col-span-2">
      <h2 class="text-sm font-bold text-[#555] uppercase tracking-[0.2em] mb-4">Équipe du logement</h2>
      
      <div class="bg-[#141414] border border-white/5 rounded-3xl overflow-hidden shadow-2xl">
        <table class="w-full text-left border-collapse">
          <thead class="bg-white/[0.02] border-b border-white/5">
            <tr>
              <th class="px-8 py-4 text-[#555] text-[10px] uppercase font-bold">Collaborateur</th>
              <th class="px-8 py-4 text-[#555] text-[10px] uppercase font-bold">Attributions</th>
              <th class="px-8 py-4 text-[#555] text-[10px] uppercase font-bold text-right">État</th>
            </tr>
          </thead>
          <tbody class="divide-y divide-white/[0.03]">
            @foreach($colocation->users as $member)
            <tr class="hover:bg-white/[0.01] transition-all">
              <td class="px-8 py-5 flex items-center gap-4">
                <div class="w-10 h-10 bg-white/5 rounded-lg flex items-center justify-center font-bold text-xs text-[#00e5a0]">
                    {{ substr($member->firstname, 0, 1) }}
                </div>
                <span class="font-bold text-sm text-white">{{ $member->firstname }} {{ $member->lastname }}</span>
              </td>
              <td class="px-8 py-5">
                <span class="text-[10px] px-2 py-1 rounded border border-white/10 font-bold uppercase tracking-tighter {{ $member->pivot->role == 'owner' ? 'text-[#ffe234]' : 'text-[#888]' }}">
                   {{ $member->pivot->role }}
                </span>
              </td>
              <td class="px-8 py-5 text-right">
                <div class="inline-flex items-center gap-2">
                    <span class="w-2 h-2 rounded-full {{ $member->pivot->status == 'active' ? 'bg-[#00e5a0] animate-pulse' : 'bg-red-500' }}"></span>
                    <span class="text-[10px] font-bold uppercase {{ $member->pivot->status == 'active' ? 'text-[#00e5a0]' : 'text-red-500' }}">
                        {{ $member->pivot->status }}
                    </span>
                </div>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>

  </div>
</main>

</body>
</html>