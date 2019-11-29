<aside class="menu">
    <p class="menu-label">
        <span class="fa fa-file"></span> Pages
    </p>
    <ul class="menu-list">
        @foreach ($pages as $page)
            <li><a{!! (Request::is('admin/pages/' . $page->name) ? ' class="is-active"' : '') !!} href="/admin/pages/{{ $page->name }}">{{ $page->displayName }}</a></li>
        @endforeach
    </ul>
    <p class="menu-label">
        <span class="fa fa-tools"></span> Tools
    </p>
    <ul class="menu-list">
        <li><a{!! (Request::is('admin/pages') ? ' class="is-active"' : '') !!} href="/admin/pages">Manage Pages</a></li>
    </ul>
</aside>