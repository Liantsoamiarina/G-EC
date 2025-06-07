@extends('App')
@section("body")

  <div class="bg-white shadow-md rounded-lg p-8 w-full max-w-md border border-gray-200">
    <div class="flex flex-col items-center mb-6">
      <img src="Assets/images/Logo Antehiroka final.png" alt="Logo" class="h-30 mb-2" />
      <h1 class="text-lg font-semibold text-[#532c15] text-center leading-tight">
        Connexion à la plateforme<br>
        <span class="text-green-600">État Civil - Antehiroka</span>
      </h1>
    </div>

    <form action="/login" method="POST" class="space-y-5">
      <!-- CSRF pour Laravel si nécessaire -->
      <!-- @csrf -->

      <div>
        <label for="email" class="block text-sm font-medium text-gray-700">Email ou nom d'utilisateur</label>
        <input type="text" id="email" name="email" required
               class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm  focus:outline-none focus:border-[#532c15]" />
      </div>

      <div>
        <label for="password" class="block text-sm font-medium text-gray-700">Mot de passe</label>
        <input type="password" id="password" name="password" required
               class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:border-[#532c15]" />
      </div>

      <div class="flex items-center justify-between">
        <label class="flex items-center text-sm text-gray-600">
          <input type="checkbox" class="accent-green-600 mr-2 rounded border-gray-300 text-green-600 focus:ring-green-500">
          Se souvenir de moi
        </label>
        <a href="/register" class="text-sm text-green-600 hover:underline">Créer un compte</a>
      </div>

      <button type="submit"
              class="w-full bg-green-600 text-white py-2 px-4 rounded-md hover:bg-green-700 transition">
        Se connecter
      </button>
    </form>
  </div>

</body>
</html>

@endsection
