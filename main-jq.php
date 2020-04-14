<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        // Prepare the preview for profile picture
        $("#wizard-picture").change(function() {
            readURL(this);
        });
    });

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#wizardPicturePreview').attr('src', e.target.result).fadeIn('slow');
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    $(".o1").css("color","white");
            $(".o1").css("background-color","#527FFF");
    $(document).ready(function() {
        $('.pagination a').click(function() {
           // $(this).css("color","red");
         
            var dest = $(this).attr('href');
            var res = dest.substring(2, dest.length);
            var wp = sessionStorage.getItem("wp");
            if (res == 0) {
                if (wp != 1) {
                    res = wp - 1;
                } else return false;


            }
            if (res == -1) {
                if (<?php echo $_SESSION['allpages']; ?> + 1 != wp) {
                    res = wp / 1 + 1;
                } else return false;


            }
            // alert(wp+" "+res+" "+( <?php echo $_SESSION['allpages']; ?>));
            var active=".o"+res;
            var nonactive=".o"+wp;
          //  alert(active);
        
           
            $(nonactive).css("color","#527FFF");
            $(nonactive).css("background-color","white");
         
             $(active).css("color","white");
            $(active).css("background-color","#527FFF");
            

            sessionStorage.setItem("wp", res);
            var o = "o" + res;
            // alert(dest+" "+res+" "+  <?php echo $_SESSION['allpages']; ?>);
            for (i = 1; i <= (<?php echo $_SESSION['allpages']; ?> + 1); i++) {
                var x = ".p" + i;

                if (res != i) {
                    $(x).css("display", "none");

                } else {
                    $(x).css("display", "block");

                }
            }


            return false;
        });
    });
    $(document).ready(function() {
        $('.reg ').click(function() {
            var dest = $(this).attr('id');
            var res = dest.substring(1, dest.length);
            window.open('http://localhost/mshuari.ps/reg.php?id='+res,'blank');
            return false;
        });
    });
</script>