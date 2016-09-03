<script src="js/jQuery.js"></script>
<div id="sidebar-wrapper">
    <ul class="sidebar-nav" id="navigation">
        <li class="fill" style="text-indent: 0px;" >
            <img src="img/Ifta-site-icon.jpg"  style="max-height: 100%;max-width: 100%" alt="ifta">
        </li>
        <li class="sidebar-brand" >
            <a href="index.php">
                Ifta
            </a>
        </li>
        <li>
            <a href="reume.php">Resume</a>
        </li>
        <li>
            <a href="portfolio.php">Portfolio</a>
        </li>
        <li>
            <a href="links.php">Links</a>
        </li> 
    </ul>
</div>
<script type="text/javascript">
    $(document).ready(function () {
        var url = window.location;
        $('ul.sidebar-nav a[href="' + url + '"]').parent().addClass('active');
        $('ul.sidebar-nav a').filter(function () {
            return this.href == url;
        }).parent().addClass('active');
    });
</script> 