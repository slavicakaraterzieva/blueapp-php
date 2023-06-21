 <?php?>
 <!--the job card-->
          <div class="col-md-3 col-sm-1 col-sm-6 col-6 col-auto advertisement" id="advertisement"> 
            <div class="advertisement-side advertisement-side--front">
              <div class="advertisement_picture">
              <?php 
                $post_featured_img=trim($p->post_featured_img);
                //print_r($post_featured_img);
                //echo $image_num= $img->getPostImages($post_featured_img);
                $post_featured_pieces=$img->getAllImages($post_featured_img);
                
                ?> 
                <?php
                if($post_featured_img == ""):?>
                 <img src="../../flexapp/img/posts/work.jpg" alt="house">
                
                <?php else:?>
                <img src="../../flexapp/img/posts/<?php echo $post_featured_pieces[0]?>" alt="work">
                   
                <?php endif?>
                 
              </div>
              <h4 class="advertisement_heading">
                  <span class="advertisement-heading-span advertisement-heading-span--3">
                    <?php if(isset($p->post_title)){echo "$p->post_title";}?> </span>
              </h4> 
  
              <div class="advertisement-specific-details">
                  
                  <!-- end of svg icons -->
  <div class="advertisement-address">
      <svg>
          <use xlink:href="svg/symbol-defs.svg#icon-map"></use>
      </svg>
      <span><?php if(isset($p->full_address)){echo "$p->full_address";}?></span>
  </div>
  <!-- end of address -->
              </div>
              <!-- end of specific details -->
  
           <div class="advertisement-description">
           <p><?php if(isset($p->post_content)){echo "$p->post_content";}?></p>
           
           <!-- end of description-->
           <div class="advertisement-type">
               <p id="price"><span>salary $</span><?php if(isset($p->content_price)){echo "$p->content_price";}?></p></p>
           </div>
           <!-- end of type -->
          </div>
          <!-- end of description -->
          </div><!--end of front side-->
  
  <!--back side-->
  <div class="advertisement-side advertisement-side--back advertisement-side--back-3" >
      <div class="advertisement-company advertisement-individual">
  <img class="advertisement-company--logo" src="../../flexapp/img/users/<?php if(isset($getOwner->user_image)){echo $getOwner->user_image;}?>" alt="person">
  
  <div class="advertisement-company-details">
      <div class="advertisement-company-name">
          <span class="comp-individual-details">Company</span> <?php if(isset($getOwner->user_work)){echo "$getOwner->user_work";}?>
      </div>
  
      <div class="advertisement-company-date-posted">
          <span class="comp-individual-details">Date</span> <?php if(isset($p->created_at)){echo "$p->created_at";}?>
      </div>
  
      <div class="advertisement-company-author-name">
          <span class="comp-individual-details">Author</span> <?php if( ($getOwner->user_first_name !="" )&&($getOwner->user_last_name !="") ){
            echo $getOwner->user_first_name ." ". $getOwner->user_last_name;
        }
        else{ echo $getOwner->user_name;}
        ?>
      </div>
  
  </div><!--end of details-->
      </div><!--end of advertisement company-->
  
      <div class="advertisement-details">
          <ul>
              <li>Occupation <?php if (isset($getJobs->job_subcategory)) {echo $getJobs->job_subcategory ;}?></li>
              <li>Skills <?php if (isset($getJobs->occupation)) {echo $getJobs->occupation ;}?></li>
              <li>Per Hour $ <?php if (isset($getJobs->hourly_rate)) {echo $getJobs->hourly_rate ;}?></li>
          </ul>
      </div><!--end of feature-->

      <a href="<?php if(isset($getJobs->application_link)){echo $getJobs->application_link;}?>" class="advertisement_link btn-text" style="color:blue;margin-top:-2.5rem;cursor:pointer;">Submit Application</a>

  <div class="advertisement_cta">
      <div class="advertisement_prise-picture-box">
      <a href="../../postapp/index.php?pid=<?php if(isset($p->post_id)){echo $p->post_id;}?>" class="advertisement_link btn-text">Read More</a>
       
          <!-- <p class="advertisement_price-value">$4,500</p> -->
      </div>
  </div><!--end of cta-->
  
  <div class="advertisement_bottom-logo advertisement_bottom-logo-estate">
      <div class="advertisement_bottom-logo-photo">
        <!-- <img src="img/universal.jpg" alt="company logo"> -->
      </div>
  </div><!--end of bottom logo-->
  
  </div><!--end of back side-->
  
