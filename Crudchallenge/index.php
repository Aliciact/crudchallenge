<?php
       
       include('connection.php');
       include('header.php');
       
        ?>  

<header>
<img src="https://www.wildcodeschool.com/assets/logo_main-e4f3f744c8e717f1b7df3858dce55a86c63d4766d5d9a7f454250145f097c2fe.png" alt="Wild Code School logo" />
    <h1>Les Argonautes</h1>
</header>
<body>

       
    <div id="wrapper">

    
          <h2>Ajouter une(e) Argonaute</h2>
             

                <form role="form" method="post" action="transac.php?action=add">
                    
                    <div class="form-group">
                    <input class="form-control" placeholder="Charalampos" name="firstname">
                    <br>
                    <button type="submit" class="btn btn-default">Envoyer</button>
                    </div> 


              </form>  
              
          
                                
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>Membres de l'équipage</th>
                                    </tr>
                                </thead>
                                <tbody>
                              
                                 <?php                  
                $query = 'SELECT * FROM people';
                    $result = mysqli_query($db, $query) or die (mysqli_error($db));
                  
                        while ($row = mysqli_fetch_assoc($result)) {
                       echo '<tr>';
                            echo '<td>'. $row['first_name'].'</td>';
                            echo '</tr> ';
                }
            ?> 
                                  
                                </tbody>
                                
                            </table>
                        </div>
                    </div>
                </div>
                
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

</body>
<div class= "footer">
<footer>
  <p>Réalisé par Jason en Anthestérion de l'an 515 avant JC</p>
</footer>
</div>
</html>



