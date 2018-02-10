       
  <?php include 'header-product.php'; ?>

           <!--    Right Main -->
            <div class="col-lg-8 liam">
                <img src="img/blue_powder_coat_discs_large.jpg" class="img-fluid table-photo">
                <div class="table-bar">
                                HDBT HEAVY DUTY BLUE POWDER COATING DISCS (400 &deg;F / 204 &deg;C) 
                </div>

                <div class="table-product-details"> 
                    <ul> 
                        <li>5 mil blue polyester discs and 1.5 mil silicone adhesive.</li>
                        <li>Heavy duty polyester discs - when a thicker material is required for powder coating</li>                             
                    </ul>
                </div>
                <div>
                    <table>
                        <thead >
                            <th> Part Number</th>
                            <th> Diameter</th>
                            <th> Qty / Roll</th>
                            <th> Price / Roll </th>
                        </thead>   
                        <tbody>
                           <tr>
                            <?php
                               $link = mysqli_connect("sql5c25c.carrierzone.com", "argonusaco889229", "argon2018", "argon2018_argonusaco889229");

                                if(mysqli_connect_error()){
                                    die ("Connection failed!");
                                } 

                                $query = "SELECT * FROM  5mil_blue_powder_coating_discs";

                                if ($result = mysqli_query($link, $query)) {
                                    while($row =  mysqli_fetch_array($result)) {
                                        echo "<tr>";
                                        echo "<td>".$row[1]."</td>";
                                        echo "<td>".$row[2]."</td>";
                                        echo "<td>".$row[3]."</td>";
                                        echo "<td>$".$row[5]."</td>";
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