=======
     <?php?>
 <!--the job card-->
          <div class="col-md-3 col-sm-1 col-sm-6 col-6 col-auto advertisement" id="advertisement"> 
            <div class="advertisement-side advertisement-side--front">
              <div class="advertisement_picture">
              <?php 
                $post_featured_img=trim($p->post_featured_img);
                //print_r($post_featured_img);
                //echo $image_num= $img->getPostImages($post_featured_img);
                $post_featured_pieces=$img->getAllImages($post_featured_img);
                
                ?> 
                <?php
                if($post_featured_img == ""):?>
                 <img src="../../flexapp/img/posts/work.jpg" alt="house">
                
                <?php else:?>
                <img src="../../flexapp/img/posts/<?php echo $post_featured_pieces[0]?>" alt="work">
                   
                <?php endif?>
                 
              </div>
              <h4 class="advertisement_heading">
                  <span class="advertisement-heading-span advertisement-heading-span--3">
                    <?php if(isset($p->post_title)){echo "$p->post_title";}?> </span>
              </h4> 
  
              <div class="advertisement-specific-details">
                  
                  <!-- end of svg icons -->
  <div class="advertisement-address">
      <svg>
          <use xlink:href="svg/symbol-defs.svg#icon-map"></use>
      </svg>
      <span><?php if(isset($p->full_address)){echo "$p->full_address";}?></span>
  </div>
  <!-- end of address -->
              </div>
              <!-- end of specific details -->
  
           <div class="advertisement-description">
           <p><?php if(isset($p->post_content)){echo "$p->post_content";}?></p>
           
           <!-- end of description-->
           <div class="advertisement-type">
               <p id="price"><span>salary $</span><?php if(isset($p->content_price)){echo "$p->content_price";}?></p></p>
           </div>
           <!-- end of type -->
          </div>
          <!-- end of description -->
          </div><!--end of front side-->
  
  <!--back side-->
  <div class="advertisement-side advertisement-side--back advertisement-side--back-3" >
      <div class="advertisement-company advertisement-individual">
  <img class="advertisement-company--logo" src="../../flexapp/img/users/<?php if(isset($getOwner->user_image)){echo $getOwner->user_image;}?>" alt="person">
  
  <div class="advertisement-company-details">
      <div class="advertisement-company-name">
          <span class="comp-individual-details">Company</span> <?php if(isset($getOwner->user_work)){echo "$getOwner->user_work";}?>
      </div>
  
      <div class="advertisement-company-date-posted">
          <span class="comp-individual-details">Date</span> <?php if(isset($p->created_at)){echo "$p->created_at";}?>
      </div>
  
      <div class="advertisement-company-author-name">
          <span class="comp-individual-details">Author</span> <?php if( ($getOwner->user_first_name !="" )&&($getOwner->user_last_name !="") ){
            echo $getOwner->user_first_name ." ". $getOwner->user_last_name;
        }
        else{ echo $getOwner->user_name;}
        ?>
      </div>
  
  </div><!--end of details-->
      </div><!--end of advertisement company-->
  
      <div class="advertisement-details">
          <ul>
              <li>Occupation <?php if (isset($getJobs->job_subcategory)) {echo $getJobs->job_subcategory ;}?></li>
              <li>Skills <?php if (isset($getJobs->occupation)) {echo $getJobs->occupation ;}?></li>
              <li>Per Hour $ <?php if (isset($getJobs->hourly_rate)) {echo $getJobs->hourly_rate ;}?></li>
          </ul>
      </div><!--end of feature-->

      <a href="<?php if(isset($getJobs->application_link)){echo $getJobs->application_link;}?>" class="advertisement_link btn-text" style="color:blue;margin-top:-2.5rem;cursor:pointer;">Submit Application</a>

  <div class="advertisement_cta">
      <div class="advertisement_prise-picture-box">
      <a href="../../postapp/index.php?pid=<?php if(isset($p->post_id)){echo $p->post_id;}?>" class="advertisement_link btn-text">Read More</a>
       
          <!-- <p class="advertisement_price-value">$4,500</p> -->
      </div>
  </div><!--end of cta-->
  
  <div class="advertisement_bottom-logo advertisement_bottom-logo-estate">
      <div class="advertisement_bottom-logo-photo">
        <!-- <img src="img/universal.jpg" alt="company logo"> -->
      </div>
  </div><!--end of bottom logo-->
  
  </div><!--end of back side-->
  
