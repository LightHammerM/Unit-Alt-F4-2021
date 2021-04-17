/* When the user clicks on the button, 
        toggle between hiding and showing the dropdown content */
        function myFunction() {
          document.getElementById("myDropdownUzivatel").classList.toggle("showUzivatel");
        }
        
        // Close the dropdown if the user clicks outside of it
        window.onclick = function(event) {
          if (!event.target.matches('.dropbtnUzivatel')) {
            var dropdowns = document.getElementsByClassName("dropdown-contentUzivatel");
            var i;
            for (i = 0; i < dropdowns.length; i++) {
              var openDropdown = dropdowns[i];
              if (openDropdown.classList.contains('showUzivatel')) {
                openDropdown.classList.remove('showUzivatel');
              }
            }
          }
        }