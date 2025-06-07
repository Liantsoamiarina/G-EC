@extends("App")
@section("body")

  <div class="bg-white shadow-md rounded-lg p-8 w-full max-w-lg border border-gray-200">
    <div class="flex flex-col items-center mb-6">
      <img src="/Assets/images/Logo Antehiroka final.png" alt="Logo" class="h-20 mb-2" />
      <h1 class="text-lg font-semibold text-[#532c15] text-center leading-tight">
        Création de compte<br>
        <span class="text-green-600">État Civil - Antehiroka</span>
      </h1>
    </div>
    @if (session("success"))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
        {{ session("success") }}
    </div>
    @endif

    <form action="{{route("user.save")}}" method="post" class="space-y-5">
      @csrf

      <div>
        <label for="name" class="block text-sm font-medium text-gray-700">Nom complet</label>
        <input type="text" id="name" name="nom" required
          class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-[#532c15]" />
      </div>

      <div>
        <label for="email" class="block text-sm font-medium text-gray-700">Adresse email</label>
        <input type="email" id="email" name="email" required
          class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-[#532c15]" />
      </div>

      <div>
        <label for="role" class="block text-sm font-medium text-gray-700">Rôle</label>
        <select id="role" name="role" required
          class="mt-1 block w-full px-4 py-2 border border-gray-300 bg-white rounded-md focus:outline-none focus:border-[#532c15]">
          @foreach ($roles as $role)
              <option value="{{ $role->id }}">{{ $role->designation }}</option>
          @endforeach
        </select>
      </div>

      <div>
        <label for="password" class="block text-sm font-medium text-gray-700">Mot de passe</label>
        <input type="password" id="password" name="password" required
          class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-[#532c15]" />
      </div>

      <button type="submit"
        class="w-full bg-green-600 text-white py-2 px-4 rounded-md hover:bg-green-700 transition">
        Créer un compte
      </button>
    </form>

    <p class="mt-6 text-center text-sm text-gray-600">
      Vous avez déjà un compte ?
      <a href="/login" class="text-green-600 hover:underline">Se connecter</a>
    </p>
  </div>

</body>
</html>

@endsection
