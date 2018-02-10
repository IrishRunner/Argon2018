       
  <?php include 'header-product.php'; ?>

           <!--    Right Main -->
            <div class="col-lg-8 liam">
                <img src="img/high_temperature_masking_tape_donuts_large.jpg" class="img-fluid table-photo">
                <div class="table-bar">
                                DNHT HIGH TEMPERATURE MASKING TAPE DONUTS (300 &deg;F / 150 &deg;C) 
                </div>

                <div class="table-product-details"> 
                    <ul> 
                        <li>7.3 Mil high temperature masking rectangles, rubber adhesive.</li>
                        <li>Donuts are on a non-slit back paper liner.</li>
                        <li>Painting, wet spray.</li>
                        <li>Custom sizes available - please enquire!</li>                           
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

                                $query = "SELECT * FROM  high_temperature_masking_tape_donuts";

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