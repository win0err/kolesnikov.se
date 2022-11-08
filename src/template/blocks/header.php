<?php

$file = pathinfo(get_included_files()[0], PATHINFO_FILENAME);

$pages = [
    'index' => 'Home',
    'blog' => 'Blog',
    'photography' => 'Photography',
    'guestbook' => 'Guestbook',
    'about' => 'About',
    'contacts' => 'Contacts',
];

$print_menu = fn(array $items): string => array_reduce(
    array_keys($items),
    fn ($result, $slug) => $result . (
        $file === $slug
            ? '<li>' . $items[$slug] . '</li>'
            : '<li><a href="/' . ($slug !== 'index' ? $slug . '.html' : '') . '">' . $items[$slug] . '</a></li>'
    ),
    '',
);

if ($file === 'index') {
    unset($pages['index']);

    echo <<< HEADER
    <header class="header header--big">
        <img class="header__avatar" src="/assets/avatar.jpg" alt="Sergei Kolesnikov" />
        <div>
            <h1 class="header__title">Welcome to Sergei&nbsp;Kolesnikov's personal home page!</h1>
            <nav class="header__menu"><ul>{$print_menu($pages)}</ul></nav>
        </div>
    </header>
    HEADER;
} else {
    echo <<< HEADER
    <header class="header header--small">
        <span class="header__title">Sergei Kolesnikov's Web Corner</span>
        <nav class="header__menu"><ul>{$print_menu($pages)}</ul></nav>
    </header>
    HEADER;
}
