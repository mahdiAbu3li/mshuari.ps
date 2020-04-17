<div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                        <div class="col-md-4">
                         <img src="profilepic.png" class="card-img" alt="..." />
                       </div>
                     <div class="col-md-8">
                     <div class="card-body">
                       <h5 class="card-title">';
                    echo $row['first_name'] . "  " . $row['last_name'] . '</h5>
                       <p class="card-text">';
                    echo "From : " . $row['from1'] . "<br>" . "To : " . $row['to1'] . "<br>"
                      . "   Address : " . $row['address1'] . " <br>At :  " . $row['date1'] . " " . substr($row['time1'], 0, 5) . "<br>  Price : " . $row['price'] . "  <br>Phone : " . $row['phone'];


                    echo '</p>

                        <button class="btn btn-success">Get in the car</button>

                       <p class="card-text">
                         <small class="text-muted"
                           >Last updated 3 mins ago</small
                         >
                       </p>
                      
                     </div>
                   </div>
                   </div>
            </div>








            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the cards content.</p>
                      <a href="#" class="card-link">Card link</a>
                      <a href="#" class="card-link">Another link</a>