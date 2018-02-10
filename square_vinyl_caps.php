       
  <?php include 'header-product.php'; ?>

           <!--    Right Main -->
            <div class="col-lg-8 liam">
                <img src="img/square_vinyl_caps_large.jpg" class="img-fluid table-photo">
                <div class="table-bar">
                                SQVC SQUARE VINYL CAPS (350 &deg;F / 177 &deg;C) 
                </div>

                <div class="table-product-details"> 
                    <ul> 
                        <li>Plating, painting, anodizing, general purpose protection.</li> 
                        <li>Masks square shaped tube ends.</li>
                        <li>Yellow color increases visibility.</li>                  
                    </ul>
                </div>
                <div>
                    <table>
                        <thead >
                            <th> Part Number</th>
                            <th> Square <br> Dimension</th>
                            <th> Length </th>
                            <th> Qty/ <br>Bag</th>
                            <th> Price / <br> Bag</th>
                        </thead>   
                        <tbody>
                           <tr>
                            <?php
                               $link = mysqli_connect("sql5c25c.carrierzone.com", "argonusaco889229", "argon2018", "argon2018_argonusaco889229");

                                if(mysqli_connect_error()){
                                    die ("Connection failed!");
                                } 

                                $query = "SELECT * FROM  square_vinyl_caps";

                                if ($result = mysqli_query($link, $query)) {
                                    while($row =  mysqli_fetch_array($result)) {
                                        echo "<tr>";
                                        echo "<td>".$row[1]."</td>";
                                        echo "<td>".$row[2]."</td>";
                                        echo "<td>".$row[3]."</td>";
                                        echo "<td>".$row[4]."</td>";
                                        echo "<td>$".$row[6]."</td>";
                                        echo "</tr>";
                                    }
                                }
                            ?>     
                           </tr>
                        </tbody>
                    </table> 
                       
                </div> <!-- End Table div -->
                                
            </div> <!--    End Right Main -->
    </div>
</div>
<!-- End Main Section / Wrapper -->


<?php include 'footer.php'; ?>