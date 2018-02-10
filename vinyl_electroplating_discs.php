       
  <?php include 'header-product.php'; ?>

           <!--    Right Main -->
            <div class="col-lg-8 liam">
                <img src="img/vinyl_electroplating_discs_large.jpg" class="img-fluid table-photo">
                <div class="table-bar">
                                EPV ELECTROPLATING VINYL DISCS (170 &deg;F / 77 &deg;C) 
                </div>

                <div class="table-product-details"> 
                    <ul> 
                        <li>7.1 mil total thickness, rubber adhesive.</li>
                        <li>Discs are on a slit back paper liner for easy removal.</li>
                        <li>Electroplating, anodizing.</li>
                        <li>Custom sizes available - please enquire!</li>                        
                    </ul>
                </div>
                <div>
                    <table>
                        <thead >
                            <th> Part Number</th>
                            <th> Size</th>
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

                                $query = "SELECT * FROM  vinyl_electroplating_discs";

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