<div class="max-w-md p-0 mx-auto card content">
    <div class="px-4 py-3 text-center border-b">
        <h1>Welcome to Landtamic!</h1>
        <p>Follow these steps to get started</p>
    </div>
    <div class="px-4 py-3 space-y-3">
        <a href="{{ cp_route('globals.update', 'theme') }}" class="flex items-start p-2 rounded-md hover:bg-blue-100 group">
            <div class="w-12 h-12 p-1 mr-3 bg-blue-100 rounded-full group-hover:bg-blue-200">
               <svg class="text-blue-900 fill-current" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><defs/><path d="M19.9 12.66a1 1 0 010-1.32l1.28-1.44a1 1 0 00.12-1.17l-2-3.46a1 1 0 00-1.07-.48l-1.88.38a1 1 0 01-1.15-.66l-.61-1.83a1 1 0 00-.95-.68h-4a1 1 0 00-1 .68l-.56 1.83a1 1 0 01-1.15.66L5 4.79a1 1 0 00-1 .48L2 8.73a1 1 0 00.1 1.17l1.27 1.44a1 1 0 010 1.32L2.1 14.1a1 1 0 00-.1 1.17l2 3.46a1 1 0 001.07.48l1.88-.38a1 1 0 011.15.66l.61 1.83a1 1 0 001 .68h4a1 1 0 00.95-.68l.61-1.83a1 1 0 011.15-.66l1.88.38a1 1 0 001.07-.48l2-3.46a1 1 0 00-.12-1.17l-1.35-1.44zM18.41 14l.8.9-1.28 2.22-1.18-.24a3 3 0 00-3.45 2L12.92 20h-2.56L10 18.86a3 3 0 00-3.45-2l-1.18.24-1.3-2.21.8-.9a3 3 0 000-4l-.8-.9 1.28-2.2 1.18.24a3 3 0 003.45-2L10.36 4h2.56l.38 1.14a3 3 0 003.45 2l1.18-.24 1.28 2.22-.8.9a3 3 0 000 3.98zm-6.77-6a4 4 0 100 8 4 4 0 000-8zm0 6a2 2 0 110-4 2 2 0 010 4z"/></svg>
            </div>
            <div class="flex-1">
                <h2 class="text-blue-darkest">Set up your website</h2>
                <p>Configure logo, menu, footer, favicon and sitemap settings</p>
            </div>
        </a>
        <a href="{{ cp_route('navigation.index') }}" class="flex items-start p-2 rounded-md hover:bg-blue-100 group">
            <div class="w-12 h-12 p-1 mr-3 text-blue-900 bg-blue-100 rounded-full group-hover:bg-blue-200">
               <svg xmlns="http://www.w3.org/2000/svg" class="text-blue-900 fill-current" fill="none" viewBox="0 0 24 24"><defs/><path d="M3.64 9.56a1.001 1.001 0 10-1.28 1.54l1.08.9-1.08.9a.999.999 0 00.173 1.656.998.998 0 001.107-.116l2-1.67a1 1 0 000-1.54l-2-1.67zM9 5a1 1 0 00-1 1v12a1 1 0 102 0V6a1 1 0 00-1-1zm4 2h8a1 1 0 000-2h-8a1 1 0 100 2zm8 10h-8a1 1 0 000 2h8a1 1 0 000-2zm0-8h-8a1 1 0 100 2h8a1 1 0 000-2zm0 4h-8a1 1 0 000 2h8a1 1 0 000-2z"/></svg>
            </div>
            <div class="flex-1">
                <h2 class="text-blue-darkest">Configure Navigation</h2>
                <p>Add entries to the Navigation or Footer </p>
            </div>
        </a>
        <a href="{{ cp_route('cnj.seotamic.index') }}" class="flex items-start p-2 rounded-md hover:bg-blue-100 group">
            <div class="w-12 h-12 p-1 mr-3 text-blue-900 bg-blue-100 rounded-full group-hover:bg-blue-200">
              <svg xmlns="http://www.w3.org/2000/svg" class="text-blue-900 fill-current" fill="none" viewBox="0 0 24 24"><defs/><path d="M20 17.57a4.3 4.3 0 10-3.67 2.06 4.37 4.37 0 002.24-.63l1.72 1.73a1.002 1.002 0 001.639-.325 1 1 0 00-.219-1.095L20 17.57zM18 17a2.37 2.37 0 01-3.27 0 2.32 2.32 0 010-3.27 2.31 2.31 0 013.944 1.635c0 .613-.242 1.2-.674 1.635zm1-14H5a3 3 0 00-3 3v9a3 3 0 003 3h4a1 1 0 000-2H5a1 1 0 01-1-1V9h16v1a1 1 0 002 0V6a3 3 0 00-3-3zm1 4H4V6a1 1 0 011-1h14a1 1 0 011 1v1zm-10 4H7a1 1 0 000 2h3a1 1 0 000-2z"/></svg>
            </div>
            <div class="flex-1">
                <h2 class="text-blue-darkest">Configure SEO Settings</h2>
                <p>Here you can enter some defaults, but you can also override for each entry</p>
            </div>
        </a>
        <a href="{{ cp_route('users.edit', auth()->user()->id()) }}" class="flex items-start p-2 rounded-md hover:bg-blue-100 group">
            <div class="w-12 h-12 p-1 mr-3 text-blue-900 bg-blue-100 rounded-full group-hover:bg-blue-200">
              <svg xmlns="http://www.w3.org/2000/svg" class="text-blue-900 fill-current" fill="none" viewBox="0 0 24 24"><defs/><path d="M12 2a10 10 0 00-7.35 16.76 10.001 10.001 0 0014.7 0A9.999 9.999 0 0012 2zm0 18a8 8 0 01-5.55-2.25 6 6 0 0111.1 0A8 8 0 0112 20zm-2-10a2 2 0 114 0 2 2 0 01-4 0zm8.91 6A8 8 0 0015 12.62a4 4 0 10-6 0A8 8 0 005.09 16 7.92 7.92 0 014 12a8 8 0 1116 0 7.92 7.92 0 01-1.09 4z"/></svg>
            </div>
            <div class="flex-1">
                <h2 class="text-blue-darkest">Setup Author</h2>
                <p>Configure your author profile</p>
            </div>
        </a>
        <a href="{{ cp_route('collections.entries.create', ['pages', Statamic\Facades\Site::default()->handle()]) }}" class="flex items-start p-2 rounded-md hover:bg-blue-100 group">
            <div class="w-12 h-12 p-1 mr-3 text-blue-900 bg-blue-100 rounded-full group-hover:bg-blue-200">
                <svg xmlns="http://www.w3.org/2000/svg" class="text-blue-900 fill-current" fill="none" viewBox="0 0 24 24"><defs/><path d="M21 2H9a1 1 0 00-1 1v4H6a1 1 0 00-1 1v4H3a1 1 0 00-1 1v8a1 1 0 001 1h8a1 1 0 001-1v-2h4a1 1 0 001-1v-2h4a1 1 0 001-1V3a1 1 0 00-1-1zM10 20H4v-6h6v6zm5-3h-3v-4a1 1 0 00-1-1H7V9h8v8zm5-3h-3V8a1 1 0 00-1-1h-6V4h10v10z"/></svg>
            </div>
            <div class="flex-1">
                    @if($pages > 0)
                    <h2 class="text-blue-darkest">Add a new page</h2>
                    <p>Create a new page using the page builder</p>
                    @else
                    <h2 class="text-blue-darkest">Create your first page</h2>
                    <p>Create your first page using the page builder</p>
                    @endif
            </div>
        </a>

        <a href="{{ cp_route('collections.entries.create', ['posts', Statamic\Facades\Site::default()->handle()]) }}" class="flex items-start p-2 rounded-md hover:bg-blue-100 group">
            <div class="w-12 h-12 p-1 mr-3 text-blue-900 bg-blue-100 rounded-full group-hover:bg-blue-200">
                <svg xmlns="http://www.w3.org/2000/svg" class="text-blue-900 fill-current" fill="none" viewBox="0 0 24 24"><defs/><path d="M10 4h11a1 1 0 100-2H10a1 1 0 000 2zm11 16H3a1 1 0 000 2h18a1 1 0 000-2zm0-14H3a1 1 0 000 2h18a1 1 0 100-2zm0 10H11a1 1 0 000 2h10a1 1 0 000-2zm0-6H3a1 1 0 000 2h18a1 1 0 000-2z"/></svg>
            </div>
            <div class="flex-1">
                    @if($posts > 0)
                    <h2 class="text-blue-darkest">Add a new post</h2>
                    <p>Click here to add a new post.</p>
                    @else
                    <h2 class="text-blue-darkest">Create your first post</h2>
                    <p>Click here to add a new post.</p>
                    @endif
            </div>
        </a>
    </div>
</div>

<div class="max-w-md mx-auto mt-2 text-center">
    <p class="text-xs">If you have finished all these steps, you can comment this widget from the <span class="p-0.5 text-blue-900 bg-blue-100 rounded">config/statamic/cp.php</span> and enable other widgets.</p>
</div>
