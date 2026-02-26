<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Ajouter une dépense — EasyColoc</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&display=swap" rel="stylesheet"/>
</head>
<body class="bg-gray-950 text-white font-['Outfit',sans-serif] min-h-screen flex items-center justify-center p-6">

    <div class="w-full max-w-lg">
        <a href="{{ route('colocation.show', $colocation) }}" class="inline-flex items-center gap-2 text-gray-500 hover:text-white transition-colors mb-8 no-underline group">
            <span class="group-hover:-translate-x-1 transition-transform">←</span>
            <span class="text-sm font-medium">Retour à la colocation</span>
        </a>

        <div class="bg-gray-900 border border-white/5 p-8 rounded-[2.5rem] shadow-2xl relative overflow-hidden">
            <div class="absolute -top-24 -right-24 w-48 h-48 bg-emerald-500/10 blur-[80px]"></div>

            <div class="relative z-10">
                <header class="mb-8">
                    <h1 class="text-3xl font-extrabold tracking-tight">Nouvelle dépense</h1>
                    <p class="text-gray-500 text-sm mt-1">Enregistrez un nouvel achat pour la coloc.</p>
                </header>

                <form action="{{ route('depense.store', $colocation) }}" method="POST" class="space-y-5">
                    @csrf

                    <div>
                        <label class="block text-[10px] font-bold text-gray-500 uppercase tracking-widest mb-2 ml-1">Quoi ? (Titre)</label>
                        <input type="text" name="titre" placeholder="Ex: Courses Carrefour, Loyer..." required
                            class="w-full bg-gray-800/50 border border-white/10 rounded-2xl px-5 py-4 text-white placeholder-gray-600 focus:outline-none focus:border-emerald-400/50 transition-all">
                    </div>

                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label class="block text-[10px] font-bold text-gray-500 uppercase tracking-widest mb-2 ml-1">Combien ? (Dhs)</label>
                            <input type="number" step="0.01" name="price" placeholder="0.00" required
                                class="w-full bg-gray-800/50 border border-white/10 rounded-2xl px-5 py-4 text-white placeholder-gray-600 focus:outline-none focus:border-emerald-400/50 transition-all">
                        </div>

                        <div>
                            <label class="block text-[10px] font-bold text-gray-500 uppercase tracking-widest mb-2 ml-1">Catégorie</label>
                            <select name="categorie_id" required
                                class="w-full bg-gray-800/50 border border-white/10 rounded-2xl px-5 py-4 text-white focus:outline-none focus:border-emerald-400/50 transition-all appearance-none cursor-pointer">
                                @foreach($colocation->categories as $categorie)
                                    <option value="{{ $categorie->id }}">{{ $categorie->categorie_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div>
                        <label class="block text-[10px] font-bold text-gray-500 uppercase tracking-widest mb-2 ml-1">Note (Optionnel)</label>
                         <input type="date"  name="date" required
                                class="w-full bg-gray-800/50 border border-white/10 rounded-2xl px-5 py-4 text-white placeholder-gray-600 focus:outline-none focus:border-emerald-400/50 transition-all">
                    </div>

                    <button type="submit" 
                        class="w-full bg-emerald-400 text-black font-black py-4 rounded-2xl mt-4 hover:bg-emerald-300 hover:scale-[1.02] active:scale-95 transition-all shadow-[0_20px_40px_rgba(52,211,153,0.15)]">
                        Enregistrer la dépense
                    </button>
                </form>
            </div>
        </div>

    </div>

</body>
</html>