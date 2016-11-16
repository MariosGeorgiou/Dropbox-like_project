/* JS logo change onScroll starts here */
            window.onscroll = function() {myFunction()};
            function myFunction() {
                if (document.body.scrollTop > 250 || document.documentElement.scrollTop > 250) {
                    document.getElementById("logochange").src="images/onlylogo.png";
                }
                else if (document.body.scrollTop < 250 || document.documentElement.scrollTop < 250){
                    document.getElementById("logochange").src="images/LogoV.png";
                }
            }
/* JS logo change onScroll ends here */