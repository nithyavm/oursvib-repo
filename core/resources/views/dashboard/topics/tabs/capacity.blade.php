{{-- Activity --}}
@if($WebmasterSection->capacity_status)
<div class="tab-pane  {{ $tab_13 }}" id="tab_capacity">
    <div class="box-body"><div id="capacity">testtt</div>
       
             <input type="text" name="cat_id" id="cat_id" />
                           
                           <div class="row"> 
                     
                        <div class="by-act-horizontal">
                                @foreach ($Capacity as $Capacities)
                        
                                 <?php
                                            if ($Capacities->$title_var != "") {
                                                $Capacities_title = $Capacities->$title_var;
                                            } else {
                                                $Capacities_title= $Capacities->$title_var2;
                                            }
                                            ?>
                                    <div class="col-md-12 by-activity">
                                        <h4>{{$Capacities_title}}</h4>      
                                    </div> 
                                
                             
                                @foreach ($Capacities->fatherSections as $subFatherSection)
                                                <?php
                                                if ($subFatherSection->$title_var != "") {
                                                    $fstitle = $subFatherSection->$title_var;
                                                    $text = strtolower(str_replace(' ', '_', $subFatherSection->$title_var));
                                                } else {
                                                    $fstitle = $subFatherSection->$title_var2;
                                                    $text = strtolower(str_replace(' ', '_', $subFatherSection->$title_var));
                                                }
                                                ?>
                                                <div class="form-group row">
                                                    <div class="col-sm-8">  
                                                            <label for="{{$fstitle}}" class="col-sm-2 form-control-label"> <h5>{{$fstitle}}</h5></label>
                                                            <label for="{{$fstitle}}" class="col-sm-2 form-control-label"> Maximum</label>
                                                        <label for="{{$fstitle}}" class="col-sm-2 form-control-label"> Minimum</label>
                                                    </div>
                                                    <div class="col-sm-6">  
                                                        
                                                    </div>
                                                    <div class="col-sm-10">  
                                                      
                                                        <input type="number" name="{{$text}}" value="" />
                                                        <input type="number" name="{{$text}}" value="" />
                                                    </div>
         
                 
                                                </div>
                                                @endforeach
                                           
                                          
                                @endforeach
                                          
                        </div>
      
                          
                             </div> 

     
    </div>
</div>


@endif
{{-- End of Activity --}}