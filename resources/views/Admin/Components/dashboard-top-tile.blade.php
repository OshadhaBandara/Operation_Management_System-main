            <!-- top tiles -->
            <div class="row" style="display: block;" >
                <div class="tile_count">
                  <div class="col-md-2 col-sm-4  tile_stats_count">
                    <span class="count_top"><i class="fa fa-users"></i> Total Users</span>
                    <div class="count">{{$data['users_count']}}</div>
                    <!-- <span class="count_bottom"><i class="green">4% </i> From last Week</span> -->
                  </div>
                  <div class="col-md-2 col-sm-4  tile_stats_count">
                    <span class="count_top"><i class="fa fa-male"></i> Total Males</span>
                    <div class="count">{{$data['male_count']}}</div>
                    <!-- <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span> -->
                  </div>
                  <div class="col-md-2 col-sm-4  tile_stats_count">
                    <span class="count_top"><i class="fa fa-female"></i> Total Females</span>
                    <div class="count">{{$data['female_count']}}</div>
                    <!-- <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span> -->
                  </div>
                  <!-- <div class="col-md-2 col-sm-4  tile_stats_count">
                    <span class="count_top"><i class="fa fa-files-o"></i> Total Service</span>
                    <div class="count">{{$data['services_count']}}</div>
                    <span class="count_bottom"><i class="red"><i class="fa fa-sort-desc"></i>12% </i> From last Week</span>
                    
                  </div> -->
                  <div class="col-md-2 col-sm-4  tile_stats_count">
                    <span class="count_top"><i class="fa fa-check-circle-o"></i> Service Completed</span>
                    <div class="count">{{$data['services_complete']}}</div>
                    <!-- <span class="count_bottom"><i class="red"><i class="fa fa-sort-desc"></i>12% </i> From last Week</span> -->
                    
                  </div>
                  <div class="col-md-4 col-sm-4  tile_stats_count">
                    <span class="count_top"><i class="fa fa-money"></i> Total Payment</span>
                    <div class="count green">{{$data['total_pays']}}</div>
                    <!-- <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span> -->
                  </div>
                </div>
                  </div>
                <!-- /top tiles -->
      