<button class="w3-button w3-teal w3-xlarge w3-right" onclick="openRightMenu()"><i class="spin fa fa-cog" aria-hidden="true"></i></button>
        <div class="w3-sidebar w3-bar-block w3-card-2 w3-animate-right" style="display:none;right:0;" id="rightMenu">
            <button onclick="closeRightMenu()" class="w3-bar-item w3-button w3-large">Close &times;</button>
            <ul id="styleOptions" title="switch styling">
                <li>
                    <a href="javascript: void(0)" class="cl-box blue" data-theme="colors/blue-style"></a>
                </li>
                <li>
                    <a href="javascript: void(0)" class="cl-box red" data-theme="colors/red-style"></a>
                </li>
                <li>
                    <a href="javascript: void(0)" class="cl-box purple" data-theme="colors/purple-style"></a>
                </li>
                <li>
                    <a href="javascript: void(0)" class="cl-box green" data-theme="colors/green-style"></a>
                </li>
                <li>
                    <a href="javascript: void(0)" class="cl-box dark-red" data-theme="colors/dark-red-style"></a>
                </li>
                <li>
                    <a href="javascript: void(0)" class="cl-box orange" data-theme="colors/orange-style"></a>
                </li>
                <li>
                    <a href="javascript: void(0)" class="cl-box sea-blue" data-theme="colors/sea-blue-style "></a>
                </li>
                <li>
                    <a href="javascript: void(0)" class="cl-box pink" data-theme="colors/pink-style"></a>
                </li>
            </ul>
            <script type="text/javascript">
            $(document).ready(function() {
                $('#styleOptions').styleSwitcher();
            });
        </script>
        
</div>

            
        <!-- Scripts==================================================-->
        <script type="text/javascript" src="assets\plugins\js\jquery.min.js"></script>
        <script type="text/javascript" src="assets\plugins\js\viewportchecker.js"></script>
        <script type="text/javascript" src="assets\plugins\js\bootstrap.min.js"></script>
        <script type="text/javascript" src="assets\plugins\js\bootsnav.js"></script>
        <script type="text/javascript" src="assets\plugins\js\select2.min.js"></script>
        <script type="text/javascript" src="assets\plugins\js\wysihtml5-0.3.0.js"></script>
        <script type="text/javascript" src="assets\plugins\js\bootstrap-wysihtml5.js"></script>
        <script type="text/javascript" src="assets\plugins\js\datedropper.min.js"></script>
        <script type="text/javascript" src="assets\plugins\js\dropzone.js"></script>
        <script type="text/javascript" src="assets\plugins\js\loader.js"></script>
        <script type="text/javascript" src="assets\plugins\js\owl.carousel.min.js"></script>
        <script type="text/javascript" src="assets\plugins\js\slick.min.js"></script>
        <script type="text/javascript" src="assets\plugins\js\gmap3.min.js"></script>
        <script type="text/javascript" src="assets\plugins\js\jquery.easy-autocomplete.min.js"></script>
        <script src="assets\js\custom.js"></script>
        <script src="assets\js\jQuery.style.switcher.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('#styleOptions').styleSwitcher();
            });
        </script>
        <script>
            function openRightMenu() {
                document.getElementById("rightMenu").style.display = "block";
            }

            function closeRightMenu() {
                document.getElementById("rightMenu").style.display = "none";
            }
        </script>