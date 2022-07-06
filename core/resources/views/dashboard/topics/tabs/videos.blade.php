@if($WebmasterSection->multi_video_status)
    <div class="tab-pane  {{ $tab_3 }}" id="tab_videos">
        <div class="box-body">

            <div>
                {{Form::open(['route'=>['topicsVideosEdit',"webmasterId"=>$WebmasterSection->id,"id"=>$Topics->id],'method'=>'POST','class'=>'dropzone white', 'files' => true])}}
                <div class="form-group row">
                <label for="photo_file"
                                       class="col-sm-2 form-control-label">{!!  __('backend.videoTitle') !!}</label>
                                       <div class="col-sm-10">
                                        {!! Form::text('video_title_'.@$ActiveLanguage->code,$Topics->{'video_title_'.@$ActiveLanguage->code}, array('class' => 'form-control','id'=>'video_title_'.@$ActiveLanguage->code,'maxlength'=>'65', 'dir'=>@$ActiveLanguage->direction)) !!}
                                </div>
                </div>
                <div class="form-group row">
                                <label for="photo_file"
                                       class="col-sm-2 form-control-label">{!!  __('backend.topicPhoto') !!}</label>
                                <div class="col-sm-10">
                                    @if($Topics->photo_file!="")
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div id="topic_photo" class="col-sm-4 box p-a-xs">
                                                    <a target="_blank"
                                                       href="{{ asset('uploads/topics/'.$Topics->photo_file) }}"><img
                                                            src="{{ asset('uploads/topics/'.$Topics->photo_file) }}"
                                                            class="img-responsive">
                                                        {{ $Topics->photo_file }}
                                                    </a>
                                                    <br>
                                                    <a onclick="document.getElementById('topic_photo').style.display='none';document.getElementById('photo_delete').value='1';document.getElementById('undo').style.display='block';"
                                                       class="btn btn-sm btn-default">{!!  __('backend.delete') !!}</a>
                                                </div>
                                                <div id="undo" class="col-sm-4 p-a-xs" style="display: none">
                                                    <a onclick="document.getElementById('topic_photo').style.display='block';document.getElementById('photo_delete').value='0';document.getElementById('undo').style.display='none';">
                                                        <i class="material-icons">
                                                            &#xe166;</i> {!!  __('backend.undoDelete') !!}</a>
                                                </div>

                                                {!! Form::hidden('photo_delete','0', array('id'=>'photo_delete')) !!}
                                            </div>
                                        </div>
                                    @endif

                                    {!! Form::file('photo_file', array('class' => 'form-control','id'=>'photo_file','accept'=>'image/*')) !!}

                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="video_type"
                                       class="col-sm-2 form-control-label">{!!  __('backend.bannerVideoType') !!}</label>
                                <div class="col-sm-10">
                                    <div class="radio">
                                        <label class="ui-check ui-check-md">
                                            {!! Form::radio('video_type','0',($Topics->video_type==0) ? true : false, array('id' => 'video_type1','class'=>'has-value','onclick'=>'document.getElementById("embed_link_div").style.display="none";document.getElementById("youtube_link_div").style.display="none";document.getElementById("vimeo_link_div").style.display="none";document.getElementById("files_div").style.display="block";document.getElementById("youtube_link").value=""')) !!}
                                            <i class="dark-white"></i>
                                            {{ __('backend.bannerVideoType1') }}
                                        </label>
                                        &nbsp; &nbsp;
                                        <label class="ui-check ui-check-md">
                                            {!! Form::radio('video_type','1',($Topics->video_type==1) ? true : false, array('id' => 'video_type2','class'=>'has-value','onclick'=>'document.getElementById("embed_link_div").style.display="none";document.getElementById("youtube_link_div").style.display="block";document.getElementById("vimeo_link_div").style.display="none";document.getElementById("files_div").style.display="none";document.getElementById("youtube_link").value=""')) !!}
                                            <i class="dark-white"></i>
                                            {{ __('backend.bannerVideoType2') }}
                                        </label>
                                        &nbsp; &nbsp;
                                        <label class="ui-check ui-check-md">
                                            {!! Form::radio('video_type','2',($Topics->video_type==2) ? true : false, array('id' => 'video_type2','class'=>'has-value','onclick'=>'document.getElementById("embed_link_div").style.display="none";document.getElementById("vimeo_link_div").style.display="block";document.getElementById("youtube_link_div").style.display="none";document.getElementById("files_div").style.display="none";document.getElementById("vimeo_link").value=""')) !!}
                                            <i class="dark-white"></i>
                                            {{ __('backend.bannerVideoType3') }}
                                        </label>
                                        &nbsp; &nbsp;
                                        <label class="ui-check ui-check-md">
                                            {!! Form::radio('video_type','3',($Topics->video_type==3) ? true : false, array('id' => 'video_type3','class'=>'has-value','onclick'=>'document.getElementById("embed_link_div").style.display="block";document.getElementById("vimeo_link_div").style.display="none";document.getElementById("youtube_link_div").style.display="none";document.getElementById("files_div").style.display="none";document.getElementById("embed_link").value=""')) !!}
                                            <i class="dark-white"></i>
                                            Embed
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div id="files_div" style="display: {{ ($Topics->video_type ==0) ? "block" : "none" }}">
                                <div class="form-group row">
                                    <label for="video_file"
                                           class="col-sm-2 form-control-label">{!!  __('backend.topicVideo') !!}</label>
                                    <div class="col-sm-10">
                                        @if($Topics->video_type==0 && $Topics->video_file!="")
                                            <div class="box p-a-xs">

                                                <video width="380" height="230" controls>
                                                    <source src="{{ asset('uploads/topics/'.$Topics->video_file) }}"
                                                            type="video/mp4">
                                                    Your browser does not support the video tag.
                                                </video>
                                                <br>
                                                <a target="_blank"
                                                   href="{{ asset('uploads/topics/'.$Topics->video_file) }}">
                                                    {{ $Topics->video_file }} </a>
                                            </div>
                                        @endif
                                        {!! Form::file('video_file', array('class' => 'form-control','id'=>'video_file','accept'=>'*')) !!}
                                    </div>
                                </div>

                                <div class="form-group row m-t-md" style="margin-top: 0 !important;">
                                    <div class="offset-sm-2 col-sm-10">
                                        <small>
                                            <i class="material-icons">&#xe8fd;</i>
                                            {!!  __('backend.videoTypes') !!}
                                        </small>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row" id="youtube_link_div"
                                 style="display: {{ ($Topics->video_type==1) ? "block" : "none" }}">
                                <label for="youtube_link"
                                       class="col-sm-2 form-control-label">{!!  __('backend.bannerVideoUrl') !!}</label>
                                <div class="col-sm-10">
                                    {!! Form::text('youtube_link',$Topics->video_file, array('placeholder' => 'https://www.youtube.com/watch?v=JQs4QyKnYMQ','class' => 'form-control','id'=>'youtube_link', 'dir'=>'ltr')) !!}
                                </div>
                            </div>
                            <div class="form-group row" id="vimeo_link_div"
                                 style="display: {{ ($Topics->video_type ==2) ? "block" : "none" }}">
                                <label for="youtube_link"
                                       class="col-sm-2 form-control-label">{!!  __('backend.bannerVideoUrl2') !!}</label>
                                <div class="col-sm-10">
                                    {!! Form::text('vimeo_link',$Topics->video_file, array('placeholder' => 'https://vimeo.com/131766159','class' => 'form-control','id'=>'vimeo_link', 'dir'=>'ltr')) !!}
                                </div>
                            </div>

                            <div class="form-group row" id="embed_link_div"
                                 style="display: {{ ($Topics->video_type ==3) ? "block" : "none" }}">
                                <label for="embed_link"
                                       class="col-sm-2 form-control-label">{!!  __('backend.bannerVideoUrl2') !!}</label>
                                <div class="col-sm-10">
                                    {!! Form::textarea('embed_link',$Topics->video_file, array('placeholder' => '','class' => 'form-control','id'=>'embed_link', 'dir'=>'ltr','rows'=>'3')) !!}
                                </div>
                            </div>
                {{Form::close()}}
                <br>
            </div>
            @if(isset($Topics->videos))
            @if(count($Topics->videos)>0)
                <div class="row">
                    {{Form::open(['route'=>['topicsVideosUpdateAll',$WebmasterSection->id,$Topics->id],'method'=>'post'])}}
                    @foreach($Topics->videos as $video)
                        <div class="col-xs-6 col-sm-4 col-md-3">
                            <div class="box p-a-xs">
                                <div class="pull-right">
                                    {!! Form::text('row_no_'.$video->id,$video->row_no, array('class' => 'pull-left form-control row_no','id'=>'row_no','style'=>'margin:0;margin-bottom:5px')) !!}
                                </div>
                                <label class="ui-check m-a-0 p-a-0">
                                    <input type="checkbox" name="ids[]" value="{{ $video->id }}"><i
                                        class="dark-white"></i>
                                    {!! Form::hidden('row_ids[]',$video->id, array('class' => 'form-control row_no')) !!}
                                </label>
                                <img src="{{ asset('uploads/topics/'.$video->file) }}"
                                     alt="{{ $video->title  }}" title="{{ $video->title  }}"
                                     style="height: 150px"
                                     class="img-responsive">
                                <div class="p-a-sm">
                                    <div class="text-ellipsis">
                                        @if(@Auth::user()->permissionsGroup->delete_status)
                                            <button class="btn btn-sm warning pull-right"
                                                    data-toggle="modal"
                                                    data-target="#mx-{{ $video->id }}"
                                                    ui-toggle-class="bounce"
                                                    ui-target="#animate"
                                                    title="{{ __('backend.delete') }}"
                                                    style="padding: 0 5px 2px;">
                                                <small><i class="material-icons">&#xe872;</i></small>
                                            </button>
                                        @endif
                                        <a style="display: block;overflow: hidden;"
                                           href="{{ asset('uploads/topics/'.$video->file) }}"
                                           target="_blank">
                                            <small>{{ ($video->title !="") ? $video->title:$video->file  }}</small>
                                        </a>
                                    </div>
                                </div>

                                <!-- .modal -->
                                <div id="mx-{{ $video->id }}" class="modal fade" data-backdrop="true">
                                    <div class="modal-dialog" id="animate">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">{{ __('backend.confirmation') }}</h5>
                                            </div>
                                            <div class="modal-body text-center p-lg">
                                                <p>
                                                    {{ __('backend.confirmationDeleteMsg') }}
                                                    <br>
                                                    <strong>[ {{ ($video->title !="") ? $video->title:$video->file  }}
                                                        ]</strong>
                                                </p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn dark-white p-x-md"
                                                        data-dismiss="modal">{{ __('backend.no') }}</button>
                                                <a href="{{ route("topicsVideosDestroy",["webmasterId"=>$WebmasterSection->id,"id"=>$Topics->id,"video_id"=>$video->id]) }}"
                                                   class="btn danger p-x-md">{{ __('backend.yes') }}</a>
                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div>
                                </div>
                                <!-- / .modal -->
                            </div>
                        </div>

                    @endforeach
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <!-- .modal -->
                        <div id="mx-all" class="modal fade" data-backdrop="true">
                            <div class="modal-dialog" id="animate">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">{{ __('backend.confirmation') }}</h5>
                                    </div>
                                    <div class="modal-body text-center p-lg">
                                        <p>
                                            {{ __('backend.confirmationDeleteMsg') }}
                                        </p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn dark-white p-x-md"
                                                data-dismiss="modal">{{ __('backend.no') }}</button>
                                        <button type="submit"
                                                class="btn danger p-x-md">{{ __('backend.yes') }}</button>
                                    </div>
                                </div><!-- /.modal-content -->
                            </div>
                        </div>
                        <!-- / .modal -->

                        <label class="ui-check m-a-0">
                            <input id="checkAll"
                                   type="checkbox"><i></i> {{ __('backend.checkAll') }}
                        </label>
                        <div class="pull-right">
                            <select name="action" id="action"
                                    class="form-control c-select w-sm inline v-middle" required>
                                <option value="">{{ __('backend.bulkAction') }}</option>
                                <option value="order">{{ __('backend.saveOrder') }}</option>
                                @if(@Auth::user()->permissionsGroup->delete_status)
                                    <option value="delete">{{ __('backend.deleteSelected') }}</option>
                                @endif
                            </select>
                            <button type="submit" id="submit_all"
                                    class="btn white">{{ __('backend.apply') }}</button>
                            <button id="submit_show_msg" class="btn white" data-toggle="modal"
                                    style="display: none"
                                    data-target="#mx-all" ui-toggle-class="bounce"
                                    ui-target="#animate">{{ __('backend.apply') }}
                            </button>
                        </div>
                    </div>

                    {{Form::close()}}
                </div>
            @endif
            @endif
        </div>
    </div>
@endif
