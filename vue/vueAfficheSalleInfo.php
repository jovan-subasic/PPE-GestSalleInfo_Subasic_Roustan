
<div class="content">
        <div class="container-fluid"> 
            <div class="card">
                <div class="header"><!---------------------------------------------Petit Materiel----------------------------------------------------------->
                    <h4 class="title">Petit Matériel
                        <a style = "margin-left : 72%"; href="collaborateur_materiel-liste-dormance.php">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-journal-text" viewBox="0 0 16 16">
                                <path d="M5 10.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
                                <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/>
                                <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>
                            </svg>
                            Petits Matériels en dormance
                        </a>
                    </h4>
                </div>    
                <div class="toggle">
                         
                        <div class="content">
                            <table id="datatables_materiel" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%; text-align: center;"> 
                                <thead>
                                    <tr>
                                        <th hidden="" class="text-center">ID</th>
                                        <th class="text-center">Code HK3</th>
                                        <th class="text-center">N°SÉRIE / IMMAT</th>
                                        <th class="text-center">Type</th>
                                        <th class="text-center">Site</th>
                                        <th class="text-center">Chef d'équipe</th>
                                        <th class="text-center">Contrôle</th>
                                        <th class="text-center">Service</th>
                                        <th class="text-right">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    foreach ($salleinfos as $salleinfo)
                                    {
                                ?> 
                                <tr>
                                    <td hidden="" class="edit"><?php echo $salleinfo->getId() ?></td>
                                    <td class="edit"><?php echo $salleinfo->getNSalle() ?></td>
                                    <td class="edit"><?php echo $salleinfo->getNomSalle() ?></td>
                                    <td class="edit"><?php echo $salleinfo->getNbPoste() ?></td>
                                    <td class="edit"><?php echo $salleinfo->getIndIP() ?></td>
                                    <td class="edit"><?php echo $salleinfo->getRoom_name() ?></td>
                                    <td class="edit"><?php echo $salleinfo->getSort_key() ?></td>
                                    <td class="edit"><?php echo $salleinfo->getDescription() ?></td>
                                    <td class="edit"><?php echo $salleinfo->getCapacity() ?></td>
                                    
                                    
                                    <td class="text-right">
                                        <a href="#" class="btn-link btn-danger remove"><i class="fa fa-times"></i></a>
                                    </td>
                                    <?php } ?>
                                </tr>
                                </tbody>
                            </table>
                        </div>   
                    
                </div>                                 
            </div>
        </div>          
    </div>      
