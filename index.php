<?php
	include_once("header-main.php");
?>

<body class="nk-body bg-white has-sidebar dark-mode">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
           <?php
				include_once("sidebar.php");
			?>
            <!-- wrap @s -->
            <div class="nk-wrap ">
				<?php
					include_once("header.php");
				?>
                <!-- content @s -->
                <div class="nk-content nk-content-fluid">
                    <div class="container-xl wide-lg">
                        <div class="nk-content-body">
                            
                        </div>
                    </div>
                </div>
                <!-- content @e -->
                <?php
					include_once("footer.php");
				?>
            </div>
            <!-- wrap @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
</body>
</html>