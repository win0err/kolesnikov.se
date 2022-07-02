<footer class="footer _no-visited">
    <div class="footer__left">
        <img src="/assets/cat.gif" alt="White cat">
    </div>

    <div class="footer__right">
        <div>
            <img src="/assets/buttons/linux-powered.gif" alt="Linux Powered">
            <img src="/assets/buttons/800x600.gif" alt="Best viewed with 800×600 screens" />
            <img src="/assets/buttons/nocookie.gif" alt="This site is cookie-free" />
            <img src="/assets/buttons/internetprivacy.gif" id="easter-egg" alt="Internet Privacy">
            <a href="https://github.com/win0err/ohmystats" target="_blank" rel="nofollow"><img src="/assets/buttons/ohmystats.png" alt="Visitors & Views Count" title="Visitors & Views Count" /></a>
            <a href="https://wiby.me/about/" target="_blank" rel="nofollow"><img src="/assets/buttons/wiby.gif" alt="Wiby — Old Web Search Engine" /></a>
            <a href="https://duckduckgo.com/" target="_blank" rel="nofollow"><img src="/assets/buttons/duckduckgo.png" alt="DuckDuckGo" /></a>
        </div>

        <div>
            This website is coded with valid vanilla
            <a href="https://validator.w3.org/check?uri=referer"
                target="_blank"
                referrerpolicy="unsafe-url"
                rel="nofollow">HTML</a>
            &
            <a href="https://jigsaw.w3.org/css-validator/validator?uri=https%3A%2F%2Fkolesnikov.se%2Fstyles.css"
                target="_blank"
                rel="nofollow">CSS</a>.
            This website is under construction.
            Last Update: <?php echo date("D, j F Y", filemtime(get_included_files()[0])); ?>
        </div>
    </div>
</footer>

<script>
    window.addEventListener('DOMContentLoaded', () => {
        const newGifSrc = '/assets/buttons/kate.gif'
        const targetChance = 98

        if (Math.random() * 100 < targetChance) return

        document.querySelector('#easter-egg')
            .setAttribute('src', newGifSrc)
    })
</script>