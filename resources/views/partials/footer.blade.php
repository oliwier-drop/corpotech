<footer class="bg-black text-white pt-12 pb-8">
  <div class="container mx-auto px-4">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-8">
      <!-- Company Info -->
      <div class="space-y-4">
        <div class="flex items-center">
          <img src="{{ asset('assets/images/logo/logo.png') }}" class="h-18 w-auto" alt="Corpotech logo" />
        </div>
        <p class="text-gray-400">Nowoczesne rozwiązania dla <br> Twojego biznesu i domu</p>
        <div class="flex space-x-4">
          <a href="https://www.facebook.com/p/Corpotech-Group-61576352657354/" target="_blank" class="text-gray-400 hover:text-white transition">
            <span class="sr-only">Facebook</span>
            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
              <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" />
            </svg>
          </a>
          <a href="https://www.linkedin.com/company/corpotech-group" target="_blank" class="text-gray-400 hover:text-white transition">
            <span class="sr-only">LinkedIn</span>
            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
              <path fill-rule="evenodd" d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" clip-rule="evenodd" />
            </svg>
          </a>
        </div>
      </div>

      <!-- Quick Links -->
      <div class="space-y-4">
        <h3 class="text-lg font-semibold">Szybkie linki</h3>
        <ul class="space-y-2">
          <li><a href="{{ route('home') }}" class="text-gray-400 hover:text-white transition">Strona główna</a></li>
          <li><a href="{{ route('about') }}" class="text-gray-400 hover:text-white transition">O nas</a></li>
          <li><a href="{{ route('services') }}" class="text-gray-400 hover:text-white transition">Usługi</a></li>
          <li><a href="{{ route('projects') }}" class="text-gray-400 hover:text-white transition">Realizacje</a></li>
          <li><a href="{{ route('contact') }}" class="text-gray-400 hover:text-white transition">Kontakt</a></li>
        </ul>
      </div>

      <!-- Services -->
      <div class="space-y-4">
        <h3 class="text-lg font-semibold">Usługi</h3>
        <ul class="space-y-2">
          <li><a href="{{ route('cybersecurity') }}" class="text-gray-400 hover:text-white transition">Cyberbezpieczeństwo</a></li>
          <li><a href="{{ route('systems') }}" class="text-gray-400 hover:text-white transition">Administracja systemów</a></li>
          <li><a href="{{ route('websites') }}" class="text-gray-400 hover:text-white transition">Strony internetowe</a></li>
          <li><a href="{{ route('smarthome') }}" class="text-gray-400 hover:text-white transition">Smart home</a></li>
          <li><a href="{{ route('installations') }}" class="text-gray-400 hover:text-white transition">Instalacje techniczne</a></li>
        </ul>
      </div>

      <!-- Contact -->
      <div class="space-y-4">
        <h3 class="text-lg font-semibold">Kontakt</h3>
        <address class="not-italic text-gray-400 space-y-2">
          <p class="flex items-start gap-2">
            <svg class="w-5 h-5 mt-0.5 text-gray-500 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
              <path fill="currentColor" d="M12 2.25c-3.728 0-6.75 3.022-6.75 6.75 0 4.981 5.32 9.905 6.03 10.54a1.25 1.25 0 0 0 1.44 0c.71-.635 6.03-5.559 6.03-10.54 0-3.728-3.022-6.75-6.75-6.75Zm0 9.25a2.5 2.5 0 1 1 0-5 2.5 2.5 0 0 1 0 5Z" />
            </svg>
            <span>Tadeusza Kościuszki 5, 62-400 Słupca</span>
          </p>
          <p class="flex items-center gap-2">
            <svg class="w-5 h-5 text-gray-500 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
              <path fill="currentColor" d="M3.75 4.5A2.25 2.25 0 0 1 6 2.25h12A2.25 2.25 0 0 1 20.25 4.5v15a.75.75 0 0 1-1.2.6L15 16.5H6A2.25 2.25 0 0 1 3.75 14.25v-9.75Z" />
            </svg>
            <a href="mailto:kontakt@corpotech.com.pl" class="hover:text-white transition">kontakt@corpotech.com.pl</a>
          </p>
          <p class="flex items-center gap-2">
            <svg class="w-5 h-5 text-gray-500 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
              <path fill="currentColor" d="M6.62 4.06a1.5 1.5 0 0 1 2.12 0l1.76 1.76a1.5 1.5 0 0 1 .18 1.94L9.86 9.7a.75.75 0 0 0-.08.78 7.01 7.01 0 0 0 3.54 3.54.75.75 0 0 0 .78-.08l1.94-1.82a1.5 1.5 0 0 1 1.94.18l1.76 1.76a1.5 1.5 0 0 1 0 2.12l-1.18 1.18c-.7.7-1.72 1.02-2.7.82a13.5 13.5 0 0 1-8.21-4.71 13.5 13.5 0 0 1-2.78-5.1c-.2-.98.12-2 .82-2.7Z" />
            </svg>
            <a href="tel:+48662273737" class="hover:text-white transition">+48 573 296 093</a>
          </p>
        </address>
      </div>
    </div>

    <div class="border-t border-gray-800 pt-6 flex flex-col md:flex-row justify-between items-center">
      <p class="text-gray-500 text-sm mb-4 md:mb-0">&copy; {{ now()->year }} Grupa Corpotech Sp. z o.o. Wszelkie prawa zastrzeżone.</p>
      <div class="flex space-x-6">
        <a href="{{ route('privacy-policy') }}" class="text-gray-500 hover:text-white text-sm transition">Polityka prywatności</a>
        <a href="{{ route('terms-of-service') }}" class="text-gray-500 hover:text-white text-sm transition">Regulamin</a>
      </div>
    </div>
  </div>
</footer>