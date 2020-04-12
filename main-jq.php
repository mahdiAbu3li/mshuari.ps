
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
$(document).ready(function(){
    // Prepare the preview for profile picture
        $("#wizard-picture").change(function(){
            readURL(this);
        });
    });
    
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
    
            reader.onload = function (e) {
                $('#wizardPicturePreview').attr('src', e.target.result).fadeIn('slow');
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    $(document).ready(function() {
        $('.pagination a').click(function() {
            var o="o"+res;
             var dest = $(this).attr('href');
            var res = dest.substring(2, dest.length);
            var wp= sessionStorage.getItem("wp");
         if(res==0)
         {
             if(  wp!=1)
             {
                 res=wp-1;
             }
             else return false;
          
             
         }
         if(res==-1)
         {
             if(   <?php echo $_SESSION['allpages'] ;?>+1!= wp)
             {
                res=wp/1+1;
             }
             else return false;
            
             
         }
        // alert(wp+" "+res+" "+( <?php echo $_SESSION['allpages'];?>));
         
         sessionStorage.setItem("wp", res);
         var o="o"+res;
       // alert(dest+" "+res+" "+  <?php echo $_SESSION['allpages'] ;?>);
           for( i=1;i<= (<?php echo $_SESSION['allpages'] ;?>+1);i++)
          {    
             var x=".p"+i;
            
              if(res!=i)
             {  $(x).css("display","none"); 
                
            }
               else 
               { $(x).css("display","block"); 

               }
          }
          alert(o);
      
         return false;
        });
      });
    
</script>
 