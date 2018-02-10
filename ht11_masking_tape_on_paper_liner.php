       
  <?php include 'header-product.php'; ?>

           <!--    Right Main -->
            <div class="col-lg-8 liam">
                <img src="img/ht11_masking_tape_on_paper_liner_large.jpg" class="img-fluid table-photo">
                <div class="table-bar">
                                HT11 MASKING TAPE ON PAPER LINER (300 &deg;F 150 &deg;C) 
                </div>

                <div class="table-product-details"> 
                    <ul> 
                        <li>7 mil high temperature tape, rubber adhesive.</li>
                        <li>Painting, wet spray.</li>
                        <li>Hand-cut custom shapes for prototyping or small jobs.</li>
                        <li>Custom sizes available - please enquire!</li>                          
                    </ul>
                </div>
                <div>
                    <table>
                        <thead >
                            <th> Part Number</th>
                            <th> Size</th>
                            <th> Price / Roll</th>
                        </thead>   
                        <tbody>
                           <tr>
                            <?php
                               $link = mysqli_connect("sql5c25c.carrierzone.com", "argonusaco889229", "argon2018", "argon2018_argonusaco889229");

                                if(mysqli_connect_error()){
                                    die ("Connection failed!");
                                } 

                                $query = "SELECT * FROM  ht11_masking_tape_on_paper_liner";

                                if ($result = mysqli_query($link, $query)) {
                                    while($row =  mysqli_fetch_array($result)) {
                                        echo "<tr>";
                                        echo "<td>".$row[1]."</td>";
                                        echo "<td>".$row[2]."</td>";
                                        echo "<td>$".$row[4]."</td>";
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