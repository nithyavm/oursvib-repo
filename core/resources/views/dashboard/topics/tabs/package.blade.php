{{-- Package --}}
@if($WebmasterSection->package_status)
<div class="tab-pane" id="tab_package">
    <div class="box-body">
        <div class="row"> 
            <div class="by-act-horizontal">
            @if(!$Selected_Package->isEmpty())    
            @foreach ($Selected_Package as $pack)
                        <?php
                        $package_arr[] = $pack->fee_name;
                        ?>
                        @endforeach
           
       
            @else
           <?php $package_arr[] = '' ?>
            @endif
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
                                <div class="row"> 
                                @if(isset($package_arr))    
                                <input type="checkbox" name="package_id[]" value="{{$Package->id}}" {{ in_array($Package->id, $package_arr) ? 'checked' : '' }} /> Select {{$Package_title}}
                                @else
                                    <input type="checkbox" name="package_id[]" value="{{$Package->id}}"   /> Select {{$Package_title}}
                                @endif
                                    <input type="hidden" name="package_name[]" value="{{$Package_title}}" />
                                

                                </div>
                            </div>
                        
                    @endforeach
                    <input type="hidden" name="tab_package" value="package" />                     
                
            </div>
        </div>
    </div>
</div>
@endif
{{-- End of Package --}}