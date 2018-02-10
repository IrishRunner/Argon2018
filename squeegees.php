       
  <?php include 'header-product.php'; ?>

           <!--    Right Main -->
            <div class="col-lg-8 liam">
                <img src="img/squeegee_large1.jpg" class="img-fluid table-photo">
                <div class="table-bar">
                                SQUEEGEES / HAND APPLICATORS 
                </div>

                <div class="table-product-details"> 
                    <ul> 
                        <ul> 
                            <li>This inexpensive, resuable squeegee is both flexible and durable.</li>
                            <li>The squeegee is a great way to smooth on tape during masking.</li>
                            <li>Sold in blue (flexible) or gold (stiffer).</li> 
                            <li>Durable, vinyl material</li>   
                        </ul> 
                    </ul>
                </div>
                <div>
                    <table>
                        <thead >
                            <th> Part Number</th>
                            <th> Color</th>
                            <th> Price / Each</th>
                            <th> Price / Each<br>(Box of 25 pcs.)</th>
                        </thead>   
                        <tbody>
                           <tr>
                            <?php
                               $link = mysqli_connect("sql5c25c.carrierzone.com", "argonusaco889229", "argon2018", "argon2018_argonusaco889229");

                                if(mysqli_connect_error()){
                                    die ("Connection failed!");
                                } 

                                $query = "SELECT * FROM  squeegees";

                                if ($result = mysqli_query($link, $query)) {
                                    while($row =  mysqli_fetch_array($result)) {
                                        echo "<tr>";
                                        echo "<td>".$row[1]."</td>";
                                        echo "<td>".$row[2]."</td>";
                                        echo "<td>$".$row[5]."</td>";
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