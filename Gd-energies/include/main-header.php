<div class="bcure-mainheader-full">
    <div class="bcure-mainheader">
        <div class="bcure-header-logo">
            <a href="index.php">
                <img src="img/to-home_en.png">
            </a>
        </div>
        <div class="bcure-header-logo-mobile">
            <a href="index.php">
                <img src="img/logo.png">
            </a>
        </div>
        <div class="header-language">
            <div class="dropdown">
                <button onclick="myFunction()" class="dropbtn"><i class="fas fa-caret-down"></i>&nbsp;&nbsp;&nbsp; Change Language</button>
                <div id="myDropdown" class="dropdown-content">
                    <!-- <a href="#">
                        <img src="img/israel.png">&nbsp;&nbsp;&nbsp;&nbsp; עברית</a> -->
                    <a href="#">
                        <img src="img/usa.png">&nbsp;&nbsp;&nbsp;&nbsp; English</a>
                    <!-- <a href="#">
                        <img src="img/rus.png">&nbsp;&nbsp;&nbsp;&nbsp; Русский</a> -->
                </div>
            </div>
        </div>
        <script>
            /* When the user clicks on the button, 
            toggle between hiding and showing the dropdown content */
            function myFunction() {
                document.getElementById("myDropdown").classList.toggle("show");
            }
            
            // Close the dropdown if the user clicks outside of it
            window.onclick = function(event) {
                if (!event.target.matches('.dropbtn')) {
            
                var dropdowns = document.getElementsByClassName("dropdown-content");
                var i;
                for (i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (openDropdown.classList.contains('show')) {
                    openDropdown.classList.remove('show');
                    }
                }
                }
            }
        </script>
        <div class="header-social">
            <a href="https://www.facebook.com/BCureLaserUK/"><i class="fab fa-facebook-f"></i></a>
            <!-- <a href="https://www.linkedin.com/company/2897909"><i class="fab fa-linkedin-in"></i></a> -->
        </div>
    </div>
</div>