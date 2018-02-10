       
  <?php include 'header-product.php'; ?>

           <!--    Right Main -->
            <div class="col-lg-8 liam">
                <img src="img/circuit_board_plating_discs_large.jpg" class="img-fluid table-photo">
                <div class="table-bar">
                                CBD CIRCUIT BOARD PLATING DISCS 
                </div>

                <div class="table-product-details"> 
                    <ul> 
                        <li>Protects circuit boards during electroplating.</li>
                        <li>Polyester tape with silicone and rubber blend adhesive.</li>
                        <li>Handles temperatures up to 170&deg;F (77&deg;C).</li>
                    </ul>
                </div>
                <div>
                    <table>
                        <thead >
                            <th> Part Number <br> (Discs)</th>
                            <th> Diameter</th>
                            <th> Qty / Roll</th>
                            <th> Price / Roll <br> (1 Roll) </th>
                            <th> Price / Roll <br> (10 Rolls</th>
                        </thead>   
                        <tbody>
                           <tr>
                            <?php
                               $link = mysqli_connect("sql5c25c.carrierzone.com", "argonusaco889229", "argon2018", "argon2018_argonusaco889229");

                                if(mysqli_connect_error()){
                                    die ("Connection failed!");
                                } 

                                $query = "SELECT * FROM  circuit_board_plating_discsa";

                                if ($result = mysqli_query($link, $query)) {
                                    while($row =  mysqli_fetch_array($result)) {
                                        echo "<tr>";
                                        echo "<td>".$row[1]."</td>";
                                        echo "<td>".$row[2]."</td>";
                                        echo "<td>".$row[3]."</td>";
                                        echo "<td>$".$row[6]."</td>";
                                        echo "<td>$".$row[7]."</td>";
                                        echo "</tr>";
                                    }
                                }
                            ?>     
                           </tr>
                        </tbody>
                    </table> 
                       
                </div> <!-- End Table div -->
                <div class="table-bar">
                                CIRCUIT BOARD PLATING TAPE 
                </div>
                <div>
                    <table>
                        <thead >
                            <th> Part Number <br> (Tape)</th>
                            <th> Size</th>
                            <th> Qty / Roll</th>
                            <th> Price / Roll <br> (1 Roll) </th>
                            <th> Price / Roll <br> (10 Rolls</th>
                        </thead>   
                        <tbody>
                           <tr>
                            <?php
                               $link = mysqli_connect("sql5c25c.carrierzone.com", "argonusaco889229", "argon2018", "argon2018_argonusaco889229");

                                if(mysqli_connect_error()){
                                    die ("Connection failed!");
                                } 

                                $query = "SELECT * FROM  circuit_board_plating_discsb";

                                if ($result = mysqli_query($link, $query)) {
                                    while($row =  mysqli_fetch_array($result)) {
                                        echo "<tr>";
                                        echo "<td>".$row[1]."</td>";
                                        echo "<td>".$row[2]."</td>";
                                        echo "<td>".$row[3]."</td>";
                                        echo "<td>$".$row[6]."</td>";
                                        echo "<td>$".$row[7]."</td>";
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