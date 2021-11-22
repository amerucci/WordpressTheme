
    <footer>
        <div class="container flex">
            <div class="copyright"> <?php dynamic_sidebar('[copyright]') ?></div>
            <div class="author"> <?php dynamic_sidebar('[author]') ?></div>
        </div>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.js-scrollTo').on('click', function () { // Au clic sur un élément
                var section = $(this).attr('href'); // Section cible
                var speed = 750; // Durée de l'animation (en ms)
                $('html, body').animate({
                    scrollTop: $(section).offset().top
                }, speed); // Go
                return false;
            });
        });


        document.getElementById("burger-menu").addEventListener("click", (event) => {
            if (event.currentTarget.classList.contains("open")) {
                event.currentTarget.classList.remove("open");
                document.getElementById("menuresp").classList.remove("menurespopen");
              
            } else {
                event.currentTarget.classList.add("open");
                document.getElementById("menuresp").classList.add("menurespopen");
            }
        });
    </script>

</body>

</html>
