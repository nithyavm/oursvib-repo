{{-- Activity --}}
@if($WebmasterSection->activity_status)
<div class="tab-pane " id="tab_activity">
    <div class="box-body">
     
                <div class="row">
                    <div class="col-md-12 by-activity">
                        <div class="by-act-horizontal">
                            @foreach ($Activity as $Activities)
                                            <?php
                                                if ($Activities->$title_var != "") {
                                                    $act_title = $Activities->$title_var;
                                                } else {
                                                    $act_title= $Activities->$title_var2;
                                                }
                                                ?>
                                            
                                <input type="checkbox" id='{{ $act_title}}' name="activity[]" value="{{ $act_title}}">
                                <label for="{{ $act_title}}">{{ $act_title}}</label>

                            @endforeach
                        </div>
                    </div>
                </div>


           
 
       
    </div>
</div>
@endif
{{-- End of Activity --}}