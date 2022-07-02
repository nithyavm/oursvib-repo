{{-- Activity --}}
@if($WebmasterSection->ammenities_status)
<div class="tab-pane" id="tab_ammenities">
    <div class="box-body">
    
                 <div class="row">
                    <div class="col-md-12 by-activity">
                        <h4>Ammenities</h4> 
                       
                        
                        <div class="by-act-horizontal">
                       
                        @foreach ($Ammenitites as $Ammenity)
                        <?php
                                            if ($Ammenity->$title_var != "") {
                                                $ammenity_title = $Ammenity->$title_var;
                                            } else {
                                                $ammenity_title= $Ammenity->$title_var2;
                                            }
                                            ?>
                                        
                            <input type="checkbox" id="{{ $ammenity_title}}" name="ammenity[]" value="{{ $ammenity_title}}"
                            {{  str_contains($Selected_Ammenity[0]->fee_name, $ammenity_title)  ? 'checked' : '' }}>
                                <label for="{{ $ammenity_title}}">{{ $ammenity_title}}</label>

                                @endforeach
                        </div>
                        </div>

                       
                        <div class="col-md-12 by-activity">
                        <h4>Facility</h4>
                        <div class="by-act-horizontal">
                        @foreach ($Facility as $Facilities)
                        <?php
                                            if ($Facilities->$title_var != "") {
                                                $facility_title = $Facilities->$title_var;
                                            } else {
                                                $facility_title= $Facilities->$title_var2;
                                            }
                                            ?>
                                        
                            <input type="checkbox" id="{{ $facility_title}}" name="facility[]" value="{{ $facility_title}}" 
                            {{  str_contains($Selected_Facility[0]->fee_name, $facility_title)  ? 'checked' : '' }}>
                                <label for="{{$facility_title}}">{{$facility_title}}</label>

                                @endforeach
                        </div>
                        </div>
            </div>


           
            <input type="hidden" name="tab_ammenity" value="ammenity" />   
           
    </div>

</div>
@endif
{{-- End of Activity --}}