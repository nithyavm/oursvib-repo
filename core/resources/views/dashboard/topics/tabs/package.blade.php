{{-- Package --}}
@if($WebmasterSection->package_status)
<div class="tab-pane  {{ $tab_12 }}" id="tab_package">
<div class="box-body">
 
                           <div class="row"> 
 
  
                           <div class="by-act-horizontal">
                        @foreach ($Packages as $Package)
                        
                        <?php
                                            if ($Package->$title_var != "") {
                                                $Package_title = $Package->$title_var;
                                            } else {
                                                $Package_title= $Package->$title_var2;
                                            }
                                            ?>
                                                                <div class="col-sm-4">
  <div class="card text-black bg-light mb-3" style="max-width: 30rem;">
  <div class="card-header"><h5>{{$Package_title}}</h5></div>
  <div class="card-body" style="padding:5px;">
 

                        
  <ol class="text-left">
                                @foreach ($Package->fatherSections as $subFatherSection)
                                                <?php
                                                if ($subFatherSection->$title_var != "") {
                                                    $fstitle = $subFatherSection->$title_var;
                                                } else {
                                                    $fstitle = $subFatherSection->$title_var2;
                                                }
                                                ?>
                                              <li>  {{$fstitle}}</li>
                                                @endforeach
                                                </ol>
                                               </div>
</div>
  </div>
                                @endforeach
                                          
                        </div>
      
                          
                             </div>
                      
</div>
</div>
@endif
{{-- End of Package --}}