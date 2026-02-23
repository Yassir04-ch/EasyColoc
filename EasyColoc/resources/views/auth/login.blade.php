<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>EasyColoc — Connexion</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&display=swap" rel="stylesheet"/>
</head>
<body class="bg-[#0d0d0d] text-white font-['Outfit',sans-serif] min-h-screen">

<!-- NAV -->
<nav class="flex items-center justify-between px-6 md:px-16 py-4 border-b border-white/5">
  <a href="index.html" class="flex items-center gap-3 no-underline">
    <div class="w-9 h-9 bg-[#00e5a0] rounded-xl flex items-center justify-center text-black font-bold text-lg">🏠</div>
    <span class="text-xl font-bold text-white">Easy<span class="text-[#00e5a0]">Coloc</span></span>
  </a>
  <a href="register.html" class="text-sm font-bold px-5 py-2 rounded-lg bg-[#00e5a0] text-black hover:opacity-90 transition-opacity no-underline">
    Inscription
  </a>
</nav>

<!-- MAIN -->
<main class="flex items-center justify-center min-h-[calc(100vh-73px)] px-4 py-12 relative overflow-hidden">

  <!-- Blobs -->
  <div class="absolute w-[500px] h-[500px] bg-[#00e5a0] rounded-full blur-[140px] opacity-[0.07] -top-40 -left-40 pointer-events-none"></div>
  <div class="absolute w-[400px] h-[400px] bg-[#4f8fff] rounded-full blur-[140px] opacity-[0.07] -bottom-40 -right-40 pointer-events-none"></div>

  <!-- CARD -->
  <div class="relative z-10 w-full max-w-md">
    <div class="bg-[#141414] border border-white/[0.08] rounded-3xl p-8 md:p-10">

      <!-- Header -->
      <div class="text-center mb-8">
        <div class="w-14 h-14 bg-[#00e5a0]/10 border border-[#00e5a0]/20 rounded-2xl flex items-center justify-center text-2xl mx-auto mb-4">🔑</div>
        <h1 class="text-2xl font-bold mb-1">Bon retour !</h1>
        <p class="text-[#666] text-sm">Connectez-vous à votre compte EasyColoc</p>
      </div>

      <!-- Form -->
      <form action="#" method="POST" class="flex flex-col gap-5">

        <!-- Email -->
        <div class="flex flex-col gap-1.5">
          <label class="text-sm font-medium text-[#aaa]">Adresse email</label>
          <input
            type="email"
            name="email"
            placeholder="exemple@email.com"
            class="bg-[#1a1a1a] border border-white/[0.08] focus:border-[#00e5a0]/50 focus:outline-none text-white text-sm px-4 py-3 rounded-xl placeholder-[#444] transition-colors"
          />
        </div>

        <!-- Password -->
        <div class="flex flex-col gap-1.5">
          <div class="flex items-center justify-between">
            <label class="text-sm font-medium text-[#aaa]">Mot de passe</label>
            <a href="#" class="text-xs text-[#00e5a0] hover:underline no-underline">Mot de passe oublié ?</a>
          </div>
          <input
            type="password"
            name="password"
            placeholder="••••••••"
            class="bg-[#1a1a1a] border border-white/[0.08] focus:border-[#00e5a0]/50 focus:outline-none text-white text-sm px-4 py-3 rounded-xl placeholder-[#444] transition-colors"
          />
        </div>

        <!-- Remember me -->
        <div class="flex items-center gap-3">
          <input type="checkbox" id="remember" name="remember"
            class="w-4 h-4 accent-[#00e5a0] bg-[#1a1a1a] border border-white/10 rounded cursor-pointer"/>
          <label for="remember" class="text-sm text-[#666] cursor-pointer">Se souvenir de moi</label>
        </div>

        <!-- Submit -->
        <button type="submit"
          class="w-full bg-[#00e5a0] text-black font-bold py-3.5 rounded-xl text-sm hover:opacity-90 hover:-translate-y-0.5 transition-all mt-1">
          Se connecter →
        </button>

      </form>

      <!-- Footer link -->
      <p class="text-center text-sm text-[#555] mt-6">
        Pas encore de compte ?
        <a href="register.html" class="text-[#00e5a0] font-semibold hover:underline no-underline ml-1">S'inscrire</a>
      </p>

    </div>

  </div>
</main>

</body>
</html>