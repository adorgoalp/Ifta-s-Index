<div style="text-align: center">
    <button href="#menu-toggle" class="btn btn-black" id="menu-toggle">Toggle Menu</button>
</div>
</div>
</div>
</div>
<script>
    $("#menu-toggle").click(function (e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>
</body>
</html>

