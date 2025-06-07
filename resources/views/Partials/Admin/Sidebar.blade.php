@extends("app")

<aside class="w-72 min-h-screen bg-white shadow-md flex flex-col border-r border-gray-200">
    <div class="p-4 flex flex-col items-center">
      <img src="{{ asset('Assets/Images/Logo Antehiroka final.png') }}" alt="Logo" class="h-20 mb-2" />
      <p class="text-center text-xs text-gray-600 font-semibold leading-tight">
        Gestion d'État Civil<br />Commune Rurale d'Antehiroka
      </p>
    </div>

    <nav class="mt-6 flex-1">
  <!-- Accueil -->
  <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-2 py-2.5 px-4 text-sm text-gray-700 border-l-4 transition-all
          {{ request()->routeIs('admin.dashboard') ? 'bg-blue-50 text-green-700 border-green-500' : 'hover:bg-blue-50 hover:text-green-700 hover:border-green-500 border-transparent' }}">
    <!-- Icône Accueil -->
    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 stroke-current" fill="none" viewBox="0 0 24 24" stroke-width="1.5">
      <path stroke-linecap="round" stroke-linejoin="round" d="M3 9.5L12 3l9 6.5v10a1.5 1.5 0 0 1-1.5 1.5h-15A1.5 1.5 0 0 1 3 19.5v-10z"/>
      <path stroke-linecap="round" stroke-linejoin="round" d="M9 22V12h6v10"/>
    </svg>
    Accueil
  </a>

  <!-- Gestion des Actes -->
  <a href="{{ route('admin.gestion') }}" class="flex items-center gap-2 py-2.5 px-4 text-sm text-gray-700 border-l-4 transition-all
          {{ request()->routeIs('admin.gestion') ? 'bg-blue-50 text-green-700 border-green-500' : 'hover:bg-blue-50 hover:text-green-700 hover:border-green-500 border-transparent' }}">
    <!-- Icône Dossier -->
    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 stroke-current" fill="none" viewBox="0 0 24 24" stroke-width="1.5">
      <path stroke-linecap="round" stroke-linejoin="round" d="M3 6.75A1.5 1.5 0 0 1 4.5 5.25h5.379a1.5 1.5 0 0 1 1.06.44l1.561 1.56a1.5 1.5 0 0 0 1.06.44H19.5A1.5 1.5 0 0 1 21 9.25v9a1.5 1.5 0 0 1-1.5 1.5h-15A1.5 1.5 0 0 1 3 18.25v-11.5z"/>
    </svg>
    Gestion des Actes
  </a>

  <!-- Agents -->
  <a href="{{ route("admin.agent") }}" class="flex items-center gap-2 py-2.5 px-4 text-sm text-gray-700 border-l-4 transition-all
          {{ request()->routeIs('admin.agent') ? 'bg-blue-50 text-green-700 border-green-500' : 'hover:bg-blue-50 hover:text-green-700 hover:border-green-500 border-transparent' }}">
    <!-- Icône Utilisateur -->
    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 stroke-current" fill="none" viewBox="0 0 24 24" stroke-width="1.5">
      <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 7.5A3.75 3.75 0 1 1 12 3.75 3.75 3.75 0 0 1 15.75 7.5zM5.25 20.25A7.5 7.5 0 0 1 12 15a7.5 7.5 0 0 1 6.75 5.25"/>
    </svg>
    Agents
  </a>

  <!-- Historique d’enregistrement -->
  <a href="{{ route("admin.history") }}" class="flex items-center gap-2 py-2.5 px-4 text-sm text-gray-700 border-l-4 transition-all
          {{ request()->routeIs('admin.history') ? 'bg-blue-50 text-green-700 border-green-500' : 'hover:bg-blue-50 hover:text-green-700 hover:border-green-500 border-transparent' }}">
    <!-- Icône Horloge / Historique -->
    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 stroke-current" fill="none" viewBox="0 0 24 24" stroke-width="1.5">
      <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6l4 2m6 0A10 10 0 1 1 2 12a10 10 0 0 1 20 0z"/>
    </svg>
    Historique d'enregistrement
  </a>

  <!-- Déconnexion -->
  <a href="#" class="flex items-center gap-2 mt-80 py-2.5 px-4 text-sm text-red-700 hover:bg-red-50 hover:border-red-500 border-l-4 border-transparent transition-all">
    <!-- Icône Déconnexion -->
    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 stroke-current" fill="none" viewBox="0 0 24 24" stroke-width="1.5">
      <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0 0 13.5 3h-6A2.25 2.25 0 0 0 5.25 5.25v13.5A2.25 2.25 0 0 0 7.5 21h6a2.25 2.25 0 0 0 2.25-2.25V15m3-3H9m0 0 3-3m-3 3 3 3"/>
    </svg>
    Déconnexion
  </a>
</nav>

  </aside>
