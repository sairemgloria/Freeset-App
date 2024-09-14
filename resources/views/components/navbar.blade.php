<nav class="navbar navbar-expand-lg bg-body-tertiary">
   <div class="container">
      <a class="navbar-brand text-dark" href="/">&raquo; Freeset</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
         <ul class="navbar-nav">
            <li class="nav-item">
               <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
            </li>
            <li class="nav-item">
               <x-nav-link href="/presets" :active="request()->is('presets')">Presets</x-nav-link>
            </li>
            <li class="nav-item">
               <x-nav-link href="/faq" :active="request()->is('faq')">FAQ</x-nav-link>
            </li>
            <li class="nav-item">
               <x-nav-link href="/about" :active="request()->is('about')">About</x-nav-link>
            </li>
            <li class="nav-item">
               <x-nav-link href="/contact" :active="request()->is('contact')">Contact</x-nav-link>
            </li>
         </ul>
      </div>
   </div>
</nav>