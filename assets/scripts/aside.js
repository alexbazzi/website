document.addEventListener('DOMContentLoaded', (event) => {
    var sidebarHtml = `
        <aside>
            <div class="sidebar-container">
            <div class="sidebar-title">Quick links</div>
                <nav id="nav"> 
                    <ul>
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a href="https://github.com/alexbazzi" target="_blank"><span class="fa-brands fa-github"></span>GitHub</a>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a href="https://linkedin.com/in/alexbazzi" target="_blank"><span class="fa-brands fa-linkedin"></span>LinkedIn</a>
                        </li>
                    </ul>
                    <a target='_blank' rel='noreferrer noopener'
                        href='mailto:xander@xbazzi.com'>
                    <img style="height: 90px; margin: 10px;" src="assets/img/gifs/email.gif">
                    </a>
                </nav>
            </div>

            <div class="sidebar-container">
                <div class="sidebar-title">Cyware RSS feed</div>
                <div id="rss-feed">Loading...</div>
            </div>
        </aside>
        `;

    // Insert the sidebar bar after the main element
    var targetElement = document.querySelector('main');
    if (targetElement) {
        targetElement.insertAdjacentHTML('afterend', sidebarHtml);

        // After the sidebar has loaded, fetch the RSS feed
        if (window.loadRSSFeed()) {
            window.loadRSSFeed();
        }
    }
});