
<table border='2'>
                          
                                <tr>
                                <th >id</th>
                                <th >username</th>
                                <th >password</th>
                                </tr>

                        
                                <?php
                                 $connection = mysqli_connect("localhost", "root", "","ecommerce",3306);

                                 $sql = "select * from user";
                                 $run = mysqli_query($connection,$sql);

                                 $id= 1;
                                 while($row = mysqli_fetch_array($run) )
                                 {
                                    $uid = $row['id'];
                                    $name= $row['name'];
                                    $password = $row['password'];
                            
                                ?>
                                <tr>
                                    <td><?php echo $uid ?></td>
                                    <td><?php echo $name ?></td>
                                    <td><?php echo $password ?></td>
                            
                                    <td>
                                        <button ><a href="Edit.php?edit=<?php echo $uid ?>">Edit</a></button> &nbsp;
                                        <button ><a href="delete.php?del=<?php echo $uid ?>">Delete</a></button>
                                    </td>
                                </tr>
                                 <?php $id++; } ?>
                       
                        </table>