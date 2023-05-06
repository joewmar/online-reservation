<nav class="hidden md:flex navbar row-span-full bg-base-100 fixed z-30 shadow-md">
    <div class="flex-1">
      <a class="btn btn-ghost normal-case text-xl">LOGO</a>
    </div>
    <div class="flex-none">
      <div class="dropdown dropdown-end">
        <label tabindex="0" class="btn btn-ghost btn-circle mx-3">
          <div class="indicator">
            <i class="fa-regular fa-bell text-xl"></i>
            <span class="badge badge-primary badge-sm indicator-item">8</span>
          </div>
        </label>
        <div tabindex="0" class="mt-1 p-3 card card-compact dropdown-content w-96 bg-base-100 shadow">
          <x-notification />
          <x-notification />
          <x-notification />
        </div>
      </div>
      <div class="dropdown dropdown-end">
        <label tabindex="0" class="btn btn-ghost btn-circle avatar">
          <div class="w-10 rounded-full">
            <img src="/images/stock/photo-1534528741775-53994a69daeb.jpg" />
          </div>
        </label>
        <ul tabindex="0" class="menu menu-compact dropdown-content mt-3 p-2 shadow bg-base-100 rounded-box w-52">
          <li>
            <a href="/system/profile" class="justify-between">
              Profile
            </a>
          </li>
          <li><a href="/system/settings">Settings</a></li>
          <li><a>Logout</a></li>
        </ul>
      </div>
    </div>
</nav>