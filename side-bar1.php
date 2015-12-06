<div class="row">
          <br>
            <div class="col s12 m4 l3 hide-on-med-and-down navleft"> <!-- Note that "m4 l3" was added -->
              <!-- Grey navigation panel

                    This content will be:
                3-columns-wide on large screens,
                4-columns-wide on medium screens,
                12-columns-wide on small screens  -->
                <div class="collection">
                 <a href="find-ngo.php" class="collection-item">Locate NGO/Volunteers<span class="badge"><?php echo NumberOfPeopleWhoAreHelping(); ?></span></a>
                 <a href="help-needed.php" class="collection-item">Help Needed<span class="badge"><?php echo NumberOfPeopleWhoWantHelp(); ?></span></a>
                 <a href="need-help.php"class="collection-item" >Need Help</a>
                 <a href="add-ngo.php" class="collection-item">Add NGO</a>
                 <a href="donate.php"class="collection-item" >Donate</a>
                  <a href="news.php"class="collection-item" >Follow the News</a>
                  <a href="livestatus.php" class="collection-item">Live Status</a>
                  <a href="safe.php" class="collection-item">Find Safe Place</a>
                
                 <a href="helpline.php" class="collection-item">Helpline<span class="badge"><?php echo  NumberOfHelplineContacts(); ?></span></a>
                 <a href="sos.php" class="collection-item">Chennai Flood Reliefs</a>
                 
                 <a href="heroes.php" class="collection-item">Heroes</a>     <!-- Dropdown Trigger -->
                 <a  class="collection-item" data-beloworigin="true" href="#!" ><span>Emergency<i class="material-icons right">arrow_drop_down</i></span></a>
                 <ul >
                       <li><a href="#!">Fire & rescue : <p>101</p></a></li>
                       <li class="divider"></li>
                       <li><a href="#!">Electricity : <p>1912</p></a></li>
                       <li class="divider"></li>
                       <li><a href="#!">District Emergency: <p>1077</p></a></li>
                       <li class="divider"></li>
                       <li><a href="#!">State Emergency:<p> 1070  </p></a></li>
                 </ul>
               </div>


            </div>