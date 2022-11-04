<aside aria-label="Sidebar">
   <div class="overflow-y-auto py-4 px-3 bg-gray-50 rounded dark:bg-gray-900">
       <a href="{{ route('home.index') }}" class="flex items-center pl-2.5 mb-5">
            <img src="{{ asset('assets/icons/images/black/larger/name_daemon_small.png') }}" class="mr-3 h-6 sm:h-7" alt="Daemon Logo"/>
       </a>
      <ul class="space-y-2">
        @if(!Auth::check())
             <li>
                <a href="{{ route('home.login') }}" class="flex items-center p-2 text-sm text-gray-700 dark:text-gray-400 dark:hover:text-white rounded-lg hover:bg-gray-300 dark:hover:bg-gray-700">
                   <span class="ml-3">Login</span>
                </a>
             </li>
        @else
              <li>
                <a href="#" class="flex items-center p-2 text-sm text-gray-700 dark:text-gray-400 dark:hover:text-white rounded-lg hover:bg-gray-300 dark:hover:bg-gray-700">
                    <span class="flex-1 ml-3 whitespace-nowrap">My Account</span>
                </a>
             </li>
        @endif
         <li>
            <a href="#" class="flex items-center p-2 text-sm text-gray-700 dark:text-gray-400 dark:hover:text-white rounded-lg hover:bg-gray-300 dark:hover:bg-gray-700">
               <span class="flex-1 ml-3 whitespace-nowrap">Recover Account</span>
            </a>
         </li>
         <li>
            <a href="#" class="flex items-center p-2 text-sm text-gray-700 dark:text-gray-400 dark:hover:text-white rounded-lg hover:bg-gray-300 dark:hover:bg-gray-700">
                <span class="flex-1 ml-3 whitespace-nowrap">Vocations</span>
            </a>
         </li>
         <li>
            <a href="#" class="flex items-center p-2 text-sm text-gray-700 dark:text-gray-400 dark:hover:text-white rounded-lg hover:bg-gray-300 dark:hover:bg-gray-700">
                <span class="flex-1 ml-3 whitespace-nowrap">Who is online?</span>
            </a>
         </li>
         <li>
            <a href="#" class="flex items-center p-2 text-sm text-gray-700 dark:text-gray-400 dark:hover:text-white rounded-lg hover:bg-gray-300 dark:hover:bg-gray-700">
               <span class="flex-1 ml-3 whitespace-nowrap">Guilds</span>
            </a>
         </li>
        <li>
            <a href="#" class="flex items-center p-2 text-sm text-gray-700 dark:text-gray-400 dark:hover:text-white rounded-lg hover:bg-gray-300 dark:hover:bg-gray-700">
                <span class="flex-1 ml-3 whitespace-nowrap">Wiki</span>
            </a>
        </li>
      </ul>
      <ul class="pt-4 mt-4 space-y-2 border-t border-gray-300 dark:border-gray-700">
         <li>
            <a href="#" class="flex items-center p-2 text-sm text-gray-700 rounded-lg transition duration-75 hover:bg-gray-300 dark:hover:bg-gray-700 dark:text-gray-400 group">
               <span class="ml-3">Shop</span>
            </a>
         </li>
         <li>
            <a href="#" class="flex items-center p-2 text-sm text-gray-700 rounded-lg transition duration-75 hover:bg-gray-300 dark:hover:bg-gray-700 dark:text-gray-400 group">
               <span class="ml-3">Last Kills</span>
            </a>
         </li>
         <li>
            <a href="#" class="flex items-center p-2 text-sm text-gray-700 rounded-lg transition duration-75 hover:bg-gray-300 dark:hover:bg-gray-700 dark:text-gray-400 group">
                <span class="ml-3">Monsters</span>
            </a>
         </li>
        <li>
        <a href="#" class="flex items-center p-2 text-sm text-gray-700 rounded-lg transition duration-75 hover:bg-gray-300 dark:hover:bg-gray-700 dark:text-gray-400 group">
                <span class="ml-3">Spells</span>
            </a>
        </li>
        <li>
            <a href="#" class="flex items-center p-2 text-sm text-gray-700 rounded-lg transition duration-75 hover:bg-gray-300 dark:hover:bg-gray-700 dark:text-gray-400 group">
                <span class="ml-3">Items</span>
            </a>
        </li>
        <li>
            <a href="#" class="flex items-center p-2 text-sm text-gray-700 rounded-lg transition duration-75 hover:bg-gray-300 dark:hover:bg-gray-700 dark:text-gray-400 group">
                <span class="ml-3">Updates</span>
            </a>
        </li>
        <li>
            <a href="#" class="flex items-center p-2 text-sm text-gray-700 rounded-lg transition duration-75 hover:bg-gray-300 dark:hover:bg-gray-700 dark:text-gray-400 group">
                <span class="ml-3">Banneds</span>
            </a>
        </li>
      </ul>
</div>
</aside>