>>>>>>> 8909e8750af05f609e80253435cbd9efeec32e28
=======
     <?php?>
 <!--the job card-->
          <div class="col-md-3 col-sm-1 col-sm-6 col-6 col-auto advertisement" id="advertisement"> 
            <div class="advertisement-side advertisement-side--front">
              <div class="advertisement_picture">
              <?php 
                $post_featured_img=trim($p->post_featured_img);
                //print_r($post_featured_img);
                //echo $image_num= $img->getPostImages($post_featured_img);
                $post_featured_pieces=$img->getAllImages($post_featured_img);
                
                ?> 
                <?php
                if($post_featured_img == ""):?>
                 <img src="../../flexapp/img/posts/work.jpg" alt="house">
                
                <?php else:?>
                <img src="../../flexapp/img/posts/<?php echo $post_featured_pieces[0]?>" alt="work">
                   
                <?php endif?>
                 
              </div>
              <h4 class="advertisement_heading">
                  <span class="advertisement-heading-span advertisement-heading-span--3">
                    <?php if(isset($p->post_title)){echo "$p->post_title";}?> </span>
              </h4> 
  
              <div class="advertisement-specific-details">
                  
                  <!-- end of svg icons -->
  <div class="advertisement-address">
      <svg>
          <use xlink:href="svg/symbol-defs.svg#icon-map"></use>
      </svg>
      <span><?php if(isset($p->full_address)){echo "$p->full_address";}?></span>
  </div>
  <!-- end of address -->
              </div>
              <!-- end of specific details -->
  
           <div class="advertisement-description">
           <p><?php if(isset($p->post_content)){echo "$p->post_content";}?></p>
           
           <!-- end of description-->
           <div class="advertisement-type">
               <p id="price"><span>salary $</span><?php if(isset($p->content_price)){echo "$p->content_price";}?></p></p>
           </div>
           <!-- end of type -->
          </div>
          <!-- end of description -->
          </div><!--end of front side-->
  
  <!--back side-->
  <div class="advertisement-side advertisement-side--back advertisement-side--back-3" >
      <div class="advertisement-company advertisement-individual">
  <img class="advertisement-company--logo" src="../../flexapp/img/users/<?php if(isset($getOwner->user_image)){echo $getOwner->user_image;}?>" alt="person">
  
  <div class="advertisement-company-details">
      <div class="advertisement-company-name">
          <span class="comp-individual-details">Company</span> <?php if(isset($getOwner->user_work)){echo "$getOwner->user_work";}?>
      </div>
  
      <div class="advertisement-company-date-posted">
          <span class="comp-individual-details">Date</span> <?php if(isset($p->created_at)){echo "$p->created_at";}?>
      </div>
  
      <div class="advertisement-company-author-name">
          <span class="comp-individual-details">Author</span> <?php if( ($getOwner->user_first_name !="" )&&($getOwner->user_last_name !="") ){
            echo $getOwner->user_first_name ." ". $getOwner->user_last_name;
        }
        else{ echo $getOwner->user_name;}
        ?>
      </div>
  
  </div><!--end of details-->
      </div><!--end of advertisement company-->
  
      <div class="advertisement-details">
          <ul>
              <li>Occupation <?php if (isset($getJobs->job_subcategory)) {echo $getJobs->job_subcategory ;}?></li>
              <li>Skills <?php if (isset($getJobs->occupation)) {echo $getJobs->occupation ;}?></li>
              <li>Per Hour $ <?php if (isset($getJobs->hourly_rate)) {echo $getJobs->hourly_rate ;}?></li>
          </ul>
      </div><!--end of feature-->

      <a href="<?php if(isset($getJobs->application_link)){echo $getJobs->application_link;}?>" class="advertisement_link btn-text" style="color:blue;margin-top:-2.5rem;cursor:pointer;">Submit Application</a>

  <div class="advertisement_cta">
      <div class="advertisement_prise-picture-box">
      <a href="../../postapp/index.php?pid=<?php if(isset($p->post_id)){echo $p->post_id;}?>" class="advertisement_link btn-text">Read More</a>
       
          <!-- <p class="advertisement_price-value">$4,500</p> -->
      </div>
  </div><!--end of cta-->
  
  <div class="advertisement_bottom-logo advertisement_bottom-logo-estate">
      <div class="advertisement_bottom-logo-photo">
        <!-- <img src="img/universal.jpg" alt="company logo"> -->
      </div>
  </div><!--end of bottom logo-->
  
  </div><!--end of back side-->
  </div><!-- end of job advertisement -->