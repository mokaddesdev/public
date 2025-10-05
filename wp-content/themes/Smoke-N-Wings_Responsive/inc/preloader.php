<?php 
/**
 * Preloader Function
 */

function smokeWings_Preloader() { 
    if(!is_admin() &&  $GLOBALS["pagenow"] !== "wp-login.php" ) { 
	
        $delay = 1;	
        $loader = 'http://localhost:10008/wp-content/uploads/2025/10/ripples.svg';
        $overlayColor = '#FFF4EE';	
	
        echo '
        <div class="Preloader"><img src="'.$loader.'" alt="loading" style="height: 150px;"></div>

        <style>
        .Preloader {
            position: fixed;
            inset: 0;
            background-color: '.$overlayColor.';
            z-index: 99999;
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 1;
            transition: opacity 0.6s ease;
        }
        .Preloader.fade-out {
            opacity: 0;
            pointer-events: none;
        }
        </style>

        <script>
        document.body.style.overflow = "hidden";
        document.addEventListener("DOMContentLoaded", () => {
            setTimeout(() => {
                const preloader = document.querySelector(".Preloader");
                preloader.classList.add("fade-out");
                setTimeout(() => {
                    preloader.remove();
                    document.body.style.overflow = "visible";
                }, 600);
            }, '.$delay.' * 1000);
        });
        </script>';
    }
}
add_action( "wp_footer", "smokeWings_Preloader" );